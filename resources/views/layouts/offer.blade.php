@php
    $offers = [
        [
            'title' => 'Premium Tile Supply',
            'slug' => 'premium-tile-supply',
            'icon' => 'assets/images/icon/1.png',
            'bg' => 'assets/images/offer/offerCardBg1_2.jpg',
            'desc' =>
                'High-quality porcelain, ceramic, and specialty tiles designed for durability, style, and long-term performance.',
            'points' => ['Wide range of tile collections', 'Suitable for residential & commercial'],
        ],
        [
            'title' => 'Cladding & Fixing Services',
            'slug' => 'cladding-fixing-services',
            'icon' => 'assets/images/icon/2.png',
            'bg' => 'assets/images/offer/offerCardBg1_2.jpg',
            'desc' =>
                'Professional cladding and tile fixing services ensuring precision, safety, and a flawless architectural finish.',
            'points' => ['Expert installation team', 'Interior & exterior applications'],
        ],
        [
            'title' => 'Interior & Exterior Solutions',
            'slug' => 'interior-exterior-solutions',
            'icon' => 'assets/images/icon/3.png',
            'bg' => 'assets/images/offer/offerCardBg1_3.jpg',
            'desc' =>
                'Complete flooring and wall solutions for homes, offices, retail spaces, and industrial projects.',
            'points' => ['Floor & wall tile solutions', 'Modern and durable finishes'],
        ],
        [
            'title' => 'Surface Materials & Adhesives',
            'slug' => 'surface-materials-adhesives',
            'icon' => 'assets/images/icon/4.png',
            'bg' => 'assets/images/offer/offerCardBg1_4.jpg',
            'desc' =>
                'Reliable tile adhesives, solid surface fillers, and sheets for strong bonding and seamless installations.',
            'points' => ['High bonding strength', 'Long-lasting performance'],
        ],
        [
            'title' => 'Project Consultation',
            'slug' => 'project-consultation',
            'icon' => 'assets/images/icon/5.png',
            'bg' => 'assets/images/offer/offerCardBg1_5.jpg',
            'desc' =>
                'Technical guidance and material consultation to help choose the right solutions for every project.',
            'points' => ['Expert product guidance', 'Cost-effective solutions'],
        ],
        [
            'title' => 'Reliable Supply & Delivery',
            'slug' => 'supply-delivery',
            'icon' => 'assets/images/icon/6.png',
            'bg' => 'assets/images/offer/offerCardBg1_6.jpg',
            'desc' => 'Efficient supply and timely delivery of materials across Dubai and the UAE.',
            'points' => ['On-time material supply', 'UAE-wide delivery support'],
        ],
    ];

@endphp

<section class="offer-section">
    <div class="offer-container-wrapper style1 section-padding fix">
        <div class="shape"><img src="{{ asset('assets/images/shape/offerShape1_1.png') }}" alt="shape"></div>
        <div class="container">
            <div class="section-title text-center mb-50 mxw-660 mx-auto">
                <div class="subtitle text-center wow fadeInUp" data-wow-delay=".5s"> <img class="me-1"
                        src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> OUR EXPERTISE <img class="ms-1"
                        src="{{ asset('assets/images/shape/titleShape1_2.png') }}" alt="icon"> </div>
                <h2 class=" text-center mt-15 wow fadeInUp" data-wow-delay=".3s">What We Offer</h2>
                <p class=" text-center mt-15 wow fadeInUp" data-wow-delay=".3s">We provide a complete range of tile,
                    surface, and material solutions tailored to residential, commercial, and industrial project needs
                    across Dubai and the UAE.</p>
            </div>
            <div class="slider-area offerSliderOne">
                <div class="swiper gt-slider" id="offerSliderOne"
                    data-slider-options='{"loop": true,
                        "spaceBetween": 1, "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1,"centeredSlides":true},"768":{"slidesPerView":1},"992":{"slidesPerView":3},"1200":{"slidesPerView":3}}}'>

                    <div class="swiper-wrapper">
                        @foreach ($offers as $offer)
                            <div class="swiper-slide h-100">
                                <div class="offer-card style1 h-100 d-flex flex-column">
                                    <div class="content d-flex flex-column h-100">
                                        <div class="icon mb-3">
                                            <img src="{{ $offer['icon'] }}" alt="">
                                        </div>

                                        <h3 class="mb-3"><?= $offer['title'] ?></h3>

                                        <p class="text mb-4">
                                            <?= rtrim(substr($offer['desc'], 0, 70)) . '...' ?>
                                        </p>

                                        <ul class="checklist style1 mt-auto">
                                            <?php foreach ($offer['points'] as $point): ?>
                                            <li><img src="{{ asset('assets/images/icon/check.svg') }}" alt=""><?= $point ?>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>


                    <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
