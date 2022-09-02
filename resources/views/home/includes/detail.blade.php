<div class="site-wrapper-reveal">

    <div class="blog-details-two-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="blog-details-two-header">

                        <div class="blog-details-two-post-meta">
                                    <span class="blog-details-two-post-author">
                                    By <a href="#">{{$blog ->user ->name}}</a>
                                </span>
                            <span class="post-date">
                                    <a href="#">03 April, 2021</a>
                                </span>
                            <span>10 min read</span>
                        </div>
                        <h2 class="blog-details-two-post-title">{{$blog -> title}}</h2>

                        <div class="blog-details-two-tags">
                            @foreach($blog -> tags as $tag)
                                <a class="btn-large wordpress " href="#">{{$tag -> name}}</a>
                            @endforeach
                        </div>

                    </div>
                    <div class="mt-40">

                        {!! $blog -> content !!}
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Related Post Area Start -->
    <div class="related-post-area bg-gray section-space--ptb_80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-7">
                    <div class="section-title">
                        <h2 class="title">You may also like</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-5">
                    <div class="related-post-two-slider-navigation text-end">
                        <div class="related-post-button-prev navigation-button"><i class="icofont-long-arrow-left"></i>
                        </div>
                        <div class="related-post-button-next navigation-button"><i class="icofont-long-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Swiper -->
            <div class="swiper-container related-post-two-slider-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!-- Single Most Populer Item Start -->
                        <div class="single-most-populer-item">
                            <a href="#!" class="most-populer-thum">
                                <img src="assets/images/banners/02-special-banner.jpg" alt="">
                            </a>
                            <div class="most-populer-content">
                                <div class="most-populer-post-author">
                                    By <a href="#">Andrew Hoffman</a>
                                </div>
                                <h3 class="title"><a href="#!">All of these amazing features
                                        come at an affordable price!</a>
                                </h3>
                                <div class="most-populer-post-meta">
                                            <span class="post-date">
                                        <a href="#">03 April, 2021</a>
                                    </span>
                                    <span>10 min read</span>
                                </div>
                            </div>
                        </div><!-- Single Most Populer Item End -->
                    </div>
                    <div class="swiper-slide">
                        <!-- Single Most Populer Item Start -->
                        <div class="single-most-populer-item">
                            <a href="#!" class="most-populer-thum">
                                <img src="assets/images/banners/03-special-banner.jpg" alt="">
                            </a>
                            <div class="most-populer-content">
                                <div class="most-populer-post-author">
                                    By <a href="#">Andrew Hoffman</a>
                                </div>
                                <h3 class="title"><a href="#!">WooCommerce comes with an
                                        intuitive drag-and-drop...</a>
                                </h3>
                                <div class="most-populer-post-meta">
                                            <span class="post-date">
                                        <a href="#">03 April, 2021</a>
                                    </span>
                                    <span>10 min read</span>
                                </div>
                            </div>
                        </div><!-- Single Most Populer Item End -->
                    </div>
                    <div class="swiper-slide">
                        <!-- Single Most Populer Item Start -->
                        <div class="single-most-populer-item">
                            <a href="#!" class="most-populer-thum">
                                <img src="assets/images/banners/04-special-banner.jpg" alt="">
                            </a>
                            <div class="most-populer-content">
                                <div class="most-populer-post-author">
                                    By <a href="#">Andrew Hoffman</a>
                                </div>
                                <h3 class="title"><a href="#!">Create beautiful designs that
                                        will help convert more...</a>
                                </h3>
                                <div class="most-populer-post-meta">
                                            <span class="post-date">
                                        <a href="#">03 April, 2021</a>
                                    </span>
                                    <span>10 min read</span>
                                </div>
                            </div>
                        </div><!-- Single Most Populer Item End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Related Post Area End -->

    <!-- Comment Area Start -->
    <div class="comment-area section-space--pt_60 section-space--pb_100">
        <div class="container">


            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="comment-list-wrapper">

                        <h3 class="widget-title mb-30">Comments (3) </h3>
                        <ol class="comment-list">
                            <li class="comment">
                                <div class="comment-2">
                                    <div class="comment-author-info">
                                        <div class="comment-author vcard">
                                            <img alt="" src="assets/images/comments/comments-1.png">
                                        </div>
                                        <div class="comment-content">
                                            <div class="meta">
                                                <div class="comment-content-top">
                                                    <div class="comment-actions">
                                                        <h6 class="fn">Edna Watson</h6>
                                                        <div class="comment-datetime"> Product Designer, USA</div>
                                                        <span class="separator">||</span> <span class="time">35 minutes ago </span>
                                                    </div>
                                                </div>
                                                <a class="comment-reply-link" href="#"><i class="icofont-reply"></i>
                                                    Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-text">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the
                                            majority have suffered alteration in some form
                                            humour, or randomised words which don't look even slightly believable. If
                                            you are going to use a passage of orem psum
                                            to be sure there isn't anything embarrassing.</p>
                                    </div>
                                </div>
                                <ol class="children">
                                    <li class="comment ">
                                        <div class="comment-reply-wrap">
                                            <div class="comment-author-info">
                                                <div class="comment-author vcard">
                                                    <img alt="" src="assets/images/comments/comments-2.png">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="meta">
                                                        <div class="comment-content-top">
                                                            <div class="comment-actions">
                                                                <h6 class="fn">Robert Morgan</h6>
                                                                <div class="comment-datetime"> Product Designer, USA
                                                                </div>
                                                                <span class="separator">||</span> <span class="time">35 minutes ago </span>
                                                            </div>
                                                        </div>
                                                        <a class="comment-reply-link" href="#"><i
                                                                class="icofont-reply"></i> Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-text">
                                                <p>There are many variations of passages of Lorem Ipsum available, but
                                                    the majority have suffered alteration in
                                                    humour, or randomised words which don't look even slightly
                                                    believable. If you are going to use a passage
                                                    to be sure there isn't anything embarrassing.</p>
                                            </div>
                                        </div>
                                    </li><!-- comment End -->
                                    <li class="comment ">
                                        <div class="comment-reply-wrap">
                                            <div class="comment-author-info">
                                                <div class="comment-author vcard">
                                                    <img alt="" src="assets/images/comments/comments-3.png">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="meta">
                                                        <div class="comment-content-top">
                                                            <div class="comment-actions">
                                                                <h6 class="fn">Rochelle Hunt</h6>
                                                                <div class="comment-datetime"> Product Designer, USA
                                                                </div>
                                                                <span class="separator">||</span> <span class="time">35 minutes ago </span>
                                                            </div>
                                                        </div>
                                                        <a class="comment-reply-link" href="#"><i
                                                                class="icofont-reply"></i> Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-text">
                                                <p>There are many variations of passages of Lorem Ipsum available, but
                                                    the majority have suffered alteration in
                                                    humour, or randomised words which don't look even slightly
                                                    believable. If you are going to use a passage
                                                    to be sure there isn't anything embarrassing.</p>
                                            </div>
                                        </div>
                                    </li><!-- comment End -->
                                </ol><!-- children End -->
                            </li><!-- comment End-->

                        </ol>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="section-title">
                        <h3 class="title">Leave a comment</h3>
                    </div>
                    <form action="#" class="comment-form-area">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <input type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <input type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-input">
                                    <textarea placeholder="Massage"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="submit-button text-center">
                                    <button class="btn-large btn-bg-6 btn-primary" type="submit"> Submit Now <i
                                            class="icofont-long-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Comment Area End -->


</div>
