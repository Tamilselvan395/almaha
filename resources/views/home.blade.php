@extends('layouts.app')

@section('meta_title', $meta_details->index_meta_title ?? '')
@section('meta_description', $meta_details->index_meta_description ?? '')
@section('schema')
    {!! $meta_details->index_schema ?? '' !!}
@endsection

@section('content')


    <!-- Intro Section  S T A R T -->
    <div class="intro-section fix">
        <div class="slider-area introSliderOne">
            <div class="swiper gt-slider" id="introSliderOne" data-slider-options='{"loop": true, "effect": "fade"}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="intro-wrapper style1 fix  section-padding bg-img">
                            <!-- <div class="shape"><img src="assets/images/shape/heroShape1_1.png" alt="shape"></div> -->
                            <div class="gt-hero-bg" data-bg-src="assets/images/shape/hero-2.png"></div>
                            <div class="container">
                                <div class="intro-content-wrapper style1" data-animation="slideInLeft" data-duration="2s"
                                    data-delay="0.3s">
                                    <div class="row gy-5 d-flex align-items-center">
                                        <div class="col-xl-6">
                                            <div class="intro-content">
                                                <div class="section-title text-start  mt-70">
                                                    <div class="subtitle text-start"
                                                        data-ani="slideindown"data-ani-delay="0.3s">
                                                        <img class="me-1"src="assets/images/shape/titleShape1_1.png"
                                                            alt="icon">QUALITY & DESIGN EXCELLENCE
                                                    </div>
                                                    <h1 class="text-start mt-15" data-ani="slideindown"
                                                        data-ani-delay="0.5s">Premium Tile and Sanitary Ware Supplier in
                                                        Dubai</h1>
                                                    <p class="desc" data-ani="slideinup" data-ani-delay="0.8s">Al Maha
                                                        Building Materials has been Dubai's trusted source for premium
                                                        tiles, sanitary ware, and building materials since 2009. As a direct
                                                        tiles supplier, we import porcelain tiles, marble, granite, natural
                                                        stone, and swimming pool tiles directly from manufacturers across
                                                        Europe and Asia, giving contractors, developers, and homeowners
                                                        access to quality building material in Dubai at highly competitive
                                                        prices. </p>
                                                </div>


                                                <div class="btn-wrapper style2" data-ani="slideinup" data-ani-delay="1s">
                                                    <a href="contact.php" class="theme-btn style3">
                                                        EXPLORE US
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="41"
                                                            height="26" viewBox="0 0 41 26" fill="none">
                                                            <rect width="1" height="26" fill="#2B1E16"></rect>
                                                            <path
                                                                d="M40.7071 13.7071C41.0976 13.3166 41.0976 12.6834 40.7071 12.2929L34.3431 5.92893C33.9526 5.53841 33.3195 5.53841 32.9289 5.92893C32.5384 6.31946 32.5384 6.95262 32.9289 7.34315L38.5858 13L32.9289 18.6569C32.5384 19.0474 32.5384 19.6805 32.9289 20.0711C33.3195 20.4616 33.9526 20.4616 34.3431 20.0711L40.7071 13.7071ZM15 14H40V12H15V14Z"
                                                                fill="#2B1E16"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="intro-thumb" data-ani="slideinright" data-ani-delay="0.7s">
                                                <img src="assets/images/hero/slider-1.png" alt="thumb">

                                                <!-- <div class="video-wrap ripple-effect rounded-0">
                                                                                                                                                                    <a href="https://www.youtube.com/watch?v=f2Gzr8sAGB8"
                                                                                                                                                                        class="play-btn popup-video"><img class="playerImg"
                                                                                                                                                                            src="assets/images/icon/playerIcon1_2.svg" alt="icon"></a>
                                                                                                                                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="intro-wrapper style1 fix  section-padding bg-img">
                            <div class="shape"><img src="assets/images/shape/heroShape1_1.png" alt="shape"></div>
                            <div class="gt-hero-bg" data-bg-src="assets/images/bg/introBg1_1.jpg"></div>
                            <div class="container">
                                <div class="intro-content-wrapper style1" data-animation="slideInLeft" data-duration="2s"
                                    data-delay="0.3s">
                                    <div class="row gy-5 d-flex align-items-center">
                                        <div class="col-xl-6">
                                            <div class="intro-content">
                                                <div class="section-title text-start  mt-70">
                                                    <div class="subtitle text-start"
                                                        data-ani="slideindown"data-ani-delay="0.3s">
                                                        <img class="me-1"src="assets/images/shape/titleShape1_1.png"
                                                            alt="icon">OUR GROWING TILE COLLECTION
                                                    </div>
                                                    <h1 class="text-start mt-15" data-ani="slideindown"
                                                        data-ani-delay="0.5s">Expanding Our Tile Collections For You</h1>
                                                    <p class="desc" data-ani="slideinup" data-ani-delay="0.8s">We
                                                        continuously develop and promote our own tile collections to reach
                                                        more customers and meet evolving design and project demands.</p>
                                                </div>


                                                <div class="btn-wrapper style2" data-ani="slideinup" data-ani-delay="1s">
                                                    <a href="contact.php" class="theme-btn style3">
                                                        VIEW COLLECTIONS
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="41"
                                                            height="26" viewBox="0 0 41 26" fill="none">
                                                            <rect width="1" height="26" fill="#2B1E16"></rect>
                                                            <path
                                                                d="M40.7071 13.7071C41.0976 13.3166 41.0976 12.6834 40.7071 12.2929L34.3431 5.92893C33.9526 5.53841 33.3195 5.53841 32.9289 5.92893C32.5384 6.31946 32.5384 6.95262 32.9289 7.34315L38.5858 13L32.9289 18.6569C32.5384 19.0474 32.5384 19.6805 32.9289 20.0711C33.3195 20.4616 33.9526 20.4616 34.3431 20.0711L40.7071 13.7071ZM15 14H40V12H15V14Z"
                                                                fill="#2B1E16"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="intro-thumb" data-ani="slideinright" data-ani-delay="0.7s">
                                                <img src="assets/images/hero/slider-2.png" alt="thumb">

                                                <!-- <div class="video-wrap ripple-effect rounded-0">
                                                                                                                                                                    <a href="https://www.youtube.com/watch?v=f2Gzr8sAGB8"
                                                                                                                                                                        class="play-btn popup-video"><img class="playerImg"
                                                                                                                                                                            src="assets/images/icon/playerIcon1_2.svg" alt="icon"></a>
                                                                                                                                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider-arrow-btn text-end wow fadeInUp" data-wow-delay=".9s">
                    <button data-slider-prev="#introSliderOne" class="slider-arrow style1 slider-prev"><i
                            class="fa-solid fa-arrow-left-long"></i></button>
                    <button data-slider-next="#introSliderOne" class="slider-arrow style1 slider-next"><i
                            class="fa-solid fa-arrow-right-long"></i></button>
                </div>
                <div class="pagination-class swiper-pagination"></div>
            </div>
        </div>
    </div>

    <!-- About Section    S T A R T -->
    <section class="about-section section-padding fix">
        <div class="about-container-wrapper style1 bg-white">
            <div class="shape1"><img src="assets/images/shape/aboutshape1_1.png" alt="shape"></div>
            <div class="shape2"><img src="assets/images/shape/aboutshape1_2.png" alt="shape"></div>
            <div class="container">
                <div class="about-wrapper style1">
                    <div class="row gy-5 gx-60">
                        <div class="col-xl-6">
                            <div class="about-thumb">
                                <div class="thumbShape"><img src="assets/images/shape/aboutThumbshape1_1.png"
                                        alt="thumbshape"></div>
                                <img class="thumb1 img-custom-anim-left wow fadeInUp" data-wow-delay=".3s"
                                    src="assets/images/hero/about-2.png" alt="thumb">
                                <img class="thumb2 img-custom-anim-top wow fadeInUp" data-wow-delay=".7s"
                                    src="assets/images/hero/about-1.png" alt="thumb">
                                <!-- <div class="video-wrap ripple-effect rounded-0">
                                                                                                                                                    <a href="https://www.youtube.com/watch?v=f2Gzr8sAGB8"
                                                                                                                                                        class="play-btn popup-video"><img class="playerImg"
                                                                                                                                                            src="assets/images/icon/playerIcon1_1.svg" alt="icon"></a>
                                                                                                                                                </div> -->
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="about-content">
                                <div class="section-title text-start  mt-70">
                                    <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s"> <img
                                            class="me-1" src="assets/images/shape/titleShape1_1.png" alt="icon">
                                        TILE & SURFACE SPECIALISTS </div>
                                    <h2 class=" text-start mt-15 wow fadeInUp" data-wow-delay=".3s">Trusted Tile & Surface
                                        Solutions in Dubai</h2>
                                    <p class="desc wow fadeInUp" data-wow-delay=".7s">Al Maha is one of Dubai's trusted
                                        building material suppliers, offering premium porcelain tiles, marble, granite,
                                        natural stone, swimming pool tiles, outdoor surfaces, cladding materials, and
                                        sanitary ware for residential, commercial, and large-scale construction projects
                                        across the UAE. We source our products directly from leading international
                                        manufacturers to ensure consistent quality, competitive pricing, and reliable
                                        availability. Visit our showroom in Al Qusais Industrial Area 3 to explore our
                                        complete collection in person.</p>
                                </div>
                                <div class="row exp-area">
                                    <div class="col-xl-5">
                                        <div class="counter-box style1 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="counter">
                                                <span class="counter-number"> 15 </span> <span>+</span>
                                            </div>
                                            <p>Years in the UAE Market</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-7">
                                        <div class="progress-wrap style1 wow fadeInUp" data-wow-delay=".2s">
                                            <div class="progress-meta">
                                                <div class="title">Flooring Work</div>
                                                <div class="percentage">90%</div>
                                            </div>
                                            <div class="progress-container">
                                                <div class="progress-bar" style="width: 90%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gy-3 fancy-box-area">
                                    <div class="col-xl-6">
                                        <div class="fancy-box style1 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="icon"><img src="assets/images/icon/aboutIcon1_1.svg"
                                                    alt="icon">
                                            </div>
                                            <h4>Interior & Exterior Tile Applications</h4>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="fancy-box style1 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="icon"><img src="assets/images/icon/aboutIcon1_2.svg"
                                                    alt="icon">
                                            </div>
                                            <h4>Modern & Luxurious Tile Finishes</h4>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="btn-wrapper style2 wow fadeInUp" data-wow-delay=".5s">
                                                                                                                                                    <a href="about.html" class="theme-btn style3">
                                                                                                                                                        EXPLORE MORE
                                                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="41" height="26"
                                                                                                                                                            viewBox="0 0 41 26" fill="none">
                                                                                                                                                            <rect width="1" height="26" fill="#2B1E16"></rect>
                                                                                                                                                            <path
                                                                                                                                                                d="M40.7071 13.7071C41.0976 13.3166 41.0976 12.6834 40.7071 12.2929L34.3431 5.92893C33.9526 5.53841 33.3195 5.53841 32.9289 5.92893C32.5384 6.31946 32.5384 6.95262 32.9289 7.34315L38.5858 13L32.9289 18.6569C32.5384 19.0474 32.5384 19.6805 32.9289 20.0711C33.3195 20.4616 33.9526 20.4616 34.3431 20.0711L40.7071 13.7071ZM15 14H40V12H15V14Z"
                                                                                                                                                                fill="#2B1E16"></path>
                                                                                                                                                        </svg>
                                                                                                                                                    </a>
                                                                                                                                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Section    S T A R T -->
    <section class="service-section section-padding position-relative fix"
        data-bg-src="assets/images/bg/serviceBg1_1.jpg">
        <div class="container">
            <div class="row d-flex align-items-end  mb-50">
                <div class="col-xl-6">
                    <div class="section-title text-start">
                        <div class="subtitle text-start text-white wow fadeInUp" data-wow-delay=".5s"> <img
                                class="me-1" src="assets/images/shape/titleShape1_1.png" alt="icon"> QUALITY
                            MATERIALS </div>
                        <h2 class="text-white text-start mt-15 wow fadeInUp" data-wow-delay=".3s">Trusted Tile Products
                            for Every Project</h2>
                    </div>
                </div>
                <div class="col-xl-6 d-flex mt-4 mt-xl-0 justify-content-start justify-content-xl-end">
                    <div class="slider-arrow-btn text-end wow fadeInUp" data-wow-delay=".9s">
                        <button data-slider-prev="#serviceSliderOne" class="slider-arrow style1"><i
                                class="fa-solid fa-arrow-left-long"></i></button>
                        <button data-slider-next="#serviceSliderOne" class="slider-arrow style1 slider-next"><i
                                class="fa-solid fa-arrow-right-long"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-container-wrapper style1">
            <div class="container">
                <div class="slider-area serviceSliderOne">
                    <div class="swiper gt-slider" id="serviceSliderOne"
                        data-slider-options='{"loop": true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1,"centeredSlides":true},"768":{"slidesPerView":1},"1025":{"slidesPerView":3},"1500":{"slidesPerView":4}}}'>

                        <div class="swiper-wrapper">

                            @foreach ($categories as $category)
                                <div class="swiper-slide">
                                    <div class="service-card style1 img-custom-anim-left wow fadeInUp">
                                        <div class="thumb">
                                            <img src="{{ Storage::url($category->image) }}"
                                                alt="{{ $category->alt ?? $category->name }}">
                                        </div>

                                        <h3>
                                            <a href="{{ url('/category/' . $category->slug) }}">
                                                {{ $category->name }}
                                            </a>
                                        </h3>

                                        <a href="{{ url('/category/' . $category->slug) }}" class="theme-btn mt-3">
                                            Know More <i class="fal fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Offer Section    S T A R T -->
    @include('layouts/offer')

    <!-- Project Section    S T A R T -->
    <section class="project-section section-padding fix" data-bg-src="assets/images/bg/projectBg1_1.jpg">
        <div class="project-container-wrapper style1">
            <div class="container">
                <div class="row d-flex align-items-center  mb-50">
                    <div class="col-xl-6">
                        <div class="section-title text-start">
                            <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s"> <img class="me-1"
                                    src="assets/images/shape/titleShape1_1.png" alt="icon"> OUR PROJECT </div>
                            <h2 class=" text-start mt-15 wow fadeInUp" data-wow-delay=".3s">Discover our gallery of
                                recent works</h2>
                            <p class=" text-start mt-15 wow fadeInUp" data-wow-delay=".4s">Browse our completed projects
                                across Dubai and the UAE, featuring premium porcelain tiles,
                                cladding tiles, pool tiles, and outdoor tiles for residential and commercial spaces. Every
                                project reflects expert installation, quality craftsmanship, and on-time delivery</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper gt-slider projectSliderOne" id="projectSliderOne"
                    data-slider-options='{"loop": true, "breakpoints":{ "0": { "slidesPerView": 1,"spaceBetween": 100},"576":{"slidesPerView":1,"centeredSlides":true,"spaceBetween": 100},"768":{"slidesPerView":2},"992":{"slidesPerView":2},"1500":{"slidesPerView":5}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="project-thumb img-custom-anim-left wow fadeInUp" data-wow-delay=".3s">
                                <img class="w-100" src="assets/images/products/porcelain-tiles.jpg" alt="thumb">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-thumb img-custom-anim-right wow fadeInUp" data-wow-delay=".5s">
                                <img class="w-100" src="assets/images/products/swimming-pool-tiles.jpg" alt="thumb">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-thumb img-custom-anim-top wow fadeInUp" data-wow-delay=".7s">
                                <img class="w-100" src="assets/images/products/cladding-tiles.jpg" alt="thumb">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-thumb img-custom-anim-left wow fadeInUp" data-wow-delay=".5s">
                                <img class="w-100" src="assets/images/products/sanitary-ware.jpg" alt="thumb">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-thumb img-custom-anim-top wow fadeInUp" data-wow-delay=".8s">
                                <img class="w-100" src="assets/images/products/roofing.jpg" alt="thumb">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-thumb img-custom-anim-top wow fadeInUp" data-wow-delay=".8s">
                                <img class="w-100" src="assets/images/products/marbles-granite.jpg" alt="thumb">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-thumb img-custom-anim-top wow fadeInUp" data-wow-delay=".8s">
                                <img class="w-100" src="assets/images/products/solid-surface.jpg" alt="thumb">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-thumb img-custom-anim-top wow fadeInUp" data-wow-delay=".8s">
                                <img class="w-100" src="assets/images/products/tile-adhesive.jpg" alt="thumb">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wcu Section    S T A R T -->
    <section class="wcu-section section-padding fix">
        <div class="wcu-container-wrapper style1">
            <div class="shape"><img src="assets/images/shape/wcuShape1_1.png" alt="shape"></div>
            <div class="container">
                <div class="wcu-wrapper style1">
                    <div class="row gy-5 gx-60">
                        <div class="col-xl-6">
                            <div class="wcu-thumb img-custom-anim-left wow fadeInUp" data-wow-delay=".5s">
                                <img class="thumb1" src="assets/images/hero/why-choose-almaha.jpg" alt="thumb">
                                <img class="thumb2" src="assets/images/hero/why-choose-almaha-dubai.jpg" alt="thumb">

                                <div class="thumbShape1 float-bob-x"><img src="assets/images/shape/wcuThumbShape1_1.png"
                                        alt="shape"></div>
                                <div class="thumbShape2 float-bob-x"><img src="assets/images/shape/wcuThumbShape1_2.png"
                                        alt="shape"></div>
                                <div class="thumbShape3 float-bob-y"><img src="assets/images/shape/wcuThumbShape1_3.png"
                                        alt="shape"></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="wcu-content">
                                <div class="section-title text-start  mt-70">
                                    <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s"> <img
                                            class="me-1" src="assets/images/shape/titleShape1_1.png" alt="icon">
                                        OUR STRENGTHS </div>
                                    <h2 class=" text-start mt-15 wow fadeInUp" data-wow-delay=".8s">Why Choose Almaha</h2>
                                    <p class="desc wow fadeInUp" data-wow-delay=".7s">Almaha is a trusted name in tile and
                                        surface solutions, delivering quality materials and reliable service for
                                        residential, commercial, and project-based requirements across Dubai and the UAE.
                                        Our approach is built on consistency, expertise, and long-term value.</p>
                                </div>
                                <div class="fancy-box style2 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="fancy-item">
                                        <div class="icon">
                                            <img src="assets/images/icon/wcuIcon1_1.svg" alt="icon">
                                        </div>
                                    </div>
                                    <div class="fancy-item">
                                        <h4>15 Years of Supplying Dubai's Best Projects</h4>
                                        <p>Since 2009, Al Maha has been one of the most reliable building material
                                            suppliers, serving homeowners, contractors, architects, and developers on
                                            projects of every scale across the UAE.</p>
                                    </div>
                                </div>
                                <div class="fancy-box style2 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="fancy-item">
                                        <div class="icon">
                                            <img src="assets/images/icon/wcuIcon1_2.svg" alt="icon">
                                        </div>
                                    </div>
                                    <div class="fancy-item">
                                        <h4>Direct Import Pricing</h4>
                                        <p>As a direct Dubai tiles importer and one of the most trusted marble suppliers,
                                            granite suppliers, and natural stone suppliers, we source all materials straight
                                            from international manufacturers, which means lower prices and better quality
                                            control for our customers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5 gy-4">
                        <div class="col-lg-4 d-flex">
                            <div class="strength-card w-100">
                                <div class="icon-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="strength-icon">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                </div>
                                <h4 class="title">Complete Range Under One Roof</h4>
                                <p class="desc">As a trusted building materials supplier in Dubai, Al Maha provides
                                    luxury tiles, porcelain tiles, pool tiles, swimming pool tiles, outdoor tiles, sanitary
                                    ware, and premium surface solutions from a single reliable source, saving you time and
                                    simplifying procurement.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex">
                            <div class="strength-card w-100">
                                <div class="icon-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="strength-icon">
                                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                        <polyline points="2 17 12 22 22 17"></polyline>
                                        <polyline points="2 12 12 17 22 12"></polyline>
                                    </svg>
                                </div>
                                <h4 class="title">One Supplier, Full Service</h4>
                                <p class="desc">We are both a premium porcelain tile supplier and an experienced tile
                                    contractor in Dubai, handling supply, delivery, and fixing, so you deal with one team
                                    throughout your project.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex">
                            <div class="strength-card w-100">
                                <div class="icon-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="strength-icon">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                </div>
                                <h4 class="title">Showroom in Al Qusais</h4>
                                <p class="desc">Visit our Al Qusais showroom to browse hundreds of samples and finishes
                                    across our full collection of porcelain tiles, outdoor tiles, marble and granite, coping
                                    tiles, cladding tiles, and sanitary ware in person. Our team is there to help you find
                                    the right product for your project, not just make a sale.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facts Section    S T A R T -->
    <section class="facts-section pt-5 pb-5 fix bg-theme2">
        <div class="container">
            <div class="facts-wrapper style1">
                <div class="row">
                    <div class="facts-box-wrapper style1">
                        <div class="facts-box">
                            <h3> <span class="counter-number">15</span> <span>+</span></h3>
                            <p class="text">Years Experience</p>
                        </div>
                        <div class="facts-box">
                            <h3> <span class="counter-number">8</span> <span>+</span></h3>
                            <p class="text">Product Categories</p>
                        </div>
                        <div class="facts-box">
                            <h3> <span class="counter-number">500</span> <span>+</span></h3>
                            <p class="text">Projects Supported</p>
                        </div>
                        <div class="facts-box">
                            <h3> <span class="counter-number">2000</span> <span>+</span></h3>
                            <p class="text">Happy Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonial Section    S T A R T -->
    <div class="testimonial-section section-padding">
        <div class="testimonial-container-wrapper style1">
            <div class="shape1 d-none d-xxl-block">
                <img src="assets/images/shape/testimonialShape1_1.png" alt="shape">
            </div>
            <div class="shape2 d-none d-xxl-block">
                <img src="assets/images/shape/testimonialShape1_2.png" alt="shape">
            </div>

            <div class="container">
                <div class="row d-flex align-items-end mt-70 mb-60">
                    <div class="col-xl-6">
                        <div class="section-title text-start mxw-530">
                            <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s"> <img class="me-1"
                                    src="assets/images/shape/titleShape1_1.png" alt="icon"> CLIENT FEEDBACK </div>
                            <h2 class=" text-start mt-15 wow fadeInUp" data-wow-delay=".3s">What Do Our Clients Say</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 d-flex justify-content-start justify-content-xl-end mt-4 mt-xl-0">
                        <div class="slider-arrow-btn text-end wow fadeInUp" data-wow-delay=".9s">
                            <button data-slider-prev="#testimonialSliderOne" class="slider-arrow style1"><i
                                    class="fa-solid fa-arrow-left-long"></i></button>
                            <button data-slider-next="#testimonialSliderOne" class="slider-arrow style1 slider-next"><i
                                    class="fa-solid fa-arrow-right-long"></i></button>
                        </div>
                    </div>
                </div>

                <div class="slider-area testimonialSliderOne fix ">
                    <div class="swiper gt-slider" id="testimonialSliderOne"
                        data-slider-options='{"loop": true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1,"centeredSlides":true},"768":{"slidesPerView":1},"992":{"slidesPerView":2},"1200":{"slidesPerView":2}}}'>

                        <div class="swiper-wrapper">
                            <?php foreach ($testimonials as $t): ?>
                            <div class="swiper-slide">
                                <div class="testimonial-card-items style1 wow fadeInUp" data-wow-delay=".5s"
                                    data-bg-src="assets/images/bg/testimonialBg1_1.png">

                                    <div class="body">
                                        <p>
                                            <?= strlen($t['text']) > 120 ? rtrim(substr($t['text'], 0, 120)) . '...' : $t['text'] ?>
                                        </p>
                                    </div>

                                    <div class="profile-meta mt-3">
                                        <div class="content">
                                            <h6><?= $t['name'] ?></h6>
                                            <p><?= $t['role'] ?></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>


                        <div class="slider-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blog-section fix mb-5">
        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Why choose Al Maha as your tile supplier?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Al Maha Building Materials is a trusted tile supplier in Dubai with over 15 years of industry
                            experience. As one of the most established Dubai tiles companies and a leading building
                            materials supplier, we supply premium porcelain tiles, swimming pool tiles, outdoor tiles,
                            sanitary ware, marble, granite, and surface solutions for residential, commercial, and
                            construction projects across the UAE.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What types of tiles do you supply in Dubai?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            We supply a wide range of tiles, including porcelain tiles, swimming pool tiles, outdoor tiles,
                            cladding tiles, coping tiles, and decorative wall tiles suitable for residential, commercial,
                            and hospitality projects across the UAE.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Do you provide porcelain tiles in Dubai?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Yes. We offer premium porcelain tiles or flooring, walls, outdoor areas, and commercial
                            developments. Our collection is available in various sizes, finishes, colours, and designs to
                            suit every project requirement.

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            Do you offer swimming pool tiles in Dubai?
                        </button>
                    </h2>
                    <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Yes. Al Maha is a trusted swimming pool tiles company and swimming pool tiles supplier,
                            supplying high-quality pool tiles including anti-slip pool tiles designed for safety,
                            durability, and long-term performance in residential and commercial pools.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                            Do you supply sanitary ware in Dubai?
                        </button>
                    </h2>
                    <div id="collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Yes. As a trusted sanitary ware and sanitary supplier in Dubai, we offer quality sanitary ware
                            solutions for homes, offices, hotels, retail spaces, and large-scale construction projects
                            across the UAE.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                            Do you provide tile fixing services in Dubai?
                        </button>
                    </h2>
                    <div id="collapsesix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Yes. We offer professional tile fixing services in Dubai for residential, commercial, and
                            industrial projects. Our experienced tile fixing contractors ensure accurate installation, clean
                            finishes, and durable results.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                            Do you supply building materials across the UAE?
                        </button>
                    </h2>
                    <div id="collapseseven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Yes. As a leading building materials supplier and one of the most reliable building materials
                            suppliers in Dubai, we provide reliable supply and delivery of porcelain tiles, outdoor tiles,
                            pool tiles, marble, granite, and sanitary ware across Dubai, Abu Dhabi, Sharjah, Ajman, Ras Al
                            Khaimah, Fujairah, and other regions of the UAE.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                            Where is Al Maha located in Dubai?
                        </button>
                    </h2>
                    <div id="collapseeight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Al Maha Building Materials is located in Al Qusais Industrial Area 3, Dubai. Our showroom is
                            open for contractors, developers, and homeowners to view our full range of tiles, sanitary ware,
                            marble, granite, and surface solutions in person.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section    S T A R T -->
    <section class="shop-section">
        <div class="shop-container-wrapper style1 section-padding fix" data-bg-src="assets/images/bg/shopBg1_1.png">
            <div class="container">

                <div class="row gx-60 align-items-center">
                    <div class="col-lg-6 ">
                        <div class="skills-thumb img-custom-anim-left wow fadeInLeft" data-wow-delay=".5s">
                            <img src="assets/images/hero/contact-us.jpg" alt="thumb">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="section-title mb-3">
                            <div class=" text-start subtitle wow fadeInDown" data-wow-delay=".3s"> <img class="me-1"
                                    src="assets/images/shape/titleShape1_1.png" alt="icon"> GET IN TOUCH <img
                                    class="ms-1" src="assets/images/shape/titleShape1_2.png" alt="icon"> </div>
                            <h2 class="text-start mt-15 wow fadeInDown" data-wow-delay=".5s">Let's Discuss Our Project -
                                Form Submission
                            </h2>
                        </div>
                        <div class="contact-form style2">
                            @include('layouts/form')
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Blog Section    S T A R T -->
    <section class="blog-section fix section-padding">
        <div class="blog-container-wrapper style1">
            <div class="container">
                <div class="section-title text-center mb-20 mxw-660 mx-auto">
                    <div class="subtitle text-center wow fadeInUp" data-wow-delay=".5s"> <img class="me-1"
                            src="assets/images/shape/titleShape1_1.png" alt="icon"> NEWS ROOM <img class="ms-1"
                            src="assets/images/shape/titleShape1_2.png" alt="icon"> </div>
                    <h2 class=" text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Explore Our Latest Articles &
                        Industry Updates</h2>
                    <p>Discover useful information on tile selection, installation, maintenance, and the latest trends in
                        tiles and surface solutions in Dubai.</p>
                </div>

                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="blog-card-items style1 img-custom-anim-left wow fadeInUp" data-wow-delay=".2s">
                                <a href="{{ route('blog.detail', $blog->slug) }}">
                                    <div class="blog-image">
                                        <img src="{{ Storage::url($blog->image) }}" alt="img">
                                        <img src="{{ Storage::url($blog->image) }}" alt="img">
                                    </div>
                                    <div class="blog-meta">
                                        <div class="day">09</div>
                                        <div class="month">SEP</div>
                                    </div>
                                    <div class="blog-content">
                                        <h3><a href="{{ route('blog.detail', $blog->slug) }}">{{ $blog->title }}</a></h3>
                                        <ul>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path
                                                        d="M14.5442 5.19275C14.5442 7.69093 12.4996 9.7355 10.0014 9.7355C7.50327 9.7355 5.45869 7.69093 5.45869 5.19275C5.45869 2.69457 7.50323 0.65 10.0014 0.65C12.4996 0.65 14.5442 2.69458 14.5442 5.19275Z"
                                                        stroke="#C7844F" stroke-width="1.3" />
                                                    <path
                                                        d="M18.265 14.6706C18.1058 14.9458 17.9247 15.2073 17.7176 15.4766L17.7174 15.4765L17.7095 15.4873C17.421 15.8788 17.0852 16.2373 16.7301 16.5924C16.4332 16.8892 16.0939 17.186 15.7574 17.4385C14.0801 18.6911 12.0628 19.3499 9.97879 19.3499C7.89901 19.3499 5.88571 18.6938 4.21041 17.4461C3.84652 17.1504 3.51432 16.8792 3.22751 16.5924L3.22054 16.5854L3.21337 16.5787C2.85728 16.2436 2.54303 15.8877 2.2481 15.4874L2.24812 15.4873L2.24478 15.4829C2.06257 15.24 1.87385 14.9756 1.71984 14.7169C1.83683 14.4559 1.98519 14.1847 2.14586 13.9526L2.14597 13.9527L2.15349 13.9413C3.07049 12.5556 4.5377 11.6388 6.16707 11.4148L6.18665 11.4121L6.20603 11.4082C6.23151 11.4031 6.29559 11.4117 6.34612 11.4496L6.34611 11.4496L6.35012 11.4525C7.41715 12.2401 8.68694 12.6453 10.0014 12.6453C11.3159 12.6453 12.5857 12.2401 13.6528 11.4525L13.6528 11.4525L13.6568 11.4496C13.6722 11.438 13.741 11.408 13.8498 11.4167C15.4695 11.6435 16.9128 12.5568 17.8531 13.9468L17.853 13.9469L17.857 13.9526C18.0172 14.1839 18.1563 14.4231 18.265 14.6706Z"
                                                        stroke="#C7844F" stroke-width="1.3" />
                                                </svg>
                                                By Admin
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <g clip-path="url(#clip0_111_92)">
                                                        <path
                                                            d="M8.05669 18.75H8.05507C7.46835 18.7495 6.9166 18.5207 6.5019 18.1052L0.660372 12.2553C-0.194042 11.3994 -0.194042 10.0065 0.660372 9.15058L8.53481 1.26102C9.34633 0.44792 10.4261 0 11.5751 0H16.571C17.7825 0 18.7682 0.985546 18.7682 2.19726V7.17785C18.7682 8.32602 18.3208 9.40532 17.5085 10.2167L9.60954 18.1074C9.19458 18.5218 8.64309 18.75 8.05669 18.75ZM11.5751 1.46484C10.8179 1.46484 10.1064 1.75998 9.57166 2.29579L1.6971 10.1853C1.41225 10.4708 1.41225 10.9349 1.6971 11.2203L7.5386 17.0702C7.67674 17.2086 7.86054 17.285 8.05622 17.2851H8.0568C8.15293 17.2854 8.24815 17.2666 8.33698 17.2299C8.4258 17.1931 8.50646 17.1391 8.5743 17.071L16.4732 9.18046C17.0086 8.6458 17.3034 7.93447 17.3034 7.17788V2.19726C17.3034 1.79341 16.9748 1.46484 16.571 1.46484H11.5751ZM13.4581 7.43408C12.2465 7.43408 11.2608 6.44853 11.2608 5.23681C11.2608 4.0251 12.2465 3.03955 13.4581 3.03955C14.6697 3.03955 15.6553 4.0251 15.6553 5.23681C15.6553 6.44853 14.6697 7.43408 13.4581 7.43408ZM13.4581 4.50439C13.0542 4.50439 12.7256 4.83296 12.7256 5.23681C12.7256 5.64067 13.0542 5.96924 13.4581 5.96924C13.8621 5.96924 14.1905 5.64067 14.1905 5.23681C14.1905 4.83296 13.8621 4.50439 13.4581 4.50439Z"
                                                            fill="#C7844F" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_111_92">
                                                            <rect width="20" height="20" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                                Tiels
                                            </li>
                                        </ul>
                                        <p class="mt-3">{{ $blog->short_description }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="blog-card-items style1 img-custom-anim-left wow fadeInUp" data-wow-delay=".2s">
                            <div class="blog-image">
                                <img src="assets/images/blog/blogThumb1_2.jpg" alt="img">
                                <img src="assets/images/blog/blogThumb1_2.jpg" alt="img">
                            </div>
                            <div class="blog-meta">
                                <div class="day">12</div>
                                <div class="month">SEP</div>
                            </div>
                            <div class="blog-content">
                                <h3><a href="{{ route('blog.detail',$blog->slug) }}">How to Make Your House Look High Wood Flooring</a></h3>
                                <ul>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M14.5442 5.19275C14.5442 7.69093 12.4996 9.7355 10.0014 9.7355C7.50327 9.7355 5.45869 7.69093 5.45869 5.19275C5.45869 2.69457 7.50323 0.65 10.0014 0.65C12.4996 0.65 14.5442 2.69458 14.5442 5.19275Z"
                                                stroke="#C7844F" stroke-width="1.3" />
                                            <path
                                                d="M18.265 14.6706C18.1058 14.9458 17.9247 15.2073 17.7176 15.4766L17.7174 15.4765L17.7095 15.4873C17.421 15.8788 17.0852 16.2373 16.7301 16.5924C16.4332 16.8892 16.0939 17.186 15.7574 17.4385C14.0801 18.6911 12.0628 19.3499 9.97879 19.3499C7.89901 19.3499 5.88571 18.6938 4.21041 17.4461C3.84652 17.1504 3.51432 16.8792 3.22751 16.5924L3.22054 16.5854L3.21337 16.5787C2.85728 16.2436 2.54303 15.8877 2.2481 15.4874L2.24812 15.4873L2.24478 15.4829C2.06257 15.24 1.87385 14.9756 1.71984 14.7169C1.83683 14.4559 1.98519 14.1847 2.14586 13.9526L2.14597 13.9527L2.15349 13.9413C3.07049 12.5556 4.5377 11.6388 6.16707 11.4148L6.18665 11.4121L6.20603 11.4082C6.23151 11.4031 6.29559 11.4117 6.34612 11.4496L6.34611 11.4496L6.35012 11.4525C7.41715 12.2401 8.68694 12.6453 10.0014 12.6453C11.3159 12.6453 12.5857 12.2401 13.6528 11.4525L13.6528 11.4525L13.6568 11.4496C13.6722 11.438 13.741 11.408 13.8498 11.4167C15.4695 11.6435 16.9128 12.5568 17.8531 13.9468L17.853 13.9469L17.857 13.9526C18.0172 14.1839 18.1563 14.4231 18.265 14.6706Z"
                                                stroke="#C7844F" stroke-width="1.3" />
                                        </svg>
                                        By Admin
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <g clip-path="url(#clip0_111_93)">
                                                <path
                                                    d="M8.05669 18.75H8.05507C7.46835 18.7495 6.9166 18.5207 6.5019 18.1052L0.660372 12.2553C-0.194042 11.3994 -0.194042 10.0065 0.660372 9.15058L8.53481 1.26102C9.34633 0.44792 10.4261 0 11.5751 0H16.571C17.7825 0 18.7682 0.985546 18.7682 2.19726V7.17785C18.7682 8.32602 18.3208 9.40532 17.5085 10.2167L9.60954 18.1074C9.19458 18.5218 8.64309 18.75 8.05669 18.75ZM11.5751 1.46484C10.8179 1.46484 10.1064 1.75998 9.57166 2.29579L1.6971 10.1853C1.41225 10.4708 1.41225 10.9349 1.6971 11.2203L7.5386 17.0702C7.67674 17.2086 7.86054 17.285 8.05622 17.2851H8.0568C8.15293 17.2854 8.24815 17.2666 8.33698 17.2299C8.4258 17.1931 8.50646 17.1391 8.5743 17.071L16.4732 9.18046C17.0086 8.6458 17.3034 7.93447 17.3034 7.17788V2.19726C17.3034 1.79341 16.9748 1.46484 16.571 1.46484H11.5751ZM13.4581 7.43408C12.2465 7.43408 11.2608 6.44853 11.2608 5.23681C11.2608 4.0251 12.2465 3.03955 13.4581 3.03955C14.6697 3.03955 15.6553 4.0251 15.6553 5.23681C15.6553 6.44853 14.6697 7.43408 13.4581 7.43408ZM13.4581 4.50439C13.0542 4.50439 12.7256 4.83296 12.7256 5.23681C12.7256 5.64067 13.0542 5.96924 13.4581 5.96924C13.8621 5.96924 14.1905 5.64067 14.1905 5.23681C14.1905 4.83296 13.8621 4.50439 13.4581 4.50439Z"
                                                    fill="#C7844F" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_111_93">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        Interior
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="blog-card-items style1 img-custom-anim-left wow fadeInUp" data-wow-delay=".2s">
                            <div class="blog-image">
                                <img src="assets/images/blog/blogThumb1_3.jpg" alt="img">
                                <img src="assets/images/blog/blogThumb1_3.jpg" alt="img">
                            </div>
                            <div class="blog-meta">
                                <div class="day">17</div>
                                <div class="month">SEP</div>
                            </div>
                            <div class="blog-content">
                                <h3><a href="{{ route('blog.detail',$blog->slug) }}">Why choose plank over other flooring types?</a></h3>
                                <ul>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M14.5442 5.19275C14.5442 7.69093 12.4996 9.7355 10.0014 9.7355C7.50327 9.7355 5.45869 7.69093 5.45869 5.19275C5.45869 2.69457 7.50323 0.65 10.0014 0.65C12.4996 0.65 14.5442 2.69458 14.5442 5.19275Z"
                                                stroke="#C7844F" stroke-width="1.3" />
                                            <path
                                                d="M18.265 14.6706C18.1058 14.9458 17.9247 15.2073 17.7176 15.4766L17.7174 15.4765L17.7095 15.4873C17.421 15.8788 17.0852 16.2373 16.7301 16.5924C16.4332 16.8892 16.0939 17.186 15.7574 17.4385C14.0801 18.6911 12.0628 19.3499 9.97879 19.3499C7.89901 19.3499 5.88571 18.6938 4.21041 17.4461C3.84652 17.1504 3.51432 16.8792 3.22751 16.5924L3.22054 16.5854L3.21337 16.5787C2.85728 16.2436 2.54303 15.8877 2.2481 15.4874L2.24812 15.4873L2.24478 15.4829C2.06257 15.24 1.87385 14.9756 1.71984 14.7169C1.83683 14.4559 1.98519 14.1847 2.14586 13.9526L2.14597 13.9527L2.15349 13.9413C3.07049 12.5556 4.5377 11.6388 6.16707 11.4148L6.18665 11.4121L6.20603 11.4082C6.23151 11.4031 6.29559 11.4117 6.34612 11.4496L6.34611 11.4496L6.35012 11.4525C7.41715 12.2401 8.68694 12.6453 10.0014 12.6453C11.3159 12.6453 12.5857 12.2401 13.6528 11.4525L13.6528 11.4525L13.6568 11.4496C13.6722 11.438 13.741 11.408 13.8498 11.4167C15.4695 11.6435 16.9128 12.5568 17.8531 13.9468L17.853 13.9469L17.857 13.9526C18.0172 14.1839 18.1563 14.4231 18.265 14.6706Z"
                                                stroke="#C7844F" stroke-width="1.3" />
                                        </svg>
                                        By Admin
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <g clip-path="url(#clip0_111_94)">
                                                <path
                                                    d="M8.05669 18.75H8.05507C7.46835 18.7495 6.9166 18.5207 6.5019 18.1052L0.660372 12.2553C-0.194042 11.3994 -0.194042 10.0065 0.660372 9.15058L8.53481 1.26102C9.34633 0.44792 10.4261 0 11.5751 0H16.571C17.7825 0 18.7682 0.985546 18.7682 2.19726V7.17785C18.7682 8.32602 18.3208 9.40532 17.5085 10.2167L9.60954 18.1074C9.19458 18.5218 8.64309 18.75 8.05669 18.75ZM11.5751 1.46484C10.8179 1.46484 10.1064 1.75998 9.57166 2.29579L1.6971 10.1853C1.41225 10.4708 1.41225 10.9349 1.6971 11.2203L7.5386 17.0702C7.67674 17.2086 7.86054 17.285 8.05622 17.2851H8.0568C8.15293 17.2854 8.24815 17.2666 8.33698 17.2299C8.4258 17.1931 8.50646 17.1391 8.5743 17.071L16.4732 9.18046C17.0086 8.6458 17.3034 7.93447 17.3034 7.17788V2.19726C17.3034 1.79341 16.9748 1.46484 16.571 1.46484H11.5751ZM13.4581 7.43408C12.2465 7.43408 11.2608 6.44853 11.2608 5.23681C11.2608 4.0251 12.2465 3.03955 13.4581 3.03955C14.6697 3.03955 15.6553 4.0251 15.6553 5.23681C15.6553 6.44853 14.6697 7.43408 13.4581 7.43408ZM13.4581 4.50439C13.0542 4.50439 12.7256 4.83296 12.7256 5.23681C12.7256 5.64067 13.0542 5.96924 13.4581 5.96924C13.8621 5.96924 14.1905 5.64067 14.1905 5.23681C14.1905 4.83296 13.8621 4.50439 13.4581 4.50439Z"
                                                    fill="#C7844F" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_111_94">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        Tiels
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="blog-card-items style1 img-custom-anim-left wow fadeInUp" data-wow-delay=".2s">
                            <div class="blog-image">
                                <img src="assets/images/blog/blogThumb1_4.jpg" alt="img">
                                <img src="assets/images/blog/blogThumb1_4.jpg" alt="img">
                            </div>
                            <div class="blog-meta">
                                <div class="day">27</div>
                                <div class="month">SEP</div>
                            </div>
                            <div class="blog-content">
                                <h3><a href="{{ route('blog.detail',$blog->slug) }}">Best Tiels for Modern Modern kitchen</a></h3>
                                <ul>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M14.5442 5.19275C14.5442 7.69093 12.4996 9.7355 10.0014 9.7355C7.50327 9.7355 5.45869 7.69093 5.45869 5.19275C5.45869 2.69457 7.50323 0.65 10.0014 0.65C12.4996 0.65 14.5442 2.69458 14.5442 5.19275Z"
                                                stroke="#C7844F" stroke-width="1.3" />
                                            <path
                                                d="M18.265 14.6706C18.1058 14.9458 17.9247 15.2073 17.7176 15.4766L17.7174 15.4765L17.7095 15.4873C17.421 15.8788 17.0852 16.2373 16.7301 16.5924C16.4332 16.8892 16.0939 17.186 15.7574 17.4385C14.0801 18.6911 12.0628 19.3499 9.97879 19.3499C7.89901 19.3499 5.88571 18.6938 4.21041 17.4461C3.84652 17.1504 3.51432 16.8792 3.22751 16.5924L3.22054 16.5854L3.21337 16.5787C2.85728 16.2436 2.54303 15.8877 2.2481 15.4874L2.24812 15.4873L2.24478 15.4829C2.06257 15.24 1.87385 14.9756 1.71984 14.7169C1.83683 14.4559 1.98519 14.1847 2.14586 13.9526L2.14597 13.9527L2.15349 13.9413C3.07049 12.5556 4.5377 11.6388 6.16707 11.4148L6.18665 11.4121L6.20603 11.4082C6.23151 11.4031 6.29559 11.4117 6.34612 11.4496L6.34611 11.4496L6.35012 11.4525C7.41715 12.2401 8.68694 12.6453 10.0014 12.6453C11.3159 12.6453 12.5857 12.2401 13.6528 11.4525L13.6528 11.4525L13.6568 11.4496C13.6722 11.438 13.741 11.408 13.8498 11.4167C15.4695 11.6435 16.9128 12.5568 17.8531 13.9468L17.853 13.9469L17.857 13.9526C18.0172 14.1839 18.1563 14.4231 18.265 14.6706Z"
                                                stroke="#C7844F" stroke-width="1.3" />
                                        </svg>
                                        By Admin
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <g clip-path="url(#clip0_111_95)">
                                                <path
                                                    d="M8.05669 18.75H8.05507C7.46835 18.7495 6.9166 18.5207 6.5019 18.1052L0.660372 12.2553C-0.194042 11.3994 -0.194042 10.0065 0.660372 9.15058L8.53481 1.26102C9.34633 0.44792 10.4261 0 11.5751 0H16.571C17.7825 0 18.7682 0.985546 18.7682 2.19726V7.17785C18.7682 8.32602 18.3208 9.40532 17.5085 10.2167L9.60954 18.1074C9.19458 18.5218 8.64309 18.75 8.05669 18.75ZM11.5751 1.46484C10.8179 1.46484 10.1064 1.75998 9.57166 2.29579L1.6971 10.1853C1.41225 10.4708 1.41225 10.9349 1.6971 11.2203L7.5386 17.0702C7.67674 17.2086 7.86054 17.285 8.05622 17.2851H8.0568C8.15293 17.2854 8.24815 17.2666 8.33698 17.2299C8.4258 17.1931 8.50646 17.1391 8.5743 17.071L16.4732 9.18046C17.0086 8.6458 17.3034 7.93447 17.3034 7.17788V2.19726C17.3034 1.79341 16.9748 1.46484 16.571 1.46484H11.5751ZM13.4581 7.43408C12.2465 7.43408 11.2608 6.44853 11.2608 5.23681C11.2608 4.0251 12.2465 3.03955 13.4581 3.03955C14.6697 3.03955 15.6553 4.0251 15.6553 5.23681C15.6553 6.44853 14.6697 7.43408 13.4581 7.43408ZM13.4581 4.50439C13.0542 4.50439 12.7256 4.83296 12.7256 5.23681C12.7256 5.64067 13.0542 5.96924 13.4581 5.96924C13.8621 5.96924 14.1905 5.64067 14.1905 5.23681C14.1905 4.83296 13.8621 4.50439 13.4581 4.50439Z"
                                                    fill="#C7844F" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_111_95">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        Floor
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

@endsection
