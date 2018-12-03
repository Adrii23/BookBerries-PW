<?php
 date_default_timezone_set('Europe/Bucharest');
 include('server.php');
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Order</title>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

<?php
  			$orderName = array();
			$orderItem = array();
			$orderPrice = array();
			$orderQuant = array();

			$total=0;
		
			$qr = "SELECT * FROM orders ";
			$res = mysqli_query($db, $qr);


			
			$user_name=$_SESSION['username'];
			$cacat="SELECT * FROM users WHERE username='$user_name'";
			$rescacat=mysqli_query($db,$cacat);
			if(mysqli_num_rows($rescacat) > 0)
			  {
				  while($row = mysqli_fetch_assoc($rescacat))
				  { $phone_number=$row['phone'];
					$address_user=$row['address'];
				  }
				}
			else array_push($errors, "No data in database");
			 
  
  
			  if(mysqli_num_rows($res) > 0)
			  {
				  while($row = mysqli_fetch_assoc($res))
				  {
					  
					  array_push($orderName, $row['order_name']);
					  array_push($orderItem, $row['order_item']);
					  array_push($orderPrice, $row['order_price']);
					  array_push($orderQuant, $row['order_quant']);
				  }
			  }
			  else array_push($errors, "No orders in database");
			?>

</head>

<body>

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
									<a href="comanda.php">
										English
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="language_selection">
										<li><a href="comanda.php">Romanian</a></li>
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
					<a href="comanda.php">
						English
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="comanda.php">Romanian</a></li>
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

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="MainPage.php">Home</a></li>
						<li><a href="comanda.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Comanda</a></li>
					</ul>
				</div>
			</div>
		</div>


		<?php if(isset($_SESSION['username'])) { 
			    if($_SESSION['username']!='Admin') {?>
		 <div class="tentativa" align="center">
		    <h2>Name : <?php echo $_SESSION['username'];?></h2>
			<h2>Telephone : <?php echo $phone_number; ?></h2>
			<h2>Adress : <?php echo $address_user; ?></h2>
			 </div>
				<?php }
				else {
				?>
				<h2 align="center">Admin View</h2>
				<?php }
				} ?>

		      
		
			 <br/><br/>

			 <div class="table-responsive"> 
			    <?php if(isset($_SESSION['username'])) {  ?>
                     <table class="table table-bordered">  
                          <tr>  
							 <?php 
							    if(isset($_SESSION['username'])) {
									 if($_SESSION['username']=='Admin') { 
										 ?>
							   <th width="15%">Name</th>  <?php
							 }
							  } ?>
							   
							   <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                          </tr> 
						
						  <?php
						  if(count($orderName) > 0)
									  { 
										for($x=0; $x<count($orderName); $x++) {
										if($_SESSION['username']!='Admin') {
										if($orderName[$x]==$_SESSION['username'])	{		   
                          ?> 
                          <tr>  
                               <td><?php echo $orderItem[$x]; ?></td> 
                               <td><?php echo $orderQuant[$x]; ?></td>  
                               <td><?php echo "$" . $orderPrice[$x]; ?></td>   
                          </tr>  
                          <?php  
						  }
						}
						else { ?>
						 <tr>  
							   <td><?php echo $orderName[$x]; ?></td>
                               <td><?php echo $orderItem[$x]; ?></td> 
                               <td><?php echo $orderQuant[$x]; ?></td>  
                               <td><?php echo "$" . $orderPrice[$x]; ?></td>   
                          </tr>  
						<?php } 
										}
					
                          ?>  
						  </table>
						<?php } ?>
						<h2>Total: <?php 
						  $total=0; 
						  if(count($orderItem)> 0)
						   { 
							   for($x=0; $x<count($orderItem);$x++) {
							      if($_SESSION['username']!='Admin') {
							     if($_SESSION['username']==$orderName[$x]) {
								 $total=$total + ($orderPrice[$x] * $orderQuant[$x]);
								  }
								 }
								
								  else $total=$total + ($orderPrice[$x] * $orderQuant[$x]);
						         }
								  echo $total;
								}
								}
							
								else echo "You must be logged in to access order details"; ?> </h2>
		                
						  </div>

		


		
	
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
