
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Modelia</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-custom.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image pulse"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class=""></button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div><!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->


			<!-- header with two Bootstrap columns - left for logo and right for navigation and includes (search, social icons, additional links and buttons etc -->
			<header class="page_header ds bottom_mask_add">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-xl-3 col-lg-4 col-md-5 col-11">
							<a href="./" class="logo">
								<img src="images/logo.png" alt="img">
							</a>
						</div>
						<div class="col-xl-6 col-lg-8 col-md-7 col-1">
							<div class="nav-wrap">

								<!-- main nav start -->
								<nav class="top-nav">
									<ul class="nav sf-menu">

										<li class="active">
											<a href="index.html">Home</a>
											<ul>
												<li>
													<a href="index.html">MultiPage</a>
												</li>
												<li>
													<a href="index_static.html">Static Intro</a>
												</li>
												<li>
													<a href="index_singlepage.html">Single Page</a>
												</li>
												<li>
													<a href="index-alt.html">Single Page Alternative</a>
												</li>
											</ul>
										</li>

										<!-- blog -->
										<li>
											<a href="blog-right.html">Blog</a>
											<ul>

												<li>
													<a href="blog-right.html">Right Sidebar</a>
												</li>
												<li>
													<a href="blog-left.html">Left Sidebar</a>
												</li>
												<li>
													<a href="blog-full.html">No Sidebar</a>
												</li>
												<li>
													<a href="blog-grid.html">Blog Grid</a>
												</li>

												<li>
													<a href="blog-single-right.html">Post</a>
													<ul>
														<li>
															<a href="blog-single-right.html">Right Sidebar</a>
														</li>
														<li>
															<a href="blog-single-left.html">Left Sidebar</a>
														</li>
														<li>
															<a href="blog-single-full.html">No Sidebar</a>
														</li>
													</ul>
												</li>

												<li>
													<a href="blog-single-video-right.html">Video Post</a>
													<ul>
														<li>
															<a href="blog-single-video-right.html">Right Sidebar</a>
														</li>
														<li>
															<a href="blog-single-video-left.html">Left Sidebar</a>
														</li>
														<li>
															<a href="blog-single-video-full.html">No Sidebar</a>
														</li>
													</ul>
												</li>

											</ul>
										</li>
										<!-- eof blog -->

										<li>
											<a href="#">Features</a>
											<div class="mega-menu">
												<ul class="mega-menu-row">
													<li class="mega-menu-col">
														<a href="#">Headers</a>
														<ul>
															<li>
																<a href="header1.html">Header Type 1</a>
															</li>
															<li>
																<a href="header2.html">Header Type 2</a>
															</li>
															<li>
																<a href="header3.html">Header Type 3</a>
															</li>
															<li>
																<a href="header4.html">Header Type 4</a>
															</li>
															<li>
																<a href="header5.html">Header Type 5</a>
															</li>
															<li>
																<a href="header6.html">Header Type 6</a>
															</li>
														</ul>
													</li>
													<li class="mega-menu-col">
														<a href="#">Side Menus</a>
														<ul>
															<li>
																<a href="header-side.html">Push Left</a>
															</li>
															<li>
																<a href="header-side-right.html">Push Right</a>
															</li>
															<li>
																<a href="header-side-slide.html">Slide Left</a>
															</li>
															<li>
																<a href="header-side-slide-right.html">Slide Right</a>
															</li>
															<li>
																<a href="header-side-sticked.html">Sticked Left</a>
															</li>
															<li>
																<a href="header-side-sticked-right.html">Sticked Right</a>
															</li>
														</ul>
													</li>
													<li class="mega-menu-col">
														<a href="title1.html">Title Sections</a>
														<ul>
															<li>
																<a href="title1.html">Title section 1</a>
															</li>
															<li>
																<a href="title2.html">Title section 2</a>
															</li>
															<li>
																<a href="title3.html">Title section 3</a>
															</li>
															<li>
																<a href="title4.html">Title section 4</a>
															</li>
															<li>
																<a href="title5.html">Title section 5</a>
															</li>
															<li>
																<a href="title6.html">Title section 6</a>
															</li>
														</ul>
													</li>
													<li class="mega-menu-col">
														<a href="footer1.html#footer">Footers</a>
														<ul>
															<li>
																<a href="footer1.html#footer">Footer Type 1</a>
															</li>
															<li>
																<a href="footer2.html#footer">Footer Type 2</a>
															</li>
															<li>
																<a href="footer3.html#footer">Footer Type 3</a>
															</li>
															<li>
																<a href="footer4.html#footer">Footer Type 4</a>
															</li>
															<li>
																<a href="footer5.html#footer">Footer Type 5</a>
															</li>
															<li>
																<a href="footer6.html#footer">Footer Type 6</a>
															</li>
														</ul>
													</li>
													<li class="mega-menu-col">
														<a href="copyright1.html#copyright">Copyright</a>

														<ul>
															<li>
																<a href="copyright1.html#copyright">Copyright 1</a>
															</li>
															<li>
																<a href="copyright2.html#copyright">Copyright 2</a>
															</li>
															<li>
																<a href="copyright3.html#copyright">Copyright 3</a>
															</li>
															<li>
																<a href="copyright4.html#copyright">Copyright 4</a>
															</li>
															<li>
																<a href="copyright5.html#copyright">Copyright 5</a>
															</li>
															<li>
																<a href="copyright6.html#copyright">Copyright 6</a>
															</li>
														</ul>
													</li>

												</ul>
											</div> <!-- eof mega menu -->
										</li>
										<!-- eof features -->


										<li>
											<a href="about.html">Pages</a>
											<ul>


												<li>
													<a href="about.html">About</a>
												</li>

												<li>
													<a href="services.html">Our Services</a>
													<ul>
														<li>
															<a href="services.html">Services 1</a>
														</li>
														<li>
															<a href="services2.html">Services 2</a>
														</li>
														<li>
															<a href="service-single.html">Single Service</a>
														</li>
													</ul>
												</li>

												<!-- Gallery -->
												<li>
													<a href="gallery-excerpt.html">Gallery</a>
													<ul>
														<li>
															<a href="gallery-excerpt-2-cols.html">2 columns</a>
														</li>
														<li>
															<a href="gallery-excerpt.html">3 column</a>
														</li>
														<li>
															<a href="gallery-excerpt-4-cols.html">4 columns</a>
														</li>
													</ul>
												</li>
												<!-- eof Gallery with excerpt -->

												<li>
													<a href="gallery-tiled.html">Tiled Gallery</a>
												</li>

												<!-- Gallery item -->
												<li>
													<a href="gallery-single.html">Gallery Item</a>
												</li>

												<li>
													<a href="photo_session.html">Photo session</a>
												</li>

												<!-- casting -->

												<li>
													<a href="casting.html">Casting</a>
												</li>

												<!-- casting -->

												<!-- shop -->
												<li>
													<a href="shop-right.html">Shop</a>
													<ul>
														<li>
															<a href="shop-account-dashboard.html">Account</a>
															<ul>

																<li>
																	<a href="shop-account-details.html">Account details</a>
																</li>
																<li>
																	<a href="shop-account-addresses.html">Addresses</a>
																</li>
																<li>
																	<a href="shop-account-address-edit.html">Edit Address</a>
																</li>
																<li>
																	<a href="shop-account-orders.html">Orders</a>
																</li>
																<li>
																	<a href="shop-account-order-single.html">Single Order</a>
																</li>
																<li>
																	<a href="shop-account-downloads.html">Downloads</a>
																</li>
																<li>
																	<a href="shop-account-password-reset.html">Password Reset</a>
																</li>
																<li>
																	<a href="shop-account-login.html">Login/Logout</a>
																</li>

															</ul>
														</li>
														<li>
															<a href="shop-right.html">Right Sidebar</a>
														</li>
														<li>
															<a href="shop-left.html">Left Sidebar</a>
														</li>
														<li>
															<a href="shop-product-right.html">Product Right Sidebar</a>
														</li>
														<li>
															<a href="shop-product-left.html">Product Left Sidebar</a>
														</li>
														<li>
															<a href="shop-cart.html">Cart</a>
														</li>
														<li>
															<a href="shop-checkout.html">Checkout</a>
														</li>
														<li>
															<a href="shop-order-received.html">Order Received</a>
														</li>

													</ul>
												</li>
												<!-- eof shop -->

												<!-- features -->
												<li>
													<a href="shortcodes_iconbox.html">Shortcodes</a>
													<ul>
														<li>
															<a href="shortcodes_typography.html">Typography</a>
														</li>
														<li>
															<a href="shortcodes_buttons.html">Buttons</a>
														</li>
														<li>
															<a href="shortcodes_pricing.html">Pricing</a>
														</li>
														<li>
															<a href="shortcodes_iconbox.html">Icon Boxes</a>
														</li>
														<li>
															<a href="shortcodes_progress.html">Progress</a>
														</li>
														<li>
															<a href="shortcodes_tabs.html">Tabs &amp; Collapse</a>
														</li>
														<li>
															<a href="shortcodes_bootstrap.html">Bootstrap Elements</a>
														</li>
														<li>
															<a href="shortcodes_animation.html">Animation</a>
														</li>
														<li>
															<a href="shortcodes_icons.html">Template Icons</a>
														</li>
														<li>
															<a href="shortcodes_socialicons.html">Social Icons</a>
														</li>
													</ul>
												</li>
												<!-- eof shortcodes -->

												<li>
													<a href="shortcodes_widgets_default.html">Widgets</a>
													<ul>
														<li>
															<a href="shortcodes_widgets_default.html">Default Widgets</a>
														</li>
														<li>
															<a href="shortcodes_widgets_shop.html">Shop Widgets</a>
														</li>
														<li>
															<a href="shortcodes_widgets_custom.html">Custom Widgets</a>
														</li>
													</ul>

												</li>


												<!-- events -->
												<li>
													<a href="events-left.html">Events</a>
													<ul>
														<li>
															<a href="events-left.html">Left Sidebar</a>
														</li>
														<li>
															<a href="events-right.html">Right Sidebar</a>
														</li>
														<li>
															<a href="events-full.html">Full Width</a>
														</li>
														<li>
															<a href="event-single-left.html">Single Event</a>
															<ul>
																<li>
																	<a href="event-single-left.html">Left Sidebar</a>
																</li>
																<li>
																	<a href="event-single-right.html">Right Sidebar</a>
																</li>
																<li>
																	<a href="event-single-full.html">Full Width</a>
																</li>
															</ul>
														</li>
													</ul>
												</li>
												<!-- eof events -->

												<li>
													<a href="team.html">Team</a>
													<ul>
														<li>
															<a href="team.html">Team List</a>
														</li>
														<li>
															<a href="team-single.html">Team Member</a>
														</li>
													</ul>
												</li>


												<li>
													<a href="comingsoon.html">Comingsoon</a>
												</li>

												<li>
													<a href="faq.html">FAQ</a>
													<ul>
														<li>
															<a href="faq.html">FAQ</a>
														</li>
														<li>
															<a href="faq2.html">FAQ 2</a>
														</li>
													</ul>
												</li>
												<li>
													<a href="404.html">404</a>
												</li>

											</ul>
										</li>
										<!-- eof pages -->

										<!-- gallery -->
										<li>
											<a href="models-image.html">Models</a>
											<ul>
												<!-- Gallery image only -->
												<li>
													<a href="models-image.html">Image Only</a>
													<ul>
														<li>
															<a href="models-image-2-cols.html">2 columns</a>
														</li>
														<li>
															<a href="models-image.html">3 columns</a>
														</li>
														<li>
															<a href="models-image-4-cols.html">4 columns</a>
														</li>

													</ul>
												</li>
												<!-- eof Gallery image only -->

												<!-- Gallery with title -->
												<li>
													<a href="models-title.html">Image With Title</a>
													<ul>
														<li>
															<a href="models-title-2-cols.html">2 columns</a>
														</li>
														<li>
															<a href="models-title.html">3 column</a>
														</li>
														<li>
															<a href="models-title-4-cols.html">4 columns</a>
														</li>
													</ul>
												</li>
												<!-- eof Gallery with title -->

												<!-- Model item -->
												<li>
													<a href="personal-modal-page.html">Personal model page</a>
												</li>
												<!-- eof Gallery item -->
											</ul>
										</li>
										<!-- eof Gallery -->

										<!-- contacts -->
										<li>
											<a href="contact.html">Contact</a>
											<ul>
												<li>
													<a href="contact.html">Contact 1</a>
												</li>
												<li>
													<a href="contact2.html">Contact 2</a>
												</li>
												<li>
													<a href="contact3.html">Contact 3</a>
												</li>
												<li>
													<a href="contact4.html">Contact 4</a>
												</li>
											</ul>
										</li>
										<!-- eof contacts -->

										<li class="top-includes">
											<span class="top-includes d-xl-flex">
												<a href="#">
													<i class="fa fa-sign-in" aria-hidden="true"></i>
												</a>
												<a href="#">
													<i class="fa fa-user-o" aria-hidden="true"></i>
												</a>
												<a href="#">
													<i class="fa fa-calendar" aria-hidden="true"></i>
												</a>
											</span>
											<span class="header-phone">
												<span>call us now</span>
												<span class="phone"><span class="color-main">800</span> 123 4567</span>
												<span>24/7 free</span>
											</span>
										</li>
									</ul>


								</nav>
								<!-- eof main nav -->

								<!--hidding includes on small devices. They are duplicated in topline-->

							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-5 col-11">
							<div class="top-includes">
								<ul class="top-includes d-none d-xl-flex">
									<li>
										<a href="#">
											<i class="fa fa-sign-in" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-user-o" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-calendar" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
								<span class="header-phone">
									<span>call us now</span>
									<span class="phone"><span class="color-main">800</span> 123 4567</span>
									<span>24/7 free</span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<!-- header toggler -->
				<span class="toggle_menu"><span></span></span>
			</header>

			<section class="page_title s-parallax bottom_mask_subtract s-overlay ds title-overlay s-py-md-25">
				<div class="container">
					<div class="row">

						<div class="fw-divider-space hidden-below-lg mt-160"></div>
						<div class="fw-divider-space hidden-above-lg mt-100"></div>

						<div class="col-md-12 text-center">
							<h1>Casting</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="./">Home</a>
								</li>
								<li class="breadcrumb-item">
									<a href="#">Pages</a>
								</li>
								<li class="breadcrumb-item active">
									Casting
								</li>
							</ol>
						</div>

						<div class="fw-divider-space hidden-below-lg mt-160"></div>
						<div class="fw-divider-space hidden-above-lg mt-100"></div>

					</div>
				</div>
			</section>

			<section class="ds casting s-py-70 s-py-lg-100 s-py-xl-150">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-lg-10 offset-lg-1 mb-30">
							<div class="d-flex media-item item-left">
								<div class="item-media">
									<img src="images/gellery_rectengular/rec_model_3.jpg" alt="img">
									<div class="media-links">
										<a class="abs-link" title="" href="personal-modal-page.html"></a>
									</div>
								</div>
								<div class="item-content">
									<h4 class="title">
										<a href="team-single.html">Elaine Gonzalez</a>
									</h4>

									<p class="subtitle">
										casting manager
									</p>

									<p>
										Elaine Gonzalez is a native Miamian and has been in casting since 1990. Her love of the arts and actors has contributed to her success in casting. She has an undergraduate degree from the University of Miami.
									</p>

									<p class="social-icons">
										<a href="#" class="fa fa-facebook color-bg-icon rounded" title="facebook"></a>
										<a href="#" class="fa fa-twitter color-bg-icon rounded" title="twitter"></a>
										<a href="#" class="fa fa-google color-bg-icon rounded" title="google"></a>
									</p>

								</div>
							</div>
						</div><!-- .col-* -->

						<div class="col-xs-12 col-lg-10 offset-lg-1 mb-30">
							<div class="d-flex media-item item-right">
								<div class="item-media">
									<img src="images/gellery_rectengular/rec_model_6.jpg" alt="img">
									<div class="media-links">
										<a class="abs-link" title="" href="personal-modal-page.html"></a>
									</div>
								</div>
								<div class="item-content">
									<h4 class="title">
										<a href="team-single.html">Laura Lorens</a>
									</h4>

									<p class="subtitle">
										casting manager
									</p>

									<p>
										Elaine Gonzalez is a native Miamian and has been in casting since 1990. Her love of the arts and actors has contributed to her success in casting. She has an undergraduate degree from the University of Miami.

									</p>

									<p class="social-icons">
										<a href="#" class="fa fa-facebook color-bg-icon rounded" title="facebook"></a>
										<a href="#" class="fa fa-twitter color-bg-icon rounded" title="twitter"></a>
										<a href="#" class="fa fa-google color-bg-icon rounded" title="google"></a>
									</p>

								</div>
							</div>
						</div><!-- .col-* -->

						<div class="col-xs-12 col-lg-10 offset-lg-1 mb-30">
							<div class="d-flex media-item item-left">
								<div class="item-media">
									<img src="images/gellery_rectengular/rec_model_7.jpg" alt="img">
									<div class="media-links">
										<a class="abs-link" title="" href="personal-modal-page.html"></a>
									</div>
								</div>
								<div class="item-content">
									<h4 class="title">
										<a href="team-single.html">Jessica Barnes</a>
									</h4>

									<p class="subtitle">
										casting manager
									</p>

									<p>
										Jessica Barnes is a native Miamian and has been in casting since 1992. Her love of the arts and actors has contributed to her success in casting. She has an undergraduate degree from the University of Miami.
									</p>

									<p class="social-icons">
										<a href="#" class="fa fa-facebook color-bg-icon rounded" title="facebook"></a>
										<a href="#" class="fa fa-twitter color-bg-icon rounded" title="twitter"></a>
										<a href="#" class="fa fa-google color-bg-icon rounded" title="google"></a>
									</p>

								</div>
							</div>
						</div><!-- .col-* -->

						<div class="fw-divider-space hidden-below-lg mt-50"></div>
						<div class="fw-divider-space hidden-above-lg mt-20"></div>

						<div class="col-xs-12 col-lg-10 offset-lg-1 c-gutter-20">
							<h3>Registration Form</h3>
							<form class="pt-10">
								<div class="row ">
									<div class="col-lg-6">
										<div class="form-group">
											<input type="text" name="name" placeholder="full name" class="form-control">
										</div>
										<div class="form-group">
											<input type="tel" name="phone" placeholder="phone number" class="form-control">
										</div>
										<div class="form-group">
											<input type="text" name="age" placeholder="your age" class="form-control">
										</div>
										<div class="form-group">
											<input type="text" name="height" placeholder="your height (cm)" class="form-control">
										</div>
										<div class="form-group">
											<input type="text" name="bust" placeholder="bust size" class="form-control">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<input type="email" name="email" placeholder="email address" class="form-control">
										</div>
										<div class="form-group">
											<input type="text" name="city" placeholder="your city" class="form-control">
										</div>
										<div class="form-group">
											<input type="text" name="eye" placeholder="eye color" class="form-control">
										</div>
										<div class="form-group">
											<input type="text" name="weight" placeholder="your weight (ib)" class="form-control">
										</div>
										<div class="form-group">
											<input type="text" name="location" placeholder="your location" class="form-control">
										</div>
									</div>
								</div>
								<div class="fw-divider-space hidden-below-lg mt--10"></div>
								<h4>Fields of Interest</h4>
								<div class="row checkboxs">
									<div class="col-lg-6">
										<div class="form-group">
											<input type="checkbox" id="fashion_shows" name="fashion_shows" value="fashion_shows"><label class="color-dark-font" for="fashion_shows">Fashion Shows/Catwalk</label>
										</div>
										<div class="form-group">
											<input type="checkbox" id="promotion_jobs" name="promotion_jobs" value="promotion_jobs"><label class="color-dark-font" for="promotion_jobs">Promotional Jobs</label>
										</div>
										<div class="form-group">
											<input type="checkbox" id="singing" name="singing" value="singing"><label class="color-dark-font" for="singing">Singing/Musician</label>
										</div>
										<div class="form-group">
											<input type="checkbox" id="presenter" name="presenter" value="presenter"><label class="color-dark-font" for="presenter">Presenter/MC</label>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<input type="checkbox" id="corporate_events" name="corporate_events" value="corporate_events"><label class="color-dark-font" for="corporate_events">Corporate Events</label>
										</div>
										<div class="form-group">
											<input type="checkbox" id="movie_acting" name="movie_acting" value="movie_acting"><label class="color-dark-font" for="movie_acting">Movie/Theater Acting</label>
										</div>
										<div class="form-group">
											<input type="checkbox" id="hostess" name="hostess" value="hostess"><label class="color-dark-font" for="hostess">Hostess</label>
										</div>
										<div class="form-group">
											<input type="checkbox" id="dancing" name="dancing" value="dancing"><label class="color-dark-font" for="dancing">Dancing</label>
										</div>
									</div>
									<div class="col-12 mt-20">
										<div class="form-group">
											<textarea name="about_user" id="about_user" cols="30" rows="10" placeholder="about me" class="form-control"></textarea>
										</div>
									</div>
								</div>
								<input type="checkbox" id="agreement" name="agreement" value="agreement"><label class="mt-40" for="agreement">I Agree to Modelia Terms and Conditions</label>
								<div class="form-group mt-30">
									<button type="submit" class="btn-maincolor">submit</button>
								</div>
							</form>
						</div>
					</div>

				</div>
				<div class="fw-divider-space hidden-below-lg mt-40"></div>
			</section>

			<footer class="page_footer ds top_mask_add s-pb-10 s-pt-70 s-pb-md-40 s-pt-md-85 s-pb-xl-140 s-pt-xl-145">
				<div class="container">
					<div class="row">
						<div class="divider-20 d-none d-xl-block"></div>

						<div class="col-12 text-center animate" data-animation="fadeInUp">

							<div class="widget widget_social_buttons">
								<a href="#" class="fa fa-facebook color-bg-icon rounded" title="facebook"></a>
								<a href="#" class="fa fa-twitter color-bg-icon rounded" title="twitter"></a>
								<a href="#" class="fa fa-google color-bg-icon rounded" title="google"></a>
							</div>

							<div class="widget logo">
								<img src="images/logo.png" alt="img">
							</div>

							<div class="widget copyright">
								<p>&copy; Copyright <span class="copyright_year">2018</span> All Rights Reserved</p>
							</div>
						</div>

					</div>
				</div>
			</footer>


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->


	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

</body>

</html>