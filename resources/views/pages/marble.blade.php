@extends('layouts.app')

@section('meta_title', 'Marble & Granite Supplier Dubai | Al Maha Materials')
@section('meta_description', 'Source premium natural stone, marble, and granite at competitive direct-importer prices in Dubai. 15+ years experience. Contact Al Maha for a quote today!')

@section('content')

    <!-- Breadcumb Section  S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Marble & Granite</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li><a href="{{ route('categories') }}">Products</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">Marble & Granite</li>
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
                        <img src="{{ asset('assets/images/products/marbles-granite.jpg') }}" alt="Marble and Granite Dubai" class="img-fluid rounded shadow w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content ps-lg-4">
                        <div class="section-title text-start mb-3">
                            <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s"> 
                                <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> 
                                NATURAL STONES 
                            </div>
                            <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s" style="font-size: 2.2rem; line-height: 1.2;">
                                Marble & Granite Dubai
                            </h2>
                            <h3 class="text-start text-theme-color mt-2" style="font-size: 1.4rem; font-weight: 600;">
                                Premium Marble and Granite Supplier and Importer
                            </h3>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                            Al Maha is a trusted marble and granite supplier in Dubai, offering premium natural stone solutions for residential, commercial, and large-scale projects across the UAE. With over 15 years of experience, we provide high-quality marble and granite, competitive pricing, and reliable UAE-wide delivery from our Al Qusais showroom.
                        </p>
                        
                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".6s" style="font-size: 1.25rem; font-weight: 700; color: #333;">What Are Marble and Granite?</h4>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".7s">
                            Marble and granite are premium natural stones widely used across residential, commercial, and hospitality environments for flooring, wall cladding, countertops, staircases, and feature surfaces. As one of the most trusted natural stone suppliers in Dubai, Al Maha supplies a carefully selected range of marble and granite, from premium luxury stone collections to competitively priced options for projects of every scale.
                        </p>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".8s">
                            Available in a wide range of colours, finishes, and specifications, our marble and granite in Dubai suit homeowners, contractors, interior designers, and developers working on projects of all scales across the UAE. From luxury villa interiors and five-star hotel lobbies to large-scale residential developments and commercial fit-outs, Al Maha has the right natural stone solution for every project across the UAE.
                        </p>
                        <p class="desc wow fadeInUp text-justify text-muted font-italic" data-wow-delay=".9s" style="border-left: 3px solid var(--theme); padding-left: 15px;">
                            Dubai's design culture demands natural stone that combines visual excellence with durability. Our marble and granite collections are carefully sourced to meet the aesthetic and performance standards expected across the UAE's most prestigious residential, hospitality, and commercial developments.
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
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Benefits of Marble & Granite</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Natural stone offers unparalleled aesthetics, durability, and value addition to properties.</p>
            </div>
            
            <div class="row gy-4">
                <!-- Benefit 1 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-gem"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Timeless Elegance</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Premium natural stone offering timeless elegance and long-term durability for residential and commercial environments.</p>
                    </div>
                </div>
                <!-- Benefit 2 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Aesthetic Options</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Wide range of colours, veining patterns, and finishes suitable for every interior design specification.</p>
                    </div>
                </div>
                <!-- Benefit 3 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Heat & Scratch Resistant</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Naturally heat and scratch-resistant, making granite an ideal choice for kitchen countertops and heavy commercial floors.</p>
                    </div>
                </div>
                <!-- Benefit 4 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".5s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Distinctive Veining</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Marble's distinctive veining and polished finish elevate the appearance of luxury bathrooms, lobbies, and feature walls.</p>
                    </div>
                </div>
                <!-- Benefit 5 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".6s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-magic"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Low Maintenance</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Easy to clean and maintain when properly sealed, making natural stone a practical choice for hospitality and commercial projects.</p>
                    </div>
                </div>
                <!-- Benefit 6 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".7s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-tags"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Competitive Price</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Sourced directly from internationally recognised quarries and suppliers, ensuring consistent quality and competitive prices.</p>
                    </div>
                </div>
                <!-- Benefit 7 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".8s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-building"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Highly Versatile</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Suitable for residential villas, apartments, hotels, offices, and large-scale construction projects across the UAE.</p>
                    </div>
                </div>
                <!-- Benefit 8 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".9s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">End-to-End Solutions</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Complete natural stone solutions covering flooring, wall cladding, countertops, staircases, and custom fabrication.</p>
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
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Marble & Granite Product Range</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">A comprehensive selection of premium natural stone solutions for residential, commercial, and hospitality projects:</p>
            </div>
            
            <div class="row gy-4">
                <!-- item 1 -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".2s">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--theme);"><i class="fas fa-th-large me-2"></i> Marble Flooring</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.9rem;">Polished, honed, and brushed marble floor tiles in a wide range of colours and sizes for luxury residential and commercial applications.</p>
                    </div>
                </div>
                <!-- item 2 -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".3s">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--theme);"><i class="fas fa-square me-2"></i> Granite Flooring</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.9rem;">Durable, scratch-resistant granite floor tiles and slabs for high-traffic residential, commercial, and industrial applications.</p>
                    </div>
                </div>
                <!-- item 3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".4s">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--theme);"><i class="fas fa-columns me-2"></i> Marble Wall Cladding</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.9rem;">Marble wall tiles and large-format slabs for feature walls, bathroom walls, lobby cladding, and exterior facade applications.</p>
                    </div>
                </div>
                <!-- item 4 -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".5s">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--theme);"><i class="fas fa-layer-group me-2"></i> Granite Wall Cladding</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.9rem;">Granite wall panels and cladding slabs for exterior facades, commercial interiors, and architectural features.</p>
                    </div>
                </div>
                <!-- item 5 -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".6s">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--theme);"><i class="fas fa-heading me-2"></i> Countertops & Vanities</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.9rem;">Precision-cut marble countertops and bathroom vanity tops for luxury kitchens, bathrooms, and hospitality fit-outs.</p>
                    </div>
                </div>
                <!-- item 6 -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".7s">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--theme);"><i class="fas fa-border-all me-2"></i> Granite Work Surfaces</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.9rem;">Hard-wearing granite countertops and work surfaces for kitchens, commercial food preparation areas, and laboratories.</p>
                    </div>
                </div>
                <!-- item 7 -->
                <div class="col-md-4 col-sm-6 mx-auto">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".8s">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--theme);"><i class="fas fa-level-up-alt me-2"></i> Custom Staircases</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.9rem;">Custom marble staircase treads, risers, and landings for luxury residential and hospitality projects.</p>
                    </div>
                </div>
                <!-- item 8 -->
                <div class="col-md-4 col-sm-6 mx-auto">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".9s">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--theme);"><i class="fas fa-puzzle-piece me-2"></i> Mosaics & Feature Pieces</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.9rem;">Marble and granite mosaic tiles and custom feature pieces for decorative wall and floor applications.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specifications Section Start -->
    <section class="specs-section section-padding bg-theme2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="specs-thumb wow fadeInUp mb-4 mb-lg-0" data-wow-delay=".3s">
                        <img src="{{ asset('assets/images/products/solid-surface.jpg') }}" alt="Natural Stone Specifications" class="img-fluid rounded shadow w-100">
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
                                Our marble and granite range in Dubai is available across a variety of stone types, finishes, and specifications to meet project requirements:
                            </p>
                        </div>
                        
                        <div class="specs-grid wow fadeInUp" data-wow-delay=".6s">
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-gem"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Stone Types</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Carrara marble, Statuario marble, Emperador marble, Black Galaxy granite, Absolute Black granite, Kashmir White granite, etc.</p>
                                </div>
                            </div>
                            
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-layer-group"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Finishes</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Polished, honed, brushed, sandblasted, and flamed finishes</p>
                                </div>
                            </div>
                            
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-expand"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Formats</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Standard tiles, large-format slabs, custom-cut pieces, mosaic sheets, and bespoke fabrication</p>
                                </div>
                            </div>

                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-globe-americas"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Origin</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Italy, Spain, India, Turkey, Brazil, and other globally recognised producing regions</p>
                                </div>
                            </div>
                            
                            <div class="spec-item d-flex align-items-center p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-building"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Sourcing</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Sourced from globally recognised quarries and stone manufacturers known for consistency and natural stone expertise</p>
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
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Applications of Marble & Granite</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Our marble and granite are specified for a wide range of residential, commercial, and hospitality projects across the UAE:</p>
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
                                  <span>Marble flooring for luxury villas and private residences</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Granite countertops and kitchen work surfaces for apartments</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Marble bathroom flooring and wall cladding in high-end projects</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Granite and marble staircase treads and landings for developments</span>
                              </li>
                              <li class="d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Feature wall marble cladding for living rooms and entrance lobbies</span>
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
                                  <span>Marble lobby flooring and wall cladding for commercial office buildings</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Granite reception desks and countertops for corporate offices</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Retail store and shopping mall flooring for high-footfall environments</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Restaurant and cafe marble and granite countertops and surfaces</span>
                              </li>
                              <li class="d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Large-scale development natural stone supply across the UAE</span>
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
                                  <span>Hotel lobby marble flooring and wall cladding for hospitality projects</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Spa and wellness facility surfaces for premium hospitality developments</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Hotel bathroom flooring, wall tiles, and vanity tops for luxury fit-outs</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Resort and boutique hotel feature wall cladding across the UAE</span>
                              </li>
                              <li class="d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Serviced apartment natural stone fit-outs for short-term rental projects</span>
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
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="outdoor-thumb wow fadeInUp mb-4 mb-lg-0" data-wow-delay=".3s">
                        <img src="{{ asset('assets/images/products/marbles-granite.jpg') }}" alt="Luxury Marble and Granite Dubai" class="img-fluid rounded shadow w-100">
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
                                Luxury Marble & Granite
                            </h2>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".4s">
                            Al Maha supplies a carefully curated range of luxury marble and granite in Dubai for high-end residential villas, boutique hotels, luxury apartments, and premium hospitality developments across the UAE. Our luxury natural stone collection includes Carrara marble, Statuario marble, exotic granite slabs, custom mosaic pieces, and premium large-format natural stone sourced from internationally acclaimed quarries and stone manufacturers.
                        </p>
                        
                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".5s" style="font-size: 1.15rem; font-weight: 700; color: #333;">Why Choose Luxury Marble and Granite for Your Project</h4>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".6s">
                            Premium natural stone elevates the appearance and value of any residential or commercial space, combining the timeless beauty of natural materials with long-term structural performance. As a direct marble and granite importer in Dubai, Al Maha gives contractors, developers, and homeowners access to premium natural stone collections at competitive prices with no middleman markup.
                        </p>

                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".7s" style="font-size: 1.15rem; font-weight: 700; color: #333;">Luxury Stone Applications</h4>
                        <div class="row wow fadeInUp" data-wow-delay=".8s">
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Master bathroom & ensuite marble cladding</li>
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Hotel lobby & suite flooring projects</li>
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Luxury kitchen granite countertops</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Spa and wellness facility stone fit-outs</li>
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Model show villa premium stone finishes</li>
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
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="why-choose-thumb wow fadeInUp mb-4 mb-lg-0" data-wow-delay=".3s">
                        <img src="{{ asset('assets/images/products/solid-surface.jpg') }}" alt="Why Choose Al Maha Natural Stone Supplier" class="img-fluid rounded shadow w-100">
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
                                Why Choose Al Maha for Marble & Granite in Dubai?
                            </h2>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".4s">
                            Al Maha is one of Dubai's most trusted natural stone suppliers, with over 15 years of experience supplying premium marble, granite, and surface solutions to contractors, developers, architects, interior designers, and homeowners across the UAE.
                        </p>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                            As a direct marble and granite importer, we source our natural stone collections from leading international quarries and manufacturers, giving our clients access to premium quality at competitive marble and granite prices in Dubai. From product selection and project consultation to UAE-wide delivery, Al Maha provides end-to-end support for every natural stone project.
                        </p>
                        
                        <ul class="list-unstyled mt-4 wow fadeInUp" data-wow-delay=".6s">
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Direct Quarry Importer:</strong> Direct importer in Dubai with competitive prices and no middleman markup.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Premium Quarries:</strong> Premium natural stone sourced from globally recognised international quarries and manufacturers.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>15+ Years Trust:</strong> Trusted natural stone supplier in Dubai with 15+ years of supplying residential, commercial, and hospitality projects.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Complete Range:</strong> Covering marble flooring, granite flooring, wall cladding, countertops, staircases, and custom pieces.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Bespoke Options:</strong> Wide range of stone types, colours, finishes, and formats for every project type and budget.
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
                                    <strong>Design Support:</strong> Dedicated support for contractors, developers, and interior designers in Dubai.
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
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Get answers to the most common questions about natural stone, marble types, granite uses, and orders in Dubai.</p>
            </div>
            
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="marbleFaqAccordion">
                        
                        <!-- Q1 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".2s">
                            <h2 class="accordion-header" id="faqHeadingOne">
                                <button class="accordion-button font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne" style="font-weight: 600;">
                                    What marble and granite does Al Maha supply in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#marbleFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Al Maha supplies a comprehensive range of marble and granite in Dubai, including marble flooring, granite flooring, wall cladding slabs, countertops, staircase pieces, and natural stone mosaics for residential, commercial, and hospitality projects across the UAE.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q2 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".3s">
                            <h2 class="accordion-header" id="faqHeadingTwo">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo" style="font-weight: 600;">
                                    Is Al Maha a direct marble and granite importer in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#marbleFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Yes. Al Maha is a direct marble and granite importer in Dubai, sourcing natural stone directly from internationally recognised quarries and manufacturers across Italy, Spain, India, Turkey, and Brazil. This allows us to offer premium quality at competitive marble and granite prices in Dubai with no middleman markup.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q3 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".4s">
                            <h2 class="accordion-header" id="faqHeadingThree">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree" style="font-weight: 600;">
                                    What types of marble are available in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#marbleFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Al Maha supplies a wide range of marble in Dubai including Carrara marble, Statuario marble, Emperador marble, and a variety of imported and locally stocked natural stone collections. Our marble range is available in polished, honed, and brushed finishes in standard tile formats, large-format slabs, and custom-cut pieces.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q4 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".5s">
                            <h2 class="accordion-header" id="faqHeadingFour">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour" style="font-weight: 600;">
                                    What is the difference between marble and granite?
                                </button>
                            </h2>
                            <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#marbleFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Marble is a metamorphic natural stone known for its distinctive veining and polished finish, making it the preferred choice for luxury bathrooms, lobbies, and feature walls. Granite is an igneous natural stone known for its superior hardness, scratch resistance, and durability, making it ideal for kitchen countertops, high-traffic flooring, and exterior applications. Al Maha supplies both marble and granite in Dubai to suit every project requirement.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".6s">
                            <h2 class="accordion-header" id="faqHeadingFive">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive" style="font-weight: 600;">
                                    Does Al Maha supply marble and granite for hospitality projects in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive" data-bs-parent="#marbleFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Yes. Al Maha is a trusted natural stone supplier for hospitality projects in Dubai and across the UAE, supplying marble flooring, granite surfaces, and complete natural stone solutions for luxury hotels, resorts, spas, serviced apartments, and large-scale hospitality developments.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q6 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".7s">
                            <h2 class="accordion-header" id="faqHeadingSix">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSix" aria-expanded="false" aria-controls="faqCollapseSix" style="font-weight: 600;">
                                    How much do marble and granite cost in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseSix" class="accordion-collapse collapse" aria-labelledby="faqHeadingSix" data-bs-parent="#marbleFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Marble and granite prices in Dubai vary depending on the stone type, origin, finish, format, and collection. Al Maha offers competitive pricing across both standard and premium natural stone ranges as a direct importer. Contact us for a quote tailored to your specific project requirements.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q7 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".8s">
                            <h2 class="accordion-header" id="faqHeadingSeven">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSeven" aria-expanded="false" aria-controls="faqCollapseSeven" style="font-weight: 600;">
                                    Can I view marble and granite at Al Maha's Dubai showroom?
                                </button>
                            </h2>
                            <div id="faqCollapseSeven" class="accordion-collapse collapse" aria-labelledby="faqHeadingSeven" data-bs-parent="#marbleFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Yes. You can view our full range of marble and granite in Dubai at Al Maha's showroom in Al Qusais Industrial Area 3, Dubai. Our team is available to help you select the right natural stone for your project budget, design specification, and application. We also supply natural stone to project sites across all seven Emirates.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q8 -->
                        <div class="accordion-item border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".9s">
                            <h2 class="accordion-header" id="faqHeadingEight">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseEight" aria-expanded="false" aria-controls="faqCollapseEight" style="font-weight: 600;">
                                    Does Al Maha supply marble and granite for large-scale construction projects in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseEight" class="accordion-collapse collapse" aria-labelledby="faqHeadingEight" data-bs-parent="#marbleFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Yes. Al Maha supplies marble and granite for large-scale residential developments, commercial buildings, mixed-use projects, and hospitality developments across Dubai and the UAE, providing reliable supply, consistent stone quality, and UAE-wide delivery for projects of every scale.
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
                    <h3 class="text-white mb-2" style="font-size: 1.8rem; font-weight: 700; font-family: inherit;">Ready to Specify Marble and Granite for Your Project?</h3>
                    <p class="mb-0 text-white-50" style="font-size: 1.05rem;">From luxury villa interiors to five-star hotel lobbies and large-scale commercial fit-outs, Al Maha has the marble, the granite, the natural stone expertise, and the product range to deliver the right solution for every project across Dubai and the UAE.</p>
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
