@extends('layouts.app')

@section('meta_title', 'Swimming Pool Tiles Dubai | Anti-Slip & Coping | Al Maha')
@section('meta_description', 'Buy premium mosaic pool tiles, anti-slip tiles, & coping in Dubai. Direct importer prices, 15+ years of experience, and UAE-wide delivery. Get a quote!')

@section('content')

    <!-- Breadcumb Section  S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Swimming Pool Tiles</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li><a href="{{ route('categories') }}">Products</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">Swimming Pool Tiles</li>
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
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumb wow fadeInUp" data-wow-delay=".3s">
                        <img src="{{ asset('assets/images/products/sm-1.png') }}" alt="Swimming Pool Tiles Dubai" class="img-fluid rounded shadow w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content ps-lg-4">
                        <div class="section-title text-start mb-3">
                            <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s"> 
                                <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> 
                                POOL SOLUTIONS 
                            </div>
                            <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s" style="font-size: 2.2rem; line-height: 1.2;">
                                Swimming Pool Tiles Dubai
                            </h2>
                            <h3 class="text-start text-theme-color mt-2" style="font-size: 1.4rem; font-weight: 600;">
                                Anti-Slip Pool Tiles & Coping Tiles Supplier
                            </h3>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                            Al Maha is a trusted swimming pool tiles supplier in Dubai, offering premium pool tiles for residential and commercial projects across the UAE. With over 15 years of experience, we provide high-quality swimming pool tiles, competitive pricing, and reliable UAE-wide delivery from our Al Qusais showroom.
                        </p>
                        
                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".6s" style="font-size: 1.25rem; font-weight: 700; color: #333;">What are Swimming Pool Tiles?</h4>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".7s">
                            Swimming pool tiles are specially engineered tiles designed to withstand constant water exposure, pool chemicals, UV radiation, and the physical demands of wet environments. As one of the most trusted swimming pool tiles companies, Al Maha supplies a carefully selected range of pool tiles, from luxury mosaic collections and anti-slip pool tiles to coping tiles and large-format porcelain pool tiles for projects of every scale.
                        </p>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".8s">
                            Available in a wide range of sizes, finishes, and formats, our swimming pool tiles in Dubai suit homeowners, contractors, interior designers, and developers working on residential villas, hotels, resorts, spas, and large-scale developments across the UAE. From anti-slip pool tiles for safety-critical areas to decorative mosaic tiles for luxury pool interiors, Al Maha has the right solution for every pool project across Dubai and the UAE.
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
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Benefits of Swimming Pool Tiles</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Engineered for durability, aesthetic appeal, and outstanding performance in wet environments.</p>
            </div>
            
            <div class="row gy-4">
                <!-- Benefit 1 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-water"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Chemical & Heat Resistant</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Engineered to withstand constant water exposure, pool chemicals, and Dubai's intense heat without degradation.</p>
                    </div>
                </div>
                <!-- Benefit 2 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-tint-slash"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Low Water Absorption</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Low water absorption properties prevent moisture damage and maintain structural integrity over time.</p>
                    </div>
                </div>
                <!-- Benefit 3 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-sun"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">UV-Stable Finishes</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">UV-stable finishes that resist fading, chalking, or discoloration under direct Gulf sun exposure.</p>
                    </div>
                </div>
                <!-- Benefit 4 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".5s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-running"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Anti-Slip Options</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Anti-slip surface options available for enhanced safety around pool edges, steps, and surrounds.</p>
                    </div>
                </div>
                <!-- Benefit 5 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".6s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-magic"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Easy Maintenance</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Easy to clean and maintain, making them a practical choice for residential and commercial pools in Dubai.</p>
                    </div>
                </div>
                <!-- Benefit 6 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".7s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-cloud-sun"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">All-Weather Durability</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Durable under varying weather conditions, suitable for both indoor and outdoor pools across the UAE.</p>
                    </div>
                </div>
                <!-- Benefit 7 -->
                <div class="col-lg-4 col-md-6 mx-auto d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".8s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Design Versatility</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Available in a wide range of colours, patterns, sizes, and finishes to complement any pool design.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specifications Section Start -->
    <section class="specs-section section-padding bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="specs-thumb wow fadeInUp mb-4 mb-lg-0" data-wow-delay=".3s">
                        <img src="{{ asset('assets/images/products/sm-2.png') }}" alt="Swimming Pool Tile Specifications" class="img-fluid rounded shadow w-100">
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
                                Our swimming pool tile range in Dubai is available in a variety of sizes, formats, and finishes to meet the requirements of any residential or commercial pool project:
                            </p>
                        </div>
                        
                        <div class="specs-grid wow fadeInUp" data-wow-delay=".6s">
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded" style="background-color: var(--theme2);">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-expand"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Sizes</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">100x100mm mosaic tiles, 300x300mm, 600x300mm, 600x600mm, and large-format porcelain pool tiles</p>
                                </div>
                            </div>
                            
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded" style="background-color: var(--theme2);">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-ruler-combined"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Thickness</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">9mm to 20mm depending on application and pool type</p>
                                </div>
                            </div>
                            
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded" style="background-color: var(--theme2);">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-layer-group"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Finishes</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Gloss, matte, textured, anti-slip, and mosaic</p>
                                </div>
                            </div>

                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded" style="background-color: var(--theme2);">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-shapes"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Materials</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Porcelain, ceramic, and glass mosaic pool tiles</p>
                                </div>
                            </div>
                            
                            <div class="spec-item d-flex align-items-center p-3 rounded" style="background-color: var(--theme2);">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-globe"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Sourcing</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Sourced from globally recognised tile manufacturers known for quality, durability, and innovation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Applications Section Start -->
    <section class="applications-section section-padding bg-theme2">
        <div class="container">
            <div class="section-title text-center mb-50 mxw-660 mx-auto">
                <div class="subtitle text-center wow fadeInUp" data-wow-delay=".5s"> 
                    <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> 
                    APPLICATIONS 
                    <img class="ms-1" src="{{ asset('assets/images/shape/titleShape1_2.png') }}" alt="icon"> 
                </div>
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Applications of Swimming Pool Tiles</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Our swimming pool tiles in Dubai are specified for a wide range of residential, commercial, and hospitality pool projects across the UAE:</p>
            </div>
            
            <div class="row gy-4">
                <!-- Residential -->
                <div class="col-lg-4">
                    <div class="card h-100 border-0 rounded shadow-sm p-4 bg-white wow fadeInUp" data-wow-delay=".2s">
                        <div class="card-body p-0">
                          <div class="d-flex align-items-center mb-3">
                              <span class="text-theme-color me-3" style="font-size: 1.8rem;"><i class="fas fa-home"></i></span>
                              <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0; color: #333;">Residential</h3>
                          </div>
                          <ul class="list-unstyled mb-0">
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Swimming pool interior tiles for private villas and apartments in Dubai</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Anti-slip pool tiles for pool steps, ledges, and entry areas</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Coping tiles in Dubai for clean, safe pool edge finishes</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Pool surround tiles for patios, terraces, and landscaped areas</span>
                              </li>
                              <li class="d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Spa and jacuzzi tiles for luxury residential wellness spaces</span>
                              </li>
                          </ul>
                        </div>
                    </div>
                </div>
                <!-- Commercial -->
                <div class="col-lg-4">
                    <div class="card h-100 border-0 rounded shadow-sm p-4 bg-white wow fadeInUp" data-wow-delay=".3s">
                        <div class="card-body p-0">
                          <div class="d-flex align-items-center mb-3">
                              <span class="text-theme-color me-3" style="font-size: 1.8rem;"><i class="fas fa-briefcase"></i></span>
                              <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0; color: #333;">Commercial</h3>
                          </div>
                          <ul class="list-unstyled mb-0">
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Hotel and resort pool tiles for luxury hospitality projects across the UAE</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Swimming pool tiles in Dubai for recreational and sports facilities</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Water feature tiles for hotel lobbies, commercial landscapes, and public spaces</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Large-scale development pool tiles supplied across Dubai and the UAE</span>
                              </li>
                              <li class="d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Anti-slip pool tiles for community pools, gyms, and leisure centres</span>
                              </li>
                          </ul>
                        </div>
                    </div>
                </div>
                <!-- Specialist -->
                <div class="col-lg-4">
                    <div class="card h-100 border-0 rounded shadow-sm p-4 bg-white wow fadeInUp" data-wow-delay=".4s">
                        <div class="card-body p-0">
                          <div class="d-flex align-items-center mb-3">
                              <span class="text-theme-color me-3" style="font-size: 1.8rem;"><i class="fas fa-clinic-medical"></i></span>
                              <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0; color: #333;">Specialist</h3>
                          </div>
                          <ul class="list-unstyled mb-0">
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Mosaic pool tiles for decorative water features, fountains, and luxury pool interiors</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Coping tiles for commercial pool edges in hotels, resorts, and developments</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Spa, steam room, and wet room tiles for hospitality and wellness facilities</span>
                              </li>
                              <li class="d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Large-scale residential and commercial development pool tile supply across the UAE</span>
                              </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Anti-Slip and Coping Section Start -->
    <section class="outdoor-section section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="outdoor-thumb sticky-image wow fadeInUp mb-4 mb-lg-0" data-wow-delay=".3s">
                        <img src="{{ asset('assets/images/products/sm-3.png') }}" alt="Anti-slip and Coping Tiles Dubai" class="img-fluid rounded shadow w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="outdoor-content ps-lg-4">
                        <div class="section-title text-start mb-3">
                            <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s"> 
                                <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> 
                                SAFETY & EDGES 
                            </div>
                            <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s" style="font-size: 2rem;">
                                Anti-Slip Pool Tiles & Coping Tiles
                            </h2>
                        </div>
                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".4s" style="font-size: 1.15rem; font-weight: 700; color: #333;">Anti-Slip Pool Tiles in Dubai</h4>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                            Safety is one of the most important considerations in any pool environment. Anti-slip pool tiles in Dubai are engineered to provide better grip in wet conditions, significantly reducing the risk of slipping around pool edges, steps, entry points, and surrounding areas.
                        </p>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".6s">
                            Al Maha supplies a comprehensive range of anti-slip pool tiles in Dubai for residential villas, hotel pools, resort developments, community facilities, and commercial projects across the UAE. Our anti-slip pool tile range is available in multiple finishes, sizes, and formats to suit any pool design without compromising on appearance.
                        </p>
                        <p class="desc wow fadeInUp text-justify text-muted font-italic" data-wow-delay=".7s">
                            <strong>Why Anti-Slip Pool Tiles Matter:</strong> Dubai's outdoor pool environments are subject to intense heat and constant wet surfaces, making slip resistance a critical safety requirement. Anti-slip pool tiles are engineered with textured or treated surfaces that maintain grip even under continuous water exposure, making them the recommended choice for pool steps, entry areas, and pool surrounds across the UAE.
                        </p>

                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".8s" style="font-size: 1.15rem; font-weight: 700; color: #333;">Coping Tiles in Dubai</h4>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".9s">
                            Coping tiles form the finished edge of a swimming pool, providing a clean, safe, and aesthetically consistent border between the pool water and the surrounding area. Al Maha supplies coping tiles in a range of sizes, profiles, and finishes designed to complement any pool design, from contemporary residential villas to large resort and hospitality developments.
                        </p>
                        <p class="desc wow fadeInUp text-justify mb-0" data-wow-delay="1s">
                            Coping tiles serve both a functional and decorative purpose. They protect the pool structure, provide a comfortable and safe edge for swimmers, and contribute to the overall visual finish of the pool. As a direct coping tiles supplier, Al Maha offers a range of coping tile options to suit any project scale and design specification across the UAE.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section Start -->
    <section class="why-choose-section section-padding bg-theme2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div class="why-choose-thumb sticky-image wow fadeInUp mb-4 mb-lg-0" data-wow-delay=".3s">
                        <img src="{{ asset('assets/images/products/sm-4.png') }}" alt="Why Choose Al Maha Pool Tiles Supplier" class="img-fluid rounded shadow w-100">
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
                                Why Choose Al Maha for Swimming Pool Tiles in Dubai?
                            </h2>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".4s">
                            Al Maha is one of Dubai's most trusted swimming pool tiles suppliers, with over 15 years of experience supplying premium pool tiles, anti-slip pool tiles, coping tiles, and surface solutions to contractors, developers, architects, and homeowners across the UAE.
                        </p>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                            As a direct pool tiles importer, we source our swimming pool tile collections from leading international manufacturers, giving our clients access to premium quality at competitive pool tile prices. From project consultation to UAE-wide delivery, Al Maha provides end-to-end support for every pool project.
                        </p>
                        
                        <ul class="list-unstyled mt-4 wow fadeInUp" data-wow-delay=".6s">
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Direct Sourcing Advantages:</strong> Direct swimming pool tiles importer in Dubai with competitive prices and no middleman markup.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Premium Manufacturers:</strong> Sourced from globally recognised international manufacturers known for durability.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>15+ Years Trust:</strong> Trusted swimming pool tiles company in Dubai supplying residential, commercial, and hospitality projects.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Wide Selection:</strong> Wide range of anti-slip pool tiles, coping tiles, mosaic tiles, and porcelain pool tiles for every project type.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>UAE-wide Supply:</strong> Reliable supply and delivery backed by expert project consultation.
                                </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Trade & Contractor Support:</strong> Dedicated support for contractors, developers, and interior designers in Dubai.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section Start -->
    <section class="faq-section section-padding bg-white">
        <div class="container">
            <div class="section-title text-center mb-50 mxw-660 mx-auto">
                <div class="subtitle text-center wow fadeInUp" data-wow-delay=".5s"> 
                    <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> 
                    FAQ 
                    <img class="ms-1" src="{{ asset('assets/images/shape/titleShape1_2.png') }}" alt="icon"> 
                </div>
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Frequently Asked Questions</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Get answers to the most common questions about swimming pool tiles, anti-slip finishes, and coping tiles in Dubai.</p>
            </div>
            
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="poolFaqAccordion">
                        
                        <!-- Q1 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".2s">
                            <h2 class="accordion-header" id="faqHeadingOne">
                                <button class="accordion-button font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne" style="font-weight: 600;">
                                    What types of swimming pool tiles does Al Maha supply in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#poolFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Al Maha supplies a comprehensive range of swimming pool tiles in Dubai including anti-slip pool tiles, coping tiles, mosaic pool tiles, porcelain pool tiles, and ceramic pool tiles. Our range covers residential villas, hotel pools, resort developments, spas, and recreational facilities across the UAE.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q2 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".3s">
                            <h2 class="accordion-header" id="faqHeadingTwo">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo" style="font-weight: 600;">
                                    Are swimming pool tiles suitable for outdoor pools in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#poolFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes. Our swimming pool tiles in Dubai are weather-resistant, UV-stable, and engineered to withstand Dubai\'s extreme heat, direct sun exposure, and constant water contact, making them suitable for both indoor and outdoor pools across the UAE.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q3 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".4s">
                            <h2 class="accordion-header" id="faqHeadingThree">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree" style="font-weight: 600;">
                                    What are anti-slip pool tiles and why are they important?
                                </button>
                            </h2>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#poolFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Anti-slip pool tiles in Dubai feature textured or treated surfaces that provide better grip in wet conditions. They are essential for pool steps, entry areas, pool edges, and surrounding walkways where slip resistance is a critical safety requirement for both residential and commercial pools.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q4 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".5s">
                            <h2 class="accordion-header" id="faqHeadingFour">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour" style="font-weight: 600;">
                                    What are coping tiles used for in a swimming pool?
                                </button>
                            </h2>
                            <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#poolFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Coping tiles in Dubai are used to finish the edge of a swimming pool, creating a clean, safe border between the pool water and the surrounding area. They protect the pool structure, provide a comfortable edge for swimmers, and contribute to the visual finish of the pool design.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".6s">
                            <h2 class="accordion-header" id="faqHeadingFive">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive" style="font-weight: 600;">
                                    How much do swimming pool tiles cost in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive" data-bs-parent="#poolFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Swimming pool tile prices in Dubai vary depending on the tile type, finish, size, and collection. Al Maha offers competitive pricing across both standard and premium pool tile ranges. Contact us for a quote tailored to your project.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q6 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".7s">
                            <h2 class="accordion-header" id="faqHeadingSix">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSix" aria-expanded="false" aria-controls="faqCollapseSix" style="font-weight: 600;">
                                    Can swimming pool tiles be used for spas and water features?
                                </button>
                            </h2>
                            <div id="faqCollapseSix" class="accordion-collapse collapse" aria-labelledby="faqHeadingSix" data-bs-parent="#poolFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes. Our swimming pool tiles in Dubai are commonly used for spas, jacuzzis, fountains, water features, and other wet environments due to their durability, water resistance, and wide range of available finishes.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q7 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".8s">
                            <h2 class="accordion-header" id="faqHeadingSeven">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSeven" aria-expanded="false" aria-controls="faqCollapseSeven" style="font-weight: 600;">
                                    Where can I buy swimming pool tiles in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseSeven" class="accordion-collapse collapse" aria-labelledby="faqHeadingSeven" data-bs-parent="#poolFaqAccordion">
                                <div class="accordion-body text-muted">
                                    You can view and purchase swimming pool tiles in Dubai at Al Maha's showroom in Al Qusais Industrial Area 3, Dubai. As a direct pool tiles supplier in Dubai, we also supply to project sites across all seven Emirates including Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and Umm Al Quwain.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q8 -->
                        <div class="accordion-item border rounded shadow-sm wow fadeInUp" data-wow-delay=".9s">
                            <h2 class="accordion-header" id="faqHeadingEight">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseEight" aria-expanded="false" aria-controls="faqCollapseEight" style="font-weight: 600;">
                                    What is the difference between pool tiles and regular tiles?
                                </button>
                            </h2>
                            <div id="faqCollapseEight" class="accordion-collapse collapse" aria-labelledby="faqHeadingEight" data-bs-parent="#poolFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Swimming pool tiles are specifically engineered for constant water immersion, chemical exposure, and wet environment conditions. Unlike standard floor or wall tiles, pool tiles have very low water absorption rates, enhanced chemical resistance, and are available in anti-slip finishes, making them the only recommended choice for pool interiors, pool surrounds, and wet areas across Dubai and the UAE.
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick CTA Section -->
    <section class="cta-section pt-5 pb-5 fix" style="background-color: var(--theme); color: white;">
        <div class="container">
            <div class="row align-items-center text-center text-lg-start">
                <div class="col-lg-8">
                    <h3 class="text-white mb-2" style="font-size: 1.8rem; font-weight: 700; font-family: inherit;">Ready to build a premium swimming pool?</h3>
                    <p class="mb-0 text-white-50" style="font-size: 1.05rem;">Al Maha building materials has the largest collection in Dubai. Sourced direct, priced competitively.</p>
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
