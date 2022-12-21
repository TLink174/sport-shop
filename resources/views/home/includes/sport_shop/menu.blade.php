<div class="hdr-nav hide-mobile nav-holder justify-content-start">
							<!--mmenu-->
							<ul class="mmenu mmenu-js">
								<li class="mmenu-item--simple"><a href="{{route('home.index')}}" class="active">Home</a>

								</li>
								<li class="mmenu-item--simple"><a href="#">Pages</a>
									<div class="mmenu-submenu">
										<ul class="submenu-list">
											<li><a href="{{route('home.product')}}">Product page</a>
											</li>
											<li><a href="#">Category</a>
												<ul>
                                                    @foreach($categoryProduct as $category)
                                                            <li><a href="index.html">{{$category->name}}</a><span
                                                                    class="submenu-link-image"><img class="img-fluid" src="{{$category->image}}"
                                                                                                    alt=""></span></li>
                                                    @endforeach
												</ul>
											</li>

											<li><a href="cart">Cart & Checkout</a>
												<ul>
                                                    @if(!auth()->check())
													<li><a href="{{route('admin.auth.login')}}">Cart Page</a></li>
                                                    @else
                                                        <li><a href="{{route('home.cart.index', Auth::user()->id)}}">Cart Page</a></li>
                                                    @endif
												</ul>
											</li>

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
							</ul>
							<!--/mmenu-->
						</div>
