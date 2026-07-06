@extends('layouts.app')

@section('meta_title', 'Premium Tile Adhesive Supplier Dubai | Al Maha Materials')
@section('meta_description', 'Source high-performance tile glue and adhesives at competitive direct-importer prices in Dubai. 15+ years of experience. Contact Al Maha for a quote today.')

@section('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@graph": [
    {
      "@type": "CollectionPage",
      "@id": "https://www.mahabldg.com/interior-tiles-glue#webpage",
      "url": "https://www.mahabldg.com/interior-tiles-glue",
      "name": "Premium Tile Adhesive Supplier Dubai | Al Maha Materials",
      "description": "Source high-performance tile glue and adhesives at competitive direct-importer prices in Dubai. 15+ years of experience.",
      "isPartOf": {
        "@id": "https://www.mahabldg.com/#website"
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.mahabldg.com/interior-tiles-glue#breadcrumb",
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
          "name": "Interior Tiles Glue",
          "item": "https://www.mahabldg.com/interior-tiles-glue"
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
                            <h1 class="breadcumb-title">Tile Adhesive</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li><a href="{{ route('categories') }}">Products</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">Tile Adhesive</li>
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
                        <img src="{{ asset('assets/images/products/in-1.png') }}" alt="Tile Adhesive Dubai" class="img-fluid rounded shadow w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content ps-lg-4">
                        <div class="section-title text-start mb-3">
                            <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s"> 
                                <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}" alt="icon"> 
                                TILE FIXING 
                            </div>
                            <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s" style="font-size: 2.2rem; line-height: 1.2;">
                                Tile Adhesive Dubai
                            </h2>
                            <h3 class="text-start text-theme-color mt-2" style="font-size: 1.4rem; font-weight: 600;">
                                Premium Interior Tile Glue Supplier and Importer
                            </h3>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                            Al Maha is a trusted tile adhesive supplier in Dubai, offering premium tile adhesive and interior tile glue for residential, commercial, and large-scale projects across the UAE. With over 15 years of experience, we provide high-quality tile adhesives, competitive pricing, and reliable UAE-wide delivery from our Al Qusais showroom.
                        </p>
                        
                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".6s" style="font-size: 1.25rem; font-weight: 700; color: #333;">What Is Tile Adhesive?</h4>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".7s">
                            Tile adhesive, also referred to as tile glue or tile fixing compound, is a specially formulated bonding material used to fix ceramic, porcelain, marble, granite, and natural stone tiles to floor and wall substrates in interior environments. As one of the most trusted tile adhesive suppliers in Dubai, Al Maha supplies a carefully selected range of interior tile glue in Dubai, from premium high-performance adhesives for large-format and heavy tiles to competitively priced standard adhesives for residential and commercial tile fixing projects of every scale.
                        </p>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".8s">
                            Available in a wide range of formulations, grades, and specifications, our tile adhesive suits tile fixing contractors, developers, and fit-out companies working on projects of all scales across the UAE. From luxury villa bathroom and kitchen tile fixing to large-scale commercial flooring installations and hospitality fit-outs, Al Maha has the right tile adhesive solution for every interior tiling project across Dubai and the UAE.
                        </p>
                        <p class="desc wow fadeInUp text-justify text-muted font-italic" data-wow-delay=".9s" style="border-left: 3px solid var(--theme); padding-left: 15px;">
                            Dubai's construction and fit-out industry demands tile adhesives that perform reliably in high-temperature interior environments, across a wide range of tile formats and substrate types. Our interior tile glue range is selected to meet the technical and performance standards required for tile fixing across the UAE's residential, commercial, and hospitality sectors.
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
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Benefits of Our Tile Adhesive</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">High-strength formulations designed for flawless tiles and slabs installations.</p>
            </div>
            
            <div class="row gy-4">
                <!-- Benefit 1 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">High Bond Strength</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">High-performance bonding strength engineered for reliable tile fixing across interior floor and wall applications.</p>
                    </div>
                </div>
                <!-- Benefit 2 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-cubes"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Multiple Formulations</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Wide range of formulations available including standard set, rapid set, and flexible adhesives.</p>
                    </div>
                </div>
                <!-- Benefit 3 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Multi-material Fixing</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Suitable for fixing ceramic, porcelain, marble, granite, glass mosaic, and large-format tiles.</p>
                    </div>
                </div>
                <!-- Benefit 4 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".5s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-chart-area"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Excellent Coverage</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Excellent coverage and workability, reducing installation time and material wastage on large-scale projects.</p>
                    </div>
                </div>
                <!-- Benefit 5 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".6s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-water"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Moisture Resistant</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Heat and moisture-resistant formulations available for bathroom, kitchen, and wet area tile fixing.</p>
                    </div>
                </div>
                <!-- Benefit 6 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".7s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-tags"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Competitive Price</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Sourced directly from internationally recognised manufacturers, ensuring consistent quality and competitive prices.</p>
                    </div>
                </div>
                <!-- Benefit 7 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".8s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-building"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Multi-sector Use</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Suitable for residential villas, apartments, offices, retail spaces, hotels, and developments.</p>
                    </div>
                </div>
                <!-- Benefit 8 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".9s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Complete System</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Complete tile fixing systems covering adhesive, tile grout, and ancillary materials from a single source.</p>
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
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Tile Adhesive Range</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">A comprehensive selection of premium tile adhesives and interior tile glue formulations:</p>
            </div>
            
            <div class="row gy-4">
                <!-- item 1 -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".2s">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--theme);"><i class="fas fa-ellipsis-v me-2"></i> Standard Set Adhesive</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.9rem;">General-purpose interior tile glue for fixing ceramic and porcelain floor and wall tiles across standard residential and commercial projects.</p>
                    </div>
                </div>
                <!-- item 2 -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".3s">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--theme);"><i class="fas fa-bolt me-2"></i> Rapid Set Adhesive</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.9rem;">Fast-setting tile adhesive for time-critical interior tiling projects, minimising downtime and enabling faster fixing on fit-outs.</p>
                    </div>
                </div>
                <!-- item 3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".4s">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--theme);"><i class="fas fa-compress-arrows-alt me-2"></i> Flexible Tile Adhesive</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.9rem;">Polymer-modified flexible glue for fixing tiles over substrates subject to movement, vibration, or thermal expansion (e.g. underfloor heating).</p>
                    </div>
                </div>
                <!-- item 4 -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".5s">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--theme);"><i class="fas fa-expand me-2"></i> Large Format Adhesive</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.9rem;">High-performance non-slump adhesive formulated for oversized porcelain slabs, marble panels, and heavy natural stone wall & floor installs.</p>
                    </div>
                </div>
                <!-- item 5 -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".6s">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--theme);"><i class="fas fa-paint-brush me-2"></i> White Tile Adhesive</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.9rem;">Premium white tile glue for fixing translucent, light-coloured, and glass mosaic tiles, ensuring the adhesive color does not show through.</p>
                    </div>
                </div>
                <!-- item 6 -->
                <div class="col-md-4 col-sm-6">
                    <div class="p-4 rounded shadow-sm border h-100 wow fadeInUp" data-wow-delay=".7s">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: var(--theme);"><i class="fas fa-water me-2"></i> Waterproof Adhesive</h4>
                        <p class="text-muted mt-2 mb-0" style="font-size: 0.9rem;">Moisture-resistant tile adhesive specifically designed for wet area applications, including bathrooms, showers, and kitchens.</p>
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
                        <img src="{{ asset('assets/images/products/in-2.png') }}" alt="Tile Adhesive Specifications" class="img-fluid rounded shadow w-100">
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
                                Our tile adhesive and interior tile glue range in Dubai is available across a variety of formulations, grades, and specifications to meet requirements:
                            </p>
                        </div>
                        
                        <div class="specs-grid wow fadeInUp" data-wow-delay=".6s">
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-layer-group"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Adhesive Types</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Cement-based, epoxy, and polymer-modified tile adhesives</p>
                                </div>
                            </div>
                            
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-hourglass-half"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Setting Times</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Standard set, rapid set, and extended open-time formulations</p>
                                </div>
                            </div>
                            
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-compress-arrows-alt"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Flexibility & Colours</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Rigid, semi-flexible, and fully flexible grades. Grey and white formulations.</p>
                                </div>
                            </div>

                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-clipboard-check"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Standards</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Products sourced to meet UAE construction regulations and EN 12004 / ISO standards</p>
                                </div>
                            </div>
                            
                            <div class="spec-item d-flex align-items-center p-3 rounded bg-white shadow-sm">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i class="fas fa-globe"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Sourcing</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Sourced from globally recognised tile adhesive manufacturers known for quality and technical consistency</p>
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
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Applications of Tile Adhesive</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Our tile adhesive and interior tile glue in Dubai are specified for a wide range of residential, commercial, and hospitality projects:</p>
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
                                  <span>Interior floor tile fixing using premium tile adhesive for villas</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Bathroom and wet area wall tile fixing with waterproof tile glue</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Kitchen floor and wall tile fixing using Rapid Set and flexible adhesive</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Large-format porcelain tile fixing with heavy-duty tile adhesive</span>
                              </li>
                              <li class="d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Marble and natural stone floor tile fixing using premium tile adhesive</span>
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
                                  <span>Office and commercial building interior floor tile fixing across large-scale projects</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Retail store and shopping mall floor and wall tile fixing with high-performance tile glue</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Restaurant and cafe kitchen and floor tile fixing using rapid set & waterproof adhesive</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Gym and leisure facility floor tile fixing with heavy-duty tile adhesive for high traffic</span>
                              </li>
                              <li class="d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Large-scale residential and commercial development tile adhesive supply</span>
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
                                  <span>Hotel bathroom and wet area tile fixing with waterproof tile adhesive</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Spa and wellness facility floor and wall tile fixing using flexible and large-format tile glue</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Hotel lobby and corridor floor tile fixing with premium large-format tile adhesive</span>
                              </li>
                              <li class="mb-3 d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Resort and boutique hotel bathroom and public area tile fixing across developments</span>
                              </li>
                              <li class="d-flex align-items-start">
                                  <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                  <span>Healthcare facility floor and wall tile fixing with hygienic, heavy-duty tile adhesive</span>
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
                        <img src="{{ asset('assets/images/products/in-3.png') }}" alt="Premium Tile Adhesive Dubai" class="img-fluid rounded shadow w-100">
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
                                Premium Tile Adhesive
                            </h2>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".4s">
                            Al Maha supplies a carefully curated range of premium tile adhesive and interior tile glue in Dubai for high-end residential villas, luxury commercial fit-outs, boutique hotels, and large-scale hospitality and construction projects across the UAE. Our premium tile adhesive collection includes large-format tile adhesives, rapid set formulations, flexible polymer-modified adhesives, and specialist white tile glue sourced from internationally acclaimed tile fixing manufacturers.
                        </p>
                        
                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".5s" style="font-size: 1.15rem; font-weight: 700; color: #333;">Why Choose Premium Tile Adhesive for Your Project</h4>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".6s">
                            Premium tile adhesive ensures reliable, long-term bond strength across every tile type, format, and substrate combination, reducing the risk of tile failure, lippage, and debonding in high-traffic and wet area environments. As a direct building materials supplier in Dubai, Al Maha gives tile fixing contractors, developers, and fit-out companies access to premium tile adhesive at competitive prices with no middleman markup.
                        </p>

                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".7s" style="font-size: 1.15rem; font-weight: 700; color: #333;">Premium Adhesive Applications</h4>
                        <div class="row wow fadeInUp" data-wow-delay=".8s">
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Large-format porcelain & marble tile fixing</li>
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Hotel bathroom & wet area tiling</li>
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Premium B2B commercial flooring</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Underfloor heating system tile layouts</li>
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2" style="font-size: 0.75rem;"></i> Developer show apartments model units</li>
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
                        <img src="{{ asset('assets/images/products/in-4.png') }}" alt="Why Choose Al Maha Tile Adhesive Supplier" class="img-fluid rounded shadow w-100">
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
                                Why Choose Al Maha for Tile Adhesive in Dubai?
                            </h2>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".4s">
                            Al Maha is one of Dubai's most trusted building materials and tile adhesive suppliers, with over 15 years of experience supplying premium tile adhesive, tile glue, tiles, and surface solutions to contractors, developers, interior designers, and fit-out companies across the UAE.
                        </p>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                            As a direct building materials supplier, we source our tile adhesive range from leading international manufacturers, giving our clients access to premium quality at competitive tile adhesive prices in Dubai. From product selection and technical consultation to UAE-wide delivery, Al Maha provides end-to-end support for every interior tiling project.
                        </p>
                        
                        <ul class="list-unstyled mt-4 wow fadeInUp" data-wow-delay=".6s">
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Direct Importer Prices:</strong> Direct tile adhesive supplier in Dubai with competitive prices and no middleman markup.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Globally Certified Brands:</strong> Premium interior tile glue sourced from globally recognised international manufacturers.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>15+ Years Trust:</strong> Trusted building materials supplier supplying residential, commercial, and hospitality projects across the UAE.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Complete Range:</strong> Covering standard set, rapid set, flexible, large-format, white, and waterproof adhesives.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Comprehensive Grades:</strong> Wide range of formulations, grades, and specifications for every tile type, substrate, and project.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Expert Technical Consultation:</strong> Reliable supply and UAE-wide delivery backed by expert technical advice.
                                </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Dedicated Trade Support:</strong> Dedicated support for tile fixing contractors, developers, and fit-out companies.
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
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Get answers to the most common questions about tile glue types, standard/flexible adhesives, and orders in Dubai.</p>
            </div>
            
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="tileAdhesiveFaqAccordion">
                        
                        <!-- Q1 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".2s">
                            <h2 class="accordion-header" id="faqHeadingOne">
                                <button class="accordion-button font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne" style="font-weight: 600;">
                                    What tile adhesive does Al Maha supply in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#tileAdhesiveFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Al Maha supplies a comprehensive range of tile adhesives and interior tile glue in Dubai, including standard set, rapid set, flexible, large-format, white, and waterproof tile adhesives for residential, commercial, and hospitality tiling projects across the UAE.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q2 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".3s">
                            <h2 class="accordion-header" id="faqHeadingTwo">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo" style="font-weight: 600;">
                                    Is Al Maha a direct tile adhesive supplier in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#tileAdhesiveFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Yes. Al Maha is a direct building materials supplier in Dubai, sourcing tile adhesive and interior tile glue directly from internationally recognised manufacturers. This allows us to offer premium quality at competitive tile adhesive prices in Dubai with no middleman markup.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q3 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".4s">
                            <h2 class="accordion-header" id="faqHeadingThree">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree" style="font-weight: 600;">
                                    What is the difference between standard and flexible tile adhesive?
                                </button>
                            </h2>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#tileAdhesiveFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Standard tile adhesive is a cement-based bonding compound suitable for fixing tiles to stable, rigid substrates in standard interior applications. Flexible tile adhesive is a polymer-modified formulation designed for substrates subject to movement, vibration, or thermal expansion, including underfloor heating systems, large-format tile installations, and exterior applications. Al Maha supplies both standard and flexible tile adhesive in Dubai to suit every project requirement.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q4 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".5s">
                            <h2 class="accordion-header" id="faqHeadingFour">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour" style="font-weight: 600;">
                                    What tile adhesive is best for large-format porcelain tiles in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#tileAdhesiveFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Large-format porcelain tiles require a high-performance, non-slump tile adhesive with extended open time to allow for accurate positioning and full back coverage. Al Maha supplies specialist large-format tile adhesive in Dubai, formulated specifically for fixing oversized porcelain slabs, marble tiles, and heavy natural stone across interior floor and wall applications.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q5 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".6s">
                            <h2 class="accordion-header" id="faqHeadingFive">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive" style="font-weight: 600;">
                                    What tile adhesive is best for bathrooms and wet areas in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive" data-bs-parent="#tileAdhesiveFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Bathrooms, showers, and wet areas require waterproof or moisture-resistant tile adhesive to ensure long-term bond strength in high-humidity environments. Al Maha supplies waterproof tile adhesive in Dubai suitable for wet area floor and wall tile fixing across residential, commercial, and hospitality projects across the UAE.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q6 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".7s">
                            <h2 class="accordion-header" id="faqHeadingSix">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSix" aria-expanded="false" aria-controls="faqCollapseSix" style="font-weight: 600;">
                                    Does Al Maha supply tile adhesive for hospitality and hotel projects in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseSix" class="accordion-collapse collapse" aria-labelledby="faqHeadingSix" data-bs-parent="#tileAdhesiveFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Yes. Al Maha is a trusted tile adhesive supplier for hospitality projects in Dubai and across the UAE, supplying rapid-set, large-format, and waterproof tile adhesives for luxury hotels, resorts, spas, and large-scale hospitality fit-outs across the UAE.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q7 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".8s">
                            <h2 class="accordion-header" id="faqHeadingSeven">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseSeven" aria-expanded="false" aria-controls="faqCollapseSeven" style="font-weight: 600;">
                                    How much does tile adhesive cost in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseSeven" class="accordion-collapse collapse" aria-labelledby="faqHeadingSeven" data-bs-parent="#tileAdhesiveFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Tile adhesive prices in Dubai vary depending on the formulation, grade, brand, and quantity required. Al Maha offers competitive pricing across both standard and premium tile adhesive ranges as a direct building materials supplier. Contact us for a quote tailored to your specific project and tiling requirements.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Q8 -->
                        <div class="accordion-item border rounded shadow-sm wow fadeInUp bg-white" data-wow-delay=".9s">
                            <h2 class="accordion-header" id="faqHeadingEight">
                                <button class="accordion-button collapsed font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseEight" aria-expanded="false" aria-controls="faqCollapseEight" style="font-weight: 600;">
                                    Can I view tile adhesive products at Al Maha's Dubai showroom?
                                </button>
                            </h2>
                            <div id="faqCollapseEight" class="accordion-collapse collapse" aria-labelledby="faqHeadingEight" data-bs-parent="#tileAdhesiveFaqAccordion">
                                <div class="accordion-body text-muted bg-white">
                                    Yes. You can visit Al Maha's showroom in Al Qusais Industrial Area 3, Dubai to discuss your tile fixing requirements with our team. We can advise on the right tile adhesive formulation for your specific tile type, substrate, and project conditions. We also supply tile adhesive to project sites across all seven Emirates.
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
                    <h3 class="text-white mb-2" style="font-size: 1.8rem; font-weight: 700; font-family: inherit;">Ready to Specify Tile Adhesive for Your Project?</h3>
                    <p class="mb-0 text-white-50" style="font-size: 1.05rem;">From luxury villa bathroom tile fixing to large-scale commercial flooring installations and five-star hotel fit-outs, Al Maha has the tile adhesive, the interior tile glue, the product range, and the technical expertise to deliver the right fixing solution for every tiling project across Dubai and the UAE.</p>
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
