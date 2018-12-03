<?php
 date_default_timezone_set('Europe/Bucharest');
 include('server.php');

 if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$update = true;
	$record = mysqli_query($db, "SELECT * FROM books WHERE id=$id");

		$n = mysqli_fetch_array($record);
		$name = $n['title'];
		$address = $n['author'];
		$var1 = $n['cat'];
		$var2 = $n['price'];
		$var3 = $n['image'];
	
}

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/single_styles.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/single_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/styleAdmin.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

</head>
<body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

<?php $results = mysqli_query($db, "SELECT * FROM books"); ?>

<div class="super_container">

<!-- Header -->

<header class="header trans_300">

	<!-- Top Navigation -->

	<div class="top_nav">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					
				</div>
				<div class="col-md-6 text-right">
					<div class="top_nav_right">
						<ul class="top_nav_menu">

							<!--  Language / My Account -->

							<li class="language">
								<a href="admin.php">
									English
									<i class="fa fa-angle-down"></i>
								</a>
								<ul class="language_selection">
									<li><a href="admin.php">Romanian</a></li>
								</ul>
							</li>
							<li class="account">
								<a href="login.php">
									<?php if(isset($_SESSION['username']))
											echo $_SESSION['username'];
										else { echo 'My Account'; ?> <i class="fa fa-angle-down"></i>
								</a>
								<ul class="account_selection">
									<li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
									<li><a href="register.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
								</ul>
								<?php } ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Main Navigation -->

	<div class="main_nav_container">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-right">
					<div class="logo_container">
						<a href="MainPage.php">Book<span>Berries</span></a>
					</div>
					<nav class="navbar">
						<ul class="navbar_menu">
							<li><a href="MainPage.php">home</a></li>
							<li><a href="categories.php">shop</a></li>
							<li><a href="contact.php">contact</a></li>
							<li><a href="comanda.php">order</a></li>
							<li><a href="admin.php">admin</a></li>
						</ul>
						<ul class="navbar_user">
							<li class="checkout">
								<a href="cos.php">
									<i class="fa fa-shopping-cart" aria-hidden="true"></i>
							
								</a>
							</li>
						</ul>
						<div class="hamburger_container">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>

</header>

<div class="fs_menu_overlay"></div>

<!-- Hamburger Menu -->

<div class="hamburger_menu">
	<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
	<div class="hamburger_menu_content text-right">
		<ul class="menu_top_nav">
			<li class="menu_item has-children">
				<a href="admin.php">
					English
					<i class="fa fa-angle-down"></i>
				</a>
				<ul class="menu_selection">
					<li><a href="admin.php">Romanian</a></li>
				</ul>
			</li>
			<li class="account">
								<a href="login.php">
									<?php if(isset($_SESSION['username']))
											echo $_SESSION['username'];
										else { echo 'My Account'; ?> <i class="fa fa-angle-down"></i>
								</a>
								<ul class="account_selection">
									<li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
									<li><a href="register.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
								</ul>
								<?php } ?>
							</li>
			<li class="menu_item"><a href="MainPage.php">home</a></li>
			<li class="menu_item"><a href="categories.php">shop</a></li>
			<li class="menu_item"><a href="contact.php">contact</a></li>
			<li class="menu_item"><a href="comanda.php">order</a></li>
			<li class="menu_item"><a href="admin.php">admin</a></li>
		</ul>
	</div>
</div>

<div class="container single_product_container">
	<div class="row">
		<div class="col">

	<br/><br/><br/>

	 <?php 
	    if(isset($_SESSION['username'])) {
			 if($_SESSION['username']== 'Admin') { ?>

  <table>
	<thead>
		<tr>
						 	<th width="20%">Image</th>
    						  <th width="35%">Title</th>  
                               <th width="10%">Author</th>
							   <th width="7%">Category</th>    
                               <th width="5%">Price</th>
							   <th width="5%"></th>  
							   <th width="5%"></th>
			
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><img src="<?php echo $row['image']; ?>" height="200" width="200" /></td>
			<td><?php echo $row['title']; ?></td>
			<td><?php echo $row['author']; ?></td>
			<td><?php echo $row['cat']; ?></td>
			<td><?php echo $row['price']; ?></td>
			<td>
				<a href="admin.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>

	<form method="post" action="server.php" >
		<div class="input-group">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
			<label>Title</label>
			<input type="text" name="title" value="<?php echo $name; ?>">
		</div>
		<div class="input-group">
			<label>Author</label>
			<input type="text" name="author" value="<?php echo $address; ?>">
		</div>
		<div class="input-group">
			<label>Category</label>
			<input type="text" name="cat" value="<?php echo $var1; ?>">
		</div>
		<div class="input-group">
			<label>Price</label>
			<input type="text" name="price" value="<?php echo $var2; ?>">
		</div>
		<div class="input-group">
			<label>Image</label>
			<input type="text" name="image" value="<?php echo $var3; ?>">
		</div>
		<div class="input-group">
		<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
		</div>
	</form>

	<?php 
			 } else echo "Must be Admin to use this function";
			}
			else echo "Must be Admin to use this function";
			?>


	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="contact.php">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="https://www.facebook.com/bookberrieswithabiB/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="https://www.instagram.com/bookberriesbox/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="https://ro.pinterest.com/pin/357895501621926371/?lp=true" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/single_custom.js"></script>
</body>
</html>