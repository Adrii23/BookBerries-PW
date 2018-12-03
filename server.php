<?php
ob_start();

session_start();


// initializing variables
$username = "";
$password = "";
$email    = "";
$phone ="";
$address="";

$add_title="";
$add_author="";
$add_cat="";
$add_price="";
$add_image="";


//errors variable
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');
if(!$db) {
    die("Connection failed: ".mysqli_connect_error());
}

//Admin add items
if(isset($_POST['add_item'])) {

  //receive all input from the form
  $add_title = mysqli_real_escape_string($db, $_POST['book_title']);
  $add_author = mysqli_real_escape_string($db, $_POST['book_author']);
  $add_cat = mysqli_real_escape_string($db, $_POST['book_cat']);
  $add_price = mysqli_real_escape_string($db, $_POST['book_price']);
  $add_image = mysqli_real_escape_string($db, $_POST['book_image']);
          

  if (empty($book_title)) { array_push($errors, "Book title is required"); }
  if (empty($book_author)) { array_push($errors, "Author is required"); }
  if (empty($book_cat)) { array_push($errors, "Category is required"); }
  if (empty($book_price)) { array_push($errors, "Price is required"); }
  if (empty($book_image)) { array_push($errors, "Image is required"); }
  

  $user_check_query1 = "SELECT * FROM books WHERE book_title='$add_title' LIMIT 1";
  $tentativa = mysqli_query($db, $user_check_query1);
  $titlu = mysqli_fetch_assoc($tentativa);

  if ($titlu) { // if titlu exists
    if ($titlu['book_title'] === $add_title) {
      array_push($errors, "Book title already exists");
    }
  }

    $sql2 = "INSERT INTO books (title, author, cat, price,image) 
  			  VALUES('$add_title', '$add_author', '$add_cat' , '$add_price', '$add_image')";
    mysqli_query($db, $sql2);
  	header('location: admin-add.php');
}

// REGISTER USER
if (isset($_POST['reg_user'])) {


  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $address = mysqli_real_escape_string($db, $_POST['address']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phone)) { array_push($errors, "Phone number is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
    if ($user['phone'] === $phone) {
      array_push($errors, "Phone number already used");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password, phone, address) 
  			  VALUES('$username', '$email', '$password' , '$phone', '$address')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: MainPage.php');
  }
}

if(isset($_POST['reg_exit']))
    {
        //exit for main page
	    header('location: MainPage.php');
    }

// ... 
// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
      array_push($errors, "Username is required");
  }
  if (empty($password)) {
      array_push($errors, "Password is required");
  }
  if(isset($_SESSION['username']))
    array_push($errors, "A user is already logged in");

  if (count($errors) == 0) {
      $password = md5($password);
      $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: MainPage.php');
      }else {
          array_push($errors, "Wrong username/password combination");
      }
  }
}
  // ----- logout

  if(isset($_POST['logout_user']))
  {
    if(!isset($_SESSION['username']))
      array_push($errors, "No user logged in");
    unset($_SESSION['username']);
    unset($_SESSION['succes']);

    header('location: MainPage.php');
  }
  
  // ----- exit

  if(isset($_POST['exit_user']))
    {
        //exit for main page
	    header('location: MainPage.php');
    }

  // --- Comment Section

    function setComments($db) {
      if(isset($_POST['commentSubmit'])) {
        $uid =  $_POST['uid'];
        $date =  $_POST['date'];
        $message =  $_POST['message'];
  
        $sql = "INSERT INTO comments (uid,date,message) VALUES ('$uid','$date','$message')";
        $result=mysqli_query($db,$sql);
      }
  }

  function saveItems($db,$itName, $itQuant, $itPrice) {
  if(isset($_POST['save_item']))
    { 
      $shopping_cart = array();
      //foreach($shopping_cart as $keys => $values) {
        for($x=0; $x<count($itName); $x++) {

     $thing1=$_SESSION['username'];
      $things2=$itName[$x];//$values["item_name"];
      $things3=$itQuant[$x];//$values["item_quantity"];
      $things4=$itPrice[$x];//$values["item_price"];

      $sql1 = "INSERT INTO orders (order_name, order_item, order_quant, order_price) VALUES ('$thing1', '$things2', '$things3', '$things4')";
      if ($db->query($sql1) === FALSE) {
                array_push($errors, "Something went wrong with adding things !");
      }
          else {  unset($_SESSION['shopping_cart']);
                  header('location: comanda.php');
          }
	    
    }
  }
}

function delete_book($db,$book_id) {
  if(isset($_POST['delete_item']))
    {
      $sql4 = "DELETE FROM  books WHERE id=$book_id";
      if ($db->query($sql4) === FALSE) {
                array_push($errors, "Something went wrong with deleting things !");
          }
          else header('location: admin.php');
	    
    }
  }
  




  function getComments($db) {
      $sql = "SELECT * FROM comments";
      $result = mysqli_query($db,$sql);
      while ($row = $result->fetch_assoc()) {
          echo "<div class='comment-box'><p>";
              echo $row['uid']."<br>";
              echo $row['date']."<br>";
              echo $row['message'];
          echo "</p> ";
          if(isset($_SESSION['username'])) {
            if($_SESSION['username']=='Admin') {
              echo "
           <form class='delete-form' method='POST' action='".deleteComments($db)."'>
          <input type='hidden' name='cid' value='".$row['cid']."'>
          <button type='submit' name='commentDelete'>Delete</button>
          </form>
          
          <form class='edit-form' method='POST' action='editcomment.php'>
            <input type='hidden' name='cid' value='".$row['cid']."'>
            <input type='hidden' name='uid' value='".$row['uid']."'>
            <input type='hidden' name='date' value='".$row['date']."'>
            <input type='hidden' name='message' value='".$row['message']."'>
            <button>Edit</button>
            </form> ";
            }
          }
           echo " </div>";
      }
      
  }

  function editComments($db) {
    if(isset($_POST['commentSubmit'])) {
      $cid = $_POST['cid'];
      $uid =  $_POST['uid'];
      $date =  $_POST['date'];
      $message =  $_POST['message'];

      $sql = "UPDATE comments SET message='$message' WHERE cid='$cid'";
      $result=mysqli_query($db,$sql);
      header("Location: single.php");

    }
}


function deleteComments($db) {
  if(isset($_POST['commentDelete'])) {
    $cid = $_POST['cid'];

    $sql = "DELETE FROM comments WHERE cid='$cid'";
    $result=mysqli_query($db,$sql);
    header("Location: single.php");

  }}

  

function setTotal($totalSum)
{
  $_SESSION['total'] = $totalSum;
}

function getTotal()
{
  echo $_SESSION['total'];
}


// initialize variables
$name = "";
$address = "";
$var1 = "";
$var2 = "";
$var3 = "";

$id = 0;
$update = false;

if (isset($_POST['save'])) {
  $name = $_POST['title'];
  $address = $_POST['author'];
  $var1 = $_POST['cat'];
  $var2 = $_POST['price'];
  $var3 = $_POST['image'];
  

  mysqli_query($db, "INSERT INTO books (title, author, cat, price, image) VALUES ('$name', '$address', '$var1', '$var2', '$var3')"); 
  $_SESSION['message'] = "New book saved"; 
  header('location: admin.php');
}

if (isset($_POST['update'])) {
  $id = $_POST['id'];
  $name = $_POST['title'];
  $address = $_POST['author'];
  $var1 = $_POST['cat'];
  $var2 = $_POST['price'];
  $var3 = $_POST['image'];

  mysqli_query($db, "UPDATE books SET title='$name', author='$address', cat='$var1', price='$var2', image='$var3' WHERE id=$id");
  $_SESSION['message'] = "Book updated!"; 
  header('location: admin.php');
}

if (isset($_GET['del'])) {
  $id = $_GET['del'];
  mysqli_query($db, "DELETE FROM books WHERE id=$id");
  $_SESSION['message'] = "Book deleted!"; 
  header('location: admin.php');
}
  


			
     
