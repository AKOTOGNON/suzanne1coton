@extends('front.layouts.template')
@section('content')
    <section class="main-slider clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url({{ asset('front/assets/images/backgrounds/image38.jpg') }});"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">We are Producing Natural Products</p>
                                        <h2 class="main-slider__title">Agriculture.</h2>
                                        <div class="main-slider__btn-box">
                                            <a href="about.html" class="thm-btn main-slider__btn">Discover More <i
                                                    class="icon-right-arrow"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url({{ asset('front/assets/images/backgrounds/image43.jpg') }});"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">We are Producing Natural Products</p>
                                        <h2 class="main-slider__title">Agriculture.</h2>
                                        <div class="main-slider__btn-box">
                                            <a href="about.html" class="thm-btn main-slider__btn">Discover More <i
                                                    class="icon-right-arrow"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url({{ asset('front/assets/images/backgrounds/image50.jpg') }});"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">We are Producing Natural Products</p>
                                        <h2 class="main-slider__title">Agriculture.</h2>
                                        <div class="main-slider__btn-box">
                                            <a href="about.html" class="thm-btn main-slider__btn">Discover More <i
                                                    class="icon-right-arrow"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="swiper-pagination" id="main-slider-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-right-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->

        <!--Feature One Start-->
        <section class="feature-one">
            <div class="container">
                <div class="row">
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <span class="icon-farm"></span>
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title">the Best Quality <br> Standards</h3>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <span class="icon-agriculture"></span>
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title">a Smart organic <br> services</h3>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                    <!--Feature One Single Start-->
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="feature-one__single">
                            <div class="feature-one__icon">
                                <span class="icon-harvest"></span>
                            </div>
                            <div class="feature-one__content">
                                <h3 class="feature-one__title">Natural Healthy <br> prodducts</h3>
                            </div>
                        </div>
                    </div>
                    <!--Feature One Single End-->
                </div>
            </div>
        </section>
        <!--Feature One End-->

        <!--About One Start-->

        <!--About One End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="services-one__bg" style="background-image: url({{ asset('front/assets/images/shapes/services-one-shape-1.png') }});">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">What We’re Doing</span>
                    <h2 class="section-title__title">Services We’re offering</h2>
                    <div class="section-title__icon">
                        <img src="{{ asset('front/assets/images/icon/section-title-icon-1.png') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="{{ asset('front/assets/images/services/image21.jpg') }}" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-tractor"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="agriculture-products.html">Agriculture <br>
                                        Products</a></h3>
                                <p class="services-one__text"></p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="{{ asset('front/assets/images/services/image45.jpg') }}" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-organic-food"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="organic-products.html">Organic
                                        <br> Products</a></h3>
                                <p class="services-one__text"></p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms">
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="{{ asset('front/assets/images/services/image46.jpg') }}" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-vegetables"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="">La
                                        <br> Culture</a></h3>
                                <p class="services-one__text"></p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                    <!--Services One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="400ms">
                        <div class="services-one__single">
                            <div class="services-one__img-box">
                                <div class="services-one__img">
                                    <img src="{{ asset('front/assets/images/services/image46.jpg') }}" alt="">
                                </div>
                                <div class="services-one__icon">
                                    <span class="icon-dairy"></span>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="">La
                                        <br> Culture</a></h3>

                                <p class="services-one__text"></p>
                            </div>
                        </div>
                    </div>
                    <!--Services One Single End-->
                </div>
            </div>
        </section>
        <!--Services One End-->


        <!--Brand One End-->

        <!--Unbeatable One Start-->
        <section class="unbeatable-one">
            <div class="unbeatable-one__bg  jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url({{ asset('front/assets/images/backgrounds/image43.jpg') }});"></div>
            <div class="container">
                <div class="unbeatable-one__inner text-center">
                    <div class="unbeatable-one__content">
                        <div class="unbeatable-one__shape-one wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <img src="{{ asset('front/assets/images/shapes/unbeatable-shape-1.png') }}" alt="" class="float-bob-y">
                        </div>
                        <div class="unbeatable-one__shape-two wow slideInRight" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <img src="{{ asset('front/assets/images/shapes/unbeatable-shape-2.png') }}" alt="" class="float-bob-y">
                        </div>
                        <p class="unbeatable-one__tagline">le champ de coton</p>
                        <h3 class="unbeatable-one__title">Unbeatable Organic and
                            <br> Agriculture Services</h3>

                    </div>
                </div>
            </div>
        </section>


        <!--Counter One Start-->
        <section class="counter-one">
            <div class="counter-one__bg" style="background-image: url({{ asset('front/assets/images/shapes/counter-one-shape-3.png') }});">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="counter-one__inner">
                            <ul class="list-unstyled counter-one__list">
                                <li class="counter-one__single wow fadeInLeft" data-wow-delay="100ms">
                                    <div class="counter-one__icon">
                                        <span class="icon-seeds"></span>
                                        <div class="counter-one__shape-one">
                                            <img src="{{ asset('front/assets/images/shapes/counter-one-shape-1.png') }}" alt="">
                                        </div>
                                        <div class="counter-one__shape-two">
                                            <img src="{{ asset('front/assets/images/shapes/counter-one-shape-2.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="counter-one__content-box count-box">
                                        <h3 class="count-text" data-stop="6420" data-speed="1500">00</h3>
                                        <p class="counter-one__text">Agriculture Products</p>
                                    </div>
                                </li>
                                <li class="counter-one__single wow fadeInLeft" data-wow-delay="200ms">
                                    <div class="counter-one__icon">
                                        <span class="icon-cotton"></span>
                                        <div class="counter-one__shape-one">
                                            <img src="{{ asset('front/assets/images/shapes/counter-one-shape-1.png') }}" alt="">
                                        </div>
                                        <div class="counter-one__shape-two">
                                            <img src="{{ asset('front/assets/images/shapes/counter-one-shape-2.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="counter-one__content-box count-box">
                                        <h3 class="count-text" data-stop="8800" data-speed="1500">00</h3>
                                        <p class="counter-one__text">Projects completed</p>
                                    </div>
                                </li>
                                <li class="counter-one__single wow fadeInLeft" data-wow-delay="300ms">
                                    <div class="counter-one__icon">
                                        <span class="icon-customer"></span>
                                        <div class="counter-one__shape-one">
                                            <img src="{{ asset('front/assets/images/shapes/counter-one-shape-1.png') }}" alt="">
                                        </div>
                                        <div class="counter-one__shape-two">
                                            <img src="{{ asset('front/assets/images/shapes/counter-one-shape-2.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="counter-one__content-box count-box">
                                        <h3 class="count-text" data-stop="9360" data-speed="1500">00</h3>
                                        <p class="counter-one__text">satisfied customers</p>
                                    </div>
                                </li>
                                <li class="counter-one__single wow fadeInLeft" data-wow-delay="400ms">
                                    <div class="counter-one__icon">
                                        <span class="icon-farmer"></span>
                                        <div class="counter-one__shape-one">
                                            <img src="{{ asset('front/assets/images/shapes/counter-one-shape-1.png') }}" alt="">
                                        </div>
                                        <div class="counter-one__shape-two">
                                            <img src="{{ asset('front/assets/images/shapes/counter-one-shape-2.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="counter-one__content-box count-box">
                                        <h3 class="count-text" data-stop="1070" data-speed="1500">00</h3>
                                        <p class="counter-one__text">Expert farmers</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Counter One End-->

        <!--Call One Start-->

        <!--Call One End-->

        <!--Project One Start-->
        <section class="project-one">
            <div class="project-one__bg float-bob-y-2"
                style="background-image: url({{ asset('front/assets/images/shapes/project-one-shape-1.png') }});">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Our Latest Projects</span>
                    <h2 class="section-title__title">Recently completed Projects</h2>
                    <div class="section-title__icon">
                        <img src="{{ asset('front/assets/images/icon/section-title-icon-1.png') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <!--Project One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="project-one__single">
                            <div class="project-one__inner">
                                <div class="project-one__img">
                                    <img src="{{ asset('front/assets/images/project/image55.jpg') }}" alt="">
                                </div>

                                <div class="project-one__content">
                                    <span class="project-one__tagline">healthy</span>
                                    <h3 class="project-one__title"><a href="project-details.html">organic
                                            <br> solutions</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single Start-->
                    <!--Project One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="project-one__single">
                            <div class="project-one__inner">
                                <div class="project-one__img">
                                    <img src="{{ asset('front/assets/images/project/image56.jpg') }}" alt="">
                                </div>


                            </div>
                        </div>
                    </div>
                    <!--Project One Single Start-->
                    <!--Project One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="project-one__single">
                            <div class="project-one__inner">
                                <div class="project-one__img">
                                    <img src="{{ asset('front/assets/images/project/image61.jpg') }}" alt="">
                                </div>
                                <div class="project-one__arrow">
                                    <a href="project-details.html"><i class="icon-right-arrow"></i></a>
                                </div>
                                <div class="project-one__content">
                                    <span class="project-one__tagline">organic</span>
                                    <h3 class="project-one__title"><a href="project-details.html">Agriculture
                                            <br> farming</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single Start-->
                    <!--Project One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="project-one__single">
                            <div class="project-one__inner">
                                <div class="project-one__img">
                                    <img src="{{ asset('front/assets/images/project/image61.jpg') }}" alt="">
                                </div>
                                <div class="project-one__arrow">
                                    <a href="project-details.html"><i class="icon-right-arrow"></i></a>
                                </div>
                                <div class="project-one__content">
                                    <span class="project-one__tagline">solution</span>
                                    <h3 class="project-one__title"><a href="">the Farming
                                            <br> season</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single Start-->
                </div>
            </div>
        </section>
        <!--Project One End-->

        <!--Contact One Start-->

        <!--Contact One End-->

        <!--Blog One Start-->
        <section class="blog-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">From the Blog Post</span>
                    <h2 class="section-title__title">Latest News & Articles</h2>
                    <div class="section-title__icon">
                        <img src="{{ asset('front/assets/images/icon/section-title-icon-1.png') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="{{ asset('front/assets/images/blog/image30.jpg') }}" alt="">
                                <div class="blog-one__date">
                                    <span>28</span>
                                    <p>Aug</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href=""><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fas fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="">Why Agriculture & Eco is for the
                                        Envoirment</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="{{ asset('front/assets/images/blog/image31.jpg') }}" alt="">
                                <div class="blog-one__date">
                                    <span>28</span>
                                    <p>Aug</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href=""><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fas fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="">Wheat Harvest Organic Gather
                                        nice Moment</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="{{ asset('front/assets/images/blog/image26.jpg') }}" alt="">
                                <div class="blog-one__date">
                                    <span>28</span>
                                    <p>Aug</p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href=""><i class="fas fa-user-circle"></i>Admin</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fas fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="">Agriculture Matters to the
                                        Future of World</a></h3>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                </div>
            </div>
        </section>
        <!--Blog One End-->

        <!--Cta One Start-->
        <section class="cta-one">
            <div class="cta-one__bg" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url({{ asset('front/assets/images/backgrounds/cta-one-bg.jpg') }});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-one__inner">
                            <div class="cta-one__left">
                                <div class="cta-one__icon">
                                    <span class="icon-agriculture-2"></span>
                                </div>
                                <h3 class="cta-one__title">We’re popular leader in agriculture <br> & Organic market.
                                </h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
