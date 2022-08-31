<div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true"
     data-kt-menu-expand="false">
    @php
        $menus = config('menus');
    @endphp

    @foreach ($menus as $menu)
        @if(auth()->user()->checkAllow($menu['name']) || (isset($menu['type']) && $menu['type'] == 'public'))
            <div data-kt-menu-trigger="click"
                 class="menu-item menu-accordion @if( $menu_parent == $menu['name']) hover show  @endif ">
                <!--begin:Menu link-->
                <span class="menu-link">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotune/art/art007.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                          d="M20.859 12.596L17.736 13.596L10.388 20.944C10.2915 21.0406 10.1769 21.1172 10.0508 21.1695C9.9247 21.2218 9.78953 21.2486 9.65302 21.2486C9.5165 21.2486 9.3813 21.2218 9.25519 21.1695C9.12907 21.1172 9.01449 21.0406 8.918 20.944L2.29999 14.3229C2.10543 14.1278 1.99619 13.8635 1.99619 13.588C1.99619 13.3124 2.10543 13.0481 2.29999 12.853L11.853 3.29999C11.9495 3.20341 12.0641 3.12679 12.1902 3.07452C12.3163 3.02225 12.4515 2.9953 12.588 2.9953C12.7245 2.9953 12.8597 3.02225 12.9858 3.07452C13.1119 3.12679 13.2265 3.20341 13.323 3.29999L21.199 11.176C21.3036 11.2791 21.3797 11.4075 21.4201 11.5486C21.4605 11.6898 21.4637 11.8391 21.4295 11.9819C21.3953 12.1247 21.3249 12.2562 21.2249 12.3638C21.125 12.4714 20.9989 12.5514 20.859 12.596Z"
                                                          fill="currentColor"></path>
                                                    <path
                                                        d="M14.8 10.184C14.7447 10.1843 14.6895 10.1796 14.635 10.1699L5.816 8.69997C5.55436 8.65634 5.32077 8.51055 5.16661 8.29469C5.01246 8.07884 4.95035 7.8106 4.99397 7.54897C5.0376 7.28733 5.18339 7.05371 5.39925 6.89955C5.6151 6.7454 5.88334 6.68332 6.14498 6.72694L14.963 8.19692C15.2112 8.23733 15.435 8.36982 15.59 8.56789C15.7449 8.76596 15.8195 9.01502 15.7989 9.26564C15.7784 9.51626 15.6642 9.75001 15.479 9.92018C15.2939 10.0904 15.0514 10.1846 14.8 10.184ZM17 18.6229C17 19.0281 17.0985 19.4272 17.287 19.7859C17.4755 20.1446 17.7484 20.4521 18.0821 20.6819C18.4158 20.9117 18.8004 21.0571 19.2027 21.1052C19.605 21.1534 20.0131 21.103 20.3916 20.9585C20.7702 20.814 21.1079 20.5797 21.3758 20.2757C21.6437 19.9716 21.8336 19.607 21.9293 19.2133C22.025 18.8195 22.0235 18.4085 21.925 18.0154C21.8266 17.6223 21.634 17.259 21.364 16.9569L19.843 15.257C19.7999 15.2085 19.7471 15.1697 19.688 15.1432C19.6289 15.1167 19.5648 15.1029 19.5 15.1029C19.4352 15.1029 19.3711 15.1167 19.312 15.1432C19.2529 15.1697 19.2001 15.2085 19.157 15.257L17.636 16.9569C17.2254 17.4146 16.9988 18.0081 17 18.6229ZM10.388 20.9409L17.736 13.5929H1.99999C1.99921 13.7291 2.02532 13.8643 2.0768 13.9904C2.12828 14.1165 2.2041 14.2311 2.29997 14.3279L8.91399 20.9409C9.01055 21.0381 9.12539 21.1152 9.25188 21.1679C9.37836 21.2205 9.51399 21.2476 9.65099 21.2476C9.78798 21.2476 9.92361 21.2205 10.0501 21.1679C10.1766 21.1152 10.2914 21.0381 10.388 20.9409Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">{{$menu['title']}}</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                @if(isset($menu['children']) && count($menu['children']) > 0)
                    <div class="menu-sub menu-sub-accordion " kt-hidden-height="121" style="">
                        @foreach($menu['children'] as $item)
                            <!--begin:Menu item-->
                            @if(isset($item['gate']))
                                @can($item['gate'])
                                    <div class="menu-item ">
                                        <!--begin:Menu link-->
                                        <a class="menu-link @if($menu_parent == $menu['name'] && $menu_child == $item['name']) active @endif "
                                           href="@if(isset($item['route'])) {{route($item['route'])}} @else # @endif">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                            <span class="menu-title">{{$item['title']}}</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                @endcan
                            @elseif(auth()->user()->checkAllow($menu['name']) || (isset($item['type']) && $item['type'] == 'public'))
                            <div class="menu-item ">
                                <!--begin:Menu link-->
                                <a class="menu-link @if($menu_parent == $menu['name'] && $menu_child == $item['name']) active @endif "
                                   href="@if(isset($item['route'])) {{route($item['route'])}} @else # @endif">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                    <span class="menu-title">{{$item['title']}}</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            @endif

                            <!--end:Menu item-->
                        @endforeach
                    </div>
                @endif
                <!--end:Menu sub-->
            </div>
            <!--end:Menu item-->
        @endif
    @endforeach


</div>
