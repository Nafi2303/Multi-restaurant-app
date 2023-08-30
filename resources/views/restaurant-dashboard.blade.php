<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Account Setting</title>
	<!-- Google Font Family Link Start -->
	<link rel="stylesheet" type="text/css" href="fonts.googleapis.com/csse3e5.css?family=Montserrat:400,700">
	<link rel="stylesheet" type="text/css" href="fonts.googleapis.com/csse0bd.css?family=Open+Sans:400,700,800">
	<!-- Google Font Family Link End -->
	<!-- Bootstrap Link Start-->
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
	<link href="assets/css/bootstrap-datepicker.css" rel="stylesheet">
	<link href="assets/css/bootstrap-slider.css" rel="stylesheet">
	<!-- Bootstrap Link End-->
	<!-- Iconmoon Link Start-->
	<link href="assets/css/iconmoon.css" rel="stylesheet">
	<!-- Iconmoon Link End-->
	<!-- Animate Link Start-->
	<link href="assets/css/animate.css" rel="stylesheet">
	<!-- Animate Link End-->
	<!-- Chosen Link Start-->
	<link href="assets/css/chosen.css" rel="stylesheet">
	<!-- Chosen Link End-->
	<!-- Swiper Link Start-->
	<link href="assets/css/swiper.css" rel="stylesheet">
	<!-- Swiper Link End-->
	<!-- Woocommerce Link Start-->
	<link href="assets/css/woocommerce.css" rel="stylesheet">
	<!-- Woocommerce Link End-->
	<!-- Pretty Photo Link Start-->
	<link href="assets/css/prettyPhoto.css" rel="stylesheet">
	<!-- Pretty Photo Link End-->
	<!-- Daterange Picker Link Start-->
	<link href="assets/css/daterangepicker.css" rel="stylesheet">
	<!-- Daterange Picker Link End-->
	<!-- Pretty Photo Link Start-->
	<link href="assets/css/jquery.mCustomScrollbar.css" rel="stylesheet">
	<!-- Pretty Photo Link End-->
	<!-- Themes / plugin Link Start-->
	<link href="css/style.css" rel="stylesheet">
	<link href="assets/css/cs-foodbakery-plugin.css" rel="stylesheet">
	<link href="assets/css/color.css" rel="stylesheet">
	<link href="assets/css/widget.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
	<!-- <link href="assets/css/rtl.css" rel="stylesheet"> -->
	<!-- Themes / plugin Link End-->
	<script src="ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="assets/js/modernizr.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>
	<!--Main Wrapper-->
	<div class="wrapper">
		<!-- Header Start -->
		<header id="header">
			<div class="main-header">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<div class="logo">
								<figure>
									<a href="index.html" class="light-logo">
										<img src="assets/extra-images/main-logo.png" alt="FoodBakery">
									</a>
								</figure>
							</div>
							<div class="main-nav">
                                <nav id="site-navigation" class="main-navigation">
                                    <ul>
                                        <li>
                                            <a href="{{ url('res') }}">Acceuil</a>

                                            <!--End Sub Menu -->
                                        </li>
                                        <li><a href="{{ url('lis') }}">Restaurants</a></li>
                                        <li>
                                            <a href="{{ url('how') }}">How it works</a>

                                            <!--End Sub Menu -->
                                        </li>
                                        <li>
                                            <a href="{{ url('contact') }}">Contact</a>

                                            <!--End Sub Menu -->
                                        </li>
                                    </ul>
								</nav><!-- .main-navigation -->
							</div>
							<div class="main-location">
								<ul>
									<li class="location-has-children">
										<a href="#"><i class="icon-compass-with-white-needles"></i>Feel Like Eating</a>
										<ul>

												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-05-1.png">Apple
														Juice</a> <span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-19-1.png">BB.Q</a><span></span>
												</li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-22-1.png">Beef
														Roast</a> <span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-10-1.png">Carrot
														Juice</a> <span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-03-1.png">Cheese
														Burger</a> <span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-07-1.png">Chicken
														Roast</a> <span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-01-1.png">Chines
														Soup</a> <span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-18-1.png">Cold
														Coffee</a> <span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-23-1.png">Cold
														Drink</a> <span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-28-1.png">Cupcake</a><span></span>
												</li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-21-1.png">Doughnut</a><span></span>
												</li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-25-1.png">Drum
														Stick</a> <span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-11-1.png">Egg
														Fry</a> <span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-12-1.png">Fish
														Fry</a> <span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-13-1.png">Fresh
														Juice</a> <span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-30-1.png">Hot
														Dogs</a> <span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-26-1.png">Ice
														Cream</a> <span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-15-1.png">Magi</a>
													<span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-09-1.png">Noodles</a>
													<span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-14-1.png">Pastry</a><span></span>
												</li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-29-1.png">Pizza</a><span></span>
												</li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-06-1.png">Potato
														Fries</a> <span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-24-1.png">Prawns</a>
													<span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-17-1.png">Sham
														pane</a> <span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-27-1.png">Shawarma</a><span></span>
												</li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-04-1.png">Soda
														water</a> <span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-16-1.png">Stakes</a>
													<span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-22-1.png">Steam
														Roast</a> <span></span> </li>
												<li><a href="{{ url('lis') }}"><img alt="" src="assets/extra-images/food-icon-02-1.png">Tea</a><span></span>
												</li>

										</ul>
									</li>
									<li class="location-has-children choose-location">
										<a href="#"><i class="icon-location-pin2"></i>Choose location</a>
										<ul>
											<li class="select-location">
												<div class="foodbakery-locations-fields-group">
													<form action="#"><span id="foodbakery_radius_location_open" class="foodbakery-radius-location"><i class="icon-target5"></i></span>
														<span class="foodbakery-input-cross foodbakery-input-cross-header" style="display:none;">
															<i class="icon-cross"></i></span>
														<input type="text" value="" name="location" placeholder="All Locations" autocomplete="off">

														<span><span class="loc-icon-holder"><i class="icon-target3"></i></span></span>
														<div class="select-location" id="foodbakery-radius-range622192" style="display: none;">
															<div class="select-popup popup-open">
																<a id="location_close_popup622192" href="javascript:0;" class="location-close-popup">
																	<i class="icon-times"></i></a>
																<input type="hidden" class="foodbakery-radius" name="foodbakery_radius" value="10">
																<p>Show with in</p>
																 <input id="ex16b313324" type="text" data-value="10" value="10" style="display: none;">
																<script>
																	jQuery(document).ready(function () {
																		var elem = jQuery("#ex16b313324");
																		if (elem.length != "") {
																			elem.slider({
																				step: 1,
																				min: 0,
																				max: 500,
																				value: 10,
																			});
																			elem.on("slideStop", function () {
																				var rang_slider_val = elem.val();
																				jQuery("#ex16b313324CurrentSliderValLabel").html(rang_slider_val);
																				jQuery("#range-hidden-foodbakery-radius622192").val(rang_slider_val);
																				//foodbakery_restaurant_content("622192");
																			});
																			elem.on("slide", function () {
																				jQuery("#ex16b313324CurrentSliderValLabel").html(elem.val());
																			});
																		}

																		$("#foodbakery_radius_location_open").click(function () {
																		$("#foodbakery-radius-range622192").show();
																		});
																		$("#location_close_popup622192").click(function () {
																			$("#foodbakery-radius-range622192").hide();
																		});
																	});
																</script>
																<span>Miles: <span id="ex16b313324CurrentSliderValLabel">10</span></span><br>
																<p class="my-location">of <i class="cs-color icon-location-arrow"></i><a id="foodbakery-geo-location-all" class="cs-color foodbakery-geo-location313324" href="javascript:void(0)">My location</a></p>
															</div>
														</div>
													</form>
												</div>
											</li>
											<li class="popular-location">Localisations Populaire</li>
                                            <li>
                                                <ul>
                                                    <li><a href="#">Almadie</a></li>
                                                    <li><a href="#">Medina</a></li>
                                                    <li><a href="#">Fass</a></li>
                                                    <li><a href="#">Sacré-coeur</a></li>
                                                    <li><a href="#">Wakonde</a></li>
                                                </ul>
                                            </li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="login-option">
								<div class="user-dashboard-menu">
									<ul>
										<li class="user-dashboard-menu-children">
											<a href="javascript:void(0);" class="">
												<figure class="profile-image">
													<img src="assets/extra-images/listing-logo18.png" alt=""> </figure>
												Restaurant Demo
											</a>
											<ul>
												<li class="active"><a href="{{ url('res-dashboard') }}"><i class="icon-dashboard3"></i>Dashboard</a></li>
												<li><a href="restaurant-restaurant.html"><i class="icon-building"></i>My Restaurant</a></li>
												<li><a href="restaurant-menu-builder.html"><i class="icon-menu5"></i>Menu Builder</a></li>
												<li><a href="restaurant-orders.html"><i class="icon-add_shopping_cart"></i>Orders</a></li>
												<li><a href="restaurant-bookings.html"><i class="icon-file-text2 "></i>Bookings</a></li>
												<li><a href="restaurant-reviews.html"><i class="icon-comment2"></i>Reviews</a></li>
												<li><a href="restaurant-memberships.html"><i class="icon-card_membership"></i>Memberships</a></li>
												<li><a href="restaurant-withdrawals.html"><i class="icon-bill"></i>Withdrawals</a></li>
												<li><a href="restaurant-earnings.html"><i class="icon-money"></i>Earnings</a></li>
												<li><a href="restaurant-statement.html"><i class="icon-file-text22"></i>Statement</a></li>
												<li><a href="restaurant-team-management.html"><i class="icon-flow-tree"></i>Team Management</a></li>
												<li><a href="restaurant-change-password.html"><i class="icon-unlock-alt"></i>Change Password</a></li>
												<li><a class="logout-btn" href="registration.html"><i class="icon-log-out"></i>Signout</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header End -->
		<!-- Main Section Start -->
		<div class="main-section">
			<div class="page-section restaurant-detail-image-section" style=" background: url(assets/extra-images/cover-photo01.jpg) no-repeat scroll 0 0 / cover;">
				<!-- Container Start -->
				<div class="container">
					<!-- Row Start -->
					<div class="row">
						<!-- Column Start -->
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="company-info-detail">
								<div class="company-info">
									<div class="img-holder">
										<figure>
											<img src="assets/extra-images/listing-logo18.png" alt="">
										</figure>
									</div>

									<div class="text-holder">
										<span class="restaurant-title">Restaurant Demo</span>
										<div class="text">
											<i class="icon-local_pizza"></i>
											<p>Apple Juice</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Column End -->
					</div>
					<!-- Row End -->
				</div>
				<!-- Container End -->
			</div>
			<div class="page-section account-header buyer-logged-in">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<div class="user-account-nav user-account-sidebar">
								<div class="user-nav-list">
									<ul>
										<li class="active"><a href="{{ url('res-dashboard') }}"><i class="icon-dashboard3"></i>Dashboard</a></li>
										<li><a href="restaurant-restaurant.html"><i class="icon-building"></i>My Restaurant</a></li>
										<li><a href="restaurant-menu-builder.html"><i class="icon-menu5"></i>Menu Builder</a></li>
										<li><a href="restaurant-orders.html"><i class="icon-add_shopping_cart"></i>Orders</a></li>
										<li><a href="restaurant-bookings.html"><i class="icon-file-text2 "></i>Bookings</a></li>
										<li><a href="restaurant-reviews.html"><i class="icon-comment2"></i>Reviews</a></li>
										<li><a href="restaurant-memberships.html"><i class="icon-card_membership"></i>Memberships</a></li>
										<li><a href="restaurant-withdrawals.html"><i class="icon-bill"></i>Withdrawals</a></li>
										<li><a href="restaurant-earnings.html"><i class="icon-money"></i>Earnings</a></li>
										<li><a href="restaurant-statement.html"><i class="icon-file-text22"></i>Statement</a></li>
										<li><a href="restaurant-team-management.html"><i class="icon-flow-tree"></i>Team Management</a></li>
										<li><a href="restaurant-change-password.html"><i class="icon-unlock-alt"></i>Change Password</a></li>
										<li><a id="profile_delete" href="#"><i class="icon-delete"></i>Delete Profile</a></li>
										<li><a class="logout-btn" href="registration.html"><i class="icon-log-out"></i>Signout</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
							<div class="user-dashboard loader-holder">
								<div class="user-holder">
									<div class="user-message" style="background-color:#1e73be;">
										<a class="close" href="#"><i class="icon-cross-out"></i></a>
										<h2>Welcome to your Restaurant.</h2>
										<p>Restaurant Dashboard gives you quick access to settings and tools for managing your Account like [Change address] and [Change password] . You can [manage Restaurant] Build Menu , Manage Orders, Bookings, Reviews, Memberships, Withdrawals, Earnings, Statements, Change Password, Location and if you are you Restaurant Owner can also [Manage Team]. </p>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="row">
											<div class="element-title has-border right-filters-row">
												<h5>Recent Orders</h5>
												<div class="right-filters row pull-right">
													<div class="col-lg-6 col-md-6 col-xs-6">
														<div class="input-field">
															<select class="chosen-select-no-single">
																<option selected="selected" value="">Select Orders Status</option>
																<option value="Processing">Processing</option>
																<option value="Cancelled">Cancelled</option>
																<option value="Completed">Completed</option>
															</select>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-xs-6">
														<div class="input-field">
															<i class="icon-angle-down"></i>
															<input type="text" data-id="daterange223" id="daterange" value="" placeholder="Select Date Range">
															<script>
																$(function () {
																	$('input[data-id="daterange223"]').daterangepicker({
																		opens: 'left'
																	}, function (start, end, label) {
																		console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
																	});
																});
															</script>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="user-orders-list">
												<div class="responsive-table">
													<ul class="table-generic">
														<li class="order-heading-titles">
															<div>Order id</div>
															<div>Date</div>
															<div>Total Price</div>
															<div>Charges</div>
															<div>Received</div>
															<div>Status</div>
															<div>Detail</div>
														</li>
														<li class="order-heading-titles">
															<div><a href="#" data-toggle="modal" data-target="#order-det-22606">order-22606</a></div>
															<div>Apr 9,2019</div>
															<div>£ 38.99</div>
															<div>£ 3.90</div>
															<div>£ 35.09</div>
															<div><span class="order-status" style="background-color: #047a06;">Completed</span></div>
															<div><a href="#" data-toggle="modal" data-target="#order-det-22606"><i class="icon-plus2 text-color"></i></a></div>
														</li>
														<li class="order-heading-titles">
															<div><a href="#" data-toggle="modal" data-target="#order-det-22606">order-22594</a></div>
															<div>Apr 9,2019</div>
															<div>£ 37.86</div>
															<div>£ 3.79</div>
															<div>£ 34.07</div>
															<div><span class="order-status" style="background-color: #1e73be;">Processing</span></div>
															<div><a href="#" data-toggle="modal" data-target="#order-det-22606"><i class="icon-plus2 text-color"></i></a></div>
														</li>
														<li class="order-heading-titles">
															<div><a href="#" data-toggle="modal" data-target="#order-det-22606">order-22589</a></div>
															<div>Apr 9,2019</div>
															<div>£ 26.22</div>
															<div>£ 2.62</div>
															<div>£ 23.60</div>
															<div><span class="order-status" style="background-color: #047a06;">Completed</span></div>
															<div><a href="#" data-toggle="modal" data-target="#order-det-22606"><i class="icon-plus2 text-color"></i></a></div>
														</li>
														<li class="order-heading-titles">
															<div><a href="#" data-toggle="modal" data-target="#order-det-22606">order-22586</a></div>
															<div>Apr 9,2019</div>
															<div>£ 26.22</div>
															<div>£ 2.62</div>
															<div>£ 23.60</div>
															<div><span class="order-status" style="background-color: #047a06;">Completed</span></div>
															<div><a href="#" data-toggle="modal" data-target="#order-det-22606"><i class="icon-plus2 text-color"></i></a></div>
														</li>
														<li class="order-heading-titles">
															<div><a href="#" data-toggle="modal" data-target="#order-det-22606">order-22583</a></div>
															<div>Apr 9,2019</div>
															<div>£ 26.22</div>
															<div>£ 2.62</div>
															<div>£ 23.60</div>
															<div><span class="order-status" style="background-color: #1e73be;">Processing</span></div>
															<div><a href="#" data-toggle="modal" data-target="#order-det-22606"><i class="icon-plus2 text-color"></i></a></div>
														</li>
														<li class="order-heading-titles">
															<div><a href="#" data-toggle="modal" data-target="#order-det-22606">order-22493</a></div>
															<div>Apr 2,2019</div>
															<div>£ 28.24</div>
															<div>£ 2.82</div>
															<div>£ 25.42</div>
															<div><span class="order-status" style="background-color: #047a06;">Completed</span></div>
															<div><a href="#" data-toggle="modal" data-target="#order-det-22606"><i class="icon-plus2 text-color"></i></a></div>
														</li>
													</ul>

												</div>
												<div class="print-order-detail menu-order-detail order-detail" style="display: none;">
													<div class="logo"><img src="assets/extra-images/main-logo.png" alt=""></div>
													<h2>Order Detail</h2>
													<div class="order-detail-inner">
														<div class="description-holder">
															<div class="row">
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																	<div class="list-detail-options has-checkbox">
																		<h3>Restaurant Demo </h3>
																		<ul class="order-detail-options">
																			<li class="order-number">
																				<strong>Order ID:</strong>
																				<span>22606</span>
																			</li>
																			<li class="req-delivery">
																				<strong>Delivery Time:</strong>
																				<span>10 Minutes </span>
																			</li>
																			<li class="created-date">
																				<strong>Delivery Date:</strong>
																				<span>Apr 9, 2019 06:38 AM </span>
																			</li>
																			<li class="order-type">
																				<strong>Type:</strong>
																				<span>order</span>
																			</li>
																			<li class="order-type">
																				<strong>Payment Status:</strong>
																				<span>Approved</span>
																			</li>
																		</ul>
																	</div>
																</div>
																<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																	<div class="customer-detail-holder">
																		<h3>Customer Detail</h3>
																		<ul class="customer-detail">
																			<li>
																				<strong>Name :</strong>
																				<span>Buyer Demo</span>
																			</li>
																			<li>
																				<strong>Phone Number :</strong>
																				<span>0123456789</span>
																			</li>
																			<li>
																				<strong>Email :</strong>
																				<span>dum4@chimpgroup.com</span>
																			</li>
																			<li>
																				<strong>Address :</strong>
																				<span>London</span>
																			</li>
																		</ul>
																	</div>
																</div>
																<div class="row">
																	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																		<div class="order-status-holder">
																			<h3> Order Status:</h3>
																			<div class="order-status-process order-status">
																				<p>Completed</p>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																	<h2 class="heading">Food Menu</h2>
																	<div class="responsive-table">
																		<ul class="categories-order table-generic">
																			<li class="order-heading-titles">
																				<div>Products</div>
																				<div>Price per</div>
																			</li>
																			<li class="order-heading-titles">
																				<div>
																					<h4>Pizzas</h4>
																					<h5>Foodbakery Special 9" Deep Pan</h5>
																				</div>
																				<div><span class="category-price">£4.80</span></div>
																			</li>
																			<li class="order-heading-titles">
																				<div>
																					<h4>Pizzas</h4>
																					<h5>Foodbakery Special 9" Deep Pan</h5>
																				</div>
																				<div><span class="category-price">£4.80</span></div>
																			</li>
																			<li class="order-heading-titles">
																				<div>
																					<h4>Pizzas</h4>
																					<h5>Foodbakery Special 12" Deep Pan</h5>
																				</div>
																				<div><span class="category-price">£3.90</span></div>
																			</li>
																			<li class="order-heading-titles">
																				<div>
																					<h4>Garlic Bread</h4>
																					<h5>Garlic Bread 12" Deep</h5>
																				</div>
																				<div><span class="category-price">£3.50</span></div>
																			</li>
																			<li class="order-heading-titles">
																				<div>
																					<h4>Kebabs</h4>
																					<h5>Kebabs With Naan</h5>
																				</div>
																				<div><span class="category-price">£4.50</span></div>
																			</li>
																			<li class="order-heading-titles">
																				<div>
																					<h4>Burgers</h4>
																					<h5>Quarter Pounder</h5>
																				</div>
																				<div><span class="category-price">£3.00</span></div>
																			</li>
																		</ul>
																	</div>
																</div>
																<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																	<div class="row">
																		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
																			<h3>Order Total</h3>
																		</div>
																		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																			<ul class="order-detail-options order-total">
																				<li class="created-date">
																					<strong>Subtotal:</strong>
																					<span>£24.50</span>
																				</li>
																				<li class="order-type">
																					<strong>
																						Pick Up Fee: </strong>
																					<span>£10.00</span>
																				</li>
																				<li class="order-type">
																					<strong>VAT (13%)</strong>
																					<span>£4.48</span>
																				</li>
																				<li class="order-type total-price">
																					<strong>Total:</strong>
																					<span>£38.99</span>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="modal fade menu-order-detail order-detail" id="order-det-22606" tabindex="-1" role="dialog" style="display: none;">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
																<h2>Order Detail</h2>
																<button class="btn-print"><i class="icon-printer"></i><span>Receipt</span></button>
															</div>
															<div class="modal-body">
																<div class="order-detail-inner">
																	<div class="description-holder">
																		<div class="row">
																			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																				<div class="list-detail-options has-checkbox">
																					<h3>
																						Restaurant Demo </h3>
																					<ul class="order-detail-options">
																						<li class="order-number">
																							<strong>Order ID:</strong>
																							<span>22606</span>
																						</li>
																						<li class="req-delivery">
																							<strong>Delivery Time:</strong>
																							<span>10 Minutes </span>
																						</li>
																						<li class="created-date">
																							<strong>Delivery Date:</strong>
																							<span>
																								Apr 9, 2019 06:38 AM </span>
																						</li>
																						<li class="order-type">
																							<strong>Type:</strong>
																							<span>order</span>
																						</li>
																						<li class="order-type">
																							<strong>Payment Status:</strong>
																							<span>Approved</span>
																						</li>

																					</ul>
																				</div>

																			</div>
																			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																				<div class="customer-detail-holder">
																					<h3>Customer Detail</h3>
																					<ul class="customer-detail">
																						<li>
																							<strong>Name :</strong>
																							<span>Buyer Demo</span>
																						</li>
																						<li>
																							<strong>Phone Number :</strong>
																							<span>0123456789</span>
																						</li>
																						<li>
																							<strong>Email :</strong>
																							<span>dum4@chimpgroup.com</span>
																						</li>
																						<li>
																							<strong>Address :</strong>
																							<span>London</span>
																						</li>
																					</ul>
																				</div>
																			</div>
																			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																				<div class="order-status-holder">
																					<div class="row">
																						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
																							<h3>Order Status </h3>
																						</div>
																						<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
																							<div class="input-field">
																								<select class="chosen-select-no-single">
																									<option value="Processing">Processing</option>
																									<option value="Cancelled">Cancelled</option>
																									<option selected="selected" value="Completed">Completed</option>
																								</select>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																				<h2 class="heading">Food Menu</h2>
																				<div class="responsive-table">
																					<ul class="categories-order table-generic">
																						<li class="order-heading-titles">
																							<div>Products</div>
																							<div>Price per</div>
																						</li>
																						<li class="order-heading-titles">
																							<div>
																								<h4>Pizzas</h4>
																								<h5>Foodbakery Special 9" Deep Pan</h5>
																							</div>
																							<div><span class="category-price">£4.80</span></div>
																						</li>
																						<li class="order-heading-titles">
																							<div>
																								<h4>Pizzas</h4>
																								<h5>Foodbakery Special 9" Deep Pan</h5>
																							</div>
																							<div><span class="category-price">£4.80</span></div>
																						</li>
																						<li class="order-heading-titles">
																							<div>
																								<h4>Pizzas</h4>
																								<h5>Foodbakery Special 12" Deep Pan</h5>
																							</div>
																							<div><span class="category-price">£3.90</span></div>
																						</li>
																						<li class="order-heading-titles">
																							<div>
																								<h4>Garlic Bread</h4>
																								<h5>Garlic Bread 12" Deep</h5>
																							</div>
																							<div><span class="category-price">£3.50</span></div>
																						</li>
																						<li class="order-heading-titles">
																							<div>
																								<h4>Kebabs</h4>
																								<h5>Kebabs With Naan</h5>
																							</div>
																							<div><span class="category-price">£4.50</span></div>
																						</li>
																						<li class="order-heading-titles">
																							<div>
																								<h4>Burgers</h4>
																								<h5>Quarter Pounder</h5>
																							</div>
																							<div><span class="category-price">£3.00</span></div>
																						</li>
																					</ul>
																				</div>
																			</div>
																			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
																				<div class="row">
																					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
																						<h3>Order Total</h3>
																					</div>
																					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
																						<ul class="order-detail-options order-total">
																							<li class="created-date">
																								<strong>Subtotal:</strong>
																								<span>£24.50</span>
																							</li>
																							<li class="order-type">
																								<strong>
																									Pick Up Fee: </strong>
																								<span>£10.00</span>
																							</li>
																							<li class="order-type">
																								<strong>VAT (13%)</strong>
																								<span>£4.48</span>
																							</li>
																							<li class="order-type total-price">
																								<strong>Total:</strong>
																								<span>£38.99</span>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<script>
													(function ($) {
														$(document).ready(function () {
															$(".order-detail .modal-dialog .modal-content").mCustomScrollbar({
																setHeight: 724,
																theme: "minimal-dark",
																mouseWheelPixels: 100
															});
														});
													})(jQuery);
												</script>
											</div>
										</div>
									</div>
									<ul class="pagination">
										<li class="active"><a>1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><span class="page-numbers dots">…</span></li>
										<li><a href="#">5</a></li>
										<li><a href="#">Next </a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Section End -->
		<!-- Footer Start -->
		<footer id="footer" class="footer-style-2">
			<div class="footer-widget">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="widget widget-newsletter">
								<div class="widget-title">
									<h5>Subscribe to our Newsletter</h5>
								</div>
								<div class="fieldset">
									<form action="#">
										<div class="field-holder">
											<label>
												<i class=" icon-envelope3"></i>
												<input type="text" class="field-input" placeholder=" Enter Your Email Address...">
											</label>
										</div>
										<div class="field-holder btn-holder">
											<input class="subscribe-btn bgcolor" onclick="location.href='registration.html'" type="button" value="Sign Up">
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="widget widget_text">
								<div class="widget-title">
									<h5>About us</h5>
								</div>
								<div class="textwidget">Foodbakery is the business of food and restaurants.
									Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.
									Explore restaurants, bars, and cafés by locality cum doctus civibus
									efficiantur in imperdiet deterruisset. FoodBakery Just ordered me some grub
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
							<div class="widget widget-top-cities">
								<div class="widget-title">
									<h5>Popular Cities</h5>
								</div>
								<ul>
									<li><a href="{{ url('lis') }}">Aberaeron</a></li>
									<li><a href="{{ url('lis') }}">Aberdeenshire</a></li>
									<li><a href="{{ url('lis') }}">Anston</a></li>
									<li><a href="{{ url('lis') }}">Ascot</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
							<div class="widget widget-top-cities">
								<div class="widget-title">
									<h5>Popular Cuisines</h5>
								</div>
								<ul>
									<li><a href="{{ url('lis') }}">BB.Q</a></li>
									<li><a href="{{ url('lis') }}">ChickenRoast</a></li>
									<li><a href="{{ url('lis') }}">Cold Coffee</a></li>
									<li><a href="{{ url('lis') }}">Cold Drink</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
							<div class="widget widget-categories">
								<div class="widget-title">
									<h5>Menu</h5>
								</div>
								<ul>
									<li><a href="blog-large.html">Blog Large</a></li>
									<li><a href="blog-medium.html">Blog Medium</a></li>
									<li><a href="blog-medium.html">Blog Masonry</a></li>
									<li><a href="contact-us.html">Contact</a></li>
									<li><a href="faq.html">FAQ’s</a></li>
									<li><a href="how-it-works.html">How itworks</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
							<div class="widget widget-connect">
								<div class="widget-title">
									<h5> Connect</h5>
								</div>
								<ul>
									<li><span class="bgcolor"><i class="icon-ring_volume"></i></span>
										<p>+1 123 456 7892</p>
									</li>
									<li><span class="bgcolor"><i class="icon-envelope-o"></i></span>
										<p><a href="#">support@chimpstudio.com</a>
										</p>
									</li>
									<li><span class="bgcolor"><i class="icon-location-pin2"></i></span>
										<p>33 - B, 2nd Floor, Saint Jhon Doe Appartments, Sussex, UK.26AL565C.</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright-sec">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="copyright-inner">
								<div class="copy-right">
									<p>© 2017 Foodbakery. All Rights Reserved. Powered By <a href="#">ChimpGroup</a>.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.cs-copyright -->
		</footer>
		<!-- Footer End -->
	</div>
	<!-- Modal Popup Start -->
	<div class="modal fade menu-order-detail menu-order-info" id="booking-detail-22603" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					<h2><a>Booking Detail</a></h2>
				</div>
				<div class="modal-body booking-modal-body">
					<div class="order-detail-inner">
						<h3>Restaurant Demo </h3>
						<ul class="order-detail-options">
							<li>
								<strong>Booking ID :</strong>
								<span>22603</span>
							</li>
							<li>
								<strong>Booking Date :</strong>
								<span>Apr 9,2019 6:40 AM </span>
							</li>
						</ul>
						<h3>Customer Deatil</h3>
						<ul class="order-detail-options">
							<li>
								<strong>First Name:</strong>
								<span>Mark</span>
							</li>
							<li>
								<strong>Last Name:</strong>
								<span>Jose</span>
							</li>
							<li>
								<strong>Email:</strong>
								<span>markjose@gmail.com</span>
							</li>
							<li>
								<span>4-guest</span>
							</li>
							<li>
								<span>Apr 30,2019 11:00 AM</span>
							</li>
							<li class="order-detail-message">
								<strong>Instructions:</strong>
								<span>I need to book a special table for my friends. Make it some special.!</span>
							</li>
						</ul>
						<div class="booking-status-holder">
							<div class="booking-status-process booking-status">
								<p style="background:#1e73be;">Your booking is Processing.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="id_confrmdiv" style="display: none;">
		<div class="cs-confirm-container">
			<i class="icon-sad"></i>
			<div class="message">You Want To Delete?</div>
			<a href="javascript:void(0);" id="id_truebtn">Yes, Delete</a>
			<a href="javascript:void(0);" id="id_falsebtn">No, Cancel</a>
		</div>
	</div>
	<!-- Modal Popup End -->
	<script src="assets/js/responsive.menu.js"></script>
	<script src="assets/js/swiper.min.js"></script>
	<script src="assets/js/bootstrap-datepicker.js"></script>
	<script src="assets/js/chosen.js"></script>
	<script src="assets/js/counter.js"></script>
	<script src="assets/js/fliters.js"></script>
	<script src="assets/js/jquery.fitvids.js"></script>
	<script src="assets/js/jquery.growl.js"></script>
	<script src="assets/js/jquery.matchHeight-min.js"></script>
	<script src="assets/js/masonry.pkgd.js"></script>
	 <script src="assets/js/skills-progress.js"></script>
	<script src="assets/js/bootstrap-slider.js"></script>
	<script src="assets/js/wow.js"></script>
	<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/js/daterangepicker.js"></script>
	<script src="assets/js/functions-plugin.js"></script>
	<script src="assets/js/functions.js"></script>
</body>

</html>
