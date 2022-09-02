<div class="container mt-40 mb-40">
    <div class="col-9">
        <div class="section-title-three mb-30">
            <h3 class="title">Trending Today’s</h3>
        </div>
    </div>
    <div class=" mt-40 mb-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="section-title-three">Trending page</h3>
                    </div>
                </div>
            </div>
            <div class="row row--30">

                @foreach($blogs as $blog)
                    @if($blog->status == 1)
                    <div class="col-lg-4 col-md-6">
                        <!-- Single Most Populer Item Start -->
                        <div class="single-most-populer-item">
                            <a href="{{route('home.detail', $blog->id)}}" class="most-populer-thum">
                                <img src="{{$blog->image_path}}" alt="">
                            </a>
                            <div class="most-populer-content">
                                <div class="most-populer-post-author">
                                    By <a href="#">{{$blog->user -> name}}</a>
                                </div>
                                <h4 class="title"><a href="{{route('home.detail', $blog->id)}}">{{$blog -> title}}</a>
                                </h4>
                                <p class="dec mt-2">{{$blog -> description}}</p>
                                <div class="most-populer-post-meta">
                                        <span class="post-date">
                                        <a href="#">03 April, 2021</a>
                                    </span>
                                    <span>10 min read</span>
                                </div>
                            </div>
                        </div><!-- Single Most Populer Item End -->
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="button-box text-center mt-5">
                        <a href="#" class="btn-large btn-bg-6 btn-primary"> Show More <i
                                class="icofont-long-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-40 mb-40">
    <div class="col-9">
        <div class="section-title-three mb-30">
            <h3 class="title">Trending Today’s</h3>
        </div>
    </div>
    @foreach($categories as $category)
        @if($category ->blogs -> count() > 0)
            <div class=" mt-40 mb-40">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title text-center">
                                <h3 class="section-title-three">{{$category -> name}}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row row--30">

                        @foreach($category ->blogs as $blog)
                            @if($blog->status == 1)
                            <div class="col-lg-4 col-md-6">
                                <!-- Single Most Populer Item Start -->
                                <div class="single-most-populer-item">
                                    <a href="{{route('home.detail', $blog->id)}}" class="most-populer-thum">
                                        <img src="{{$blog->image_path}}" alt="">
                                    </a>
                                    <div class="most-populer-content">
                                        <div class="most-populer-post-author">
                                            By <a href="#">{{$blog->user -> name}}</a>
                                        </div>
                                        <h4 class="title"><a href="{{route('home.detail', $blog->id)}}">{{$blog -> title}}</a>
                                        </h4>
                                        <p class="dec mt-2">{{$blog -> description}}</p>
                                        <div class="most-populer-post-meta">
                                        <span class="post-date">
                                        <a href="#">03 April, 2021</a>
                                    </span>
                                            <span>10 min read</span>
                                        </div>
                                    </div>
                                </div><!-- Single Most Populer Item End -->
                            </div>
                            @endif
                        @endforeach

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="button-box text-center mt-5">
                                <a href="#" class="btn-large btn-bg-6 btn-primary"> Show More <i
                                        class="icofont-long-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
</div>

<!-- Bottom Add Banner Area Start -->
<div class="bottom-add-banner-area section-space--pb_80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="#" class="bottom-add-banner-box" data-aos="fade-up">
                    <img src="{{asset('/home_d/assets/images/banners/bottom-add-banner.jpg')}}" alt="">
                    <h6 class="bottom-add-text">All Food Item
                        <span>50% Off</span>
                    </h6>
                </a>
            </div>
        </div>
    </div>
</div> <!-- Bottom Add Banner Area End -->
