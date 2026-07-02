@extends('layouts.app')

@section('meta_title', $meta_details->about_meta_title ?? '')
@section('meta_description', $meta_details->about_meta_description ?? '')
@section('schema')
    {!! $meta_details->about_schema ?? '' !!}
@endsection

@section('content')

    <!-- Breadcumb Section  S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">About </h1>
                            <ul class="breadcumb-menu">
                                <li><a href="index.html">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">About</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section    S T A R T -->
    <section class="about-section">
        <div class="about-container-wrapper style2  section-padding pb-0 fix bg-white">
            <div class="container">
                <div class="about-wrapper style2">
                    <div class="row gy-5 gx-60 align-items-center">
                        <div class="col-xl-6">
                            <div class="about-thumb img-custom-anim-left wow fadeInUp" data-wow-delay=".3s">
                                <!-- <div class="thumbShape1"><img src="assets/images/shape/aboutThumbshape2_1.png"
                                                                                                alt="thumbshape"></div>
                                                                                        <div class="thumbShape2"><img src="assets/images/shape/aboutThumbshape2_2.png"
                                                                                                alt="thumbshape"></div> -->
                                <img class="thumb1" src="assets/images/hero/about-2.png" alt="thumb">
                                <!-- <img class="thumb2" src="assets/images/hero/why-choose-almaha-dubai.jpg" alt="thumb"> -->
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="about-content">
                                <div class="section-title text-start  mt-70">
                                    <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s"> <img class="me-1"
                                            src="assets/images/shape/titleShape1_1.png" alt="icon"> ABOUT
                                        US </div>
                                    <h2 class=" text-start mt-15 wow fadeInUp" data-wow-delay=".3s">About Al Maha Building
                                        Materials</h2>
                                    <p class="desc wow fadeInUp" data-wow-delay=".5s">Established in 2009, Al Maha Building
                                        Materials is a trusted building material supplier in Dubai, providing premium tiles,
                                        sanitary ware, and surface solutions at competitive prices. Based in Al Qusais
                                        Industrial Area 3, we supply porcelain tiles, swimming pool tiles, cladding tiles,
                                        and outdoor tiles for residential and commercial projects across the UAE. </p>
                                </div>
                                <h3 class="mb-0">Four Key Facts Section</h3>
                                <div class="row exp-area">
                                    <ul>
                                        <li class="mb-3"><i class="fas fa-building text-theme-color me-3"></i>Direct Dubai
                                            Tiles Importer Since 2009</li>
                                        <li class="mb-3"><i class="fas fa-award text-theme-color me-3"></i>15 Years as a
                                            Trusted Building Materials Company in Dubai</li>
                                        <li class="mb-3"><i
                                                class="fas fa-map-marker-alt text-theme-color me-3"></i>Showroom in Al
                                            Qusais, Dubai</li>
                                        <li class="mb-3"><i class="fas fa-truck text-theme-color me-3"></i>UAE-Wide Supply
                                            & Delivery</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company History Section    S T A R T -->
    <div class="history-section section-padding fix">
        <div class="container">
            <div class="history-wrapper style1">
                <div class="row gy-5 gx-60">

                    <div class="col-xl-6 order-2 order-md-1">
                        <div class="history-content mb-3">
                            <h2>Our Story</h2>
                            <p class="text">Founded in 2009, Al Maha Building Materials has become a trusted building
                                material supplier in Dubai, offering porcelain tiles, swimming pool tiles, cladding tiles,
                                outdoor tiles, sanitary ware, marble, granite, roofing materials, and tile adhesives across
                                the UAE. Operating from our Al Qusais showroom, we source directly from leading
                                international manufacturers to deliver premium building materials in Dubai at competitive
                                prices. With over 15 years of experience, we continue to support residential, commercial,
                                and large-scale projects with reliable supply, expert guidance, and quality you can trust.
                            </p>
                            <p>Explore our full product range or visit our Al Qusais showroom to see our collections in
                                person.</p>

                        </div>
                        <a href="{{ route('categories') }}"> <span class="theme-btn me-3"> View Products
                            </span> </a>
                        <a href="{{ route('contact') }}"> <span
                                class="theme-btn bg-transparent border border-black text-black"> Visit Our Showroom
                            </span> </a>
                    </div>
                    <div class="col-xl-6 order-1 order-md-2">
                        <div class="history-thumb">
                            <img src="assets/images/hero/EXCELLENCE.png" alt="thumb">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

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

    <!-- Values Section    S T A R T -->
    <section class="values-section section-padding  fix">
        <div class="container">
            <div class="values-wrapper style1">
                <div class="values-title">Our Values</div>
                <div class="row gy-5">

                    <div class="col-xl-6">
                        <div class="values-box style1 wow fadeInUp" data-wow-delay=".3s">
                            <img src="assets/images/icon/ourmission.png" alt="">
                            <div class="content">
                                <h3>Our Mission</h3>
                                <p>Our mission is to provide premium tiles, sanitary ware, marble, granite, and building
                                    material solutions that help contractors, developers, architects, and homeowners
                                    complete their projects with confidence. Through direct sourcing, reliable supply,
                                    competitive pricing, and expert support, we are committed to delivering quality products
                                    and dependable service for projects across Dubai and the UAE.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="values-box style1 wow fadeInUp" data-wow-delay=".5s">
                            <img src="assets/images/icon/our-vission.png" alt="">
                            <div class="content">
                                <h3>Our Vision</h3>
                                <p>Our vision is to be one of the UAE's most trusted building materials partners, recognised
                                    for quality, reliability, and long-term customer relationships. We aim to continuously
                                    expand our product range, strengthen our supply network, and support the evolving needs
                                    of the construction and interior design industry with innovative materials and
                                    exceptional service.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="offer-section">
        <div class="offer-container-wrapper style1 section-padding fix">
            <div class="shape"><img src="{{ asset('assets/images/shape/offerShape1_1.png') }}" alt="shape">
            </div>
            <div class="container">
                <div class="section-title text-center mb-50 mxw-660 mx-auto">
                    <div class="subtitle text-center wow fadeInUp" data-wow-delay=".5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"> <img class="me-1"
                            src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> OUR FEATURES
                        <img class="ms-1" src="{{ asset('assets/images/shape/titleShape1_2.png') }}"
                            alt="icon">
                    </div>
                    <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Our Products and
                        Services</h2>
                    <p class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">As a trusted building
                        materials supplier in Dubai, Al Maha supplies a comprehensive range of products and services for
                        residential, commercial, and large-scale construction projects across the UAE</p>
                </div>
                <div class="slider-area offerSliderOne">
                    <div class="swiper gt-slider" id="offerSliderOne"
                        data-slider-options='{"loop": true,
                        "spaceBetween": 1, "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1,"centeredSlides":true},"768":{"slidesPerView":1},"992":{"slidesPerView":3},"1200":{"slidesPerView":3}}}'>

                        <div class="swiper-wrapper">
                            <div class="swiper-slide h-100 d-flex">
                                <div class="offer-card style1 w-100 d-flex flex-column">
                                    <div class="content d-flex flex-column flex-grow-1">

                                        <h3 class="mb-3">Porcelain Tiles</h3>

                                        <p class="text mb-4 border-0 pb-0">
                                            Premium porcelain tiles for residential, commercial, and outdoor applications,
                                            available in a wide range of sizes, finishes, and formats.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-100 d-flex">
                                <div class="offer-card style1 w-100 d-flex flex-column">
                                    <div class="content d-flex flex-column flex-grow-1">

                                        <h3 class="mb-3">Swimming Pool Tiles</h3>

                                        <p class="text mb-4 border-0 pb-0">
                                            High-quality swimming pool tiles including anti-slip pool tiles and coping tiles
                                            for residential and commercial pools across the UAE.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-100 d-flex">
                                <div class="offer-card style1 w-100 d-flex flex-column">
                                    <div class="content d-flex flex-column flex-grow-1">

                                        <h3 class="mb-3">Cladding Tiles with Fixing</h3>

                                        <p class="text mb-4 border-0 pb-0">
                                            Premium cladding tiles for interior and exterior wall applications, supplied and
                                            professionally installed by our experienced tile fixing contractors.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-100 d-flex">
                                <div class="offer-card style1 w-100 d-flex flex-column">
                                    <div class="content d-flex flex-column flex-grow-1">

                                        <h3 class="mb-3">Sanitary Ware</h3>

                                        <p class="text mb-4 border-0 pb-0">
                                            As a trusted sanitary ware supplier, we offer a comprehensive range of sanitary
                                            ware solutions for residential, commercial, and hospitality projects across the
                                            UAE.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-100 d-flex">
                                <div class="offer-card style1 w-100 d-flex flex-column">
                                    <div class="content d-flex flex-column flex-grow-1">

                                        <h3 class="mb-3">Roofing</h3>

                                        <p class="text mb-4 border-0 pb-0">
                                            Durable roofing materials for residential and commercial projects across Dubai
                                            and the UAE, selected for weather resistance and long-term performance.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-100 d-flex">
                                <div class="offer-card style1 w-100 d-flex flex-column">
                                    <div class="content d-flex flex-column flex-grow-1">

                                        <h3 class="mb-3">Marble and Granite</h3>

                                        <p class="text mb-4 border-0 pb-0">
                                            As trusted marble suppliers and granite suppliers, we supply a curated range of
                                            marble and granite for flooring, wall cladding, countertops, and exterior
                                            applications.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-100 d-flex">
                                <div class="offer-card style1 w-100 d-flex flex-column">
                                    <div class="content d-flex flex-column flex-grow-1">

                                        <h3 class="mb-3">Solid Surface Filler and Sheets</h3>

                                        <p class="text mb-4 border-0 pb-0">
                                            High-performance solid surface sheets and fillers for countertops, wall panels,
                                            and custom interior applications across residential and commercial projects in
                                            Dubai.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-100 d-flex">
                                <div class="offer-card style1 w-100 d-flex flex-column">
                                    <div class="content d-flex flex-column flex-grow-1">

                                        <h3 class="mb-3">Interior Tiles Glue</h3>

                                        <p class="text mb-4 border-0 pb-0">
                                            Professional-grade tile adhesives and building supplies offering high bonding
                                            strength for all tile types across residential and commercial installations.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="slider-pagination"></div>
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
                            <h2 class=" text-start mt-15 wow fadeInUp" data-wow-delay=".3s">What Our Clients Say</h2>
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

                <style>
                    .testimonialSliderOne .swiper-slide {
                        height: auto !important;
                    }
                </style>
                <div class="slider-area testimonialSliderOne fix ">
                    <div class="swiper gt-slider" id="testimonialSliderOne"
                        data-slider-options='{"loop": true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1,"centeredSlides":true},"768":{"slidesPerView":1},"992":{"slidesPerView":2},"1200":{"slidesPerView":2}}}'>

                        <div class="swiper-wrapper">
                            <?php foreach ($testimonials as $t): ?>
                            <div class="swiper-slide">
                                <div class="testimonial-card-items style1 wow fadeInUp" data-wow-delay=".5s"
                                    data-bg-src="assets/images/bg/testimonialBg1_1.png"
                                    style="height: 100%; display: flex; flex-direction: column; justify-content: space-between;">

                                    <div class="body">
                                        <p>
                                            <?= $t['text'] ?>
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

    <!-- Team Section    S T A R T -->
    {{-- <section class="team-section">
        <div class="team-container-wrapper style2 section-padding fix" data-bg-src="assets/images/bg/teamBg2_1.jpg">
            <div class="container">
                <div class="section-title text-center mb-50 mxw-660 mx-auto">
                    <div class="subtitle text-center wow fadeInUp" data-wow-delay=".5s"> <img class="me-1"
                            src="assets/images/shape/titleShape1_1.png" alt="icon"> OUR TEAM <img class="ms-1"
                            src="assets/images/shape/titleShape1_2.png" alt="icon"> </div>
                    <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Meet the Team Behind Our Success</h2>
                    <p>Our experienced team helps you choose the right porcelain tiles, outdoor tiles, pool tiles, and
                        sanitary ware while ensuring reliable building material supply and on-time delivery across the UAE.
                    </p>
                </div>

                <div class="slider-area">
                    <div class="swiper gt-slider" id="teamSliderTwo"
                        data-slider-options='{"loop": true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1,"centeredSlides":true},"768":{"slidesPerView":2},"992":{"slidesPerView":3},"1200":{"slidesPerView":4}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="team-card style2 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="team-thumb">
                                        <img src="assets/images/team/teamThumb2_1.jpg" alt="thumb">
                                    </div>
                                    <div class="team-content">
                                        <h3><a href="team-details.html">Jenny Wilson</a></h3>
                                        <p>Marketing Manger</p>
                                    </div>
                                    <div class="social-profile">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                        <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                    </div>
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png"
                                            alt="shape">
                                    </div>
                                    <div class="shape2"><img src="assets/images/shape/teamCardShape2_2.png"
                                            alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card style2 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="team-thumb">
                                        <img src="assets/images/team/teamThumb2_2.jpg" alt="thumb">
                                    </div>
                                    <div class="team-content">
                                        <h3><a href="team-details.html">Guy Hawkins</a></h3>
                                        <p>Development Head</p>
                                    </div>
                                    <div class="social-profile">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                        <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                    </div>
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png"
                                            alt="shape">
                                    </div>
                                    <div class="shape2"><img src="assets/images/shape/teamCardShape2_2.png"
                                            alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card style2 wow fadeInUp" data-wow-delay=".7s">
                                    <div class="team-thumb">
                                        <img src="assets/images/team/teamThumb2_3.jpg" alt="thumb">
                                    </div>
                                    <div class="team-content">
                                        <h3><a href="team-details.html">Leslie Alexander</a></h3>
                                        <p>Head Manger</p>
                                    </div>
                                    <div class="social-profile">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                        <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                    </div>
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png"
                                            alt="shape">
                                    </div>
                                    <div class="shape2"><img src="assets/images/shape/teamCardShape2_2.png"
                                            alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card style2 wow fadeInUp" data-wow-delay=".9s">
                                    <div class="team-thumb">
                                        <img src="assets/images/team/teamThumb2_4.jpg" alt="thumb">
                                    </div>
                                    <div class="team-content">
                                        <h3><a href="team-details.html">Brooklyn Simmons</a></h3>
                                        <p>Manager Controller</p>
                                    </div>
                                    <div class="social-profile">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                        <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                    </div>
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png"
                                            alt="shape">
                                    </div>
                                    <div class="shape2"><img src="assets/images/shape/teamCardShape2_2.png"
                                            alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card style2">
                                    <div class="team-thumb">
                                        <img src="assets/images/team/teamThumb2_1.jpg" alt="thumb">
                                    </div>
                                    <div class="team-content">
                                        <h3><a href="team-details.html">Masirul Islam</a></h3>
                                        <p>Head Manager</p>
                                    </div>
                                    <div class="social-profile">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                        <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                    </div>
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png"
                                            alt="shape">
                                    </div>
                                    <div class="shape2"><img src="assets/images/shape/teamCardShape2_2.png"
                                            alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card style2">
                                    <div class="team-thumb">
                                        <img src="assets/images/team/teamThumb2_2.jpg" alt="thumb">
                                    </div>
                                    <div class="team-content">
                                        <h3><a href="team-details.html">Leslie Alexander</a></h3>
                                        <p>Marketing Manger</p>
                                    </div>
                                    <div class="social-profile">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                        <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                    </div>
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png"
                                            alt="shape">
                                    </div>
                                    <div class="shape2"><img src="assets/images/shape/teamCardShape2_2.png"
                                            alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card style2">
                                    <div class="team-thumb">
                                        <img src="assets/images/team/teamThumb2_3.jpg" alt="thumb">
                                    </div>
                                    <div class="team-content">
                                        <h3><a href="team-details.html">Brooklyn Simmons</a></h3>
                                        <p>Desing Manager</p>
                                    </div>
                                    <div class="social-profile">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                        <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                    </div>
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png"
                                            alt="shape">
                                    </div>
                                    <div class="shape2"><img src="assets/images/shape/teamCardShape2_2.png"
                                            alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card style2">
                                    <div class="team-thumb">
                                        <img src="assets/images/team/teamThumb2_4.jpg" alt="thumb">
                                    </div>
                                    <div class="team-content">
                                        <h3><a href="team-details.html">Brooklyn Simmons</a></h3>
                                        <p>Marketing Manager</p>
                                    </div>
                                    <div class="social-profile">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                        <span class="plus-btn"><i class="fas fa-share-alt"></i></span>
                                    </div>
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png"
                                            alt="shape">
                                    </div>
                                    <div class="shape2"><img src="assets/images/shape/teamCardShape2_2.png"
                                            alt="shape">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}

    <!-- FAQ Section Start -->
    <section class="faq-section section-padding bg-white mb-5 mt-5">
        <div class="container">
            <div class="section-title text-center mb-50 mxw-660 mx-auto">
                <div class="subtitle text-center wow fadeInUp" data-wow-delay=".5s"> 
                    <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> 
                    FAQ 
                    <img class="ms-1" src="{{ asset('assets/images/shape/titleShape1_2.png') }}" alt="icon"> 
                </div>
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Frequently Asked Questions</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Get answers to the most common questions about Al Maha, our products, services, and showroom in Dubai.</p>
            </div>
            
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="aboutFaqAccordion">
                        
                        <!-- Q1 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".2s">
                            <h2 class="accordion-header" id="faqHeadingOne">
                                <button class="accordion-button font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne" style="font-weight: 600;">
                                    When was Al Maha Building Materials established?
                                </button>
                            </h2>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#aboutFaqAccordion">
                                <div class="accordion-body text-muted bg-white text-justify">
                                    Al Maha Building Materials was established in 2009 and has been supplying premium tiles,
                                    sanitary ware, and building materials in Dubai to residential, commercial, and construction
                                    projects across the UAE for over 15 years.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q2 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".3s">
                            <h2 class="accordion-header" id="faqHeadingTwo">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo" style="font-weight: 600;">
                                    Where is Al Maha located?
                                </button>
                            </h2>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#aboutFaqAccordion">
                                <div class="accordion-body text-muted bg-white text-justify">
                                    Al Maha Building Materials is located in Al Qusais Industrial Area 3, Dubai. Our showroom is
                                    open for tile fixing contractors, developers, architects, and homeowners to view our full range
                                    of porcelain tiles, swimming pool tiles, outdoor tiles, marble and granite, and sanitary ware in
                                    person.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q3 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".4s">
                            <h2 class="accordion-header" id="faqHeadingThree">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree" style="font-weight: 600;">
                                    What products does Al Maha supply?
                                </button>
                            </h2>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#aboutFaqAccordion">
                                <div class="accordion-body text-muted bg-white text-justify">
                                    Al Maha is a comprehensive building materials company in Dubai supplying premium porcelain
                                    tiles, luxury tiles, swimming pool tiles, anti-slip pool tiles, coping tiles, cladding tiles,
                                    outdoor porcelain floor tiles, outdoor tiles for gardens, marble, granite, natural stone, and
                                    sanitary ware for projects of all scales across the UAE.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q4 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".5s">
                            <h2 class="accordion-header" id="faqHeadingFour">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour" style="font-weight: 600;">
                                    Is Al Maha a direct tiles importer in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#aboutFaqAccordion">
                                <div class="accordion-body text-muted bg-white text-justify">
                                    Yes. Al Maha is a direct tiles importer in Dubai, sourcing porcelain tiles, marble, granite,
                                    natural stone, and sanitary ware directly from international manufacturers across Europe and
                                    Asia. This allows us to offer premium quality at competitive porcelain tile prices in Dubai with
                                    no middleman markup.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".6s">
                            <h2 class="accordion-header" id="faqHeadingFive">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive" style="font-weight: 600;">
                                    Does Al Maha supply building materials outside Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive" data-bs-parent="#aboutFaqAccordion">
                                <div class="accordion-body text-muted bg-white text-justify">
                                    Yes. As a leading building materials supplier in Dubai, we supply and deliver tiles, sanitary
                                    ware, and building supplies to project sites across all seven Emirates — including Abu Dhabi,
                                    Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q6 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".7s">
                            <h2 class="accordion-header" id="faqHeadingSix">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSix" aria-expanded="false" aria-controls="faqCollapseSix" style="font-weight: 600;">
                                    Does Al Maha provide tile fixing services in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseSix" class="accordion-collapse collapse" aria-labelledby="faqHeadingSix" data-bs-parent="#aboutFaqAccordion">
                                <div class="accordion-body text-muted bg-white text-justify">
                                    Yes. In addition to supplying premium tiles and building materials, Al Maha provides
                                    professional tile fixing services in Dubai through our experienced tile fixing contractors and
                                    tiles work contractors for residential, commercial, and industrial projects across the UAE.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q7 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".8s">
                            <h2 class="accordion-header" id="faqHeadingSeven">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSeven" aria-expanded="false" aria-controls="faqCollapseSeven" style="font-weight: 600;">
                                    Do you supply marble and granite in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseSeven" class="accordion-collapse collapse" aria-labelledby="faqHeadingSeven" data-bs-parent="#aboutFaqAccordion">
                                <div class="accordion-body text-muted bg-white text-justify">
                                    Yes. Al Maha are trusted marble suppliers in Dubai and granite suppliers in Dubai, offering a
                                    curated range of natural stone for flooring, walls, countertops, and exterior applications. As
                                    direct importers, we offer competitive pricing across our full marble and granite range.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q8 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".9s">
                            <h2 class="accordion-header" id="faqHeadingEight">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseEight" aria-expanded="false" aria-controls="faqCollapseEight" style="font-weight: 600;">
                                    What outdoor tiles do you supply in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseEight" class="accordion-collapse collapse" aria-labelledby="faqHeadingEight" data-bs-parent="#aboutFaqAccordion">
                                <div class="accordion-body text-muted bg-white text-justify">
                                    Al Maha supplies a full range of outdoor tiles in Dubai including outdoor porcelain floor tiles,
                                    outdoor tiles for gardens, terraces, pool surrounds, and landscaped areas. Our outdoor porcelain
                                    tiles are available in anti-slip finishes and a wide range of sizes and formats suitable for the
                                    UAE climate.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q9 -->
                        <div class="accordion-item border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".95s">
                            <h2 class="accordion-header" id="faqHeadingNine">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseNine" aria-expanded="false" aria-controls="faqCollapseNine" style="font-weight: 600;">
                                    Are you sanitary ware suppliers in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseNine" class="accordion-collapse collapse" aria-labelledby="faqHeadingNine" data-bs-parent="#aboutFaqAccordion">
                                <div class="accordion-body text-muted bg-white text-justify">
                                    Yes. Al Maha is a trusted sanitary ware supplier in Dubai, offering a comprehensive range of
                                    sanitary ware solutions for residential, commercial, and hospitality projects across the UAE. As
                                    direct importers, we provide quality sanitary ware at competitive prices with reliable UAE-wide
                                    supply.
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>n>

@endsection
