@extends('layouts.app')

@section('meta_title', 'Premium Sanitary Ware Supplier Dubai | Al Maha Materials')
@section('meta_description', 'Source luxury bathroom sanitary ware & accessories at direct-importer prices in Dubai. 15+ years of expertise with UAE-wide delivery. Contact us today.')

@section('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@graph": [
    {
      "@type": "CollectionPage",
      "@id": "https://www.mahabldg.com/sanitary-ware#webpage",
      "url": "https://www.mahabldg.com/sanitary-ware",
      "name": "Premium Sanitary Ware Supplier Dubai | Al Maha Materials",
      "description": "Source luxury bathroom sanitary ware & accessories at direct-importer prices in Dubai. 15+ years of expertise with UAE-wide delivery.",
      "isPartOf": {
        "@id": "https://www.mahabldg.com/#website"
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.mahabldg.com/sanitary-ware#breadcrumb",
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
          "name": "Products",
          "item": "https://www.mahabldg.com/categories"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Sanitary Ware",
          "item": "https://www.mahabldg.com/sanitary-ware"
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
                            <h1 class="breadcumb-title">Sanitary Ware</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li><a href="{{ route('categories') }}">Products</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">Sanitary Ware</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Intro Section Start -->
    <section class="about-section section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-thumb sticky-image wow fadeInUp" data-wow-delay=".3s">
                        <img src="{{ asset('assets/images/products/san-1.png') }}" alt="Sanitary Ware Dubai" class="img-fluid rounded shadow w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content ps-lg-4">
                        <div class="section-title text-start mb-3">
                            <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s"> 
                                <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> 
                                BATHROOM FITTINGS 
                            </div>
                            <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s" style="font-size: 2.2rem; line-height: 1.2;">
                                Sanitary Ware Dubai
                            </h2>
                            <h3 class="text-start text-theme-color mt-2" style="font-size: 1.4rem; font-weight: 600;">
                                Premium Sanitary Ware Supplier and Importer
                            </h3>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                            Al Maha is a trusted sanitary ware supplier in Dubai, offering premium basins, toilets, bathtubs, showers, and bathroom accessories for residential, commercial, and large-scale projects across the UAE. With over 15 years of experience, we provide high-quality sanitary ware, competitive pricing, and reliable UAE-wide delivery from our Al Qusais showroom.
                        </p>
                        
                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".6s" style="font-size: 1.25rem; font-weight: 700; color: #333;">What Is Sanitary Ware?</h4>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".7s">
                            Sanitary ware refers to the fixed bathroom and washroom fittings used in residential, commercial, and hospitality environments, including toilets, basins, bathtubs, shower trays, and urinals. As one of the most trusted sanitary ware suppliers in Dubai, Al Maha supplies a carefully selected range of sanitary ware, from premium luxury bathroom collections to competitively priced standard ranges for projects of every scale.
                        </p>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".8s">
                            Available in a wide range of styles, finishes, and specifications, our sanitary ware in Dubai suits homeowners, contractors, interior designers, and developers working on projects of all scales across the UAE. From luxury villa bathrooms and hotel fit-outs to large-scale residential developments and commercial washrooms, Al Maha has the right sanitary ware solution for every project across Dubai and the UAE.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section Start -->
    <section class="benefits-section section-padding bg-theme2">
        <div class="container">
            <div class="section-title text-center mb-50 mxw-660 mx-auto">
                <div class="subtitle text-center wow fadeInUp" data-wow-delay=".5s"> 
                    <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> 
                    BENEFITS 
                    <img class="ms-1" src="{{ asset('assets/images/shape/titleShape1_2.png') }}" alt="icon"> 
                </div>
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Benefits of Our Sanitary Ware</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Engineered for absolute hygiene, durability, and contemporary style in any residential or commercial setting.</p>
            </div>
            
            <div class="row gy-4">
                <!-- Benefit 1 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Premium Quality</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Engineered for durability and long-term performance in residential and commercial environments.</p>
                    </div>
                </div>
                <!-- Benefit 2 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Aesthetic Range</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Wide range of styles from modern and contemporary to classic designs suitable for every interior specification.</p>
                    </div>
                </div>
                <!-- Benefit 3 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-tint"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Water Efficient</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Water-efficient options available to meet UAE sustainability and building regulations.</p>
                    </div>
                </div>
                <!-- Benefit 4 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".5s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-magic"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Easy Maintenance</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Easy to clean and maintain, making them a practical choice for high-traffic commercial and hospitality environments.</p>
                    </div>
                </div>
                <!-- Benefit 5 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".6s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-tags"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Competitive Pricing</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Sourced directly from internationally recognised manufacturers, ensuring consistent quality and competitive prices.</p>
                    </div>
                </div>
                <!-- Benefit 6 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".7s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-building"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Highly Versatile</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Suitable for residential villas, apartments, hotels, offices, and large-scale construction projects across the UAE.</p>
                    </div>
                </div>
                <!-- Benefit 7 -->
                <div class="col-lg-4 col-md-6 mx-auto d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".8s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-bath"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Complete Bathroom Solutions</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Complete bathroom packages available, covering basins, toilets, bathtubs, showers, and accessories from a single supplier.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Range Section Start -->
    <section class="range-section section-padding bg-white">
        <div class="container">
            <div class="section-title text-center mb-50 mxw-660 mx-auto">
                <div class="subtitle text-center wow fadeInUp" data-wow-delay=".5s"> 
                    <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> 
                    OUR RANGE 
                    <img class="ms-1" src="{{ asset('assets/images/shape/titleShape1_2.png') }}" alt="icon"> 
                </div>
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Sanitary Ware Product Range</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">A comprehensive selection of premium bathroom and washroom fittings for every requirement:</p>
            </div>
            
            <div class="row gy-4">
                <!-- item 1 -->
                <div class="col-md-4">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".2s">
                        <h4 style="font-size: 1.15rem; font-weight: 700; color: var(--theme);"><i class="fas fa-sink me-2"></i> Basins & Wash Basins</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.95rem;">Wall-hung basins, countertop basins, under-counter basins, and pedestal basins in a wide range of sizes and finishes.</p>
                    </div>
                </div>
                <!-- item 2 -->
                <div class="col-md-4">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".3s">
                        <h4 style="font-size: 1.15rem; font-weight: 700; color: var(--theme);"><i class="fas fa-toilet me-2"></i> Toilets & WCs</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.95rem;">Wall-hung toilets, close-coupled toilets, back-to-wall toilets, and smart toilet options for residential and commercial projects.</p>
                    </div>
                </div>
                <!-- item 3 -->
                <div class="col-md-4">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".4s">
                        <h4 style="font-size: 1.15rem; font-weight: 700; color: var(--theme);"><i class="fas fa-bath me-2"></i> Bathtubs</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.95rem;">Freestanding bathtubs, built-in bathtubs, and corner bathtubs in acrylic and stone resin finishes for luxury projects.</p>
                    </div>
                </div>
                <!-- item 4 -->
                <div class="col-md-4">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".5s">
                        <h4 style="font-size: 1.15rem; font-weight: 700; color: var(--theme);"><i class="fas fa-shower me-2"></i> Shower Trays & Enclosures</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.95rem;">Low-profile shower trays, walk-in shower enclosures, and frameless shower screens for modern bathroom designs.</p>
                    </div>
                </div>
                <!-- item 5 -->
                <div class="col-md-4">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".6s">
                        <h4 style="font-size: 1.15rem; font-weight: 700; color: var(--theme);"><i class="fas fa-male me-2"></i> Urinals</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.95rem;">Wall-hung urinals and waterless urinals for commercial washrooms, offices, hotels, and large-scale facilities.</p>
                    </div>
                </div>
                <!-- item 6 -->
                <div class="col-md-4">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".7s">
                        <h4 style="font-size: 1.15rem; font-weight: 700; color: var(--theme);"><i class="fas fa-pump-soap me-2"></i> Bathroom Accessories</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.95rem;">Towel rails, toilet roll holders, soap dispensers, mirrors, and vanity units to complete any bathroom specification.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specifications Section Start -->
    <section class="specs-section section-padding bg-theme2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div class="specs-thumb sticky-image wow fadeInUp mb-4 mb-lg-0" data-wow-delay=".3s">
                        <img src="{{ asset('assets/images/products/san-2.png') }}" alt="Sanitary Ware Specifications" class="img-fluid rounded shadow w-100">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="specs-content pe-lg-4">
                        <div class="section-title text-start mb-4">
                            <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s"> 
                                <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> 
                                SPECIFICATIONS 
                            </div>
                            <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s">Product Specifications</h2>
                            <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                                Our sanitary ware range in Dubai is available across a variety of styles, materials, and specifications to meet the requirements of any residential or commercial project:
                            </p>
                        </div>
                        
                        <div class="specs-grid wow fadeInUp" data-wow-delay=".6s">
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-cubes"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Materials</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Vitreous china, ceramic, acrylic, stone resin, and tempered glass</p>
                                </div>
                            </div>
                            
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-layer-group"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Finishes</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Gloss white, matte white, custom colours, and metallic finishes</p>
                                </div>
                            </div>
                            
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-shield-alt"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Standards</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Products sourced to meet UAE building and plumbing regulations</p>
                                </div>
                            </div>

                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-star"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Styles</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Modern, contemporary, classic, and minimalist designs</p>
                                </div>
                            </div>
                            
                            <div class="spec-item d-flex align-items-center p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-globe"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Sourcing</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Sourced from globally recognised sanitary ware manufacturers known for quality, innovation, and durability</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Applications Section Start -->
    <section class="applications-section section-padding bg-white">
        <div class="container">
            <div class="section-title text-center mb-50 mxw-660 mx-auto">
                <div class="subtitle text-center wow fadeInUp" data-wow-delay=".5s"> 
                    <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> 
                    APPLICATIONS 
                    <img class="ms-1" src="{{ asset('assets/images/shape/titleShape1_2.png') }}" alt="icon"> 
                </div>
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Applications of Sanitary Ware</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Our sanitary ware is specified for a wide range of residential, commercial, and hospitality projects across the UAE:</p>
            </div>
            
            <div class="row gy-4">
                <!-- Residential -->
                <div class="col-lg-4">
                    <div class="card h-100 border-0 rounded shadow-sm p-4 bg-theme2 wow fadeInUp" data-wow-delay=".2s">
                        <div class="card-body p-0">
                          <div class="d-flex align-items-center mb-3">
                              <span class="text-theme-color me-3" style="font-size: 1.8rem;"><i class="fas fa-home"></i></span>
                              <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0; color: #333;">Residential</h3>
                          </div>
                          <ul class="list-unstyled mb-0">
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Sanitary ware for luxury villas and private residences</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Bathroom fittings for apartments and townhouses across the UAE</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Ensuite and master bathroom sanitary ware for high-end residential projects</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Powder room and guest bathroom fittings for residential developments</span>
                              </li>
                              <li class="d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Complete bathroom packages for villa and apartment fit-outs</span>
                              </li>
                          </ul>
                        </div>
                    </div>
                </div>
                <!-- Commercial -->
                <div class="col-lg-4">
                    <div class="card h-100 border-0 rounded shadow-sm p-4 bg-theme2 wow fadeInUp" data-wow-delay=".3s">
                        <div class="card-body p-0">
                          <div class="d-flex align-items-center mb-3">
                              <span class="text-theme-color me-3" style="font-size: 1.8rem;"><i class="fas fa-briefcase"></i></span>
                              <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0; color: #333;">Commercial</h3>
                          </div>
                          <ul class="list-unstyled mb-0">
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Office washroom sanitary ware for commercial buildings</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Retail store and shopping mall washroom fittings across the UAE</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Restaurant and cafe bathroom fittings for hospitality fit-outs</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Gym and leisure facility sanitary ware for commercial developments</span>
                              </li>
                              <li class="d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Large-scale residential/commercial development washroom supply</span>
                              </li>
                          </ul>
                        </div>
                    </div>
                </div>
                <!-- Hospitality & Specialist -->
                <div class="col-lg-4">
                    <div class="card h-100 border-0 rounded shadow-sm p-4 bg-theme2 wow fadeInUp" data-wow-delay=".4s">
                        <div class="card-body p-0">
                          <div class="d-flex align-items-center mb-3">
                              <span class="text-theme-color me-3" style="font-size: 1.8rem;"><i class="fas fa-hotel"></i></span>
                              <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0; color: #333;">Hospitality & Health</h3>
                          </div>
                          <ul class="list-unstyled mb-0">
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Hotel bathroom sanitary ware for luxury and mid-range hospitality projects</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Resort and spa bathroom fittings for hospitality developments across the UAE</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Serviced apartment sanitary ware for short-term rental projects</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Hotel lobby and public washroom sanitary ware for developments</span>
                              </li>
                              <li class="d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Healthcare facility sanitary ware that is hygienic, durable, and easy to maintain</span>
                              </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Luxury Sanitary Ware Section Start -->
    <section class="outdoor-section section-padding bg-theme2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="outdoor-thumb sticky-image wow fadeInUp mb-4 mb-lg-0" data-wow-delay=".3s">
                        <img src="{{ asset('assets/images/products/san-3.png') }}" alt="Luxury Sanitary Ware Dubai" class="img-fluid rounded shadow w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="outdoor-content ps-lg-4">
                        <div class="section-title text-start mb-3">
                            <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s"> 
                                <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> 
                                LUXURY SELECTION 
                            </div>
                            <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s" style="font-size: 2rem;">
                                Luxury Sanitary Ware
                            </h2>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".4s">
                            Al Maha supplies a carefully curated range of luxury sanitary ware for high-end residential villas, boutique hotels, luxury apartments, and premium hospitality developments across the UAE. Our luxury sanitary ware collection includes designer basins, freestanding bathtubs, wall-hung toilets, frameless shower enclosures, and premium bathroom accessories sourced from internationally acclaimed manufacturers.
                        </p>
                        
                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".5s" style="font-size: 1.15rem; font-weight: 700; color: #333;">Why Choose Luxury Sanitary Ware for Your Project</h4>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".6s">
                            Premium sanitary ware elevates the appearance and functionality of any bathroom space, combining high-quality materials with contemporary design to create bathrooms that are both visually impressive and built to last. As a direct luxury sanitary ware importer, Al Maha gives contractors, developers, and homeowners access to premium collections at competitive prices with no middleman markup.
                        </p>

                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".7s" style="font-size: 1.15rem; font-weight: 700; color: #333;">Luxury Sanitary Ware Applications</h4>
                        <div class="row wow fadeInUp" data-wow-delay=".8s">
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Master bathroom & ensuite fittings</li>
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Boutique hotel suite fixtures</li>
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> High-end apartment bathroom fit-outs</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Spa and wellness facility fittings</li>
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Developer show apartment models</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section Start -->
    <section class="why-choose-section section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div class="why-choose-thumb sticky-image wow fadeInUp mb-4 mb-lg-0" data-wow-delay=".3s">
                        <img src="{{ asset('assets/images/products/san-4.png') }}" alt="Why Choose Al Maha Sanitary Ware Supplier" class="img-fluid rounded shadow w-100">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="why-choose-content pe-lg-4">
                        <div class="section-title text-start mb-3">
                            <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s"> 
                                <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> 
                                WHY CHOOSE US 
                            </div>
                            <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s" style="font-size: 2rem;">
                                Why Choose Al Maha for Sanitary Ware in Dubai?
                            </h2>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".4s">
                            Al Maha is one of Dubai's most trusted sanitary ware suppliers, with over 15 years of experience supplying premium sanitary ware, bathroom fittings, and surface solutions to contractors, developers, architects, and homeowners across the UAE.
                        </p>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                            As a direct sanitary ware importer, we source our sanitary ware collections from leading international manufacturers, giving our clients access to premium quality at competitive sanitary ware prices in Dubai. From product selection and project consultation to UAE-wide delivery, Al Maha provides end-to-end support for every bathroom and washroom project.
                        </p>
                        
                        <ul class="list-unstyled mt-4 wow fadeInUp" data-wow-delay=".6s">
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Direct Importer Prices:</strong> Direct sanitary ware importer in Dubai with competitive prices and no middleman markup.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Premium Brands:</strong> Premium sanitary ware sourced from globally recognised international manufacturers.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>15+ Years Trust:</strong> Trusted sanitary ware company in Dubai with 15+ years of supplying residential, commercial, and hospitality projects.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Complete Range:</strong> Complete bathroom range covering basins, toilets, bathtubs, showers, urinals, and accessories.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Versatile Styles:</strong> Wide range of styles, finishes, and specifications for every project type and budget.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>UAE-wide Supply:</strong> Reliable supply and UAE-wide delivery backed by expert project consultation.
                                </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Expert Trade Support:</strong> Dedicated support for contractors, developers, and interior designers in Dubai.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section Start -->
    <section class="faq-section section-padding bg-theme2">
        <div class="container">
            <div class="section-title text-center mb-50 mxw-660 mx-auto">
                <div class="subtitle text-center wow fadeInUp" data-wow-delay=".5s"> 
                    <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> 
                    FAQ 
                    <img class="ms-1" src="{{ asset('assets/images/shape/titleShape1_2.png') }}" alt="icon"> 
                </div>
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Frequently Asked Questions</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Get answers to the most common questions about bathroom fittings, luxury sanitary ware, and orders in Dubai.</p>
            </div>
            
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="sanitaryFaqAccordion">
                        
                        <!-- Q1 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".2s bg-white">
                            <h2 class="accordion-header" id="faqHeadingOne">
                                <button class="accordion-button font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne" style="font-weight: 600;">
                                    What sanitary ware does Al Maha supply in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#sanitaryFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Al Maha supplies a comprehensive range of sanitary wares, including basins, toilets, bathtubs, shower trays, shower enclosures, urinals, and bathroom accessories for residential, commercial, and hospitality projects across the UAE.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q2 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".3s bg-white">
                            <h2 class="accordion-header" id="faqHeadingTwo">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo" style="font-weight: 600;">
                                    Is Al Maha a direct sanitary ware importer in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#sanitaryFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Yes. Al Maha is a direct sanitary ware importer in Dubai, sourcing bathroom fittings and sanitary ware directly from internationally recognised manufacturers. This allows us to offer premium quality at competitive sanitary ware prices in Dubai with no middleman markup.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q3 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".4s bg-white">
                            <h2 class="accordion-header" id="faqHeadingThree">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree" style="font-weight: 600;">
                                    What styles of sanitary ware are available in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#sanitaryFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Al Maha supplies sanitary ware across Dubai in a wide range of styles including modern, contemporary, classic, and minimalist designs. Our range covers gloss white, matte white, custom colour, and metallic finishes to suit every bathroom specification and interior design requirement.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q4 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".5s bg-white">
                            <h2 class="accordion-header" id="faqHeadingFour">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour" style="font-weight: 600;">
                                    Does Al Maha supply luxury sanitary ware in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#sanitaryFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Yes. Al Maha supplies a carefully curated range of luxury sanitary ware in Dubai including designer basins, freestanding bathtubs, wall-hung toilets, and frameless shower enclosures for high-end residential villas, luxury hotels, and premium hospitality developments across the UAE.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".6s bg-white">
                            <h2 class="accordion-header" id="faqHeadingFive">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive" style="font-weight: 600;">
                                    How much do sanitary ware cost in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive" data-bs-parent="#sanitaryFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Sanitary ware prices in Dubai vary depending on the product type, style, finish, and collection. Al Maha offers competitive pricing across both standard and premium sanitary ware ranges as a direct importer. Contact us for a quote tailored to your specific project requirements.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q6 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".7s bg-white">
                            <h2 class="accordion-header" id="faqHeadingSix">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSix" aria-expanded="false" aria-controls="faqCollapseSix" style="font-weight: 600;">
                                    Does Al Maha supply sanitary ware for hotels and hospitality projects in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseSix" class="accordion-collapse collapse" aria-labelledby="faqHeadingSix" data-bs-parent="#sanitaryFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Yes. Al Maha is a trusted sanitary ware supplier for hospitality projects in Dubai and across the UAE, supplying bathroom fittings, hotel bathroom sanitary ware, and complete washroom solutions for luxury hotels, resorts, serviced apartments, and large-scale hospitality developments.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q7 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".8s bg-white">
                            <h2 class="accordion-header" id="faqHeadingSeven">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSeven" aria-expanded="false" aria-controls="faqCollapseSeven" style="font-weight: 600;">
                                    Can I view sanitary ware in Al Maha's Dubai showroom?
                                </button>
                            </h2>
                            <div id="faqCollapseSeven" class="accordion-collapse collapse" aria-labelledby="faqHeadingSeven" data-bs-parent="#sanitaryFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Yes. You can view our full range of sanitary ware in Dubai at Al Maha's showroom in Al Qusais Industrial Area 3, Dubai. Our team is available to help you select the right sanitary ware for your project budget and specifications. We also supply sanitary ware to project sites across all seven Emirates.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q8 -->
                        <div class="accordion-item border rounded shadow-sm wow fadeInUp" data-wow-delay=".9s bg-white">
                            <h2 class="accordion-header" id="faqHeadingEight">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseEight" aria-expanded="false" aria-controls="faqCollapseEight" style="font-weight: 600;">
                                    What is the difference between standard and luxury sanitary ware?
                                </button>
                            </h2>
                            <div id="faqCollapseEight" class="accordion-collapse collapse" aria-labelledby="faqHeadingEight" data-bs-parent="#sanitaryFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Standard sanitary ware offers reliable quality and practical functionality at competitive prices, making it suitable for residential developments, commercial washrooms, and budget-conscious projects. Luxury sanitary ware combines premium materials, designer aesthetics, and advanced functionality, making it the preferred choice for high-end villas, boutique hotels, and premium hospitality projects in Dubai.
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Closing CTA -->
    <section class="cta-section pt-5 pb-5 fix" style="background-color: var(--theme); color: white;">
        <div class="container">
            <div class="row align-items-center text-center text-lg-start">
                <div class="col-lg-8">
                    <h3 class="text-white mb-2" style="font-size: 1.8rem; font-weight: 700; font-family: inherit;">Ready to Specify Sanitary Ware for Your Project?</h3>
                    <p class="mb-0 text-white-50" style="font-size: 1.05rem;">From luxury villa bathrooms to large-scale hotel fit-outs, Al Maha has the sanitary ware, the product range, and the project expertise to deliver the right solution for every project across Dubai and the UAE.</p>
                </div>
                <div class="col-lg-4 text-center text-lg-end mt-4 mt-lg-0">
                    <a href="{{ route('contact') }}">
                        <span class="theme-btn bg-white text-dark" style="color: var(--theme) !important; background: white !important; font-weight: bold; border: 1px solid white;">GET A QUOTE</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
