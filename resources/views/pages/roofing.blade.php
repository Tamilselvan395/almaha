@extends('layouts.app')

@section('meta_title', 'Premium Roofing Sheets Dubai | Al Maha')
@section('meta_description', 'Premium roofing sheets in Dubai for residential, commercial, and industrial projects. Visit our showroom or get a free quote today!')

@section('content')

    <!-- Breadcumb Section  S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Roofing Sheets</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li><a href="{{ route('categories') }}">Products</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">Roofing Sheets</li>
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
                        <img src="{{ asset('assets/images/products/r-1.png') }}" alt="Roofing Sheets Dubai" class="img-fluid rounded shadow w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content ps-lg-4">
                        <div class="section-title text-start mb-3">
                            <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s"> 
                                <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> 
                                STRUCTURAL COVERING 
                            </div>
                            <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s" style="font-size: 2.2rem; line-height: 1.2;">
                                Roofing Sheets Dubai
                            </h2>
                            <h3 class="text-start text-theme-color mt-2" style="font-size: 1.4rem; font-weight: 600;">
                                Premium Roofing Supplier and Importer
                            </h3>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                            Al Maha is a trusted roofing sheets supplier in Dubai, offering premium roofing solutions for residential, commercial, and large-scale projects across the UAE. With over 15 years of experience, we provide high-quality roofing sheets, competitive pricing, and reliable UAE-wide delivery from our Al Qusais showroom.
                        </p>
                        
                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".6s" style="font-size: 1.25rem; font-weight: 700; color: #333;">What Are Roofing Sheets?</h4>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".7s">
                            Roofing sheets are structural and weatherproofing panels used across residential, commercial, and industrial buildings to provide durable, weather-resistant roof coverage. As one of the most trusted building materials suppliers in Dubai, Al Maha supplies a carefully selected range of roofing sheets, from premium solutions for high-end construction to competitively priced options for large-scale development projects.
                        </p>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".8s">
                            Available in a wide range of materials, profiles, and specifications, our roofing sheets in Dubai suit contractors, developers, and project managers working on projects of all scales across the UAE. From luxury villa roofing and commercial warehouses to large-scale industrial facilities and hospitality developments, Al Maha has the right roofing solution for every project across Dubai and the UAE.
                        </p>
                        <p class="desc wow fadeInUp text-justify text-muted font-italic" data-wow-delay=".9s" style="border-left: 3px solid var(--theme); padding-left: 15px;">
                            Dubai's climate presents unique roofing challenges, including intense UV exposure, extreme summer heat, and sandstorm conditions that demand materials engineered specifically for high-performance longevity. Al Maha supplies roofing sheets that are selected to withstand these conditions, ensuring every project delivers lasting protection and structural integrity across the UAE's demanding environment.
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
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Benefits of Our Roofing Sheets</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Engineered to deliver high strength, temperature regulation, and absolute weather protection.</p>
            </div>
            
            <div class="row gy-4">
                <!-- Benefit 1 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Weather Performance</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Premium quality roofing sheets engineered for durability and long-term weather performance in demanding environments.</p>
                    </div>
                </div>
                <!-- Benefit 2 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-cubes"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Wide Profile Range</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Wide range of profiles, materials, and finishes suitable for every architectural and construction specification.</p>
                    </div>
                </div>
                <!-- Benefit 3 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-weight-hanging"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Lightweight & Strong</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Lightweight yet structurally strong, reducing load on building frameworks across commercial and industrial applications.</p>
                    </div>
                </div>
                <!-- Benefit 4 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".5s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-sun"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">UV & Heat Resistant</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">UV and heat resistant options available to meet UAE climate conditions and building regulations.</p>
                    </div>
                </div>
                <!-- Benefit 5 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".6s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Easy Installation</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Easy to install and maintain, making them a practical choice for large-scale construction and industrial developments.</p>
                    </div>
                </div>
                <!-- Benefit 6 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".7s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-tags"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Direct Pricing</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Sourced directly from internationally recognised manufacturers, ensuring consistent quality and competitive roofing sheet prices.</p>
                    </div>
                </div>
                <!-- Benefit 7 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".8s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-building"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Multi-sector Application</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Suitable for residential villas, commercial buildings, warehouses, industrial facilities, and large-scale projects.</p>
                    </div>
                </div>
                <!-- Benefit 8 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".9s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Complete Service</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Complete roofing systems and ancillary accessories available from a single trusted roofing solutions provider.</p>
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
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Roofing Product Range</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">A comprehensive selection of premium roofing sheets and accessories for residential, commercial, and industrial applications:</p>
            </div>
            
            <div class="row gy-4">
                <!-- item 1 -->
                <div class="col-md-4">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".2s">
                        <h4 style="font-size: 1.15rem; font-weight: 700; color: var(--theme);"><i class="fas fa-ellipsis-v me-2"></i> Corrugated Roofing Sheets</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.95rem;">Lightweight, durable corrugated metal and polycarbonate roofing sheets for industrial buildings, warehouses, and agricultural structures.</p>
                    </div>
                </div>
                <!-- item 2 -->
                <div class="col-md-4">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".3s">
                        <h4 style="font-size: 1.15rem; font-weight: 700; color: var(--theme);"><i class="fas fa-ellipsis-h me-2"></i> Polycarbonate Roofing Sheets</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.95rem;">Translucent and opaque polycarbonate panels for skylights, canopies, carports, and covered walkways across residential and commercial projects.</p>
                    </div>
                </div>
                <!-- item 3 -->
                <div class="col-md-4">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".4s">
                        <h4 style="font-size: 1.15rem; font-weight: 700; color: var(--theme);"><i class="fas fa-industry me-2"></i> Metal Roofing Sheets</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.95rem;">Steel and aluminium roofing sheets in a range of profiles and finishes for commercial, industrial, and large-scale construction projects in Dubai.</p>
                    </div>
                </div>
                <!-- item 4 -->
                <div class="col-md-4">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".5s">
                        <h4 style="font-size: 1.15rem; font-weight: 700; color: var(--theme);"><i class="fas fa-layer-group me-2"></i> Sandwich Panel Roofing</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.95rem;">Insulated sandwich panels for temperature-controlled commercial and industrial buildings, cold storage facilities, and warehouses.</p>
                    </div>
                </div>
                <!-- item 5 -->
                <div class="col-md-4">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".6s">
                        <h4 style="font-size: 1.15rem; font-weight: 700; color: var(--theme);"><i class="fas fa-border-none me-2"></i> Flat Sheets & Solid Surface</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.95rem;">Solid surface sheets and composite flat panels for modern flat roofs, architectural cladding, and feature facades requiring a seamless, high-finish appearance.</p>
                    </div>
                </div>
                <!-- item 6 -->
                <div class="col-md-4">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".7s">
                        <h4 style="font-size: 1.15rem; font-weight: 700; color: var(--theme);"><i class="fas fa-toolbox me-2"></i> Roofing Accessories</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.95rem;">Ridge caps, flashings, fasteners, sealants, and ancillary roofing components to complete any roofing installation.</p>
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
                    <div class="specs-thumb wow sticky-image fadeInUp mb-4 mb-lg-0" data-wow-delay=".3s">
                        <img src="{{ asset('assets/images/products/r-2.png') }}" alt="Roofing Sheet Specifications" class="img-fluid rounded shadow w-100">
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
                                Our roofing sheets range is available across a variety of materials, profiles, and specifications to meet the requirements of any residential, commercial, or industrial project:
                            </p>
                        </div>
                        
                        <div class="specs-grid wow fadeInUp" data-wow-delay=".6s">
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-cubes"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Materials</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Galvanised steel, aluminium, polycarbonate, GRP fibreglass, and insulated composite panels</p>
                                </div>
                            </div>
                            
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-palette"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Finishes</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Coated metal, clear, tinted, and opaque polycarbonate, powder-coated aluminium, and pre-painted steel</p>
                                </div>
                            </div>
                            
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-clipboard-check"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Standards</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Products sourced to meet UAE construction and building regulations</p>
                                </div>
                            </div>

                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-border-style"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Profiles</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Corrugated, trapezoidal, standing seam, flat, and box profile designs</p>
                                </div>
                            </div>
                            
                            <div class="spec-item d-flex align-items-center p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-globe"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Sourcing</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Sourced from globally recognised roofing manufacturers known for quality, durability, and innovation</p>
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
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Applications of Roofing Sheets</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Our roofing sheets are specified for a wide range of residential, commercial, and industrial projects across the UAE:</p>
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
                                  <span>Roofing sheets for luxury villas and private residences</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Carport and pergola roofing for apartments and townhouses across the UAE</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Canopy and covered walkway roofing for residential developments</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Utility and service area roofing for villa and apartment projects</span>
                              </li>
                              <li class="d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Lightweight roofing solutions for extensions and outbuildings across the UAE</span>
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
                                  <span>Warehouse and storage facility roofing for commercial and logistics projects</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Retail store, showroom, and shopping mall canopy roofing across the UAE</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Office building and commercial development roofing solutions</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Car park and multi-storey parking structure roofing for commercial projects</span>
                              </li>
                              <li class="d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Large-scale commercial and mixed-use development roofing supply across the UAE</span>
                              </li>
                          </ul>
                        </div>
                    </div>
                </div>
                <!-- Industrial -->
                <div class="col-lg-4">
                    <div class="card h-100 border-0 rounded shadow-sm p-4 bg-theme2 wow fadeInUp" data-wow-delay=".4s">
                        <div class="card-body p-0">
                          <div class="d-flex align-items-center mb-3">
                              <span class="text-theme-color me-3" style="font-size: 1.8rem;"><i class="fas fa-industry"></i></span>
                              <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0; color: #333;">Industrial</h3>
                          </div>
                          <ul class="list-unstyled mb-0">
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Industrial facility and factory roofing for manufacturing and production projects</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Cold storage and temperature-controlled warehouse roofing across the UAE</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Logistics hub and distribution centre roofing for large-scale industrial developments</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Agricultural and storage structure roofing for industrial applications</span>
                              </li>
                              <li class="d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Heavy-duty roofing solutions for ports, infrastructure, and large industrial projects</span>
                              </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Premium Section Start -->
    <section class="outdoor-section section-padding bg-theme2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="outdoor-thumb sticky-image wow fadeInUp mb-4 mb-lg-0" data-wow-delay=".3s">
                        <img src="{{ asset('assets/images/products/r-3.png') }}" alt="Premium Roofing Sheets Dubai" class="img-fluid rounded shadow w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="outdoor-content ps-lg-4">
                        <div class="section-title text-start mb-3">
                            <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s"> 
                                <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> 
                                PREMIUM SELECTION 
                            </div>
                            <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s" style="font-size: 2rem;">
                                Premium Roofing Sheets in Dubai
                            </h2>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".4s">
                            Al Maha supplies a carefully curated range of premium roofing sheets in Dubai for high-end residential villas, luxury commercial developments, boutique hospitality projects, and large-scale construction across the UAE. Our premium roofing collection includes insulated sandwich panels, standing seam metal roofing, architectural polycarbonate systems, and high-performance coated steel panels sourced from internationally acclaimed manufacturers.
                        </p>
                        
                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".5s" style="font-size: 1.15rem; font-weight: 700; color: #333;">Why Choose Premium Roofing Sheets for Your Project</h4>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".6s">
                            Premium roofing sheets combine superior weather resistance, structural performance, and architectural finish to deliver roofing that is both visually impressive and built to withstand UAE climate conditions over the long term. As a direct building materials supplier in Dubai, Al Maha gives contractors, developers, and project managers access to premium roofing collections at competitive prices with no middleman markup.
                        </p>

                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".7s" style="font-size: 1.15rem; font-weight: 700; color: #333;">Premium Roofing Applications</h4>
                        <div class="row wow fadeInUp" data-wow-delay=".8s">
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Luxury villa and high-end residential roofing</li>
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Boutique hotel & resort roofing projects</li>
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Premium commercial headquarters roofing</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Architectural canopies & landmark features</li>
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Developer show villas & model unit roofing</li>
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
                        <img src="{{ asset('assets/images/products/r-4.png') }}" alt="Why Choose Al Maha Roofing Sheets Supplier" class="img-fluid rounded shadow w-100">
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
                                Why Choose Al Maha for Roofing Sheets in Dubai?
                            </h2>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".4s">
                            Al Maha is one of Dubai's most trusted building materials suppliers, with over 15 years of experience supplying premium roofing sheets, surface solutions, and building materials to contractors, developers, architects, and project managers across the UAE.
                        </p>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                            As a direct roofing supplier, we source our roofing sheets from leading international manufacturers, giving our clients access to premium quality at competitive roofing sheet prices. From product selection and project consultation to UAE-wide delivery, Al Maha provides end-to-end support for every roofing project.
                        </p>
                        
                        <ul class="list-unstyled mt-4 wow fadeInUp" data-wow-delay=".6s">
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Metal Roofing Sheets Supplier:</strong> Direct supplier in Dubai with competitive prices and no middleman markup.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Globally Sourced:</strong> Premium roofing sheets sourced from globally recognised international manufacturers.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>15+ Years Trust:</strong> Trusted building materials company supplying residential, commercial, and industrial projects across the UAE.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Complete Range:</strong> Covering corrugated sheets, polycarbonate panels, metal roofing, sandwich panels, and accessories.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Specifications & Profiles:</strong> Wide range of profiles, materials, and specifications for every project type and budget.
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
                                    <strong>B2B Support:</strong> Dedicated support for contractors, developers, and project managers in Dubai.
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
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Get answers to the most common questions about metal sheets, polycarbonate panels, sandwich panels, and orders in Dubai.</p>
            </div>
            
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="roofingFaqAccordion">
                        
                        <!-- Q1 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".2s bg-white">
                            <h2 class="accordion-header" id="faqHeadingOne">
                                <button class="accordion-button font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne" style="font-weight: 600;">
                                    What roofing sheets does Al Maha supply in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#roofingFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Al Maha supplies a comprehensive range of roofing sheets in Dubai, including corrugated roofing panels, polycarbonate sheets, metal roofing, insulated sandwich panels, and roofing accessories for residential, commercial, and industrial projects across the UAE.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q2 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".3s bg-white">
                            <h2 class="accordion-header" id="faqHeadingTwo">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo" style="font-weight: 600;">
                                    Is Al Maha a direct roofing sheet supplier in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#roofingFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Yes. Al Maha is a direct roofing supplier in Dubai, sourcing roofing sheets and construction materials directly from internationally recognised manufacturers. This allows us to offer premium quality at competitive roofing sheet prices with no middleman markup.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q3 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".4s bg-white">
                            <h2 class="accordion-header" id="faqHeadingThree">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree" style="font-weight: 600;">
                                    What types of roofing sheets are available in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#roofingFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Al Maha supplies roofing sheets in Dubai in a wide range of materials and profiles including corrugated metal, polycarbonate, aluminium, galvanised steel, and insulated sandwich panels. Our range covers multiple finishes and specifications to suit every construction and architectural requirement.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q4 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".5s bg-white">
                            <h2 class="accordion-header" id="faqHeadingFour">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour" style="font-weight: 600;">
                                    Does Al Maha supply roofing sheets for industrial projects in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#roofingFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Yes. Al Maha is a trusted building materials supplier for industrial projects in Dubai and across the UAE, supplying heavy-duty roofing sheets, insulated panels, and complete roofing solutions for warehouses, factories, cold storage facilities, and large-scale industrial developments.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".6s bg-white">
                            <h2 class="accordion-header" id="faqHeadingFive">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive" style="font-weight: 600;">
                                    How much do roofing sheets cost in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive" data-bs-parent="#roofingFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Roofing sheet prices in Dubai vary depending on the material type, profile, finish, and specification. Al Maha offers competitive pricing across both standard and premium roofing ranges as a direct building materials supplier. Contact us for a quote tailored to your specific project requirements.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q6 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".7s bg-white">
                            <h2 class="accordion-header" id="faqHeadingSix">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSix" aria-expanded="false" aria-controls="faqCollapseSix" style="font-weight: 600;">
                                    Does Al Maha supply roofing sheets for commercial buildings in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseSix" class="accordion-collapse collapse" aria-labelledby="faqHeadingSix" data-bs-parent="#roofingFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Yes. Al Maha supplies roofing sheets for commercial buildings, warehouses, retail developments, and large-scale construction projects across Dubai and the UAE, providing reliable supply and UAE-wide delivery for every project scale.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q7 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".8s bg-white">
                            <h2 class="accordion-header" id="faqHeadingSeven">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSeven" aria-expanded="false" aria-controls="faqCollapseSeven" style="font-weight: 600;">
                                    Can I view roofing sheets at Al Maha's Dubai showroom?
                                </button>
                            </h2>
                            <div id="faqCollapseSeven" class="accordion-collapse collapse" aria-labelledby="faqHeadingSeven" data-bs-parent="#roofingFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Yes. You can view our roofing sheet range at Al Maha's showroom in Al Qusais Industrial Area 3, Dubai. Our team is available to help you select the right roofing solution for your project budget and specifications. We also supply roofing materials to project sites across all seven Emirates.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q8 -->
                        <div class="accordion-item border rounded shadow-sm wow fadeInUp" data-wow-delay=".9s bg-white">
                            <h2 class="accordion-header" id="faqHeadingEight">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseEight" aria-expanded="false" aria-controls="faqCollapseEight" style="font-weight: 600;">
                                    What is the difference between standard and luxury roofing sheets?
                                </button>
                            </h2>
                            <div id="faqCollapseEight" class="accordion-collapse collapse" aria-labelledby="faqHeadingEight" data-bs-parent="#roofingFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Standard roofing sheets offer reliable weather protection and practical performance at competitive prices, making them suitable for industrial facilities, warehouses, and budget-conscious construction projects. Premium roofing sheets combine high-performance materials, superior insulation, and architectural finishes, making them the preferred choice for luxury residential developments, high-end commercial buildings, and premium hospitality projects in Dubai.
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
                    <h3 class="text-white mb-2" style="font-size: 1.8rem; font-weight: 700; font-family: inherit;">Ready to Specify Roofing Sheets for Your Project?</h3>
                    <p class="mb-0 text-white-50" style="font-size: 1.05rem;">From luxury villa roofing to large-scale industrial and commercial developments, Al Maha has the roofing sheets, the product range, and the project expertise to deliver the right solution for every construction project across Dubai and the UAE.</p>
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
