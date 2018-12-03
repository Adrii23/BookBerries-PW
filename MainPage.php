<?php
 date_default_timezone_set('Europe/Bucharest');
 include('server.php');
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Bookshop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" href="assets/css/bootsnav.css">
<link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">

 <!--For Plugins external css-->
 <link rel="stylesheet" href="assets/css/plugins.css" />

 <!--Theme custom css -->
 <link rel="stylesheet" href="assets/css/style.css">

 <!--Theme Responsive css-->
 <link rel="stylesheet" href="assets/css/responsive.css" />

 <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
 
</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="100">

	
	


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
									<a href="MainPage.php">
										English
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="language_selection">
										<li><a href="MainPage.php">Romanian</a></li>
										
									
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
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="MainPage.php">
						English
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="MainPage.php">Romanian</a></li>
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
				<li class="menu_item"><a href="MainPage.php">Home</a></li>
				<li class="menu_item"><a href="categories.php">Shop</a></li>
				<li class="menu_item"><a href="contact.php">Contact</a></li>
				<li class="menu_item"><a href="comanda.php">comanda</a></li>
				<li class="menu_item"><a href="admin.php">admin</a></li>

			</ul>
		</div>
	</div>

	<!-- Slider -->

	<div class="main_slider" style="background-image:url(images/test.jpg)">
		<section id="home" class="home bg-black fix">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="main_home text-center">
					<div class="col-md-12">
						<div class="hello">
							<div class="slid_item">
								<div class="home_text ">
									<h1 class="text-yellow">Welcome to BookBerries</h1>
									<h3 class="text-white text-uppercase"> "All you need is a little faith, trust, and pixie dust " </h3>
								</div>
							</div><!-- End off slid item -->

						</div>
					</div>

				</div>

			</div><!--End off row-->
		</div><!--End off container -->
		</section>
	</div>

	
	<!-- New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>New Edition</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">All</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women">Books</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".accessories">Notebooks</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">Items</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

						<!-- Product 1 -->

						<div class="product-item men">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="images/img1.jpg" alt="" height="240">
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">Go Away I'm Reading Handmade Mug</a></h6>
									<div class="product_price">$8.50</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="cos.php">go to cart</a></div>
						</div>

						<!-- Product 2 -->

						<div class="product-item women">
							<div class="product product_filter">
								<div class="product_image">
									<img src="images/img5.jpg" alt="" height="240">
								</div>
								<div class="favorite"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">The Hobbit by J. R. R. Tolkien HardCover</a></h6>
									<div class="product_price">$7.98</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="cos.php">go to cart</a></div>
						</div>

						<!-- Product 3 -->

						<div class="product-item women">
							<div class="product product_filter">
								<div class="product_image">
										<img src="images/carte2.jpg" alt="" height="240">
								</div>
								<div class="favorite"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">The Cuckoo's Calling by J.K.Rowling</a></h6>
									<div class="product_price">$9.56</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="cos.php">go to cart</a></div>
						</div>

						<!-- Product 4 -->

						<div class="product-item accessories">
							<div class="product product_filter">
								<div class="product_image">
									<img src="images/img4.jpg" alt="" height="240">
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">Star Wars Fan Notebook HardCover</a></h6>
									<div class="product_price">$13.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="cos.php">go to cart</a></div>
						</div>

			
						<!-- Product 6 -->

						<div class="product-item accessories">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="images/img6.jpg" alt="" height="240">
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">The Grolier Notebook Special Christmas Edition</a></h6>
									<div class="product_price">$17.86</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="cos.php">go to cart</a></div>
						</div>

						<!-- Product 7 -->

						<div class="product-item women">
							<div class="product product_filter">
								<div class="product_image">
									<img src="images/img7.jpg" alt="" height="240">
								</div>
								<div class="favorite"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">Harry Potter and the Philosopher's Stone</a></h6>
									<div class="product_price">$8.23</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="cos.php">go to cart</a></div>
						</div>

						<!-- Product 8 -->

						<div class="product-item accessories">
							<div class="product product_filter">
								<div class="product_image">
									<img src="images/img8.jpg" alt="" height="240">
								</div>
								<div class="favorite"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">Heisenberg Breaking Bad Edition Notebook</a></h6>
									<div class="product_price">$11.50</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="cos.php">go to cart</a></div>
						</div>

						<!-- Product 9 -->

						<div class="product-item men">
							<div class="product product_filter">
								<div class="product_image">
									<img src="images/img9.jpg" alt="" height="240">
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">Come to the Dark Side StarWars Fan Mug</a></h6>
									<div class="product_price">$12.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="cos.php">go to cart</a></div>
						</div>

						<!-- Product 10 -->

						<div class="product-item men">
							<div class="product product_filter">
								<div class="product_image">
									<img src="images/img10.jpg" alt="" height="240">
								</div>
								<div class="favorite"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">Winter is Coming Game of Thrones Fan Mug</a></h6>
									<div class="product_price">$15.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="cos.php">go to cart</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Deal of the week -->

	<div class="deal_ofthe_week">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="deal_ofthe_week_img">
						<img src="images/children.jpg" alt="" width="600">
					</div>
				</div>
				<div class="col-lg-6 text-right deal_ofthe_week_col">
					<div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
						<div class="section_title">
							<h2>Release Date</h2>
						</div>
						<ul class="timer">
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="day" class="timer_num">03</div>
								<div class="timer_unit">Day</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="hour" class="timer_num">15</div>
								<div class="timer_unit">Hours</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="minute" class="timer_num">45</div>
								<div class="timer_unit">Mins</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="second" class="timer_num">23</div>
								<div class="timer_unit">Sec</div>
							</li>
						</ul>
						<div class="red_button deal_ofthe_week_button"><a href="single.php">Buy now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Best Sellers -->

	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Best Sellers</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">

							<!-- Slide 1 -->

							<div class="owl-item product_slider_item">
								<div class="product-item">
									<div class="product discount">
										<div class="product_image">
											<img src="images/blood/tentativa1.jpg" alt="" height="240">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="product1.php">The Art of Not Giving a F*ck - Mark Manson</a></h6>
											<div class="product_price">$10.25</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 2 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="images/SlideMain/slide2.jpg" alt="" height="240">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="product2.php">If I Die Tonight - <br/> Alison Gaylin</a></h6>
											<div class="product_price">$7.52</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 3 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="images/SlideMain/slide3.jpg" alt="" height="240">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="product3.php">Almost Midnight -<br/> Rainbow Rowell</a></h6>
											<div class="product_price">$8.55</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 4 -->

							<div class="owl-item product_slider_item">
								<div class="product-item accessories">
									<div class="product">
										<div class="product_image">
											<img src="images/SlideMain/slide4.jpg" alt="" height="240">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="product4.php">Carve the Mark -<br/> Veronica Roth</a></h6>
											<div class="product_price">$10.20</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 5 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women men">
									<div class="product">
										<div class="product_image">
											<img src="images/SlideMain/slide5.jpg" alt="" height="240">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="product5.php">The Poppy War - <br/>R.F.Kuang</a></h6>
											<div class="product_price">$9.50</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 6 -->

							<div class="owl-item product_slider_item">
								<div class="product-item accessories">
									<div class="product discount">
										<div class="product_image">
											<img src="images/SlideMain/slide6.jpg" alt="" height="240">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="product6.php">Into the Water -<br/> Paula Hawkins</a></h6>
											<div class="product_price">$8.69</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 7 -->

							<div class="owl-item product_slider_item">
								<div class="product-item women">
									<div class="product">
										<div class="product_image">
											<img src="images/SlideMain/slide7.jpg" alt="" height="240">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="product7.php">Still Me -<br/> Jojo Moyes</a></h6>
											<div class="product_price">$7.98</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 8 -->

							<div class="owl-item product_slider_item">
								<div class="product-item accessories">
									<div class="product">
										<div class="product_image">
											<img src="images/SlideMain/slide8.jpg" alt="" height="240">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="product8.php">The Woman in the Window - A.J.Finn</a></h6>
											<div class="product_price">$8.66</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 9 -->

							<div class="owl-item product_slider_item">
								<div class="product-item men">
									<div class="product">
										<div class="product_image">
											<img src="images/SlideMain/slide9.jpg" alt="" height="240">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="product9.php">All the Light We Cannot See - Anthony Doerr</a></h6>
											<div class="product_price">$10.99</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide 10 -->

							<div class="owl-item product_slider_item">
								<div class="product-item men">
									<div class="product">
										<div class="product_image">
											<img src="images/SlideMain/slide10.png" alt="" height="240">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="product10.php">Four Psychos -<br/> Kristy Cunning</a></h6>
											<div class="product_price">$10.00</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Slider Navigation -->

						<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
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
							<li><a href="contact.html">Contact us</a></li>
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
<script src="js/custom.js"></script>
</body>

</html>
