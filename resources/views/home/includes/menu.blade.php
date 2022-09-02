<div class="header-bottom-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-9">
                <ul class="social-share-area mt-15 mb-15">
                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                    <li><a href="#"><i class="icofont-skype"></i></a></li>
                    <li><a href="#"><i class="icofont-twitter"></i></a></li>
                    <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-8 col-3">
                <div class="main-menu-area text-end">
                    <nav class="navigation-menu">
                        <ul>
                            <li >
                                <a href="{{route('home.index')}}"><span>Home</span></a>
                            </li>
                            <li>
                                <a href="#"><span>About</span></a>
                            </li>
                            <li class="has-children"><a href="#"><span>Type blog</span></a>
                                <ul class="submenu">
                                    @foreach($categories as $category)
                                    <li><a href="#"><span>{{$category->name}}</span></a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="has-children"><a href="#"><span>Category</span></a>
                                <ul class="submenu">
                                    <li><a href="#"><span>Category List</span></a></li>
                                    <li><a href="#"><span>Category Grid</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span>Contact </span></a></li>
                            <li class="has-children"><a href="#"><span>User</span></a>
                                <ul class="submenu">
                                    <li><a href="#"><span>Login</span></a></li>
                                    <li><a href="#"><span>Register</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- mobile menu -->
                <div class="mobile-menu-right">
                    <div class="mobile-navigation-icon d-block d-lg-none" id="mobile-menu-trigger">
                        <i></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
