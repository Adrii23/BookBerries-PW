<?php
 date_default_timezone_set('Europe/Bucharest');
 include('server.php')
  ?>
  
<!DOCTYPE html>
<html lang="en">
<head>
<title>Categories</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/categories_styles.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">

<?php
            $ok=0;
  			$booksTitle = array();
			$booksAuthor = array();
			$booksPrice = array();
			$booksCat = array();
			$booksImage = array();
			$query = "SELECT * FROM books ";
			$result = mysqli_query($db, $query);

			$results_per_page = 5;
			$number_of_results = mysqli_num_rows($result);
			$number_of_pages = ceil($number_of_results/$results_per_page);

			if (!isset($_GET['page'])) {
			$page = 1;
 			 } else {
				$page = $_GET['page'];
 				 }

  			$this_page_first_result = ($page-1)*$results_per_page;


			if(mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					array_push($booksTitle, $row['title']);
					array_push($booksAuthor, $row['author']);
					array_push($booksPrice, $row['price']);
					array_push($booksCat, $row['cat']);
					$location = "./" . $row['image'];
					array_push($booksImage, $location);
				}
			}
			else array_push($errors, "No books in database");
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

								<!-- Language / My Account -->
								<li class="language">
									<a href="categories.php">
										English
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="language_selection">
										<li><a href="categories.php">Romanian</a></li>
										
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
					<a href="categories.php">
						English
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="categories.php">Romanian</a></li>
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

	<div class="container product_section_container">
		<div class="row">
			<div class="col product_section clearfix">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="MainPage.php">Home</a></li>
						<li class="active"><a href="categories.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Books</a></li>
					</ul>
				</div>

				<!-- Sidebar -->

				<div class="sidebar">
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Product Category</h5>
						</div>
						<ul class="sidebar_categories">
							<li><a href="fiction.php">Fiction</a></li>
							<li><a href="crime.php">Crime</a></li>
							<li><a href="items.php">Items</a></li>
							<li><a href="categories.php">All</a></li>
							
						</ul>
					</div>


				</div>

				<!-- Main Content -->

				<div class="main_content">

					<!-- Products -->

					<div class="products_iso">
						<div class="row">
							<div class="col">

								<!-- Product Sorting -->

								<div class="product_sorting_container product_sorting_container_top">
									<ul class="product_sorting">
										<li>
											<span class="type_sorting_text">Default</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_type">
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Title</span></li>
											</ul>
										</li>
										<li>
											<span>Show</span>
											<span class="num_sorting_text">8</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_num">
												<li class="num_sorting_btn"><span>8</span></li>
												<li class="num_sorting_btn"><span>32</span></li>
												<li class="num_sorting_btn"><span>64</span></li>
											</ul>
										</li>
									</ul>
									

								</div>

				

									<!-- Product Grid -->

								<div class="product-grid">

									<!-- Products-->
										<?php 

								

										if(count($booksTitle) > 0)
                                      { for($x=0; $x<count($booksTitle); $x++)
                                         if($booksCat[$x]=='item')
										   
	  									{ ?>
										<div class="product-item men">
										<div class="product discount product_filter">
										<div class="product_image">
	     							<img src="<?php echo $booksImage[$x]; ?>" height="245" width="200" alt=""/>
											</div>
									<div class="favorite favorite_left"></div>
									<div class="product_info">
										<h6 class="product_name"><a href="single.php"><?php echo $booksTitle[$x]; ?></a></h6>
										<h6 class="product_name"><?php echo $booksAuthor[$x]; ?></h6>
										<div class="product_price"><?php echo "$" . $booksPrice[$x]; ?></div>
									</div>
								</div>
								<div class="red_button add_to_cart_button"><a href="cos.php">go to cart</a></div><
							</div>

							<?php 	}
												}
										?>

							</div>
															
									
									<br/><br/>

								
							</div>
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
<script src="js/categories_custom.js"></script>
</body>

</html>
