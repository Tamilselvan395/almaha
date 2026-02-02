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
                                    <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s"> <img
                                            class="me-1" src="assets/images/shape/titleShape1_1.png" alt="icon"> ABOUT
                                        US </div>
                                    <h2 class=" text-start mt-15 wow fadeInUp" data-wow-delay=".3s">Trusted Tile & Surface Solutions in Dubai</h2>
                                    <p class="desc wow fadeInUp" data-wow-delay=".5s"> Almaha is a reliable supplier of premium tiles, stone, and surface materials, serving residential, commercial, and project-based requirements across Dubai and the UAE. With a strong focus on quality, durability, and modern design, we support builders, contractors, and interior professionals with dependable products and consistent service.</p>
                                </div>
                                <h3>We deliver high-quality tiles and surface solutions tailored to modern construction needs.</h3>
                                <div class="row exp-area">
                                    <div class="col-xl-12">
                                        <div class="progress-wrap style2 wow fadeInUp" data-wow-delay=".2s">
                                            <div class="progress-meta img-custom-anim-left wow fadeInUp"
                                                data-wow-delay=".3s">
                                                <div class="title">Tile Supply & Flooring Solutions</div>
                                                <div class="percentage">85%</div>
                                            </div>
                                            <div class="progress-container">
                                                <div class="progress-bar" style="width: 85%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="progress-wrap style2 wow fadeInUp" data-wow-delay=".2s">
                                            <div class="progress-meta img-custom-anim-left wow fadeInUp"
                                                data-wow-delay=".5s">
                                                <div class="title">Custom Projects & Design Support</div>
                                                <div class="percentage">90%</div>
                                            </div>
                                            <div class="progress-container">
                                                <div class="progress-bar" style="width: 90%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                        <div class="history-content">
                            <h2>ESTABLISHED WITH A VISION OF EXCELLENCE</h2>
                            <p class="text">Almaha was established with a clear vision to deliver premium tiles, sanitary ware, and surface solutions to the growing construction and interior market in Dubai and the UAE. From the beginning, our focus has been on quality, reliability, and customer trust. Since our launch, we have steadily built strong relationships with contractors, designers, and developers by supplying dependable products and professional support for residential and commercial projects.</p>
                        </div>
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
                                <h3>OUR MISSION</h3>
                                <p>To deliver high-quality tiles, sanitary ware, and surface solutions while providing reliable service and technical support that build long-term trust with our customers across Dubai and the UAE.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="values-box style1 wow fadeInUp" data-wow-delay=".5s">
                            <img src="assets/images/icon/our-vission.png" alt="">
                            <div class="content">
                                <h3>OUR VISION</h3>
                                <p>To become one of the leading and most preferred suppliers of porcelain tiles, sanitary ware, marbles, and surface materials in the UAE by consistently delivering quality products, dependable service, and customer-focused solutions.</p>
                            </div>
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

                <div class="slider-area testimonialSliderOne fix ">
                    <div class="swiper gt-slider" id="testimonialSliderOne"
                        data-slider-options='{"loop": true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1,"centeredSlides":true},"768":{"slidesPerView":1},"992":{"slidesPerView":2},"1200":{"slidesPerView":2}}}'>
                        
                        <div class="swiper-wrapper">
                            <?php foreach ($testimonials as $t): ?>
                                <div class="swiper-slide">
                                    <div class="testimonial-card-items style1 wow fadeInUp"
                                        data-wow-delay=".5s"
                                        data-bg-src="assets/images/bg/testimonialBg1_1.png">

                                        <div class="body">
                                            <p>
                                                <?= strlen($t['text']) > 120 
                                                    ? rtrim(substr($t['text'], 0, 120)) . '...' 
                                                    : $t['text']; ?>
                                            </p>
                                        </div>

                                        <div class="profile-meta mt-3">
                                            <div class="content">
                                                <h6><?= $t['name']; ?></h6>
                                                <p><?= $t['role']; ?></p>
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
    <section class="team-section">
        <div class="team-container-wrapper style2 section-padding fix" data-bg-src="assets/images/bg/teamBg2_1.jpg">
            <div class="container">
                <div class="section-title text-center mb-50 mxw-660 mx-auto">
                    <div class="subtitle text-center wow fadeInUp" data-wow-delay=".5s"> <img class="me-1"
                            src="assets/images/shape/titleShape1_1.png" alt="icon"> OUR TEAM <img class="ms-1"
                            src="assets/images/shape/titleShape1_2.png" alt="icon"> </div>
                    <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s"> Meet the Members of Our Best Team
                    </h2>
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
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png" alt="shape">
                                    </div>
                                    <div class="shape2"><img src="assets/images/shape/teamCardShape2_2.png" alt="shape">
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
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png" alt="shape">
                                    </div>
                                    <div class="shape2"><img src="assets/images/shape/teamCardShape2_2.png" alt="shape">
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
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png" alt="shape">
                                    </div>
                                    <div class="shape2"><img src="assets/images/shape/teamCardShape2_2.png" alt="shape">
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
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png" alt="shape">
                                    </div>
                                    <div class="shape2"><img src="assets/images/shape/teamCardShape2_2.png" alt="shape">
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
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png" alt="shape">
                                    </div>
                                    <div class="shape2"><img src="assets/images/shape/teamCardShape2_2.png" alt="shape">
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
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png" alt="shape">
                                    </div>
                                    <div class="shape2"><img src="assets/images/shape/teamCardShape2_2.png" alt="shape">
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
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png" alt="shape">
                                    </div>
                                    <div class="shape2"><img src="assets/images/shape/teamCardShape2_2.png" alt="shape">
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
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png" alt="shape">
                                    </div>
                                    <div class="shape2"><img src="assets/images/shape/teamCardShape2_2.png" alt="shape">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection