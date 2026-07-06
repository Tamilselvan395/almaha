@extends('layouts.app')

@section('meta_title', 'Premium Tiles, Marble and Sanitary Ware Dubai | Al Maha ')
@section('meta_description', 'Explore top-quality porcelain tiles, pool tiles, & sanitary ware with UAE-wide delivery. 15+ years of expertise. Request a quote from Al Maha today.')

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "CollectionPage",
      "@id": "https://www.mahabldg.com/categories#webpage",
      "url": "https://www.mahabldg.com/categories",
      "name": "Premium Tiles, Marble, and Sanitary Ware Categories | Al Maha Dubai",
      "description": "Explore Al Maha's premium categories of building materials, including porcelain tiles, swimming pool tiles, sanitary ware, marble, granite, cladding, and adhesives in Dubai, UAE.",
      "isPartOf": {
        "@id": "https://www.mahabldg.com/#website"
      },
      "mainEntity": {
        "@type": "ItemList",
        "@id": "https://www.mahabldg.com/categories#itemlist",
        "numberOfItems": 8,
        "itemListElement": [
          {
            "@type": "ListItem",
            "position": 1,
            "name": "Porcelain Tiles",
            "url": "https://www.mahabldg.com/porcelain"
          },
          {
            "@type": "ListItem",
            "position": 2,
            "name": "Swimming Pool Tiles",
            "url": "https://www.mahabldg.com/swimming-pool-tiles"
          },
          {
            "@type": "ListItem",
            "position": 3,
            "name": "Cladding Tiles with Fixing",
            "url": "https://www.mahabldg.com/cladding-tiles-fixing"
          },
          {
            "@type": "ListItem",
            "position": 4,
            "name": "Sanitary Ware",
            "url": "https://www.mahabldg.com/sanitary-ware"
          },
          {
            "@type": "ListItem",
            "position": 5,
            "name": "Roofing Materials in Dubai",
            "url": "https://www.mahabldg.com/roofing-materials-dubai"
          },
          {
            "@type": "ListItem",
            "position": 6,
            "name": "Marble and Granite",
            "url": "https://www.mahabldg.com/marble-granite"
          },
          {
            "@type": "ListItem",
            "position": 7,
            "name": "Solid Surface Filler and Sheets",
            "url": "https://www.mahabldg.com/solid-surface-filler-sheets"
          },
          {
            "@type": "ListItem",
            "position": 8,
            "name": "Interior Tiles Glue",
            "url": "https://www.mahabldg.com/interior-tiles-glue"
          }
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.mahabldg.com/categories#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://www.mahabldg.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Categories",
          "item": "https://www.mahabldg.com/categories"
        }
      ]
    }
  ]
}
</script>
@endsection

@section('content')

    <!-- Breadcumb Section  S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Shop List</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">Shop List</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Shop Section S T A R T -->
    {{-- <div class="shop-section section-padding fix pt-5">
        <div class="shop-wrapper style1">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center mb-50 mxw-660 mx-auto">
                        <div class="subtitle text-center wow fadeInUp" data-wow-delay=".5s"
                            style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"> <img
                                class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon">
                            OUR PRODUCTS
                            <img class="ms-1" src="{{ asset('assets/images/shape/titleShape1_2.png') }}" alt="icon">
                        </div>
                        <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Tiles and Sanitary
                            Ware Suppliers in Dubai</h2>
                        <p class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">As a trusted tile
                            supplier and sanitary ware supplier in Dubai, Al Maha Building Materials offers premium
                            porcelain tiles, swimming pool tiles, cladding tiles, outdoor tiles, and sanitary ware for
                            residential and commercial projects across the UAE. With over 15 years of experience as a
                            building material supplier in Dubai, we deliver durable, high-quality products that combine
                            performance, style, and value. </p>
                    </div>
                    <div class="col-xl-12 col-lg-8 wow fadeInUp" data-wow-delay=".5s">
                        <div class="shop-cards-wrapper style3">
                            <div class="row gy-30 gx-30">

                                @foreach ($categories as $category)
                                    <div class="col-lg-6"> --}}
    {{-- <div class="shop-card-items overlay-card"
                                            onclick="window.location='{{ route('tiles', ['categories' => $category->slug]) }}'"> --}}
    {{-- <a href="{{ Storage::url($category->pdf_image) }}" target="_blank">
                                            <div class="shop-card-items overlay-card">

                                                <div class="thumb">
                                                    <img class="w-100" src="{{ Storage::url($category->image) }}"
                                                        alt="{{ $category->name }}">
                                                </div>

                                                <div class="content">
                                                    <h3>{{ $category->name }}</h3>
                                                    <p>{{ Str::limit($category->description, 100) }}</p>
                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                @endforeach

                                @if ($categories->isEmpty())
                                    <p>No categories found.</p>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <section class="team-section">
        <div class="team-container-wrapper style2 section-padding fix" data-bg-src="assets/images/bg/teamBg2_1.jpg">
            <div class="container">
                <div class="section-title text-center mb-50 mxw-660 mx-auto">
                    <div class="subtitle text-center wow fadeInUp" data-wow-delay=".5s"> <img class="me-1"
                            src="assets/images/shape/titleShape1_1.png" alt="icon"> OUR PRODUCTS <img class="ms-1"
                            src="assets/images/shape/titleShape1_2.png" alt="icon"> </div>
                    <h2 class="text-center mt-15 wow fadeInUp mb-3" data-wow-delay=".3s">Tiles and Sanitary Ware Suppliers in
                        Dubai
                    </h2>
                    <p class="wow fadeInUp mb-3" data-wow-delay=".4s">As a trusted tile supplier and sanitary ware supplier in Dubai, Al Maha Building Materials offers
                        premium porcelain tiles, swimming pool tiles, cladding tiles, outdoor tiles, and sanitary ware for
                        residential and commercial projects across the UAE. With over 15 years of experience as a building
                        material supplier in Dubai, we deliver durable, high-quality products that combine performance,
                        style, and value.
                    </p>
                </div>

                <div class="slider-area">
                    <div class="swiper gt-slider" id="teamSliderTwo"
                        data-slider-options='{"loop": true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":1,"centeredSlides":true},"768":{"slidesPerView":2},"992":{"slidesPerView":3},"1200":{"slidesPerView":3}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="team-card style2 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="team-thumb">
                                        <img src="{{ asset('assets/images/team/porcelain.png') }}" alt="thumb">
                                    </div>
                                    <div class="team-content">
                                        <h3><a href="{{ route('porcelain') }}">Porcelain Tiles</a></h3>
                                        <p style="text-align:justify;">
                                            {{ Str::limit(
                                                'Al Maha is a trusted porcelain tiles supplier in Dubai, offering premium porcelain floor tiles, wall tiles, outdoor porcelain tiles, and large-format slabs for residential and commercial projects. Available in a wide range of sizes and finishes, our porcelain tiles combine durability, style, and lasting performance.',
                                                179,
                                            ) }}
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ route('porcelain') }}"> <span class="theme-btn mt-3 w-100">View <i
                                                    class="fas fa-arrow-right"></i>
                                            </span> </a>
                                    </div>
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png" alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card style2 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="team-thumb">
                                        <img src="{{ asset('assets/images/team/swimming.png') }}" alt="thumb">
                                    </div>
                                    <div class="team-content">
                                        <h3><a href="{{ route('swimming-pool-tiles') }}">Swimming Pool Tiles</a></h3>
                                        <p style="text-align:justify;">
                                            {{ Str::limit(
                                                'Al Maha is a trusted swimming pool tiles supplier in Dubai, offering premium pool tiles, anti-slip pool tiles, coping tiles, mosaic pool tiles, and porcelain pool tiles for residential and commercial projects. Our swimming pool tiles are sourced from leading global manufacturers for long-lasting performance in UAE conditions.',
                                                175,
                                            ) }}
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ route('swimming-pool-tiles') }}"> <span class="theme-btn mt-3 w-100">View <i
                                                    class="fas fa-arrow-right"></i>
                                            </span> </a>
                                    </div>
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png" alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card style2 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="team-thumb">
                                        <img src="{{ asset('assets/images/team/cladding.png') }}" alt="thumb">
                                    </div>
                                    <div class="team-content">
                                        <h3><a href="{{ route('cladding-tiles-fixing') }}">Cladding Tiles with Fixing</a></h3>
                                        <p style="text-align:justify;">
                                            {{ Str::limit(
                                                'Al Maha supplies premium cladding tiles in Dubai for interior and exterior walls, with a wide range of finishes for residential and commercial projects. As a trusted tile fixing company in Dubai, we provide complete cladding tile supply and professional installation across the UAE.',
                                                175,
                                            ) }}
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ route('cladding-tiles-fixing') }}"> <span class="theme-btn mt-3 w-100">View <i
                                                    class="fas fa-arrow-right"></i>
                                            </span> </a>
                                    </div>
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png" alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card style2 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="team-thumb">
                                        <img src="{{ asset('assets/images/team/sanitary.png') }}" alt="thumb">
                                    </div>
                                    <div class="team-content">
                                        <h3><a href="{{ route('sanitary-ware') }}">Sanitary Ware</a></h3>
                                        <p style="text-align:justify;">
                                            {{ Str::limit(
                                                'Al Maha is a trusted sanitary ware supplier in Dubai, offering premium basins, toilets, bathtubs, showers, and bathroom accessories for residential, commercial, and hospitality projects. Our sanitary ware combines quality, durability, and modern design, sourced from leading international manufacturers.',
                                                160,
                                            ) }}
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ route('sanitary-ware') }}"> <span class="theme-btn mt-3 w-100">View <i
                                                    class="fas fa-arrow-right"></i>
                                            </span> </a>
                                    </div>
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png" alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card style2 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="team-thumb">
                                        <img src="{{ asset('assets/images/team/roofing.png') }}" alt="thumb">
                                    </div>
                                    <div class="team-content">
                                        <h3><a href="{{ route('roofing-materials-dubai') }}">Roofing Materials in Dubai</a></h3>
                                        <p style="text-align:justify;">
                                            {{ Str::limit(
                                                'Al Maha supplies durable roofing materials in Dubai for residential and commercial projects, engineered for weather resistance, UV stability, and long-term performance. We offer reliable stock, competitive pricing, and UAE-wide delivery to contractors and developers across all seven Emirates.',
                                                155,
                                            ) }}
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ route('roofing-materials-dubai') }}"> <span class="theme-btn mt-3 w-100">View <i
                                                    class="fas fa-arrow-right"></i>
                                            </span> </a>
                                    </div>
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png" alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card style2 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="team-thumb">
                                        <img src="{{ asset('assets/images/team/marble.png') }}" alt="thumb">
                                    </div>
                                    <div class="team-content">
                                        <h3><a href="{{ route('marble-granite') }}">Marble and Granite</a></h3>
                                        <p style="text-align:justify;">
                                            {{ Str::limit(
                                                'Al Maha is a trusted marble and granite supplier in Dubai, offering premium marble and granite for flooring, wall cladding, countertops, staircases, and exterior applications. Sourced from leading international manufacturers, our products deliver quality, competitive pricing, and reliable supply for projects across the UAE.',
                                                155,
                                            ) }}
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ route('marble-granite') }}"> <span class="theme-btn mt-3 w-100">View <i
                                                    class="fas fa-arrow-right"></i>
                                            </span> </a>
                                    </div>
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png" alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card style2 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="team-thumb">
                                        <img src="{{ asset('assets/images/team/solid.png') }}" alt="thumb">
                                    </div>
                                    <div class="team-content">
                                        <h3><a href="{{ route('solid-surface-filler-sheets') }}">Solid Surface Filler and Sheets</a></h3>
                                        <p style="text-align:justify;">
                                            {{ Str::limit(
                                                'Al Maha supplies premium solid surface sheets and fillers in Dubai for countertops, vanity tops, wall panels, and custom interior applications. Our solid surface solutions offer seamless finishes, durability, and easy maintenance for residential, commercial, and hospitality projects across the UAE.',
                                                155,
                                            ) }}
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ route('solid-surface-filler-sheets') }}"> <span class="theme-btn mt-3 w-100">View <i
                                                    class="fas fa-arrow-right"></i>
                                            </span> </a>
                                    </div>
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png" alt="shape">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team-card style2 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="team-thumb">
                                        <img src="{{ asset('assets/images/team/interior.png') }}" alt="thumb">
                                    </div>
                                    <div class="team-content">
                                        <h3><a href="{{ route('interior-tiles-glue') }}">Interior Tiles Glue</a></h3>
                                        <p style="text-align:justify;">
                                            {{ Str::limit(
                                                'Al Maha supplies high-performance tile adhesives and interior tiles glue in Dubai for porcelain tiles, marble, granite, and ceramic tile installations. Our professional-grade tile adhesives deliver strong bonding and long-lasting performance for residential and commercial projects across the UAE.',
                                                175,
                                            ) }}
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ route('interior-tiles-glue') }}"> <span class="theme-btn mt-3 w-100">View <i
                                                    class="fas fa-arrow-right"></i>
                                            </span> </a>
                                    </div>
                                    <div class="shape1"><img src="assets/images/shape/teamCardShape2_1.png" alt="shape">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Wcu Section    S T A R T -->
    <section class="wcu-section section-padding fix pt-5">
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
                                    <h2 class=" text-start mt-15 wow fadeInUp" data-wow-delay=".8s">Why Choose Almaha ?
                                    </h2>
                                    <p class="desc border-0 wow fadeInUp" data-wow-delay=".7s">Al Maha is one of Dubai's
                                        most
                                        established building materials companies, with over 15 years of experience supplying
                                        porcelain tiles, swimming pool tiles, marble and granite, sanitary ware, and surface
                                        solutions to contractors, developers, architects, and homeowners across the UAE.</p>
                                </div>
                                <div class="row exp-area wow fadeInUp" data-wow-delay=".9s">
                                    <ul>
                                        <li class="mb-3 d-flex align-items-center"><i
                                                class="fas fa-check text-theme-color me-3"></i>Direct tiles
                                            importer and building materials supplier</li>
                                        <li class="mb-3 d-flex align-items-center"><i
                                                class="fas fa-check text-theme-color me-3"></i>Premium
                                            products sourced from globally recognised manufacturers</li>
                                        <li class="mb-3 d-flex align-items-center"><i
                                                class="fas fa-check text-theme-color me-3"></i>Trusted tiles
                                            company in Dubai with 15+ years of experience supplying residential, commercial,
                                            and hospitality projects</li>
                                        <li class="mb-3 d-flex align-items-center"><i
                                                class="fas fa-check text-theme-color me-3"></i>Comprehensive
                                            range covering porcelain tiles, pool tiles, cladding tiles, outdoor tiles and
                                            sanitary ware</li>
                                        <li class="mb-3 d-flex align-items-center"><i
                                                class="fas fa-check text-theme-color me-3"></i>Reliable stock availability
                                            and UAE-wide delivery to project sites across all seven Emirates</li>
                                        <li class="mb-3 d-flex align-items-center"><i
                                                class="fas fa-check text-theme-color me-3"></i>Experienced tile fixing
                                            contractors in Dubai for supply and installation under one roof</li>
                                        <li class="mb-3 d-flex align-items-center"><i
                                                class="fas fa-check text-theme-color me-3"></i>Showroom in Al Qusais
                                            Industrial Area 3, Dubai, open for contractors, developers, architects, and
                                            homeowners</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section fix mb-5 mt-5">
        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What building materials does Al Maha supply in Dubai?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Al Maha is a comprehensive building materials company in Dubai supplying premium porcelain
                            tiles, swimming pool tiles, anti-slip pool tiles, coping tiles, cladding tiles, outdoor
                            porcelain floor tiles, outdoor tiles for gardens, marble, granite, natural stone, and sanitary
                            ware for residential, commercial, and hospitality projects across the UAE.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Is Al Maha a direct tiles importer in Dubai?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Yes. Al Maha is a direct tiles importer in Dubai and building materials supplier, sourcing
                            porcelain tiles, pool tiles, marble, granite, natural stone, and sanitary ware directly from
                            international manufacturers. This allows us to offer premium quality at competitive prices with
                            no middleman markup.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Does Al Maha supply building materials across the UAE?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Yes. As a leading building materials supplier in Dubai, Al Maha supplies and delivers tiles,
                            sanitary ware, and building supplies to project sites across all seven Emirates, including Abu
                            Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain.

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            Where can I view Al Maha's full product range in Dubai?
                        </button>
                    </h2>
                    <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            You can browse our full range of porcelain tiles, swimming pool tiles, outdoor tiles, marble and
                            granite, and sanitary ware at Al Maha's showroom in Al Qusais Industrial Area 3, Dubai. Our
                            showroom is open to contractors, developers, architects, and homeowners across the UAE.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                            Does Al Maha provide tile fixing services in Dubai?
                        </button>
                    </h2>
                    <div id="collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Yes. In addition to supplying premium tiles and building materials, Al Maha provides
                            professional tile fixing services in Dubai through our experienced tile fixing contractors and
                            tiles work contractors for residential, commercial, and industrial projects across the UAE.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                            Can I get a quote for tiles and building materials in Dubai?
                        </button>
                    </h2>
                    <div id="collapsesix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Yes. Contact Al Maha directly by phone, email, or through our website to request a quote for any
                            porcelain tiles, pool tiles, marble, granite, sanitary ware, or building materials in Dubai. Our
                            team will provide competitive direct importer pricing tailored to your project requirements.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
