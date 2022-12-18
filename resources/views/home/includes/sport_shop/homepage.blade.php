@php
    if (!function_exists('currency_format')) {
function currency_format($number) {
if (!empty($number)) {
return number_format($number, 0, ',', ',');
}
}
}
@endphp
<div class="page-content">
		<div class="holder mt-0 py-15 py-md-6 bgcolor">
			<div class="container">
				<div class="creative-product-carousel-wrap">
					<div class="creative-product-carousel js-creative-product-carousel">
						<div class="creative-product-carousel-item">
							<div class="row flex-nowrap four-in-row">
                                <div class="creative-product-carousel-text">New<br>Arrival</div>
                                @foreach($product as $products)
								<div class="col">
									<div class="prd-img-area">
										<a href="#" class="prd-img prd-img--noequal">
											<img src="{{$products->image}}"
												class="prd-img-first lazyload" alt="">
										</a>
									</div>
									<div class="prd-info">
										<h2 class="prd-title"><a href="#">{{$products->name}}</a></h2>
										<div class="creative-product-carousel-hovers">
											<div class="creative-product-carousel-price">
												<div class="price-new">{{currency_format($products->price)}}</div>
											</div>
											<div class="creative-product-carousel-action">
												<form action="#">
													<button class="btn js-prd-addtocart"
														data-product='{"name": "Leggings Snake print", "path":"images/products/product-02.jpg", "url":"#", "aspect_ratio":0.778}'>Add
														To Cart</button>
												</form>
											</div>
										</div>
									</div>
								</div>
                                @endforeach

							</div>

						</div>
					</div>
					<div class="collection-grid-1 collection-grid-1-vertical js-creative-product-carousel-tabs">
						<div class="collection-grid-1-item js-collection-grid-nav active">
							<a href="#" class="collection-grid-1-item-inside" title="Category Name">
								<i class="icon-shopping"></i>
							</a>
						</div>
						<div class="collection-grid-1-item js-collection-grid-nav">
							<a href="#" class="collection-grid-1-item-inside" title="Category Name">
								<i class="icon-tag"></i>
							</a>
						</div>
						<div class="collection-grid-1-item js-collection-grid-nav">
							<a href="#" class="collection-grid-1-item-inside" title="Category Name">
								<i class="icon-fashion"></i>
							</a>
						</div>
						<div class="collection-grid-1-item">
							<a href="#" class="collection-grid-1-item-inside" title="Category Name">
								View all ...
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="holder holder-welcome-block py-50 mt-0">
			<div class="container">
				<div class="row welcome-block">
					<div class="col-lg-7 welcome-block-image">
						<img class="lazyload fade-up"
							src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
							data-src="images/hello-image.png" alt="">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 150 150"
							style="enable-background:new 0 0 150 150; width: 77%;" xml:space="preserve"
							class="circle_decor @@classes">
							<defs>
								<filter x="0" y="0" width="100%" height="100%" id="dropshadow_1_r001"
									filterUnits="userSpaceOnUse">
									<feGaussianBlur in="SourceAlpha" stdDeviation="2" />
									<feOffset dx="-3" dy="0" result="offsetblur" />
									<feMerge>
										<feMergeNode />
										<feMergeNode in="SourceGraphic" />
										<feMergeNode in="SourceGraphic" />
									</feMerge>
								</filter>
								<filter x="0" y="0" width="100%" height="100%" id="dropshadow_2_r001"
									filterUnits="userSpaceOnUse">
									<feGaussianBlur in="SourceAlpha" stdDeviation="2" />
									<feOffset dx="3" dy="0" result="offsetblur" />
									<feMerge>
										<feMergeNode />
										<feMergeNode in="SourceGraphic" />
										<feMergeNode in="SourceGraphic" />
									</feMerge>
								</filter>
								<clipPath id="circle_decor_mask_r001">
									<circle r="73.5" cx="75" cy="75" />
								</clipPath>
							</defs>
							<path fill="#55C1AE"
								d="M74.933,148.5c-9.9,0-19.533-1.95-28.583-5.783c-8.75-3.699-16.6-9-23.333-15.734c-6.75-6.731-12.034-14.582-15.733-23.332C3.45,94.6,1.5,84.967,1.5,75.066c0-9.9,1.95-19.533,5.783-28.583c3.7-8.75,9-16.6,15.733-23.333S37.6,11.116,46.35,7.417c9.05-3.833,18.684-5.783,28.583-5.783c9.901,0,19.534,1.95,28.584,5.783c8.75,3.7,16.6,9,23.332,15.733c6.733,6.733,12.032,14.583,15.733,23.333c3.832,9.067,5.783,18.684,5.783,28.583c0,9.9-1.951,19.534-5.783,28.584c-3.701,8.75-9,16.6-15.733,23.332c-6.732,6.733-14.582,12.033-23.332,15.733C94.467,146.55,84.834,148.5,74.933,148.5z M75,13.783C41.25,13.783,13.783,41.25,13.783,75S41.25,136.217,75,136.217S136.217,108.75,136.217,75S108.75,13.783,75,13.783z" />
							<circle r="5.8" cx="75" cy="7.8" fill-opacity="0.25" style="filter:url(#dropshadow_1_r001)"
								clip-path="url(#circle_decor_mask_r001)" />
							<circle r="5.8" cx="74" cy="142.5" fill-opacity="0.25"
								style="filter:url(#dropshadow_2_r001)" clip-path="url(#circle_decor_mask_r001)" />
							<path fill="#55C1AE"
								d="M81.101,7.712c0,3.346-2.761,6.059-6.164,6.059l0,0c-3.404,0-6.164-2.713-6.164-6.059l0,0c0-3.345,2.76-6.058,6.164-6.058l0,0C78.34,1.654,81.101,4.367,81.101,7.712L81.101,7.712z" />
							<path fill="#55C1AE"
								d="M81.177,142.363c0,3.346-2.761,6.06-6.164,6.06l0,0c-3.404,0-6.164-2.714-6.164-6.06l0,0c0-3.345,2.76-6.058,6.164-6.058l0,0C78.416,136.306,81.177,139.019,81.177,142.363L81.177,142.363z" />
						</svg>
					</div>
					<div class="col-lg-11 welcome-block-text-wrap">
						<div class="welcome-block-text"><i class="custom-color">Hey!</i><br>I’m foxic</div>
						<div class="welcome-block-info">
							<p>You will be surprised at the flexibility and comfort in the process of customizing the
								theme. We give a tooth that FOXic theme on your store will make hundreds of sales per
								day, and this is not the limit. This is facilitated by a well-thought-out UI and site
								style: a wide site with well-thought-out mobile interface.
								Buy our theme and enjoy!</p>
							<p class="mt-3 mt-lg-5 welcome-block-btn"><a href="#" class="btn">start shopping</a></p>
						</div>
						<div class="welcome-block-icon"><i class="icon-fox"></i></div>
						<div class="welcome-block-social">
							<ul class="social-list-circle">
								<li>
									<a href="#"><i class="icon-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon-google"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="welcome-block-btn">
						<a href="#" class="btn">start shopping</a>
					</div>
				</div>
			</div>
		</div>
		<div class="holder @classes">
			<div class="container">
				<div class="row bnr-grid vert-margin justify-content-md-center">
					<div class="col-sm">
						<a href="#" class="bnr image-hover-scale bnr--bottom bnr-left" data-fontratio="5.695">
							<div class="bnr-img image-container" style="padding-bottom: 121.3%"><img
									src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
									data-srcset="images/banners/banner-index-02.png" class="lazyload fade-up" alt="">
							</div>
							<div class="bnr-caption">
								<div class="bnr-text2">This week<br><span>50%</span></div>
								<div class="bnr-text3">YOUR <span>GAME</span></div>
							</div>
						</a>
					</div>
					<div class="col-sm">
						<a href="#" class="bnr image-hover-scale bnr--middle bnr--center" data-fontratio="5.695">
							<div class="bnr-img image-container" style="padding-bottom: 121.3%">
								<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
									data-srcset="images/banners/banner-index-03.png" class="lazyload fade-up" alt="">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
									viewBox="0 0 150 150" style="enable-background:new 0 0 150 150; "
									xml:space="preserve" class="circle_decor circle_decor--tr">
									<defs>
										<filter x="0" y="0" width="100%" height="100%" id="dropshadow_1_b01"
											filterUnits="userSpaceOnUse">
											<feGaussianBlur in="SourceAlpha" stdDeviation="2" />
											<feOffset dx="-3" dy="0" result="offsetblur" />
											<feMerge>
												<feMergeNode />
												<feMergeNode in="SourceGraphic" />
												<feMergeNode in="SourceGraphic" />
											</feMerge>
										</filter>
										<filter x="0" y="0" width="100%" height="100%" id="dropshadow_2_b01"
											filterUnits="userSpaceOnUse">
											<feGaussianBlur in="SourceAlpha" stdDeviation="2" />
											<feOffset dx="3" dy="0" result="offsetblur" />
											<feMerge>
												<feMergeNode />
												<feMergeNode in="SourceGraphic" />
												<feMergeNode in="SourceGraphic" />
											</feMerge>
										</filter>
										<clipPath id="circle_decor_mask_b01">
											<circle r="73.5" cx="75" cy="75" />
										</clipPath>
									</defs>
									<path fill="#55C1AE"
										d="M74.933,148.5c-9.9,0-19.533-1.95-28.583-5.783c-8.75-3.699-16.6-9-23.333-15.734c-6.75-6.731-12.034-14.582-15.733-23.332C3.45,94.6,1.5,84.967,1.5,75.066c0-9.9,1.95-19.533,5.783-28.583c3.7-8.75,9-16.6,15.733-23.333S37.6,11.116,46.35,7.417c9.05-3.833,18.684-5.783,28.583-5.783c9.901,0,19.534,1.95,28.584,5.783c8.75,3.7,16.6,9,23.332,15.733c6.733,6.733,12.032,14.583,15.733,23.333c3.832,9.067,5.783,18.684,5.783,28.583c0,9.9-1.951,19.534-5.783,28.584c-3.701,8.75-9,16.6-15.733,23.332c-6.732,6.733-14.582,12.033-23.332,15.733C94.467,146.55,84.834,148.5,74.933,148.5z M75,13.783C41.25,13.783,13.783,41.25,13.783,75S41.25,136.217,75,136.217S136.217,108.75,136.217,75S108.75,13.783,75,13.783z" />
									<circle r="5.8" cx="75" cy="7.8" fill-opacity="0.25"
										style="filter:url(#dropshadow_1_b01)" clip-path="url(#circle_decor_mask_b01)" />
									<circle r="5.8" cx="74" cy="142.5" fill-opacity="0.25"
										style="filter:url(#dropshadow_2_b01)" clip-path="url(#circle_decor_mask_b01)" />
									<path fill="#55C1AE"
										d="M81.101,7.712c0,3.346-2.761,6.059-6.164,6.059l0,0c-3.404,0-6.164-2.713-6.164-6.059l0,0c0-3.345,2.76-6.058,6.164-6.058l0,0C78.34,1.654,81.101,4.367,81.101,7.712L81.101,7.712z" />
									<path fill="#55C1AE"
										d="M81.177,142.363c0,3.346-2.761,6.06-6.164,6.06l0,0c-3.404,0-6.164-2.714-6.164-6.06l0,0c0-3.345,2.76-6.058,6.164-6.058l0,0C78.416,136.306,81.177,139.019,81.177,142.363L81.177,142.363z" />
								</svg>
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
									viewBox="0 0 150 150" style="enable-background:new 0 0 150 150; "
									xml:space="preserve" class="circle_decor circle_decor--bl">
									<defs>
										<filter x="0" y="0" width="100%" height="100%" id="dropshadow_1_b02"
											filterUnits="userSpaceOnUse">
											<feGaussianBlur in="SourceAlpha" stdDeviation="2" />
											<feOffset dx="-3" dy="0" result="offsetblur" />
											<feMerge>
												<feMergeNode />
												<feMergeNode in="SourceGraphic" />
												<feMergeNode in="SourceGraphic" />
											</feMerge>
										</filter>
										<filter x="0" y="0" width="100%" height="100%" id="dropshadow_2_b02"
											filterUnits="userSpaceOnUse">
											<feGaussianBlur in="SourceAlpha" stdDeviation="2" />
											<feOffset dx="3" dy="0" result="offsetblur" />
											<feMerge>
												<feMergeNode />
												<feMergeNode in="SourceGraphic" />
												<feMergeNode in="SourceGraphic" />
											</feMerge>
										</filter>
										<clipPath id="circle_decor_mask_b02">
											<circle r="73.5" cx="75" cy="75" />
										</clipPath>
									</defs>
									<path fill="#55C1AE"
										d="M74.933,148.5c-9.9,0-19.533-1.95-28.583-5.783c-8.75-3.699-16.6-9-23.333-15.734c-6.75-6.731-12.034-14.582-15.733-23.332C3.45,94.6,1.5,84.967,1.5,75.066c0-9.9,1.95-19.533,5.783-28.583c3.7-8.75,9-16.6,15.733-23.333S37.6,11.116,46.35,7.417c9.05-3.833,18.684-5.783,28.583-5.783c9.901,0,19.534,1.95,28.584,5.783c8.75,3.7,16.6,9,23.332,15.733c6.733,6.733,12.032,14.583,15.733,23.333c3.832,9.067,5.783,18.684,5.783,28.583c0,9.9-1.951,19.534-5.783,28.584c-3.701,8.75-9,16.6-15.733,23.332c-6.732,6.733-14.582,12.033-23.332,15.733C94.467,146.55,84.834,148.5,74.933,148.5z M75,13.783C41.25,13.783,13.783,41.25,13.783,75S41.25,136.217,75,136.217S136.217,108.75,136.217,75S108.75,13.783,75,13.783z" />
									<circle r="5.8" cx="75" cy="7.8" fill-opacity="0.25"
										style="filter:url(#dropshadow_1_b02)" clip-path="url(#circle_decor_mask_b02)" />
									<circle r="5.8" cx="74" cy="142.5" fill-opacity="0.25"
										style="filter:url(#dropshadow_2_b02)" clip-path="url(#circle_decor_mask_b02)" />
									<path fill="#55C1AE"
										d="M81.101,7.712c0,3.346-2.761,6.059-6.164,6.059l0,0c-3.404,0-6.164-2.713-6.164-6.059l0,0c0-3.345,2.76-6.058,6.164-6.058l0,0C78.34,1.654,81.101,4.367,81.101,7.712L81.101,7.712z" />
									<path fill="#55C1AE"
										d="M81.177,142.363c0,3.346-2.761,6.06-6.164,6.06l0,0c-3.404,0-6.164-2.714-6.164-6.06l0,0c0-3.345,2.76-6.058,6.164-6.058l0,0C78.416,136.306,81.177,139.019,81.177,142.363L81.177,142.363z" />
								</svg>
							</div>
							<div class="bnr-caption">
								<div class="bnr-text4">SALE</div>
								<div class="bnr-text5 text-right">-70%</div>
							</div>
						</a>
					</div>
					<div class="col-sm">
						<a href="#" class="bnr image-hover-scale bnr--bottom bnr--left" data-fontratio="5.695">
							<div class="bnr-img image-container" style="padding-bottom: 121.3%">
								<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
									data-srcset="images/banners/banner-index-04.png" class="lazyload fade-up" alt="">
							</div>
							<div class="bnr-caption">
								<div class="bnr-text2">This week<br><span>50%</span></div>
								<div class="bnr-text3"><span>LIFE IS SHORT, </span>PLAY <span>HARD!</span></div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="holder ">
			<div class="container">
				<div class="row vert-margin justify-content-md-center">
{{--					<div class="col-sm-5">--}}
{{--						<div class="js-sticky-collision">--}}
{{--                            @foreach($categoryProduct as $categoryProduct)--}}
{{--							<div class="bnr-sticky">--}}
{{--								<h2 class="custom-color">NEW COLLECTION</h2>--}}
{{--								<a href="#" class="bnr image-hover-scale">--}}
{{--									<div class="bnr-img image-container" style="padding-bottom: 178%"><img--}}
{{--											src="{{$categoryProduct->image}}"--}}
{{--											alt=""></div>--}}
{{--								</a>--}}
{{--							</div>--}}
{{--                                @endforeach--}}
{{--						</div>--}}
{{--					</div>--}}
					<div class="col-sm-13">

						<div class="prd-grid data-to-show-3 data-to-show-md-2 data-to-show-sm-2 data-to-show-xs-2">
                            @foreach($product as $product)
							<div class="prd ">
								<div class="prd-inside">

									<div class="prd-img-area">
										<a href="#" class="prd-img image-hover-scale image-container">
											<img src="{{$product->image}}"
												alt="{{$product->name}}"
												class="js-prd-img lazyload">
											<div class="foxic-loader"></div>
{{--											<div class="prd-big-circle-labels">--}}

{{--												<div class="label-new"><span>New</span></div>--}}


{{--												<div class="label-sale"><span>-10% <span--}}
{{--															class="sale-text">Sale</span></span>--}}

{{--													<div class="countdown-circle">--}}
{{--														<div class="countdown js-countdown" data-countdown="2021/07/01">--}}
{{--														</div>--}}
{{--													</div>--}}

{{--												</div>--}}


{{--											</div>--}}
										</a>
										<div class="prd-circle-labels">
											<a href="#"
												class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0"
												title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a href="#"
												class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0"
												title="Remove From Wishlist"><i class="icon-heart-hover"></i></a>
											<a href="#" class="circle-label-qview js-prd-quickview prd-hide-mobile"
												data-src="{{route('home.quickview')}}"><i class="icon-eye"></i><span>QUICK
													VIEW</span></a>

										</div>
									</div>
									<div class="prd-info">
										<div class="prd-info-wrap">
											<div class="prd-info-top">
												<div class="prd-rating"><i class="icon-star-fill fill"></i><i
														class="icon-star-fill fill"></i><i
														class="icon-star-fill fill"></i><i
														class="icon-star-fill fill"></i><i
														class="icon-star-fill fill"></i></div>
												<div class="prd-tag"><a href="#">FOXic</a></div>
											</div>
											<h2 class="prd-title"><a href="#">{{$product->name}}</a></h2>
											<div class="prd-description">
												Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad
												litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante
												sed lacinia.
											</div>
										</div>
										<div class="prd-hovers">
											<div class="prd-circle-labels">
												<div><a href="#"
														class="circle-label-compare circle-label-wishlist--add js-add-wishlist mt-0"
														title="Add To Wishlist"><i class="icon-heart-stroke"></i></a><a
														href="#"
														class="circle-label-compare circle-label-wishlist--off js-remove-wishlist mt-0"
														title="Remove From Wishlist"><i
															class="icon-heart-hover"></i></a></div>
												<div><a href="#"
														class="circle-label-qview prd-hide-mobile js-prd-quickview"
														data-src="{{route('home.quickview')}}"><i
															class="icon-eye"></i><span>QUICK VIEW</span></a></div>
											</div>
											<div class="prd-price">

{{--												<div class="price-old">$ 200</div>--}}
												<div class="price-new">{{currency_format($product->price)}}<sup>đ</sup></div>
											</div>
											<div class="prd-action">
												<div class="prd-action-left">
													<form action="#">
														<button class="btn js-prd-addtocart"
															data-product='{"name": "Legging Red/Black", "path":"images/products/product-01.jpg", "url":"#", "aspect_ratio":0.778}'>Add
															To Cart</button>
													</form>
												</div>
												<div class="prd-action-right">
													<div class="prd-action-right-inside">
														<div class="prd-tag"><a href="#">FOXic</a></div>
														<div class="prd-rating"><i class="icon-star-fill fill"></i><i
																class="icon-star-fill fill"></i><i
																class="icon-star-fill fill"></i><i
																class="icon-star-fill fill"></i><i
																class="icon-star-fill fill"></i></div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
                            @endforeach
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="holder holder-subscribe-full lazyload">
			<div class="circle_decor_wrap">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 150 150"
					style="enable-background:new 0 0 150 150; " xml:space="preserve"
					class="circle_decor circle_decor--tl">
					<defs>
						<filter x="0" y="0" width="100%" height="100%" id="dropshadow_1_003"
							filterUnits="userSpaceOnUse">
							<feGaussianBlur in="SourceAlpha" stdDeviation="2" />
							<feOffset dx="-3" dy="0" result="offsetblur" />
							<feMerge>
								<feMergeNode />
								<feMergeNode in="SourceGraphic" />
								<feMergeNode in="SourceGraphic" />
							</feMerge>
						</filter>
						<filter x="0" y="0" width="100%" height="100%" id="dropshadow_2_003"
							filterUnits="userSpaceOnUse">
							<feGaussianBlur in="SourceAlpha" stdDeviation="2" />
							<feOffset dx="3" dy="0" result="offsetblur" />
							<feMerge>
								<feMergeNode />
								<feMergeNode in="SourceGraphic" />
								<feMergeNode in="SourceGraphic" />
							</feMerge>
						</filter>
						<clipPath id="circle_decor_mask_003">
							<circle r="73.5" cx="75" cy="75" />
						</clipPath>
					</defs>
					<path fill="#55C1AE"
						d="M74.933,148.5c-9.9,0-19.533-1.95-28.583-5.783c-8.75-3.699-16.6-9-23.333-15.734c-6.75-6.731-12.034-14.582-15.733-23.332C3.45,94.6,1.5,84.967,1.5,75.066c0-9.9,1.95-19.533,5.783-28.583c3.7-8.75,9-16.6,15.733-23.333S37.6,11.116,46.35,7.417c9.05-3.833,18.684-5.783,28.583-5.783c9.901,0,19.534,1.95,28.584,5.783c8.75,3.7,16.6,9,23.332,15.733c6.733,6.733,12.032,14.583,15.733,23.333c3.832,9.067,5.783,18.684,5.783,28.583c0,9.9-1.951,19.534-5.783,28.584c-3.701,8.75-9,16.6-15.733,23.332c-6.732,6.733-14.582,12.033-23.332,15.733C94.467,146.55,84.834,148.5,74.933,148.5z M75,13.783C41.25,13.783,13.783,41.25,13.783,75S41.25,136.217,75,136.217S136.217,108.75,136.217,75S108.75,13.783,75,13.783z" />
					<circle r="5.8" cx="75" cy="7.8" fill-opacity="0.25" style="filter:url(#dropshadow_1_003)"
						clip-path="url(#circle_decor_mask_003)" />
					<circle r="5.8" cx="74" cy="142.5" fill-opacity="0.25" style="filter:url(#dropshadow_2_003)"
						clip-path="url(#circle_decor_mask_003)" />
					<path fill="#55C1AE"
						d="M81.101,7.712c0,3.346-2.761,6.059-6.164,6.059l0,0c-3.404,0-6.164-2.713-6.164-6.059l0,0c0-3.345,2.76-6.058,6.164-6.058l0,0C78.34,1.654,81.101,4.367,81.101,7.712L81.101,7.712z" />
					<path fill="#55C1AE"
						d="M81.177,142.363c0,3.346-2.761,6.06-6.164,6.06l0,0c-3.404,0-6.164-2.714-6.164-6.06l0,0c0-3.345,2.76-6.058,6.164-6.058l0,0C78.416,136.306,81.177,139.019,81.177,142.363L81.177,142.363z" />
				</svg>
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 150 150"
					style="enable-background:new 0 0 150 150; " xml:space="preserve"
					class="circle_decor circle_decor--br">
					<defs>
						<filter x="0" y="0" width="100%" height="100%" id="dropshadow_1_004"
							filterUnits="userSpaceOnUse">
							<feGaussianBlur in="SourceAlpha" stdDeviation="2" />
							<feOffset dx="-3" dy="0" result="offsetblur" />
							<feMerge>
								<feMergeNode />
								<feMergeNode in="SourceGraphic" />
								<feMergeNode in="SourceGraphic" />
							</feMerge>
						</filter>
						<filter x="0" y="0" width="100%" height="100%" id="dropshadow_2_004"
							filterUnits="userSpaceOnUse">
							<feGaussianBlur in="SourceAlpha" stdDeviation="2" />
							<feOffset dx="3" dy="0" result="offsetblur" />
							<feMerge>
								<feMergeNode />
								<feMergeNode in="SourceGraphic" />
								<feMergeNode in="SourceGraphic" />
							</feMerge>
						</filter>
						<clipPath id="circle_decor_mask_004">
							<circle r="73.5" cx="75" cy="75" />
						</clipPath>
					</defs>
					<path fill="#55C1AE"
						d="M74.933,148.5c-9.9,0-19.533-1.95-28.583-5.783c-8.75-3.699-16.6-9-23.333-15.734c-6.75-6.731-12.034-14.582-15.733-23.332C3.45,94.6,1.5,84.967,1.5,75.066c0-9.9,1.95-19.533,5.783-28.583c3.7-8.75,9-16.6,15.733-23.333S37.6,11.116,46.35,7.417c9.05-3.833,18.684-5.783,28.583-5.783c9.901,0,19.534,1.95,28.584,5.783c8.75,3.7,16.6,9,23.332,15.733c6.733,6.733,12.032,14.583,15.733,23.333c3.832,9.067,5.783,18.684,5.783,28.583c0,9.9-1.951,19.534-5.783,28.584c-3.701,8.75-9,16.6-15.733,23.332c-6.732,6.733-14.582,12.033-23.332,15.733C94.467,146.55,84.834,148.5,74.933,148.5z M75,13.783C41.25,13.783,13.783,41.25,13.783,75S41.25,136.217,75,136.217S136.217,108.75,136.217,75S108.75,13.783,75,13.783z" />
					<circle r="5.8" cx="75" cy="7.8" fill-opacity="0.25" style="filter:url(#dropshadow_1_004)"
						clip-path="url(#circle_decor_mask_004)" />
					<circle r="5.8" cx="74" cy="142.5" fill-opacity="0.25" style="filter:url(#dropshadow_2_004)"
						clip-path="url(#circle_decor_mask_004)" />
					<path fill="#55C1AE"
						d="M81.101,7.712c0,3.346-2.761,6.059-6.164,6.059l0,0c-3.404,0-6.164-2.713-6.164-6.059l0,0c0-3.345,2.76-6.058,6.164-6.058l0,0C78.34,1.654,81.101,4.367,81.101,7.712L81.101,7.712z" />
					<path fill="#55C1AE"
						d="M81.177,142.363c0,3.346-2.761,6.06-6.164,6.06l0,0c-3.404,0-6.164-2.714-6.164-6.06l0,0c0-3.345,2.76-6.058,6.164-6.058l0,0C78.416,136.306,81.177,139.019,81.177,142.363L81.177,142.363z" />
				</svg>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-auto">
						<div class="subscribe-form-title-lg">Newsletter</div>
						<div class="subscribe-form-title-sm">Subscribe to our weekly newsletter.</div>
					</div>
					<div class="col">
						<div class="subscribe-form">
							<form action="#">
								<div class="form-inline">
									<div class="form-control-wrap">
										<input type="text" class="form-control" placeholder="Type your e-mail...">
										<svg preserveAspectRatio="none">
											<rect x="2" y="2" rx="6" height="100%" width="100%"></rect>
										</svg>
										<span class="bottom"></span>
									</div>
									<button type="submit" class="btn btn--lg">subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
