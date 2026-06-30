@php
    $offers = [
        [
            'title' => 'Tile Fixing & Cladding Services',
            'slug' => 'tile-fixing-and-cladding-services',
            'icon' => 'assets/images/icon/1.png',
            'bg' => 'assets/images/offer/offerCardBg1_2.jpg',
            'desc' =>
                'Al Maha is a trusted tile fixing company in Dubai, providing interior and exterior tile installation for villas, apartments, offices, and commercial spaces. Our experienced tile fixing contractors deliver precise cladding tile installation and long-lasting results.',
            'points' => ['Skilled tile work contractors in Dubai', 'Interior and exterior tile and cladding applications','Residential, commercial, and industrial projects'],
        ],
        [
            'title' => 'Interior & Exterior Tile Solutions',
            'slug' => 'interior-and-exterior-tile-solutions',
            'icon' => 'assets/images/icon/2.png',
            'bg' => 'assets/images/offer/offerCardBg1_2.jpg',
            'desc' =>
                'We supply premium floor and wall tiles, including porcelain flooring, outdoor tiles, and swimming pool tiles for residential and commercial spaces.',
            'points' => ['Porcelain tile flooring for indoor and outdoor use', 'Outdoor tiles for garden and landscaped areas in Dubai','Modern, classic, and large-format tile options'],
        ],
        [
            'title' => 'Surface Materials & Adhesives',
            'slug' => 'surface-materials-and-adhesives',
            'icon' => 'assets/images/icon/3.png',
            'bg' => 'assets/images/offer/offerCardBg1_3.jpg',
            'desc' =>
                'We supply high-performance tile adhesives, grouts, fillers, and surface preparation materials for durable, long-lasting tile installations in Dubai. ',
            'points' => ['High bonding strength for all tile types', 'Suitable for wet areas, heavy traffic, and outdoor use','Part of our complete building supplies range'],
        ],
        [
            'title' => 'Project Consultation',
            'slug' => 'surface-materials-adhesives',
            'icon' => 'assets/images/icon/4.png',
            'bg' => 'assets/images/offer/offerCardBg1_4.jpg',
            'desc' =>
                'Our team helps contractors, architects, and homeowners choose the right guidance on selecting the right products to suit your project scope and budget. ',
            'points' => ['Expert material recommendations', 'Quantity planning and cost estimation','Guidance on porcelain tile prices in Dubai'],
        ],
        [
            'title' => 'Reliable Supply & Delivery',
            'slug' => 'project-consultation',
            'icon' => 'assets/images/icon/5.png',
            'bg' => 'assets/images/offer/offerCardBg1_5.jpg',
            'desc' =>
                'As a trusted building material supplier in Dubai, we maintain strong inventory and deliver premium surface solutions across all seven Emirates.',
            'points' => ['On-time material supply across the UAE', 'UAE-wide delivery support','Consistent availability across all product lines'],
        ],
        [
            'title' => 'Premium Tile Supply',
            'slug' => 'supply-delivery',
            'icon' => 'assets/images/icon/6.png',
            'bg' => 'assets/images/offer/offerCardBg1_6.jpg',
            'desc' => 'We supply premium porcelain tiles, pool tiles, cladding materials, coping tiles, and surface solutions in a wide range of sizes, finishes, colours, and styles for residential and commercial projects.',
            'points' => ['Wide range of sizes, finishes, and collections, including luxury tiles', 'Pool tiles for residential and commercial swimming pools','Suitable for residential and large-scale commercial projects'],
        ],
    ];

@endphp

<section class="offer-section">
    <div class="offer-container-wrapper style1 section-padding fix">
        <div class="shape"><img src="{{ asset('assets/images/shape/offerShape1_1.png') }}" alt="shape"></div>
        <div class="container">
            <div class="section-title text-center mb-50 mxw-660 mx-auto">
                <div class="subtitle text-center wow fadeInUp" data-wow-delay=".5s"> <img class="me-1"
                        src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> OUR EXPERTISE <img
                        class="ms-1" src="{{ asset('assets/images/shape/titleShape1_2.png') }}" alt="icon"> </div>
                <h2 class=" text-center mt-15 wow fadeInUp" data-wow-delay=".3s">What We Offer</h2>
                <p class=" text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Six ways we make your project easier,
                    from material selection to final installation. As a trusted tile supplier and sanitary ware supplier
                    in Dubai, we provide premium porcelain tiles, outdoor tiles, swimming pool tiles, cladding
                    materials, surface solutions, and expert tile fixing services across the UAE.</p>
            </div>
            <div class="slider-area offerSliderOne">
                <div class="swiper gt-slider" id="offerSliderOne"
                    data-slider-options='{"loop": true,
                        "spaceBetween": 1, "breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1,"centeredSlides":true},"768":{"slidesPerView":1},"992":{"slidesPerView":3},"1200":{"slidesPerView":3}}}'>

                    <div class="swiper-wrapper">
                        @foreach ($offers as $offer)
                            <div class="swiper-slide h-100 d-flex">
                                <div class="offer-card style1 w-100 d-flex flex-column">
                                    <div class="content d-flex flex-column flex-grow-1">
                                        <div class="icon mb-3">
                                            <img src="{{ $offer['icon'] }}" alt="">
                                        </div>

                                        <h3 class="mb-3"><?= $offer['title'] ?></h3>

                                        <p class="text mb-4">
                                            <?= rtrim(substr($offer['desc'], 0, 70)) . '...' ?>
                                        </p>

                                        <ul class="checklist style1 mt-auto">
                                            <?php foreach ($offer['points'] as $point): ?>
                                            <li><img src="{{ asset('assets/images/icon/check.svg') }}"
                                                    alt=""><?= $point ?>
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
