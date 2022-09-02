<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bunzo - Blog Bootstrap 5 HTML Template</title>
    <meta name="description" content="Bunzo is one of the most popular blog template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <link rel="canonical" href="#"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Bunzo - Blog HTML Template"/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:image" content=""/>


</head>
@include('home.includes.css')

<body>

<!--========  header area =========-->
<header class="header">
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 order-1 order-lg-1">
                    <ul class="header-top-menu-list">
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Status</a></li>
                        <li><a href="#">Writers</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 order-3 order-lg-2">
                    <div class="header-top-contact-info">
                        <div class="header-top-single-contact-item">
                            <div class="header-top-contact-icon">
                                <img src="assets/images/icons/contact-call.png" alt="">
                            </div>
                            <div class="header-top-contact-text text-size-small">
                                <a href="tel:970262-1413">(970) 262-1413</a>
                            </div>
                        </div>

                        <div class="header-top-single-contact-item">
                            <div class="header-top-contact-icon">
                                <img src="assets/images/icons/contact-emaill.png" alt="">
                            </div>
                            <div class="header-top-contact-text">
                                <a href="mailto:address@gmail.com">address@gmail.com</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 order-2 order-lg-3">
                    <div class="header-top-right-side">
                        <p>Bangladesh</p>
                        <div class="wayder">
                            <span class="wayder-icon"><img src="assets/images/icons/wayder.png" alt=""/></span>
                            <span class="wayder-text">28° C</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mid-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-2 col-5">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/images/logo/logo.png" alt=""/>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-md-block d-none">
                    <div class="header-add-banner text-center">
                        <a href="#">
                            <img src="assets/images/banners/header-add-banner.jpg" alt=""/>
                            <h6 class="header-add-text">All Food Item
                                <span>50% Off</span>
                            </h6>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-7">
                    <div class="header-mid-right-side">
                        <a href="javascript:void(0)" id="search-overlay-trigger" class="single-action-item">
                            <img src="{{asset('/home_d/assets/images/icons/search.png')}}" alt="">
                        </a>
                        <a href="#" class="single-action-item">
                            <img src="{{asset('/home_d/assets/images/icons/notification.png')}}" alt="">
                        </a>
                        <a href="#" class="single-action-item">
                            <img src="{{asset('/home_d/assets/images/icons/bookmark.png')}}" alt="">
                        </a>
                        <a href="register.html" class="single-action-item">
                            <img src="{{asset('/home_d/assets/images/icons/user.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('home.includes.menu')
</header>
<!--======== End of header area  =========-->


<div id="main-wrapper">
    <div class="site-wrapper-reveal">
        <!-- Hero Area Start -->
        @yield('hero-area')
        @yield('content')

    </div>
</div>


@include('home.includes.footer')

<!--====================  scroll top ====================-->
<a href="#" class="scroll-top" id="scroll-top">
    <i class="arrow-top icofont-swoosh-up"></i>
    <i class="arrow-bottom icofont-swoosh-up"></i>
</a>
<!--====================  End of scroll top  ====================-->

<!--====================  search overlay ====================-->
<div class="search-overlay" id="search-overlay">

    <div class="search-overlay__header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <!-- search content -->
                    <div class="search-content text-end">
                        <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-overlay__inner">
        <div class="search-overlay__body">
            <div class="search-overlay__form">
                <form action="#">
                    <input type="text" placeholder="Search">
                </form>
            </div>
        </div>
    </div>
</div>
<!--====================  End of search overlay  ====================-->

<!--====================  mobile menu overlay ====================-->
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="mobile-menu-overlay__inner">
        <div class="mobile-menu-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8">
                        <!-- logo -->
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/images/logo/logo.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-4">
                        <!-- mobile menu content -->
                        <div class="mobile-menu-content text-end">
                            <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay__body">
            <nav class="offcanvas-navigation">
                <ul>
                    <li class="has-children">
                        <a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index-2.html"><span>Home Two</span></a></li>
                            <li><a href="index-3.html"><span>Home Three</span></a></li>
                            <li><a href="index-4.html"><span>Home Four</span></a></li>
                            <li><a href="index-5.html"><span>Home Five</span></a></li>
                            <li><a href="index-6.html"><span>Home Six</span></a></li>
                        </ul>
                    </li>
                    <li><a href="about-us.html"><span>About</span></a></li>
                    <li class="has-children">
                        <a href="#">Category</a>
                        <ul class="sub-menu">
                            <li><a href="category.html"><span>Category List</span></a></li>
                            <li><a href="category-grid.html"><span>Category Grid</span></a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="blog-details.html"><span>Blog Details</span></a></li>
                            <li><a href="blog-details-two.html"><span>Blog Details Two</span></a></li>
                            <li><a href="error-404.html"><span>Error 404</span></a></li>
                            <li><a href="faq.html"><span>FAQ's</span></a></li>
                            <li><a href="author-post.html"><span>Author post</span></a></li>
                            <li><a href="register.html"><span>Register</span></a></li>
                            <li><a href="write-post.html"><span>Write Post</span></a></li>
                        </ul>
                    </li>
                    <li><a href="contact-us.html"><span>Contact </span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!--====================  End of mobile menu overlay  ====================-->


<!-- JS
============================================ -->
<!-- Modernizer JS -->
@include('home.includes.js')

</body>

</html>
