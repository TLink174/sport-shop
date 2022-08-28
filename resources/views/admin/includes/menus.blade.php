<div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true"
     data-kt-menu-expand="false">
    <!--begin:Menu item-->
    <div data-kt-menu-trigger="click" class="menu-item @if( $menu_parent == 'category') here show menu-accordion @else menu-accordion @endif">
        @yield('menu')

        <!--begin:Menu link-->
        <span class="menu-link ">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3"
                                                              d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                              fill="currentColor"/>
														<rect x="6" y="12" width="7" height="2" rx="1"
                                                              fill="currentColor"/>
														<rect x="6" y="7" width="12" height="2" rx="1"
                                                              fill="currentColor"/>
													</svg>
												</span>
                                                <!--end::Svg Icon-->
											</span>
											<span class="menu-title">Category</span>
											<span class="menu-arrow"></span>
										</span>
        <!--end:Menu link-->
        <!--begin:Menu sub-->
        <div class="menu-sub menu-sub-accordion">
            <!--begin:Menu item-->
            <div class="menu-item py-2">
                <!--begin:Menu link-->
                <a class="menu-link @if($menu_parent == 'category' && $menu_child == 'index') active @endif " href="../../demo1/dist/apps/chat/private.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                    <span class="menu-title">List Category</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div class="menu-item  ">
                <!--begin:Menu link-->
                <a class="menu-link @if($menu_parent == 'category' && $menu_child == 'add') active @endif" href="../../demo1/dist/apps/chat/drawer.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                    <span class="menu-title">Add Category</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
        </div>
        <!--end:Menu sub-->
    </div>
    <!--end:Menu item-->
    <!--begin:Menu item-->
    <div data-kt-menu-trigger="click" class="menu-item @if( $menu_parent == 'product') here show menu-accordion @else menu-accordion @endif">
        @yield('menu')

        <!--begin:Menu link-->
        <span class="menu-link ">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3"
                                                              d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                              fill="currentColor"/>
														<rect x="6" y="12" width="7" height="2" rx="1"
                                                              fill="currentColor"/>
														<rect x="6" y="7" width="12" height="2" rx="1"
                                                              fill="currentColor"/>
													</svg>
												</span>
                                                <!--end::Svg Icon-->
											</span>
											<span class="menu-title">Product</span>
											<span class="menu-arrow"></span>
										</span>
        <!--end:Menu link-->
        <!--begin:Menu sub-->
        <div class="menu-sub menu-sub-accordion">
            <!--begin:Menu item-->
            <div class="menu-item py-2">
                <!--begin:Menu link-->
                <a class="menu-link @if($menu_parent == 'product' && $menu_child == 'index') active @endif " href="../../demo1/dist/apps/chat/private.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                    <span class="menu-title">List Product</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->

            <!--begin:Menu item-->
            <div class="menu-item  ">
                <!--begin:Menu link-->
                <a class="menu-link @if($menu_parent == 'product' && $menu_child == 'add') active @endif" href="../../demo1/dist/apps/chat/drawer.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
                    <span class="menu-title">Add Product</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
        </div>
        <!--end:Menu sub-->
    </div>
    <!--end:Menu item-->
</div>
