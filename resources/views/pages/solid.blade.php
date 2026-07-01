@extends('layouts.app')

@section('meta_title', 'Premium Solid Surface Sheets Dubai | Al Maha Materials')
@section('meta_description', 'Source premium solid surface solutions at competitive direct-importer prices in Dubai. 15+ years experience. Contact Al Maha for a bulk or project quote today!')

@section('content')

    <!-- Breadcumb Section  S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Solid Surface Sheets</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li><a href="{{ route('categories') }}">Products</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">Solid Surface Sheets</li>
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
                    <div class="about-thumb sticky-image  wow fadeInUp" data-wow-delay=".3s">
                        <img src="{{ asset('assets/images/products/sl-1.png') }}" alt="Solid Surface Sheets Dubai" class="img-fluid rounded shadow w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content ps-lg-4">
                        <div class="section-title text-start mb-3">
                            <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s"> 
                                <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> 
                                MODERN SURFACES 
                            </div>
                            <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s" style="font-size: 2.2rem; line-height: 1.2;">
                                Solid Surface Sheets Dubai
                            </h2>
                            <h3 class="text-start text-theme-color mt-2" style="font-size: 1.4rem; font-weight: 600;">
                                Premium Solid Surface Supplier and Importer
                            </h3>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                            Al Maha is a trusted solid surface sheets supplier in Dubai, offering premium solid surface sheets and fillers for residential, commercial, and large-scale projects across the UAE. With over 15 years of experience, we provide high-quality surface solutions, competitive pricing, and reliable UAE-wide delivery from our Al Qusais showroom.
                        </p>
                        
                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".6s" style="font-size: 1.25rem; font-weight: 700; color: #333;">What Are Solid Surface Sheets and Fillers?</h4>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".7s">
                            Solid surface sheets are engineered, non-porous surface materials manufactured from a blend of natural minerals and high-performance resins, used across residential, commercial, and hospitality environments for countertops, wall cladding, vanity tops, reception desks, and architectural feature surfaces. Solid surface fillers are complementary adhesive and jointing compounds used to create seamless, invisible joins between solid surface sheets for a continuous, high-finish appearance.
                        </p>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".8s">
                            As one of the most trusted building materials suppliers in Dubai, Al Maha supplies a carefully selected range of solid surface sheets and fillers in Dubai, from premium designer collections to competitively priced options for projects of every scale. Available in a wide range of colours, patterns, and finishes, our solid surface solutions suit homeowners, fit-out contractors, interior designers, and developers working on projects of all scales across the UAE.
                        </p>
                        <p class="desc wow fadeInUp text-justify text-muted font-italic" data-wow-delay=".9s" style="border-left: 3px solid var(--theme); padding-left: 15px;">
                            Dubai's interior design and fit-out industry demands surface materials that combine visual excellence with long-term performance. Our solid surface sheets are selected to meet the aesthetic and functional standards expected across the UAE's most prestigious residential, hospitality, and commercial developments, offering a seamless alternative to natural stone that is non-porous, hygienic, and fully repairable.
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
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Benefits of Solid Surface Solutions</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Seamless integration, complete hygiene, and endless design capabilities.</p>
            </div>
            
            <div class="row gy-4">
                <!-- Benefit 1 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-shield-virus"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Non-Porous & Hygienic</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Hygienic, stain-resistant, non-porous surface that is easy to clean, making it ideal for kitchens and healthcare environments.</p>
                    </div>
                </div>
                <!-- Benefit 2 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-link"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Seamless Joins</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Seamless joining capability using solid surface fillers to create invisible joins for a continuous, high-finish surface appearance.</p>
                    </div>
                </div>
                <!-- Benefit 3 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Fully Repairable</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Scratches, chips, and surface damage can be easily sanded and restored to original condition without material replacement.</p>
                    </div>
                </div>
                <!-- Benefit 4 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".5s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Extensive Design Range</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Wide range of colours, patterns, and finishes, including stone-look, wood-look, solid colours, and translucent designs.</p>
                    </div>
                </div>
                <!-- Benefit 5 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".6s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-compress-arrows-alt"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Thermoformable</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Thermoformable material allows curved, shaped, and custom-fabricated applications that natural stone cannot achieve.</p>
                    </div>
                </div>
                <!-- Benefit 6 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".7s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-sun"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">UV & Heat Resistant</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">UV-stable and heat-resistant options available for interior applications across the UAE's demanding climate conditions.</p>
                    </div>
                </div>
                <!-- Benefit 7 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".8s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-tags"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Competitive Price</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Sourced directly from internationally recognised manufacturers, ensuring consistent quality and competitive prices.</p>
                    </div>
                </div>
                <!-- Benefit 8 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".9s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-cubes"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Wide Project Scope</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Suitable for residential villas, commercial fit-outs, hospitality projects, healthcare facilities, and developments.</p>
                    </div>
                </div>
                <!-- Benefit 9 -->
                <div class="col-lg-4 col-md-6 mx-auto d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay="1.0s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Complete Product Range</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Complete solid surface solutions available, covering sheets, fillers, and adhesives from a single specialist.</p>
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
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Solid Surface Product Range</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">A comprehensive selection of premium solid surface sheets and fillers in Dubai for residential, commercial, and hospitality projects:</p>
            </div>
            
            <div class="row gy-4">
                <!-- item 1 -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".2s">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--theme);"><i class="fas fa-layer-group me-2"></i> Solid Surface Sheets</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.9rem;">Full-format solid surface panels in standard and large-format sizes for countertops, wall cladding, vanity tops, and architectural applications in Dubai.</p>
                    </div>
                </div>
                <!-- item 2 -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".3s">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--theme);"><i class="fas fa-fill me-2"></i> Fillers & Adhesives</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.9rem;">High-performance jointing compounds and colour-matched fillers for seamless solid surface installations, invisible joins, and repairs.</p>
                    </div>
                </div>
                <!-- item 3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".4s">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--theme);"><i class="fas fa-gem me-2"></i> Stone-Look Panels</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.9rem;">Engineered solid surface sheets designed to replicate the appearance of marble, granite, and natural stone with performance advantages.</p>
                    </div>
                </div>
                <!-- item 4 -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".5s">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--theme);"><i class="fas fa-palette me-2"></i> Plain & Solid Colours</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.9rem;">Matte and gloss solid colour solid surface panels for contemporary kitchen, bathroom, and commercial interior applications.</p>
                    </div>
                </div>
                <!-- item 5 -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".6s">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--theme);"><i class="fas fa-lightbulb me-2"></i> Translucent Sheets</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.9rem;">Backlit and translucent solid surface panels for feature walls, reception desks, and architectural lighting applications across hospitality projects.</p>
                    </div>
                </div>
                <!-- item 6 -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".7s">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--theme);"><i class="fas fa-bezier-curve me-2"></i> Custom Fabricated pieces</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.9rem;">Bespoke solid surface fabrication for curved countertops, shaped wall panels, integrated sinks, and custom architectural pieces.</p>
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
                        <img src="{{ asset('assets/images/products/sl-2.png') }}" alt="Solid Surface Specifications" class="img-fluid rounded shadow w-100">
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
                                Our solid surface sheets and fillers range in Dubai is available across a variety of formats, finishes, and specifications to meet project requirements:
                            </p>
                        </div>
                        
                        <div class="specs-grid wow fadeInUp" data-wow-delay=".6s">
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-layer-group"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Materials</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Acrylic solid surface, polyester solid surface, and hybrid acrylic-polyester blends</p>
                                </div>
                            </div>
                            
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-arrows-alt"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Sheet Sizes</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Standard 760mm x 3660mm and 920mm x 3660mm sheet formats with custom sizing available</p>
                                </div>
                            </div>
                            
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-ruler-combined"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Thickness</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">6mm, 9mm, and 12mm sheet thicknesses for countertops, cladding, and architectural applications</p>
                                </div>
                            </div>

                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-border-style"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Finishes & Colours</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Matte, satin, gloss, and textured finishes. Stone-look, wood-look, solid colours, veined patterns, and translucent designs</p>
                                </div>
                            </div>
                            
                            <div class="spec-item d-flex align-items-center p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-globe"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Sourcing</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Sourced from globally recognised solid surface manufacturers known for quality, consistency, and innovation</p>
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
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Applications of Solid Surface</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Our solid surface sheets and fillers in Dubai are specified for a wide range of residential, commercial, and hospitality projects across the UAE:</p>
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
                                  <span>Kitchen countertops and work surfaces in solid surface sheets for villas & apartments</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Bathroom vanity tops and wall cladding in solid surface for residential fit-outs</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Integrated solid surface sinks and basins for seamless bathroom installations</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Feature wall cladding and decorative panels in solid surface for entrance lobbies</span>
                              </li>
                              <li class="d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Custom shaped and curved solid surface applications for bespoke interior projects</span>
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
                                  <span>Reception desks and front-of-house countertops for corporate offices</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Retail store counters, display surfaces, and feature wall cladding in solid surface</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Restaurant and cafe bar tops, kitchen counters, and food preparation surfaces</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Office pantry and breakroom countertops in solid surface for interior projects</span>
                              </li>
                              <li class="d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Large-scale commercial and mixed-use development solid surface supply across the UAE</span>
                              </li>
                          </ul>
                        </div>
                    </div>
                </div>
                <!-- Hospitality -->
                <div class="col-lg-4">
                    <div class="card h-100 border-0 rounded shadow-sm p-4 bg-theme2 wow fadeInUp" data-wow-delay=".4s">
                        <div class="card-body p-0">
                          <div class="d-flex align-items-center mb-3">
                              <span class="text-theme-color me-3" style="font-size: 1.8rem;"><i class="fas fa-hotel"></i></span>
                              <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0; color: #333;">Hospitality</h3>
                          </div>
                          <ul class="list-unstyled mb-0">
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Hotel bathroom vanity tops and wall cladding in solid surface for projects</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Spa and wellness facility treatment surfaces, reception desks, and feature walls</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Hotel lobby reception counters and feature cladding in solid surface</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Resort and boutique hotel bathroom and kitchen solid surface fit-outs</span>
                              </li>
                              <li class="d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Healthcare facility countertops, nurse stations, and hygienic wall cladding for clinical environments</span>
                              </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Luxury Section Start -->
    <section class="outdoor-section section-padding bg-theme2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="outdoor-thumb sticky-image wow fadeInUp mb-4 mb-lg-0" data-wow-delay=".3s">
                        <img src="{{ asset('assets/images/products/sl-3.png') }}" alt="Luxury Solid Surface Sheets Dubai" class="img-fluid rounded shadow w-100">
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
                                Luxury Solid Surface Sheets
                            </h2>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".4s">
                            Al Maha supplies a carefully curated range of luxury solid surface sheets in Dubai for high-end residential villas, boutique hotels, luxury apartments, and premium hospitality and commercial developments across the UAE. Our luxury solid surface collection includes premium stone-look panels, translucent backlit sheets, large-format architectural solid surface, and designer colour collections sourced from internationally acclaimed solid surface manufacturers.
                        </p>
                        
                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".5s" style="font-size: 1.15rem; font-weight: 700; color: #333;">Why Choose Luxury Solid Surface Sheets for Your Project</h4>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".6s">
                            Premium solid surface sheets offer a seamless, high-finish alternative to natural stone that combines superior design flexibility, hygienic performance, and long-term durability. As a direct solid surface supplier, Al Maha gives contractors, interior designers, and developers access to premium solid surface collections at competitive prices with no middleman markup.
                        </p>

                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".7s" style="font-size: 1.15rem; font-weight: 700; color: #333;">Luxury Solid Surface Applications</h4>
                        <div class="row wow fadeInUp" data-wow-delay=".8s">
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Master bathroom vanity tops & cladding</li>
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Hotel suite and boutique hotel bathroom fit-outs</li>
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Luxury kitchen countertops & integrated sinks</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Spa reception desks & treatment surfaces</li>
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Developer show apartments model fit-outs</li>
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
                        <img src="{{ asset('assets/images/products/sl-4.png') }}" alt="Why Choose Al Maha Solid Surface Sheets Supplier" class="img-fluid rounded shadow w-100">
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
                                Why Choose Al Maha for Solid Surface Sheets in Dubai?
                            </h2>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".4s">
                            Al Maha is one of Dubai's most trusted building materials suppliers, with over 15 years of experience supplying premium solid surface sheets, fillers, tiles, and surface solutions to contractors, developers, interior designers, and fit-out companies across the UAE.
                        </p>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                            As a direct surface materials specialist, we source our solid surface collections from leading international manufacturers, giving our clients access to premium quality at competitive solid surface prices in Dubai. From product selection and project consultation to UAE-wide delivery, Al Maha provides end-to-end support for every solid surface project.
                        </p>
                        
                        <ul class="list-unstyled mt-4 wow fadeInUp" data-wow-delay=".6s">
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Importer Pricing:</strong> Direct building materials supplier in Dubai with competitive prices and no middleman markup.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Premium Brands Sourced:</strong> Premium solid surface sheets sourced from globally recognised international manufacturers.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>15+ Years Trust:</strong> Trusted building materials company in Dubai with 15+ years of supplying residential, commercial, and hospitality projects.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Complete Range:</strong> Complete solid surface range covering sheets, fillers, stone-look panels, translucent sheets, and custom fabrication.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Diverse Formats:</strong> Wide range of colours, finishes, thicknesses, and formats for every project type and budget.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Reliable UAE-wide Logistics:</strong> Reliable supply and UAE-wide delivery backed by expert project consultation.
                                </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Dedicated B2B Support:</strong> Dedicated support for contractors, interior designers, fit-out companies, and developers in Dubai.
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
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Get answers to the most common questions about acrylic sheets, polyester fillers, seamless joints, and orders in Dubai.</p>
            </div>
            
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="solidFaqAccordion">
                        
                        <!-- Q1 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".2s">
                            <h2 class="accordion-header" id="faqHeadingOne">
                                <button class="accordion-button font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne" style="font-weight: 600;">
                                    What solid surface sheets and fillers does Al Maha supply in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#solidFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Al Maha supplies a comprehensive range of solid surface sheets and fillers in Dubai, including standard solid surface panels, stone-look sheets, translucent backlit panels, colour-matched fillers, and jointing adhesives for residential, commercial, and hospitality projects across the UAE.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q2 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".3s">
                            <h2 class="accordion-header" id="faqHeadingTwo">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo" style="font-weight: 600;">
                                    Is Al Maha a direct solid surface sheets supplier in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#solidFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Yes. Al Maha is a direct building materials supplier in Dubai, sourcing solid surface sheets and fillers directly from internationally recognised manufacturers. This allows us to offer premium quality at competitive solid surface prices in Dubai with no middleman markup.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q3 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".4s">
                            <h2 class="accordion-header" id="faqHeadingThree">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree" style="font-weight: 600;">
                                    What is the difference between solid surface sheets and natural stone?
                                </button>
                            </h2>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#solidFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Solid surface sheets are engineered, non-porous panels manufactured from mineral and resin blends, offering seamless joining, full repairability, and design flexibility that natural stone cannot match. Natural stone such as marble and granite offers unique natural patterning and premium aesthetic appeal. Al Maha supplies both solid surface sheets and natural stone in Dubai to suit every project requirement and budget.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q4 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".5s">
                            <h2 class="accordion-header" id="faqHeadingFour">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour" style="font-weight: 600;">
                                    What colours and finishes are available for solid surface sheets in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#solidFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Al Maha supplies solid surface sheets in Dubai in a wide range of colours, patterns, and finishes including stone-look, wood-look, solid colours, veined patterns, and translucent designs. Surface finishes include matte, satin, gloss, and textured options to suit every interior design specification.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".6s">
                            <h2 class="accordion-header" id="faqHeadingFive">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive" style="font-weight: 600;">
                                    What are solid surface fillers used for?
                                </button>
                            </h2>
                            <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive" data-bs-parent="#solidFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Solid surface fillers are colour-matched jointing compounds used to create seamless, invisible joins between solid surface sheets during installation. They are also used for surface repairs, filling chips and scratches, and achieving a continuous, high-finish appearance across countertops, wall cladding, and other solid surface applications.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q6 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".7s">
                            <h2 class="accordion-header" id="faqHeadingSix">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSix" aria-expanded="false" aria-controls="faqCollapseSix" style="font-weight: 600;">
                                    Does Al Maha supply solid surface sheets for hospitality projects in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseSix" class="accordion-collapse collapse" aria-labelledby="faqHeadingSix" data-bs-parent="#solidFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Yes. Al Maha is a trusted building materials supplier for hospitality projects in Dubai and across the UAE, supplying solid surface sheets, vanity tops, reception desk surfaces, and complete solid surface solutions for luxury hotels, spas, resorts, serviced apartments, and large-scale hospitality developments.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q7 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".8s">
                            <h2 class="accordion-header" id="faqHeadingSeven">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSeven" aria-expanded="false" aria-controls="faqCollapseSeven" style="font-weight: 600;">
                                    How much do solid surface sheets cost in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseSeven" class="accordion-collapse collapse" aria-labelledby="faqHeadingSeven" data-bs-parent="#solidFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Solid surface sheet prices in Dubai vary depending on the material type, thickness, colour, finish, and collection. Al Maha offers competitive pricing across both standard and premium solid surface ranges as a direct building materials supplier. Contact us for a quote tailored to your specific project requirements.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q8 -->
                        <div class="accordion-item border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".9s">
                            <h2 class="accordion-header" id="faqHeadingEight">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseEight" aria-expanded="false" aria-controls="faqCollapseEight" style="font-weight: 600;">
                                    Can I view solid surface sheets at Al Maha's Dubai showroom?
                                </button>
                            </h2>
                            <div id="faqCollapseEight" class="accordion-collapse collapse" aria-labelledby="faqHeadingEight" data-bs-parent="#solidFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Yes. You can view our full range of solid surface sheets and fillers at Al Maha's showroom in Al Qusais Industrial Area 3, Dubai. Our team is available to help you select the right solid surface solution for your project budget, design specification, and application. We also supply solid surface materials to project sites across all seven Emirates.
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
                    <h3 class="text-white mb-2" style="font-size: 1.8rem; font-weight: 700; font-family: inherit;">Ready to Specify Solid Surface Sheets for Your Project?</h3>
                    <p class="mb-0 text-white-50" style="font-size: 1.05rem;">From luxury villa kitchens and hotel bathrooms to large-scale commercial fit-outs and hospitality developments, Al Maha has the solid surface sheets, the fillers, the product range, and the project expertise to deliver the right solution across the UAE.</p>
                </div>
                <div class="col-lg-4 text-center text-lg-end mt-4 mt-lg-0 d-flex flex-column align-items-center align-items-lg-end">
                    <a href="{{ route('contact') }}" class="mb-2">
                        <span class="theme-btn bg-white text-dark" style="color: var(--theme) !important; background: white !important; font-weight: bold; border: 1px solid white;">GET A QUOTE</span>
                    </a>
                    <a href="https://wa.me/97142671988" target="_blank" class="theme-btn bg-transparent border-white text-white" style="color: white !important; border: 1px solid white; font-weight: bold; background: transparent !important;">
                        <i class="fab fa-whatsapp me-2"></i> WhatsApp Us
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
