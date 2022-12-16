<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Sport Shop</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
	@include('home.includes.sport_shop.css')
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
		rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css2?family=Open%20Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">
</head>

<body class="template-product has-smround-btns has-loader-bg equal-height has-sm-container">
	<!--header-->
	<header class="hdr-wrap">
		<div class="hdr-content hdr-content-sticky">
			<div class="container">
				<div class="row">
					<div class="col-auto show-mobile">
						<!-- Menu Toggle -->
						<div class="menu-toggle"> <a href="#" class="mobilemenu-toggle"><i class="icon-menu"></i></a>
						</div>
						<!-- /Menu Toggle -->
					</div>
					<div class="col-auto hdr-logo">
						<a href="/" class="logo"><img
								srcset="images/skins/fashion/logo.png 1x, images/skins/fashion/logo2x.png 2x"
								alt="Logo"></a>
					</div>
					<!--navigation-->
					<div class="hdr-nav hide-mobile nav-holder-s">
					</div>
					<!--//navigation-->
					<div class="hdr-links-wrap col-auto ml-auto">
						<div class="hdr-inline-link">
							<!-- Header Search -->
							<div class="search_container_desktop">
								<div class="dropdn dropdn_search dropdn_fullwidth">
									<a href="#" class="dropdn-link  js-dropdn-link only-icon"><i
											class="icon-search"></i><span class="dropdn-link-txt">Search</span></a>
									<div class="dropdn-content">
										<div class="container">
											<form method="get" action="#" class="search search-off-popular">
												<input name="search" type="text" class="search-input input-empty"
													placeholder="What are you looking for?">
												<button type="submit" class="search-button"><i
														class="icon-search"></i></button>
												<a href="#" class="search-close js-dropdn-close"><i
														class="icon-close-thin"></i></a>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- /Header Search -->
							<!-- Header Wishlist -->
							<div class="dropdn dropdn_wishlist">
								<a href="account-wishlist" class="dropdn-link only-icon wishlist-link ">
									<i class="icon-heart"></i><span class="dropdn-link-txt">Wishlist</span><span
										class="wishlist-qty">3</span>
								</a>
							</div>
							<!-- /Header Wishlist -->
							<!-- Header Account -->
							<div class="dropdn dropdn_account dropdn_fullheight">
								<a href="#" class="dropdn-link js-dropdn-link js-dropdn-link only-icon"
									data-panel="#dropdnAccount"><i class="icon-user"></i><span
										class="dropdn-link-txt">Account</span></a>
							</div>
							<!-- /Header Account -->
							<div class="dropdn dropdn_fullheight minicart">
								<a href="#" class="dropdn-link js-dropdn-link minicart-link only-icon"
									data-panel="#dropdnMinicart">
									<i class="icon-basket"></i>
									<span class="minicart-qty">3</span>
									<span class="minicart-total hide-mobile">$34.99</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="hdr">
			<div class="hdr-topline hdr-topline--dark js-hdr-top">
				<div class="container">
					<div class="row flex-nowrap">
						<div class="col hdr-topline-left hide-mobile">
							<!-- Header Social -->
							<div class="hdr-line-separate">
								<ul class="social-list list-unstyled">
									<li>
										<a href="#"><i class="icon-facebook"></i></a>
									</li>
									<li>
										<a href="#"><i class="icon-twitter"></i></a>
									</li>
									<li>
										<a href="#"><i class="icon-google"></i></a>
									</li>
									<li>
										<a href="#"><i class="icon-instagram"></i></a>
									</li>
									<li>
										<a href="#"><i class="icon-vimeo"></i></a>
									</li>
									<li>
										<a href="#"><i class="icon-linkedin"></i></a>
									</li>
								</ul>
							</div>
							<!-- /Header Social -->
						</div>
						<div class="col hdr-topline-center">
							<div class="custom-text js-custom-text-carousel"
								data-slick='{"speed": 1000, "autoplaySpeed": 3000}'>
								<div class="custom-text-item"><i class="icon-fox"></i> Use promocode <span>FOXIC</span>
									to get 15% discount!</div>
								<div class="custom-text-item"><i class="icon-air-freight"></i> <span>Free</span> plane
									shipping over <span>$250</span></div>
								<div class="custom-text-item"><i class="icon-gift"></i> Today only! Post
									<span>holiday</span> Flash Sale! 2 for $20</div>
							</div>
						</div>
						<div class="col hdr-topline-right hide-mobile">
							<div class="hdr-inline-link">

								<!-- Header Language -->
								<div class="dropdn_language">
									<div class="dropdn dropdn_language dropdn_language--noimg dropdn_caret">
										<a href="#" class="dropdn-link js-dropdn-link"><span
												class="js-dropdn-select-current">English</span><i
												class="icon-angle-down"></i></a>
										<div class="dropdn-content">
											<ul>
												<li class="active"><a href="#"><img src="images/flags/en.png"
															alt="">English</a></li>
												<li><a href="#"><img src="images/flags/sp.png" alt="">Spanish</a></li>
												<li><a href="#"><img src="images/flags/de.png" alt="">German</a></li>
												<li><a href="#"><img src="images/flags/fr.png" alt="">French</a></li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Header Language -->
								<!-- Header Currency -->
								<div class="dropdn_currency">
									<div class="dropdn dropdn_caret">
										<a href="#" class="dropdn-link js-dropdn-link">US dollars<i
												class="icon-angle-down"></i></a>
										<div class="dropdn-content">
											<ul>
												<li class="active"><a href="#"><span>US dollars</span></a></li>
												<li><a href="#"><span>Euro</span></a></li>
												<li><a href="#"><span>UK pounds</span></a></li>

											</ul>
										</div>
									</div>
								</div>
								<!-- /Header Currency -->
								<div class="hdr_container_desktop">
									<!-- Header Account -->
									<div class="dropdn dropdn_account dropdn_fullheight">
										<a href="#" class="dropdn-link js-dropdn-link" data-panel="#dropdnAccount"><i
												class="icon-user"></i><span class="dropdn-link-txt">Account</span></a>
									</div>
									<!-- /Header Account -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hdr-content">
				<div class="container">
					<div class="row">
						<div class="col-auto show-mobile">
							<!-- Menu Toggle -->
							<div class="menu-toggle"> <a href="#" class="mobilemenu-toggle"><i
										class="icon-menu"></i></a> </div>
							<!-- /Menu Toggle -->
						</div>
						<div class="col-auto hdr-logo">
							<a href="/" class="logo"><img
									srcset="images/skins/fashion/logo.png 1x, images/skins/fashion/logo2x.png 2x"
									alt="Logo"></a>
						</div>
						<!--navigation-->
						<div class="hdr-nav hide-mobile nav-holder justify-content-center px-4">
							<!--mmenu-->
							<ul class="mmenu mmenu-js">
								<li class="mmenu-item--simple"><a href="#" class="active">Home</a>
									<div class="mmenu-submenu d-flex">
										<ul class="submenu-list mt-0">
											<li><a href="/">Fashion (Default) Skin</a><span
													class="submenu-link-image"><img src="images/screen/screen01.png"
														alt=""></span></li>
											<li><a href="#">Sport Skin</a><span
													class="submenu-link-image"><img src="images/screen/screen-sport.png"
														alt=""></span></li>
											<li><a href="#">Books Skin <span
														class="menu-label  menu-label--color3">NEW</span></a><span
													class="submenu-link-image"><img src="images/screen/screen-books.png"
														alt=""></span></li>
											<li><a href="#">Electronics Skin <span
														class="menu-label  menu-label--color3">NEW</span></a><span
													class="submenu-link-image"><img
														src="images/screen/screen-electronics.png" alt=""></span></li>
											<li><a href="index-viping">Vaping Skin <span
														class="menu-label  menu-label--color3">NEW</span></a><span
													class="submenu-link-image"><img
														src="images/screen/screen-vaping.png" alt=""></span></li>
											<li><a href="index-pets">Pets Skin</a><span
													class="submenu-link-image"><img src="images/screen/screen-pets.png"
														alt=""></span></li>
											<li><a href="index-lingeries">Lingeries Skin</a><span
													class="submenu-link-image"><img
														src="images/screen/screen-lingeries.png" alt=""></span></li>
											<li><a href="index-games">Games Skin</a><span
													class="submenu-link-image"><img src="images/screen/screen-games.png"
														alt=""></span></li>
											<li><a href="index-helloween">Halloween Skin</a><span
													class="submenu-link-image"><img
														src="images/screen/screen-halloween.png" alt=""></span></li>
											<li><a href="index-medical">Medical Skin</a><span
													class="submenu-link-image"><img
														src="images/screen/screen-medical.png" alt=""></span></li>
											<li><a href="index-food">Food Market Skin</a><span
													class="submenu-link-image"><img src="images/screen/screen-food.png"
														alt=""></span></li>
											<li><a href="index-cosmetics">Cosmetics Skin</a><span
													class="submenu-link-image"><img
														src="images/screen/screen-cosmetics.png" alt=""></span></li>
											<li><a href="index-fishing">Fishing Skin</a><span
													class="submenu-link-image"><img
														src="images/screen/screen-fishing.png" alt=""></span></li>
										</ul>
										<ul class="submenu-list mt-0">
											<li><a href="#">Cups&Mugs Skin <span
														class="menu-label menu-label--color1">Coming
														Soon</span></a><span class="submenu-link-image"><img
														src="images/screen/screen-cups.png" alt=""></span></li>
											<li><a href="#">Bikes Skin <span
														class="menu-label menu-label--color2">Coming
														Soon</span></a><span class="submenu-link-image"><img
														src="images/screen/screen-bikes.png" alt=""></span></li>
											<li><a href="#">T-Shirts Skin <span class="menu-label">Coming
														Soon</span></a><span class="submenu-link-image"><img
														src="images/screen/screen-tshirts.png" alt=""></span></li>
											
										</ul>
									</div>
								</li>
								<li class="mmenu-item--simple"><a href="#">Pages</a>
									<div class="mmenu-submenu">
										<ul class="submenu-list">
											<li><a href="product">Product page</a>
												<ul>
													<li><a href="product">Product page variant 1<span
																class="menu-label menu-label--color3">Popular</span></a>
													</li>
													
												</ul>
											</li>
											
											<li><a href="cart">Cart & Checkout</a>
												<ul>
													<li><a href="cart">Cart Page</a></li>
													<li><a href="cart-empty">Empty cart</a></li>
													
												</ul>
											</li>
											
											
											<li><a href="gallery">Gallery</a></li>
											<li><a href="faq">Faq</a></li>
											<li><a href="about">About Us</a></li>
											<li><a href="contact">Contact Us</a></li>
											<li><a href="404">404 Page</a></li>
											<li><a href="typography">Typography</a></li>
											<li><a href="coming-soon" target="_blank">Coming soon</a></li>
										</ul>
									</div>
								</li>
								<li><a href="#">Accessories<span class="menu-label">SALE</span></a></li>
								<li class="mmenu-item--mega"><a href="#">Men</a>
									<div class="mmenu-submenu mmenu-submenu--has-bottom">
										<div class="mmenu-submenu-inside">
											<div class="container">
												<div class="mmenu-left width-25">
													<div class="mmenu-bnr-wrap">
														<a href="#" class="image-hover-scale"><img
																src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																data-srcset="images/menu/mmenu-bnr-01.png"
																class="lazyload fade-up" alt=""></a>
													</div>
													<h3 class="submenu-title"><a
															href="#">Pre-Collection<br>Spring-Summer
															2021</a></h3>
												</div>
												<div class="mmenu-cols column-4">
													<div class="mmenu-col">
														<h3 class="submenu-title"><a
																href="#">Collections</a></h3>
														<ul class="submenu-list">
															<li><a href="#">Martins d'Art 2020/21<span
																		class="submenu-link-txt">Available in boutiques
																		from June 2019</span></a></li>
															<li><a href="#">Spring-Summer 2021<span
																		class="submenu-link-txt">Available in boutiques
																		from March 2019</span></a></li>
															<li><a href="#">Spring-Summer 2021
																	Pre-Collection<span class="submenu-link-txt">In
																		boutiques</span></a></li>
															<li><a href="#">Cruise 2020/21<span
																		class="submenu-link-txt">In boutiques</span></a>
															</li>
															<li><a href="#">Fall-Winter 2020/21</a></li>
														</ul>
													</div>
													<div class="mmenu-col">
														<h3 class="submenu-title"><a
																href="#">Ready-to-wear</a></h3>
														<ul class="submenu-list">
															<li><a href="#" class="active">Jackets</a>
																<ul class="sub-level">
																	<li><a href="#">Bomber Jackets</a></li>
																	<li><a href="#">Biker Jacket</a></li>
																	<li><a href="#">Trucker Jacket</a></li>
																	<li><a href="#">Denim Jackets</a></li>
																	<li><a href="#">Blouson Jacket<span
																				class="menu-label">SALE</span></a></li>
																	<li><a href="#">Overcoat</a></li>
																	<li><a href="#">Trench Coat</a></li>
																</ul>
															</li>
															<li><a href="#">Dresses<span
																		class="menu-label menu-label--color3">SALE</span></a>
															</li>
															<li><a href="#">Blouses & Tops</a></li>
															<li><a href="#">Cardigans & Pullovers</a></li>
															<li><a href="#">Skirts</a></li>
															<li><a href="#">Pants & Shorts</a></li>
															<li><a href="#">Outerwear</a></li>
															<li><a href="#">Swimwear</a></li>
														</ul>
													</div>
													<div class="mmenu-col">
														<h3 class="submenu-title"><a
																href="#">Accessories</a></h3>
														<ul class="submenu-list">
															<li><a href="#">Jackets</a></li>
															<li><a href="#">Dresses</a></li>
															<li><a href="#">Blouses & Tops</a></li>
															<li><a href="#">Cardigans & Pullovers</a></li>
															<li><a href="#">Skirts<span
																		class="menu-label">SALE</span></a></li>
															<li><a href="#">Pants & Shorts</a></li>
															<li><a href="#">Outerwear</a></li>
														</ul>
													</div>
													<div class="mmenu-col">
														<h3 class="submenu-title"><a href="#">Brands</a>
														</h3>
														<ul class="submenu-list">
															<li><a href="#">Jackets</a></li>
															<li><a href="#">Dresses</a></li>
															<li><a href="#">Blouses & Tops</a></li>
															<li><a href="#">Cardigans & Pullovers</a></li>
															<li><a href="#">Skirts<span
																		class="menu-label menu-label--color1">SALE</span></a>
															</li>
															<li><a href="#">Pants & Shorts</a></li>
															<li><a href="#">Outerwear</a></li>
														</ul>
													</div>
													<div class="mmenu-bottom justify-content-center">
														<a href="#"><i class="icon-fox icon--lg"></i><b>FOXshop
																News</b><i class="icon-arrow-right"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="mmenu-item--mega"><a href="#">Women</a>
									<div class="mmenu-submenu mmenu-submenu--has-bottom">
										<div class="mmenu-submenu-inside">
											<div class="container">
												<div class="mmenu-right width-25">
													<div class="mmenu-bnr-wrap">
														<a href="#" class="image-hover-scale"><img
																src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
																data-srcset="images/menu/mmenu-bnr-02.png"
																class="lazyload fade-up" alt=""></a>
													</div>
													<h3 class="submenu-title"><a
															href="#">Pre-Collection<br>Spring-Summer
															2021</a></h3>
												</div>
												<div class="mmenu-cols column-4">
													<div class="mmenu-col">
														<h3 class="submenu-title"><a
																href="#">Collections</a></h3>
														<ul class="submenu-list">
															<li><a href="#">Martins d'Art 2020/21<span
																		class="submenu-link-txt">Available in boutiques
																		from June 2019</span></a></li>
															<li><a href="#">Spring-Summer 2021<span
																		class="submenu-link-txt">Available in boutiques
																		from March 2019</span></a></li>
															<li><a href="#">Spring-Summer 2021
																	Pre-Collection<span class="submenu-link-txt">In
																		boutiques</span></a></li>
															<li><a href="#">Cruise 2020/21<span
																		class="submenu-link-txt">In boutiques</span></a>
															</li>
															<li><a href="#">Fall-Winter 2020/21</a></li>
														</ul>
													</div>
													<div class="mmenu-col">
														<h3 class="submenu-title"><a
																href="#">Ready-to-wear</a></h3>
														<ul class="submenu-list">
															<li><a href="#">Jackets</a></li>
															<li><a href="#">Dresses<span
																		class="menu-label menu-label--color3">SALE</span></a>
															</li>
															<li><a href="#">Blouses & Tops</a>
																<ul>
																	<li><a href="#">Jackets</a></li>
																	<li><a href="#">Dresses<span
																				class="menu-label menu-label--color3">SALE</span></a>
																	</li>
																	<li><a href="#">Blouses & Tops</a>
																		<ul>
																			<li><a href="#">Jackets</a></li>
																			<li><a href="#">Dresses<span
																						class="menu-label menu-label--color3">SALE</span></a>
																				<ul>
																					<li><a
																							href="#">Jackets</a>
																					</li>
																					<li><a href="#">Dresses<span
																								class="menu-label menu-label--color3">SALE</span></a>
																						<ul>
																							<li><a
																									href="#">Jackets</a>
																							</li>
																							<li><a href="#">Dresses<span
																										class="menu-label menu-label--color3">SALE</span></a>
																							</li>
																							<li><a href="#">Blouses
																									& Tops</a></li>
																							<li><a href="#">Cardigans
																									& Pullovers</a></li>
																							<li><a
																									href="#">Skirts</a>
																							</li>
																							<li><a href="#">Pants
																									& Shorts</a></li>
																							<li><a
																									href="#">Outerwear</a>
																							</li>
																							<li><a
																									href="#">Swimwear</a>
																							</li>
																						</ul>
																					</li>
																					<li><a href="#">Blouses
																							& Tops</a></li>
																					<li><a href="#">Cardigans
																							& Pullovers</a></li>
																					<li><a
																							href="#">Skirts</a>
																					</li>
																					<li><a href="#">Pants &
																							Shorts</a></li>
																					<li><a
																							href="#">Outerwear</a>
																					</li>
																					<li><a
																							href="#">Swimwear</a>
																					</li>
																				</ul>
																			</li>
																			<li><a href="#">Blouses &
																					Tops</a></li>
																			<li><a href="#">Cardigans &
																					Pullovers</a></li>
																			<li><a href="#">Skirts</a></li>
																			<li><a href="#">Pants &
																					Shorts</a></li>
																			<li><a href="#">Outerwear</a>
																			</li>
																			<li><a href="#">Swimwear</a>
																			</li>
																		</ul>
																	</li>
																	<li><a href="#">Cardigans &
																			Pullovers</a></li>
																	<li><a href="#">Skirts</a></li>
																	<li><a href="#">Pants & Shorts</a></li>
																	<li><a href="#">Outerwear</a></li>
																	<li><a href="#">Swimwear</a></li>
																</ul>
															</li>
															<li><a href="#">Cardigans & Pullovers</a></li>
															<li><a href="#">Skirts</a></li>
															<li><a href="#">Pants & Shorts</a></li>
															<li><a href="#">Outerwear</a></li>
															<li><a href="#">Swimwear</a></li>
														</ul>
													</div>
													<div class="mmenu-col">
														<h3 class="submenu-title"><a
																href="#">Accessories</a></h3>
														<ul class="submenu-list">
															<li><a href="#">Jackets</a></li>
															<li><a href="#">Dresses</a></li>
															<li><a href="#">Blouses & Tops</a></li>
															<li><a href="#">Cardigans & Pullovers</a></li>
															<li><a href="#">Skirts<span
																		class="menu-label">SALE</span></a></li>
															<li><a href="#">Pants & Shorts</a></li>
															<li><a href="#">Outerwear</a></li>
														</ul>
													</div>
													<div class="mmenu-col">
														<h3 class="submenu-title"><a href="#">Brands</a>
														</h3>
														<ul class="submenu-list">
															<li><a href="#">Jackets</a></li>
															<li><a href="#">Dresses</a></li>
															<li><a href="#">Blouses & Tops</a></li>
															<li><a href="#">Cardigans & Pullovers</a></li>
															<li><a href="#">Skirts<span
																		class="menu-label menu-label--color1">SALE</span></a>
															</li>
															<li><a href="#">Pants & Shorts</a></li>
															<li><a href="#">Outerwear</a></li>
														</ul>
													</div>
													<div class="mmenu-bottom justify-content-center">
														<a href="#"><i class="icon-fox icon--lg"></i><b>FOXshop
																News</b><i class="icon-arrow-right"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
							<!--/mmenu-->
						</div>
						<!--//navigation-->
						<div class="hdr-links-wrap col-auto ml-auto">
							<div class="hdr-inline-link">
								<!-- Header Search -->
								<div class="search_container_desktop">
									<div class="dropdn dropdn_search dropdn_fullwidth">
										<a href="#" class="dropdn-link  js-dropdn-link only-icon"><i
												class="icon-search"></i><span class="dropdn-link-txt">Search</span></a>
										<div class="dropdn-content">
											<div class="container">
												<form method="get" action="#" class="search search-off-popular">
													<input name="search" type="text" class="search-input input-empty"
														placeholder="What are you looking for?">
													<button type="submit" class="search-button"><i
															class="icon-search"></i></button>
													<a href="#" class="search-close js-dropdn-close"><i
															class="icon-close-thin"></i></a>
												</form>
											</div>
										</div>
									</div>
								</div>
								<!-- /Header Search -->
								<!-- Header Wishlist -->
								<div class="dropdn dropdn_wishlist">
									<a href="account-wishlist" class="dropdn-link only-icon wishlist-link ">
										<i class="icon-heart"></i><span class="dropdn-link-txt">Wishlist</span><span
											class="wishlist-qty">3</span>
									</a>
								</div>
								<!-- /Header Wishlist -->
								<div class="hdr_container_mobile show-mobile">
									<!-- Header Account -->
									<div class="dropdn dropdn_account dropdn_fullheight">
										<a href="#" class="dropdn-link js-dropdn-link" data-panel="#dropdnAccount"><i
												class="icon-user"></i><span class="dropdn-link-txt">Account</span></a>
									</div>
									<!-- /Header Account -->
								</div>
								<div class="dropdn dropdn_fullheight minicart">
									<a href="#" class="dropdn-link js-dropdn-link minicart-link"
										data-panel="#dropdnMinicart">
										<i class="icon-basket"></i>
										<span class="minicart-qty">3</span>
										<span class="minicart-total hide-mobile">$34.99</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="header-side-panel">
		<!-- Mobile Menu -->
		<div class="mobilemenu js-push-mbmenu">
			<div class="mobilemenu-content">
				<div class="mobilemenu-close mobilemenu-toggle">Close</div>
				<div class="mobilemenu-scroll">
					<div class="mobilemenu-search"></div>
					<div class="nav-wrapper show-menu">
						<div class="nav-toggle">
							<span class="nav-back"><i class="icon-angle-left"></i></span>
							<span class="nav-title"></span>
							<a href="#" class="nav-viewall">view all</a>
						</div>
						<ul class="nav nav-level-1">
							<li><a href="/">Layouts<span class="menu-label menu-label--color1">New</span><span
										class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-2">
									<li><a href="/">Fashion (Default) Skin</a></li>
									<li><a href="index-sport">Sport Skin</a></li>
									<li><a href="index-helloween">Halloween Skin</a></li>
									<li><a href="index-medical">Medical Skin</a></li>
									<li><a href="index-food">Food Market Skin</a></li>
									<li><a href="index-cosmetics">Cosmetics Skin</a></li>
									<li><a href="index-fishing">Fishing Skin</a></li>
									<li><a href="#">Books Skin<span class="menu-label menu-label--color1">Coming
												Soon</span></a></li>
									<li><a href="#">Electronics Skin<span class="menu-label menu-label--color2">Coming
												Soon</span></a></li>
									<li><a href="#">Games Skin<span class="menu-label menu-label--color3">Coming
												Soon</span></a></li>
									<li><a href="#">Vaping Skin<span class="menu-label">Coming Soon</span></a></li>
									<li><a href="index-02">Home page 2</a></li>
									<li><a href="index-03">Home page 3</a></li>
									<li><a href="index-04">Home page 4</a></li>
									<li><a href="index-05">Home page 5</a></li>
									<li><a href="index-06">Home page 6</a></li>
									<li><a href="index-07">Home page 7</a></li>
									<li><a href="index-08">Home page 8</a></li>
									<li><a href="index-09">Home page 9</a></li>
									<li><a href="index-10">Home page 10</a></li>
									<li><a href="index-rtl">Home page RTL</a></li>
								</ul>
							</li>
							<li><a href="#">Pages<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-2">
									<li><a href="product">Product page<span class="arrow"><i
													class="icon-angle-right"></i></span></a>
										<ul class="nav-level-3">
											<li><a href="product">Product page variant 1<span
														class="menu-label menu-label--color3">Popular</span></a></li>
											<li><a href="product-2">Product page variant 2</a></li>
											<li><a href="product-3">Product page variant 3</a></li>
											<li><a href="product-4">Product page variant 4</a></li>
											<li><a href="product-5">Product page variant 5</a></li>
											<li><a href="product-6">Product page variant 6</a></li>
											<li><a href="product-7">Product page variant 7</a></li>
										</ul>
									</li>
									<li><a href="#">Category page<span class="arrow"><i
													class="icon-angle-right"></i></span></a>
										<ul class="nav-level-3">
											<li><a href="#">Left sidebar filters</a></li>
											<li><a href="category-closed-filter">Closed filters</a></li>
											<li><a href="category-horizontal-filter">Horizontal filters</a></li>
											<li><a href="category-listview">Listing View</a></li>
											<li><a href="category-empty">Empty category</a></li>
										</ul>
									</li>
									<li><a href="cart">Cart & Checkout<span class="arrow"><i
													class="icon-angle-right"></i></span></a>
										<ul class="nav-level-3">
											<li><a href="cart">Cart Page</a></li>
											<li><a href="cart-empty">Empty cart</a></li>
											<li><a href="#">Checkout variant 1</a></li>
											<li><a href="checkout-2">Checkout variant 2</a></li>
											<li><a href="checkout-3">Checkout variant 3</a></li>
										</ul>
									</li>
									<li><a href="account-create">Account<span class="arrow"><i
													class="icon-angle-right"></i></span></a>
										<ul class="nav-level-3">
											<li><a href="account-create">Login</a></li>
											<li><a href="account-create">Create account</a></li>
											<li><a href="account-details">Account details</a></li>
											<li><a href="account-addresses">Account addresses</a></li>
											<li><a href="account-history">Order History</a></li>
											<li><a href="account-wishlist">Wishlist</a></li>
										</ul>
									</li>
									<li><a href="blog">Blog<span class="arrow"><i
													class="icon-angle-right"></i></span></a>
										<ul class="nav-level-3">
											<li><a href="blog">Right sidebar</a></li>
											<li><a href="blog-left-sidebar">Left sidebar</a></li>
											<li><a href="blog-without-sidebar">No sidebar</a></li>
											<li><a href="blog-sticky-sidebar">Sticky sidebar</a></li>
											<li><a href="blog-grid">Grid</a></li>
											<li><a href="blog-post">Blog post</a></li>
										</ul>
									</li>
									<li><a href="gallery">Gallery</a></li>
									<li><a href="faq">Faq</a></li>
									<li><a href="about">About Us</a></li>
									<li><a href="contact">Contact Us</a></li>
									<li><a href="404">404 Page</a></li>
									<li><a href="typography">Typography</a></li>
									<li><a href="coming-soon" target="_blank">Coming soon</a></li>
								</ul>
							</li>
							<li><a href="#">New Arrivals<span class="arrow"><i
											class="icon-angle-right"></i></span></a>
								<ul class="nav-level-2">
									<li><a href="#">Shoes<span class="arrow"><i
													class="icon-angle-right"></i></span></a>
										<ul class="nav-level-3">
											<li><a href="#">Heels</a></li>
											<li><a href="#">Boots</a></li>
											<li><a href="#">Flats</a></li>
											<li><a href="#">Sneakers &amp; Athletic</a></li>
											<li><a href="#">Clogs &amp; Mules</a></li>
										</ul>
									</li>
									<li><a href="#">Tops<span class="arrow"><i
													class="icon-angle-right"></i></span></a>
										<ul class="nav-level-3">
											<li><a href="#">Dresses</a></li>
											<li><a href="#">Shirts &amp; Tops</a></li>
											<li><a href="#">Coats &amp; Outerwear</a></li>
											<li><a href="#">Sweaters</a></li>
										</ul>
									</li>
									<li><a href="#">Shoes<span class="arrow"><i
													class="icon-angle-right"></i></span></a>
										<ul class="nav-level-3">
											<li><a href="#">Heels</a></li>
											<li><a href="#">Boots</a></li>
											<li><a href="#">Flats</a></li>
											<li><a href="#">Sneakers &amp; Athletic</a></li>
											<li><a href="#">Clogs &amp; Mules</a></li>
										</ul>
									</li>
									<li><a href="#">Bottoms<span class="arrow"><i
													class="icon-angle-right"></i></span></a>
										<ul class="nav-level-3">
											<li><a href="#">Jeans</a></li>
											<li><a href="#">Pants</a></li>
											<li><a href="#">slippers</a></li>
											<li><a href="#">suits</a></li>
											<li><a href="#">socks</a></li>
										</ul>
									</li>
									<li><a href="#">Accessories<span class="arrow"><i
													class="icon-angle-right"></i></span></a>
										<ul class="nav-level-3">
											<li><a href="#">Sunglasses</a></li>
											<li><a href="#">Hats</a></li>
											<li><a href="#">Watches</a></li>
											<li><a href="#">Jewelry</a></li>
											<li><a href="#">Belts</a></li>
										</ul>
									</li>
									<li><a href="#">Bags<span class="arrow"><i
													class="icon-angle-right"></i></span></a>
										<ul class="nav-level-3">
											<li><a href="#">Handbags</a></li>
											<li><a href="#">Backpacks</a></li>
											<li><a href="#">Luggage</a></li>
											<li><a href="#">wallets</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="#buynow" target="_blank">Buy Theme<span
										class="menu-label menu-label--color3">Hurry Up!</span><span class="arrow"><i
											class="icon-angle-right"></i></span></a></li>
						</ul>
					</div>
					<div class="mobilemenu-bottom">
						<div class="mobilemenu-currency">
							<!-- Header Currency -->
							<div class="dropdn_currency">
								<div class="dropdn dropdn_caret">
									<a href="#" class="dropdn-link js-dropdn-link">US dollars<i
											class="icon-angle-down"></i></a>
									<div class="dropdn-content">
										<ul>
											<li class="active"><a href="#"><span>US dollars</span></a></li>
											<li><a href="#"><span>Euro</span></a></li>
											<li><a href="#"><span>UK pounds</span></a></li>

										</ul>
									</div>
								</div>
							</div>
							<!-- /Header Currency -->
						</div>
						<div class="mobilemenu-language">
							<!-- Header Language -->
							<div class="dropdn_language">
								<div class="dropdn dropdn_language dropdn_language--noimg dropdn_caret">
									<a href="#" class="dropdn-link js-dropdn-link"><span
											class="js-dropdn-select-current">English</span><i
											class="icon-angle-down"></i></a>
									<div class="dropdn-content">
										<ul>
											<li class="active"><a href="#"><img src="images/flags/en.png"
														alt="">English</a></li>
											<li><a href="#"><img src="images/flags/sp.png" alt="">Spanish</a></li>
											<li><a href="#"><img src="images/flags/de.png" alt="">German</a></li>
											<li><a href="#"><img src="images/flags/fr.png" alt="">French</a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /Header Language -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Mobile Menu -->
		<div class="dropdn-content account-drop" id="dropdnAccount">
			<div class="dropdn-content-block">
				<div class="dropdn-close"><span class="js-dropdn-close">Close</span></div>
				<ul>
					<li><a href="admin/login"><span>Log In</span><i class="icon-login"></i></a></li>
					<li><a href="admin/register"><span>Register</span><i class="icon-user2"></i></a></li>
					<li><a href="#"><span>Checkout</span><i class="icon-card"></i></a></li>
				</ul>
				
			</div>
			<div class="drop-overlay js-dropdn-close"></div>
		</div>
		<div class="dropdn-content minicart-drop" id="dropdnMinicart">
			<div class="dropdn-content-block">
				<div class="dropdn-close"><span class="js-dropdn-close">Close</span></div>
				<div class="minicart-drop-content js-dropdn-content-scroll">
					<div class="minicart-prd row">
						<div class="minicart-prd-image image-hover-scale-circle col">
							<a href="product"><img class="lazyload fade-up"
									src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
									data-src="images/skins/fashion/products/product-01-1.jpg" alt=""></a>
						</div>
						<div class="minicart-prd-info col">
							<div class="minicart-prd-tag">FOXic</div>
							<h2 class="minicart-prd-name"><a href="#">Leather Pegged Pants</a></h2>
							<div class="minicart-prd-qty"><span class="minicart-prd-qty-label">Quantity:</span><span
									class="minicart-prd-qty-value">1</span></div>
							<div class="minicart-prd-price prd-price">
								<div class="price-old">$200.00</div>
								<div class="price-new">$180.00</div>
							</div>
						</div>
						<div class="minicart-prd-action">
							<a href="#" class="js-product-remove" data-line-number="1"><i class="icon-recycle"></i></a>
						</div>
					</div>
					<div class="minicart-prd row">
						<div class="minicart-prd-image image-hover-scale-circle col">
							<a href="product"><img class="lazyload fade-up"
									src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
									data-src="images/skins/fashion/products/product-16-1.jpg" alt=""></a>
						</div>
						<div class="minicart-prd-info col">
							<div class="minicart-prd-tag">FOXic</div>
							<h2 class="minicart-prd-name"><a href="#">Cascade Casual Shirt</a></h2>
							<div class="minicart-prd-qty"><span class="minicart-prd-qty-label">Quantity:</span><span
									class="minicart-prd-qty-value">1</span></div>
							<div class="minicart-prd-price prd-price">
								<div class="price-old">$200.00</div>
								<div class="price-new">$180.00</div>
							</div>
						</div>
						<div class="minicart-prd-action">
							<a href="#" class="js-product-remove" data-line-number="2"><i class="icon-recycle"></i></a>
						</div>
					</div>
					<div class="minicart-empty js-minicart-empty d-none">
						<div class="minicart-empty-text">Your cart is empty</div>
						<div class="minicart-empty-icon">
							<i class="icon-shopping-bag"></i>
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 306 262"
								style="enable-background:new 0 0 306 262;" xml:space="preserve">
								<path class="st0"
									d="M78.1,59.5c0,0-37.3,22-26.7,85s59.7,237,142.7,283s193,56,313-84s21-206-69-240s-249.4-67-309-60C94.6,47.6,78.1,59.5,78.1,59.5z" />
							</svg>
						</div>
					</div>
					<a href="#" class="minicart-drop-countdown mt-3">
						<div class="countdown-box-full">
							<div class="row no-gutters align-items-center">
								<div class="col-auto"><i class="icon-gift icon--giftAnimate"></i></div>
								<div class="col">
									<div class="countdown-txt">WHEN BUYING TWO
										THINGS A THIRD AS A GIFT
									</div>
									<div class="countdown js-countdown" data-countdown="2021/07/01"></div>
								</div>
							</div>
						</div>
					</a>
					<div class="minicart-drop-info d-none d-md-block">
						<div class="shop-feature-single row no-gutters align-items-center">
							<div class="shop-feature-icon col-auto"><i class="icon-truck"></i></div>
							<div class="shop-feature-text col"><b>SHIPPING!</b> Continue shopping to add more products
								and receive free shipping</div>
						</div>
					</div>
				</div>
				<div class="minicart-drop-fixed js-hide-empty">
					<div class="loader-horizontal-sm js-loader-horizontal-sm" data-loader-horizontal=""><span></span>
					</div>
					<div class="minicart-drop-total js-minicart-drop-total row no-gutters align-items-center">
						<div class="minicart-drop-total-txt col-auto heading-font">Subtotal</div>
						<div class="minicart-drop-total-price col" data-header-cart-total="">$340</div>
					</div>
					<div class="minicart-drop-actions">
						<a href="cart" class="btn btn--md btn--grey"><i class="icon-basket"></i><span>Cart
								Page</span></a>
						<a href="#" class="btn btn--md"><i class="icon-checkout"></i><span>Check
								out</span></a>
					</div>
					<ul class="payment-link mb-2">
						<li><i class="icon-amazon-logo"></i></li>
						<li><i class="icon-visa-pay-logo"></i></li>
						<li><i class="icon-skrill-logo"></i></li>
						<li><i class="icon-klarna-logo"></i></li>
						<li><i class="icon-paypal-logo"></i></li>
						<li><i class="icon-apple-pay-logo"></i></li>
					</ul>
				</div>
			</div>
			<div class="drop-overlay js-dropdn-close"></div>
		</div>

	</div>
	<!--//header-->
	@include('home.includes.sport_shop.product')
    <!--//footer-->
	<footer class="page-footer footer-style-6 ">
		<div class="holder ">
			<div class="footer-shop-info">
				<div class="container">
					<div class="text-icn-blocks-bg-row">
						<div class="text-icn-block-footer">
							<div class="icn">
								<i class="icon-trolley"></i>
							</div>
							<div class="text">
								<h4>Extra fast delivery</h4>
								<p>Your order will be delivered 3-5 business days after all of your items are available
								</p>
							</div>
						</div>
						<div class="text-icn-block-footer">
							<div class="icn">
								<i class="icon-currency"></i>
							</div>
							<div class="text">
								<h4>Best price</h4>
								<p>We'll match the product prices of key online and local competitors for immediately
								</p>
							</div>
						</div>
						<div class="text-icn-block-footer">
							<div class="icn">
								<i class="icon-diplom"></i>
							</div>
							<div class="text">
								<h4>Guarantee</h4>
								<p>If the item you want is available, we can process a return and place a new order</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-top">
			<div class="container">
				<div class="row mt-0">
					<div class="col-lg col-xl last-mobile">
						<div class="footer-block">
							<div class="footer-logo">
								<a href="/"><img class="lazyload fade-up"
										src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
										data-srcset="images/logo-footer.png 1x, images/logo-footer2x.png 2x"
										alt="Logo"></a>
							</div>
							<div class="collapsed-content">
								<ul>
									<li>E-mail: <a href="mailto:Foxshop@gmail.com">Foxshop@gmail.com</a></li>
									<li>Hours: 10:00 - 18:00, Mon - Fri</li>
								</ul>
							</div>
							<ul class="social-list">
								<li>
									<a href="#" class="icon icon-facebook"></a>
								</li>
								<li>
									<a href="#" class="icon icon-twitter"></a>
								</li>
								<li>
									<a href="#" class="icon icon-google"></a>
								</li>
								<li>
									<a href="#" class="icon icon-vimeo"></a>
								</li>
								<li>
									<a href="#" class="icon icon-youtube"></a>
								</li>
								<li>
									<a href="#" class="icon icon-pinterest"></a>
								</li>
							</ul>
							<div class="d-lg-none mt-3">
								<div class="box-coupon">
									<div class="box-coupon-icon"><i class="icon-scissors"></i></div>
									<div class="box-coupon-text"><span class="custom-color">FOXIC</span> THEME</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg col-xl">
						<div class="footer-block collapsed-mobile">
							<div class="title">
								<h4>Information</h4>
								<span class="toggle-arrow"><span></span><span></span></span>
							</div>
							<div class="collapsed-content">
								<ul>
									<li><a href="about">About Us</a></li>
									<li><a href="contact">Contact Us</a></li>
									<li><a href="typography">Terms & Conditions</a></li>
									<li><a href="typography">Returns & Exchanges</a></li>
									<li><a href="typography">Shipping & Delivery</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg col-xl">
						<div class="footer-block collapsed-mobile">
							<div class="title">
								<h4>Account details</h4>
								<span class="toggle-arrow"><span></span><span></span></span>
							</div>
							<div class="collapsed-content">
								<ul>
									<li><a href="account-details">My Account</a></li>
									<li><a href="cart">View Cart</a></li>
									<li><a href="account-wishlist">My Wishlist</a></li>
									<li><a href="account-history">Order Status</a></li>
									<li><a href="account-history">Track My Order</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg col-xl">
						<div class="footer-block collapsed-mobile">
							<div class="title">
								<h4>Safe payments</h4>
								<span class="toggle-arrow"><span></span><span></span></span>
							</div>
							<div class="collapsed-content">
								<ul class="payment-link">
									<li><i class="icon-google-pay-logo"></i></li>
									<li><i class="icon-visa-pay-logo"></i></li>
									<li><i class="icon-apple-pay-logo"></i></li>
								</ul>
							</div>
							<div class="d-none d-lg-block">
								<div class="box-coupon">
									<div class="box-coupon-icon"><i class="icon-scissors"></i></div>
									<div class="box-coupon-text"><span class="custom-color">FOXIC</span> THEME</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom footer-bottom--bg">
			<div class="container">
				<div class="footer-copyright text-center">
					<a href="#">FOXshop</a> ©2020 copyright
				</div>
			</div>
		</div>
	</footer>
	<div class="footer-sticky">
		<!--  sticky add to cart -->
		<div class="sticky-addcart js-stickyAddToCart closed">
			<div class="container">
				<div class="row">
					<div class="col-auto sticky-addcart_image">
						<a href="product">
							<img src="images/skins/fashion/products/product-01-1.jpg" alt="" />
						</a>
					</div>
					<div class="col col-sm-5 col-lg-4 col-xl-5 sticky-addcart_info">
						<h1 class="sticky-addcart_title">Leather Pegged Pants</h1>
						<div class="sticky-addcart_price">
							<span class="sticky-addcart_price--actual">$180.00</span>
							<span class="sticky-addcart_price--old">$210.00</span>
						</div>
					</div>
					<div class="col-auto sticky-addcart_options  prd-block prd-block_info--style1">
						<div class="select-wrapper">
							<select class="form-control form-control--sm">
								<option value="">--Please choose an option--</option>
							</select>
						</div>
					</div>
					<div class="col-auto sticky-addcart_actions">
						<div class="prd-block_qty">
							<span class="option-label">Quantity:</span>
							<div class="qty qty-changer">
								<button class="decrease"></button>
								<input type="number" class="qty-input" value="1" data-min="1" data-max="1000">
								<button class="increase"></button>
							</div>
						</div>
						<div class="btn-wrap">
							<button class="btn js-prd-addtocart" data-fancybox data-src="#modalCheckOut">Add to cart
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--added to cart-->
		<div class="popup-addedtocart js-popupAddToCart closed" data-close="50000">
			<div class="container">
				<div class="row">
					<div class="popup-addedtocart-close js-popupAddToCart-close"><i class="icon-close"></i></div>
					<div class="popup-addedtocart-cart js-open-drop" data-panel="#dropdnMinicart"><i
							class="icon-basket"></i></div>
					<div class="col-auto popup-addedtocart_logo">
						<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
							data-src="images/logo-white-sm.png" class="lazyload fade-up" alt="">
					</div>
					<div class="col popup-addedtocart_info">
						<div class="row">
							<a href="product" class="col-auto popup-addedtocart_image">
								<span class="image-container w-100">
									<img src="images/skins/fashion/products/product-01-1.jpg" alt="" />
								</span>
							</a>
							<div class="col popup-addedtocart_text">
								<a href="product" class="popup-addedtocart_title"></a>
								<span class="popup-addedtocart_message">Added to <a href="cart"
										class="underline">Cart</a></span>
								<span class="popup-addedtocart_error_message"></span>
							</div>
						</div>
					</div>
					<div class="col-auto popup-addedtocart_actions">
						<span>You can continue</span> <a href="#" class="btn btn--grey btn--sm js-open-drop"
							data-panel="#dropdnMinicart"><i class="icon-basket"></i><span>Check Cart</span></a>
						<span>or</span> <a href="#" class="btn btn--invert btn--sm"><i
								class="icon-envelope-1"></i><span>Check out</span></a>
					</div>
				</div>
			</div>
		</div>
		<!--  select options -->
		<div class="sticky-addcart popup-selectoptions js-popupSelectOptions closed" data-close="500000">
			<div class="container">
				<div class="row">
					<div class="popup-selectoptions-close js-popupSelectOptions-close"><i class="icon-close"></i></div>
					<div class="col-auto sticky-addcart_image sticky-addcart_image--zoom">
						<a href="#" data-caption="">
							<span class="image-container"><img src="#" alt="" /></span>
						</a>
					</div>
					<div class="col col-sm-5 col-lg-4 col-xl-5 sticky-addcart_info">
						<h1 class="sticky-addcart_title"><a href="#">&nbsp;</a></h1>
						<div class="sticky-addcart_price">
							<span class="sticky-addcart_price--actual"></span>
							<span class="sticky-addcart_price--old"></span>
						</div>
						<div class="sticky-addcart_error_message">Error Message</div>
					</div>
					<div class="col-auto sticky-addcart_options prd-block prd-block_info--style1">
						<div class="select-wrapper">
							<select class="form-control form-control--sm sticky-addcart_options_select">
								<option value="none">Select Option please..</option>
							</select>
							<div class="invalid-feedback">Can't be blank</div>
						</div>
					</div>
					<div class="col-auto sticky-addcart_actions">
						<div class="prd-block_qty">
							<span class="option-label">Quantity:</span>
							<div class="qty qty-changer">
								<button class="decrease"></button>
								<input type="number" class="qty-input" value="2" data-min="1" data-max="10000">
								<button class="increase"></button>
							</div>
						</div>
						<div class="btn-wrap">
							<button class="btn js-prd-addtocart">Add to cart</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- back to top -->
		<a class="back-to-top js-back-to-top compensate-for-scrollbar" href="#" title="Scroll To Top">
			<i class="icon icon-angle-up"></i>
		</a>
		<!-- loader -->
		<div class="loader-horizontal js-loader-horizontal">
			<div class="progress">
				<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
			</div>
		</div>
	</div>
	<!-- payment note -->
	<div class="footer-sticky">
		<div class="payment-notification-wrap js-pn" data-visible-time="3000" data-hidden-time="3000" data-delay="500"
			data-from="Aberdeen,Bakersfield,Birmingham,Cambridge,Youngstown"
			data-products='[{"productname":"Leather Pegged Pants", "productlink":"product","productimage":"images/skins/fashion/products/product-01-1.jpg"},{"productname":"Black Fabric Backpack", "productlink":"product","productimage":"images/skins/fashion/products/product-28-1.jpg"},{"productname":"Combined Chunky Sneakers", "productlink":"product","productimage":"images/skins/fashion/products/product-23-1.jpg"}]'>
			<div class="payment-notification payment-notification--squared">
				<div class="payment-notification-inside">
					<div class="payment-notification-container">
						<a href="#" class="payment-notification-image js-pn-link">
							<img src="images/products/product-01.jpg" class="js-pn-image" alt="">
						</a>
						<div class="payment-notification-content-wrapper">
							<div class="payment-notification-content">
								<div class="payment-notification-text">Someone purchased</div>
								<a href="product"
									class="payment-notification-name js-pn-name js-pn-link">Applewatch</a>
								<div class="payment-notification-bottom">
									<div class="payment-notification-when"><span class="js-pn-time">32</span> min ago
									</div>
									<div class="payment-notification-from">from <span
											class="js-pn-from">Riverside</span></div>
								</div>
							</div>
						</div>
					</div>
					<div class="payment-notification-close"><i class="icon-close-bold"></i></div>
					<div class="payment-notification-qw prd-hide-mobile js-prd-quickview"
						data-src="ajax/ajax-quickview"><i class="icon-eye"></i></div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/vendor-special/lazysizes.min.js"></script>
	<script src="js/vendor-special/ls.bgset.min.js"></script>
	<script src="js/vendor-special/ls.aspectratio.min.js"></script>
	<script src="js/vendor-special/jquery.min.js"></script>
	<script src="js/vendor-special/jquery.ez-plus.js"></script>
	<script src="js/vendor-special/instafeed.min.js"></script>
	<script src="js/vendor/vendor.min.js"></script>
	<script src="js/app.js"></script>
</body>

</html>