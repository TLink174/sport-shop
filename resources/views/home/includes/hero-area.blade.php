<div class="hero-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-inner-area">
                    <!-- Hero Category Area Start -->
                    <div class="hero-category-area">
                        @for($i=0;$i<count($categories) && $i < 3;$i++)
                            <a href="category.html" class="single-hero-category-item img-fluid"
                               data-aos="fade-up">
                                <img
                                    src="{{$categories[$i]->image_path ?? 'http://localhost:8000/storage/photos/11/lam-game-othellochoi-voi-may-63725758744.3206.jpg'}}"
                                    alt="">
                                <div class="hero-category-inner-box">
                                    <h3 class="title">{{$categories[$i] -> name}}</h3>
                                    <i class="icon icofont-long-arrow-right"></i>
                                </div>
                            </a>
                        @endfor

                    </div><!-- Hero Category Area End -->

                    <!-- Hero Banner Area Start -->
                    <div class="hero-banner-area" data-aos="fade-up">
                        <a href="blog-details.html">
                            <img src="{{asset('/home_d/assets/images/hero/hero-01.jpg')}}" alt="">
                        </a>
                    </div><!-- Hero Banner Area End -->

                    <div class="hero-blog-post">
                        @for($i=0;$i<count($blogs) && $i < 2;$i++)
                            @php
                                $blog = $blogs[$i];
                            @endphp
                            <div class="single-hero-blog-post" data-aos="fade-up">
                                <div class="hero-blog-post-top">
                                    <div class="hero-blog-post-category">
                                        <a href="#" class="tech">{{$blog -> category -> name}}</a>
                                    </div>
                                    <div class="hero-blog-post-author">
                                        By <a href="#">{{ucfirst($blog -> user -> name)}}</a>
                                    </div>
                                </div>
                                <h3 class="hero-blog-post-title">
                                    <a href="{{route('home.detail', $blog->id)}}">{{$blog->title}}</a>
                                </h3>
                                <p class="post-short-details">
                                    {{$blog->description}}
                                </p>
                                <div class="hero-blog-post-meta">
                                    <div class="post-meta">
                                                <span class="post-date">
                                                <i class="icofont-ui-calendar"></i>
                                                <a href="#">03 April, 2021</a>
                                            </span>
                                        <span>10 min read</span>
                                    </div>
                                    <div class="post-meta-right-side">
                                        <a href="#"><img src="assets/images/icons/small-bookmark.png"
                                                         alt=""/></a>
                                        <a href="#"><img src="assets/images/icons/heart.png" alt=""/></a>
                                    </div>
                                </div>
                            </div><!-- Single-hero-blog-post End -->
                        @endfor
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> <!-- Hero Area End -->
