@extends('layouts.app')

@section('meta_title', 'Cladding Tiles Dubai | Interior & Exterior | Al Maha')
@section('meta_description', 'Premium interior & exterior cladding tiles in Dubai with expert fixing services. Direct importer prices & UAE-wide delivery. Request a quote from Al Maha!')

@section('content')

    <!-- Breadcumb Section  S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Cladding Tiles</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li><a href="{{ route('categories') }}">Products</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">Cladding Tiles</li>
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
                        <img src="{{ asset('assets/images/products/cd-1.png') }}" alt="Cladding Tiles Dubai" class="img-fluid rounded shadow w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content ps-lg-4">
                        <div class="section-title text-start mb-3">
                            <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s"> 
                                <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> 
                                WALL SURFACES 
                            </div>
                            <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s" style="font-size: 2.2rem; line-height: 1.2;">
                                Cladding Tiles Dubai
                            </h2>
                            <h3 class="text-start text-theme-color mt-2" style="font-size: 1.4rem; font-weight: 600;">
                                Interior and Exterior Cladding Tiles Supplier with Fixing
                            </h3>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                            Al Maha is a trusted cladding tiles supplier in Dubai, offering premium interior and exterior cladding tiles for residential, commercial, and large-scale projects across the UAE. With over 15 years of experience, we provide high-quality cladding tiles, professional tile fixing services, competitive pricing, and reliable UAE-wide delivery from our Al Qusais showroom.
                        </p>
                        
                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".6s" style="font-size: 1.25rem; font-weight: 700; color: #333;">What Are Cladding Tiles?</h4>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".7s">
                            Cladding tiles are specially designed tiles applied to interior and exterior wall surfaces to enhance appearance, protect structural surfaces, and add durability to both residential and commercial buildings. As one of the most trusted cladding tiles companies in Dubai, Al Maha supplies a carefully selected range of cladding tiles, from premium natural stone and porcelain cladding panels to large-format exterior facade tiles for projects of every scale.
                        </p>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".8s">
                            Available in a wide range of sizes, finishes, textures, and formats, our cladding tiles in Dubai suit homeowners, contractors, interior designers, and developers working on projects of all scales across the UAE. From exterior building facades and feature walls to interior accent walls and commercial fit-outs, Al Maha has the right cladding tile solution for every project across Dubai and the UAE.
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
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Benefits of Cladding Tiles</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Engineered for durability, aesthetic appeal, and outstanding protection of building walls in the UAE climate.</p>
            </div>
            
            <div class="row gy-4">
                <!-- Benefit 1 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-home"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Enhances Aesthetics</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Enhances the appearance of interior and exterior wall surfaces across residential and commercial projects in Dubai.</p>
                    </div>
                </div>
                <!-- Benefit 2 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Weather Protection</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Protects building facades and wall surfaces from weather, UV exposure, and moisture in the UAE climate.</p>
                    </div>
                </div>
                <!-- Benefit 3 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-award"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Durable & Long-lasting</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Durable and long-lasting, maintaining appearance and structural integrity under demanding outdoor conditions.</p>
                    </div>
                </div>
                <!-- Benefit 4 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".5s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Design Versatility</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Available in a wide range of textures, colours, and finishes to complement any architectural style or interior design.</p>
                    </div>
                </div>
                <!-- Benefit 5 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".6s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-magic"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Low Maintenance</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Low maintenance and easy to clean, making them a practical choice for commercial and residential buildings in Dubai.</p>
                    </div>
                </div>
                <!-- Benefit 6 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".7s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Highly Versatile</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Suitable for both interior feature walls and exterior facade cladding applications across the UAE.</p>
                    </div>
                </div>
                <!-- Benefit 7 -->
                <div class="col-lg-4 col-md-6 mx-auto d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".8s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-fire-extinguisher"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Fire Safety</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Fire-resistant options available for commercial and high-rise building applications in Dubai.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specifications Section Start -->
    <section class="specs-section section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div class="specs-thumb sticky-image wow fadeInUp mb-4 mb-lg-0" data-wow-delay=".3s">
                        <img src="{{ asset('assets/images/products/cd-2.png') }}" alt="Cladding Tile Specifications" class="img-fluid rounded shadow w-100">
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
                                Our cladding tile range in Dubai is available in a variety of sizes, thicknesses, and finishes to meet the requirements of any residential or commercial project:
                            </p>
                        </div>
                        
                        <div class="specs-grid wow fadeInUp" data-wow-delay=".6s">
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded" style="background-color: var(--theme2);">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-expand"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Sizes</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">300x600mm, 600x600mm, 600x1200mm, 1200x1200mm, and large-format cladding panels</p>
                                </div>
                            </div>
                            
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded" style="background-color: var(--theme2);">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-ruler-combined"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Thickness</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">9mm to 20mm, depending on application and surface type</p>
                                </div>
                            </div>
                            
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded" style="background-color: var(--theme2);">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-layer-group"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Finishes</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Natural stone effect, wood effect, concrete effect, polished, matte, and textured</p>
                                </div>
                            </div>

                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded" style="background-color: var(--theme2);">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-shapes"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Materials</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Porcelain cladding tiles, natural stone cladding, marble cladding, and granite cladding</p>
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
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Applications of Cladding Tiles</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Our cladding tiles in Dubai are specified for a wide range of residential, commercial, and hospitality projects across the UAE:</p>
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
                                  <span>Exterior facade cladding for villas and residential buildings</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Interior feature walls and accent walls for living rooms and bedrooms</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Kitchen splashback and wall cladding tiles</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Bathroom wall cladding tiles for luxury residential projects</span>
                              </li>
                              <li class="d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Garden and landscaping wall cladding</span>
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
                                  <span>Exterior building facade cladding tiles for commercial developments</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Office interior wall cladding and feature walls</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Retail store and shopping mall interior cladding tiles</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Hotel lobby and hospitality feature wall cladding</span>
                              </li>
                              <li class="d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Restaurant and cafe interior wall cladding tiles</span>
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
                                  <span>High-rise building exterior cladding tiles for large-scale developments across the UAE</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Healthcare facility wall cladding tiles that are hygienic, durable, and easy to maintain</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Educational institution wall cladding tiles suitable for high-traffic environments</span>
                              </li>
                              <li class="d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Large-scale residential and commercial development cladding solutions supplied across Dubai and the UAE</span>
                              </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cladding Fixing & Exterior Section Start -->
    <section class="outdoor-section section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="outdoor-thumb sticky-image wow fadeInUp mb-4 mb-lg-0" data-wow-delay=".3s">
                        <img src="{{ asset('assets/images/products/cd-3.png') }}" alt="Cladding Tile Fixing Services Dubai" class="img-fluid rounded shadow w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="outdoor-content ps-lg-4">
                        <div class="section-title text-start mb-3">
                            <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s"> 
                                <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> 
                                EXPERT FIXING & EXTERIORS 
                            </div>
                            <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s" style="font-size: 2rem;">
                                Cladding Tile Fixing & Facades
                            </h2>
                        </div>
                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".4s" style="font-size: 1.15rem; font-weight: 700; color: #333;">Cladding Tile Fixing Services in Dubai</h4>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                            Al Maha offers a complete supply and installation service for cladding tiles in Dubai, handled by our experienced tile fixing contractors. As a trusted tile fixing company, we manage the full process from material selection and project consultation through to professional cladding installation across residential, commercial, and large-scale construction projects in the UAE.
                        </p>
                        <p class="desc wow fadeInUp text-justify text-muted font-italic" data-wow-delay=".6s">
                            <strong>Why Choose Al Maha for Cladding Tile Fixing:</strong> Our experienced tile fixing contractors in Dubai are skilled in interior and exterior cladding installations, ensuring accurate alignment, clean finishes, and long-lasting results on every project. Whether you need cladding tiles fixed on a single feature wall or an entire building facade, Al Maha provides reliable and professional tile fixing services across UAE.
                        </p>

                        <h5 class="mt-3 mb-2 wow fadeInUp" data-wow-delay=".7s" style="font-weight: 700;">Cladding Tile Fixing Applications:</h5>
                        <ul class="list-unstyled mb-4 wow fadeInUp" data-wow-delay=".75s">
                            <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Exterior facade cladding installation for villas, apartments, and commercial buildings</li>
                            <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Interior feature wall and accent wall cladding installation</li>
                            <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Kitchen and bathroom wall cladding tile fixing</li>
                            <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Hotel lobby and hospitality interior cladding installation across the UAE</li>
                            <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Large-scale commercial and residential development cladding fixing services</li>
                        </ul>

                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".8s" style="font-size: 1.15rem; font-weight: 700; color: #333;">Exterior Cladding Tiles in Dubai</h4>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".9s">
                            Exterior cladding tiles are one of the most specified building materials across the UAE, valued for their ability to protect building facades while enhancing architectural appearance. Al Maha supplies a comprehensive range of exterior cladding tiles in Dubai including large-format facade tiles, natural stone cladding, porcelain cladding panels, and textured exterior tiles suitable for the Gulf climate.
                        </p>
                        <p class="desc wow fadeInUp text-justify text-muted font-italic" data-wow-delay="1.0s">
                            <strong>Why Exterior Cladding Tiles Are Ideal:</strong> Exterior cladding tiles are engineered to perform in Dubai's demanding climate conditions. Their resistance to UV rays, heat, moisture, and wind-driven sand makes them a reliable and low-maintenance exterior wall solution for both residential and commercial buildings across the UAE.
                        </p>
                        
                        <h5 class="mt-3 mb-2 wow fadeInUp" data-wow-delay="1.05s" style="font-weight: 700;">Exterior Cladding Applications:</h5>
                        <ul class="list-unstyled mb-0 wow fadeInUp" data-wow-delay="1.1s">
                            <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Building facades and exterior walls of villas and apartments</li>
                            <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Commercial building exteriors and office towers</li>
                            <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Hotel and resort exterior cladding across the UAE</li>
                            <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Retail and shopping centre exterior facades</li>
                            <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Large-scale residential and commercial development exteriors across Dubai and the UAE</li>
                        </ul>
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
                        <img src="{{ asset('assets/images/products/cd-4.png') }}" alt="Why Choose Al Maha Cladding Tiles Supplier" class="img-fluid rounded shadow w-100">
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
                                Why Choose Al Maha for Cladding Tiles in Dubai?
                            </h2>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".4s">
                            Al Maha is one of Dubai's most trusted cladding tiles suppliers, with over 15 years of experience supplying premium cladding tiles, interior wall tiles, and exterior facade solutions to contractors, developers, architects, and homeowners across the UAE.
                        </p>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                            As a direct cladding tiles importer, we source our cladding tile collections from leading international manufacturers, giving our clients access to premium quality at competitive cladding tile prices in Dubai. From project consultation and material selection to supply, delivery, and professional tile fixing, Al Maha provides end-to-end support for every cladding project across the UAE.
                        </p>
                        
                        <ul class="list-unstyled mt-4 wow fadeInUp" data-wow-delay=".6s">
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Importer Pricing:</strong> Direct cladding tiles importer in Dubai with competitive prices and no middleman markup.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Global Manufacturers:</strong> Premium cladding tiles sourced from globally recognised international manufacturers.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>15+ Years Trust:</strong> Trusted cladding tiles company in Dubai supplying residential, commercial, and hospitality projects.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>End-to-End Service:</strong> Complete supply and fixing service through our experienced tile fixing contractors in Dubai.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Extensive Formats:</strong> Wide range of interior and exterior cladding tiles in sizes, finishes, and formats for every project type.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Reliable Logistics:</strong> Reliable supply and UAE-wide delivery backed by expert project consultation.
                                </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Dedicated Project Support:</strong> Custom support for contractors, developers, and interior designers in Dubai.
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
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Get answers to the most common questions about interior and exterior cladding tiles and fixing in Dubai.</p>
            </div>
            
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="claddingFaqAccordion">
                        
                        <!-- Q1 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".2s">
                            <h2 class="accordion-header" id="faqHeadingOne">
                                <button class="accordion-button font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne" style="font-weight: 600;">
                                    What are cladding tiles used for in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#claddingFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Cladding tiles in Dubai are used for interior and exterior wall applications including building facades, feature walls, kitchen splashbacks, bathroom walls, hotel lobbies, and commercial interiors. Their durability, weather resistance, and wide range of designs make them one of the most versatile wall finishing solutions available in the UAE.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q2 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".3s">
                            <h2 class="accordion-header" id="faqHeadingTwo">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo" style="font-weight: 600;">
                                    What is the difference between cladding tiles and regular wall tiles?
                                </button>
                            </h2>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#claddingFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Cladding tiles are specifically designed for wall surface applications and are available in thicker formats and larger sizes than standard wall tiles, making them suitable for both interior accent walls and exterior building facades. Regular wall tiles are typically lighter and thinner and are suited to interior wet areas such as bathrooms and kitchens.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q3 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".4s">
                            <h2 class="accordion-header" id="faqHeadingThree">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree" style="font-weight: 600;">
                                    Are cladding tiles suitable for exterior use in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#claddingFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes. Our exterior cladding tiles in Dubai are weather-resistant, UV-stable, and engineered to withstand Dubai's extreme heat, moisture, and wind conditions, making them suitable for building facades, exterior walls, and outdoor feature walls across the UAE.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q4 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".5s">
                            <h2 class="accordion-header" id="faqHeadingFour">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour" style="font-weight: 600;">
                                    Does Al Maha provide cladding tile fixing services in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#claddingFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes. Al Maha provides a complete supply and installation service for cladding tiles in Dubai through our experienced tile fixing contractors. We handle interior and exterior cladding installations for residential, commercial, and large-scale construction projects across the UAE.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".6s">
                            <h2 class="accordion-header" id="faqHeadingFive">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive" style="font-weight: 600;">
                                    How much do cladding tiles cost in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive" data-bs-parent="#claddingFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Cladding tile prices in Dubai vary depending on the material, finish, size, and collection. Al Maha offers competitive pricing across both standard and premium cladding tile ranges as a direct importer. Contact us for a quote tailored to your specific project requirements.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q6 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".7s">
                            <h2 class="accordion-header" id="faqHeadingSix">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSix" aria-expanded="false" aria-controls="faqCollapseSix" style="font-weight: 600;">
                                    What finishes are available for cladding tiles in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseSix" class="accordion-collapse collapse" aria-labelledby="faqHeadingSix" data-bs-parent="#claddingFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Al Maha supplies cladding tiles in Dubai in a wide range of finishes including natural stone effect, wood effect, concrete effect, polished, matte, and textured surfaces. Our range covers porcelain cladding tiles, natural stone cladding, marble cladding, and granite cladding for every design specification.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q7 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".8s">
                            <h2 class="accordion-header" id="faqHeadingSeven">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSeven" aria-expanded="false" aria-controls="faqCollapseSeven" style="font-weight: 600;">
                                    Can cladding tiles be used for feature walls in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseSeven" class="accordion-collapse collapse" aria-labelledby="faqHeadingSeven" data-bs-parent="#claddingFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes. Cladding tiles are one of the most popular choices for interior feature walls and accent walls in Dubai, used across residential villas, hotel lobbies, office receptions, restaurants, and retail spaces. Our range includes large-format porcelain cladding panels and natural stone cladding tiles suitable for high-impact interior feature wall applications.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q8 -->
                        <div class="accordion-item border rounded shadow-sm wow fadeInUp" data-wow-delay=".9s">
                            <h2 class="accordion-header" id="faqHeadingEight">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseEight" aria-expanded="false" aria-controls="faqCollapseEight" style="font-weight: 600;">
                                    Where can I view cladding tiles in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseEight" class="accordion-collapse collapse" aria-labelledby="faqHeadingEight" data-bs-parent="#claddingFaqAccordion">
                                <div class="accordion-body text-muted">
                                    You can view our full range of cladding tiles in Dubai at Al Maha's showroom in Al Qusais Industrial Area 3, Dubai. Our team is available to help you select the right cladding tile finish, format, and material for your specific project. We also supply cladding tiles to project sites across all seven Emirates.
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
                    <h3 class="text-white mb-2" style="font-size: 1.8rem; font-weight: 700; font-family: inherit;">Ready to Specify Cladding Tiles for Your Project?</h3>
                    <p class="mb-0 text-white-50" style="font-size: 1.05rem;">From exterior building facades to interior feature walls, Al Maha has the cladding tiles, the fixing expertise, and the project support to deliver the right solution across the UAE.</p>
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
