<?php
 date_default_timezone_set('Europe/Bucharest');
 include('server.php')
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Single</title>
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
<link rel="stylesheet" type="text/css" href="styles/single_responsive.css">

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
									<a href="single.php">
										English
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="language_selection">
										<li><a href="single.php">Romanian</a></li>
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
					<a href="single.php">
						English
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="single.php">Romanian</a></li>
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
						<li><a href="categories.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Books</a></li>
						<li class="active"><a href="single.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Book</a></li>
					</ul>
				</div>

			</div>
		</div>

		<div class="row">
			<div class="col-lg-7">
				<div class="single_product_pics">
					<div class="row">
						
						<div class="col-lg-9 image_col order-lg-2 order-1">
							<div class="single_product_image">
								<div class="single_product_image_background" style="background-image:url(images/blood/blood1.jpeg)"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="product_details">
					<div class="product_details_title">
						<h2> <b> <i> " Children of Blood and Bone "</b> </i> </h2> 
						 <h3> - by Tomi Adeyemi </h3>
						<p> <p>They killed my mother. </p>
							<p>They took our magic. </p>
							<p>They tried to bury us. </p>
					         <p></p>		
							<p>Now we rise.</p> </p>
					</div>
					<div class="free_delivery d-flex flex-row align-items-center justify-content-center">
						<span class="ti-truck"></span><span>free delivery</span>
					</div>
					<div class="product_price">$8.98</div>
					<ul class="star_rating">
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
					</ul>
					
					    <div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
						<span>Quantity:</span>
						<div class="quantity_selector">
							<span class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
							<span id="quantity_value">1</span>
							<span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
						</div>
						<div class="red_button add_to_cart_button"><a href="cos.php">go to cart</a></div>
						<div class="product_favorite d-flex flex-column align-items-center justify-content-center"></div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Tabs -->

	<div class="tabs_section_container">

		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabs_container">
						<ul class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
							<li class="tab active" data-active-tab="tab_1"><span>Description</span></li>
							<li class="tab" data-active-tab="tab_3"><span>Reviews</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">

					<!-- Tab Description -->

					<div id="tab_1" class="tab_container active">
						<div class="row">
							<div class="col-lg-10 desc_col">
								<div class="tab_title">
									<h4>Description</h4>
								</div>
								<div class="tab_text_block">
									<h5> With five starred reviews, Tomi Adeyemi’s West African-inspired fantasy debut, 
										and instant #1 New York Times Bestseller, 
										conjures a world of magic and danger, perfect for fans of Leigh Bardugo and Sabaa Tahir.
									</h5> <br/> <br/>
                                     <div class="tentativa">  
									 <p> <h4><i>	They killed my mother. </h4> </i></p> 
								     <p> <h4><i>	They took our magic.</h4> </i> </p>
								     <p><h4><i>		They tried to bury us. </h4> </i></p>
										
									 <p><h4><i>		Now we rise. </h4> </i> </p> 
									 <br/> <br/>
										</div>
									<h5>	Zélie Adebola remembers when the soil of Orïsha hummed with magic. Burners ignited flames, Tiders beckoned waves, and Zélie’s Reaper mother summoned forth souls.
										
										But everything changed the night magic disappeared. Under the orders of a ruthless king, maji were killed, leaving Zélie without a mother and her people without hope.
										
										Now Zélie has one chance to bring back magic and strike against the monarchy. With the help of a rogue princess, Zélie must outwit and outrun the crown prince, who is hell-bent on eradicating magic for good.
										
										Danger lurks in Orïsha, where snow leoponaires prowl and vengeful spirits wait in the waters. Yet the greatest danger may be Zélie herself as she struggles to control her powers and her growing feelings for an enemy.
										</h5>
										<br/><br/>
									<h5>	"A phenomenon." ―Entertainment Weekly  </h5> <br/>
										
										<h5>	“The epic I’ve been waiting for.” ―New York Times-bestselling author Marie Lu </h5> <br/>
										
											<h5>	“You will be changed. You will be ready to rise up and reclaim your own magic!” ―New York Times-bestselling author Dhonielle Clayton</h5> <br/>
										
												<h5>	“The next big thing in literature and film.” ―Ebony</h5><br/>
										
													<h5>	“One of the biggest young adult fiction debut book deals of theyear.” ―Teen Vogue</h5><br/>
										
							
										
															<h5>	#1 New York Times bestseller </h5> 
								</div>
								
						
								
							</div>
						</div>
					</div>

					<!-- Tab Reviews -->

					<div id="tab_3" class="tab_container">
						<div class="row">

							<!-- User Reviews -->

							<div class="col-lg-6 reviews_col">
								<div class="tab_title reviews_title">
									<h4> Reviews </h4>
								</div>
						<br> <br>
						
						<iframe width="853" height="480" src="https://www.youtube.com/embed/6dp8BcJuGnQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>"
					 
				        <?php
                  echo "<form method='POST' action='".setComments($db)."'>
                        <input type='hidden' name='uid' value='Anonymous'>
                         <input type='hidden' name='date' value='".date('Y-m-d H:i')."'>
                           <textarea name='message'></textarea><br>
                             <button type='submit' name='commentSubmit'>Comment</button>
                                </form>";
                        getComments($db);
                                    ?>
													

							

						</div>
					</div>

				</div>
			</div>
		</div>

	</div>

	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>free shipping</h6>
							<p>Suffered Alteration in Some Form</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>cach on delivery</h6>
							<p>The Internet Tend To Repeat</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>45 days return</h6>
							<p>Making it Look Like Readable</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>opening all week</h6>
							<p>8AM - 09PM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
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
