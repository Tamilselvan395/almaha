@extends('layouts.app')

@section('meta_title', 'Premium Porcelain Tiles Dubai | Al Maha Building Materials')
@section('meta_description', 'Source outdoor porcelain tiles and slabs at competitive direct-importer prices in Dubai. UAE-wide delivery. Contact Al Maha for a quote today!')

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "CollectionPage",
      "@id": "https://www.mahabldg.com/porcelain#webpage",
      "url": "https://www.mahabldg.com/porcelain",
      "name": "Premium Porcelain Tiles Collection | Al Maha Dubai",
      "description": "Explore our premium collection of indoor, outdoor, floor, and wall porcelain tiles available in Dubai, UAE.",
      "isPartOf": {
        "@id": "https://www.mahabldg.com/#website"
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.mahabldg.com/porcelain#breadcrumb",
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
          "name": "Porcelain Tiles",
          "item": "https://www.mahabldg.com/porcelain"
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
                            <h1 class="breadcumb-title">Porcelain Tiles</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li><a href="{{ route('categories') }}">Products</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">Porcelain Tiles</li>
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
                        <img src="{{ asset('assets/images/products/p-1.png') }}" alt="Porcelain Tiles Dubai"
                            class="img-fluid rounded shadow w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content ps-lg-4">
                        <div class="section-title text-start mb-3">
                            <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s">
                                <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}"
                                    alt="icon">
                                PREMIUM TILES
                            </div>
                            <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s"
                                style="font-size: 2.2rem; line-height: 1.2;">
                                Porcelain Tiles Dubai
                            </h2>
                            <h3 class="text-start text-theme-color mt-2" style="font-size: 1.4rem; font-weight: 600;">
                                Premium Floor & Wall Tile Supplier
                            </h3>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                            Al Maha is a trusted porcelain tiles supplier and tile supplier in Dubai, offering premium
                            porcelain floor tiles, wall tiles, and outdoor porcelain tiles for residential and commercial
                            projects across the UAE. With over 15 years of experience, we provide high-quality porcelain
                            tiles, competitive pricing, and reliable UAE-wide delivery from our Al Qusais showroom.
                        </p>

                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".6s"
                            style="font-size: 1.25rem; font-weight: 700; color: #333;">What are Porcelain Tiles?</h4>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".7s">
                            Porcelain tiles are a premium ceramic tile manufactured from refined clay and fired at high
                            temperatures, producing a dense, hard-wearing surface with very low water absorption. As one of
                            the leading porcelain tile companies in Dubai, Al Maha supplies a carefully selected range of
                            high-quality porcelain tiles, from luxury large-format collections to competitively priced
                            options for projects of every scale.
                        </p>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".8s">
                            Available in a wide range of sizes, finishes, and formats, our porcelain tiles suit homeowners,
                            contractors, interior designers, and developers working on projects of all scales across the
                            UAE. From outdoor porcelain floor tiles and wall tiles to competitively priced standard options,
                            Al Maha has the right solution for every project requirement across Dubai and the UAE.
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
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Benefits of Porcelain Tiles</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Engineered for durability, aesthetic appeal, and
                    outstanding performance in the UAE climate.</p>
            </div>

            <div class="row gy-4">
                <!-- Benefit 1 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-temperature-high"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Climate Resistant</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Engineered to withstand Dubai's heat,
                            humidity, and heavy foot traffic without losing structural integrity or fading.</p>
                    </div>
                </div>
                <!-- Benefit 2 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Stain & Scratch
                            Resistant</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Highly durable surfaces, ideal for UAE
                            kitchens, bathrooms, and high-traffic commercial floors.</p>
                    </div>
                </div>
                <!-- Benefit 3 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-tint-slash"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Low Water Absorption
                        </h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Below 0.5% water absorption, making them
                            suitable for pool surrounds, wet rooms, and outdoor areas across the UAE.</p>
                    </div>
                </div>
                <!-- Benefit 4 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".5s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-sun"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">UV-Stable Finishes
                        </h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">UV-stable finishes that resist fading,
                            discolouration, or damage under direct Gulf sun exposure.</p>
                    </div>
                </div>
                <!-- Benefit 5 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".6s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-magic"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Easy Maintenance
                        </h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Easy to clean and maintain, making
                            them a preferred flooring choice for residential and commercial projects in Dubai.</p>
                    </div>
                </div>
                <!-- Benefit 6 -->
                <div class="col-lg-4 col-md-6 d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".7s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Highly Versatile
                        </h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Versatile for both interior spaces
                            (kitchens, bathrooms, lobbies) and outdoor applications across the UAE.</p>
                    </div>
                </div>
                <!-- Benefit 7 -->
                <div class="col-lg-4 col-md-6 mx-auto d-flex">
                    <div class="strength-card w-100 p-4 bg-white rounded shadow-sm wow fadeInUp" data-wow-delay=".8s">
                        <div class="icon-wrapper mb-3 text-theme-color" style="font-size: 2rem;">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h4 class="title" style="font-size: 1.15rem; font-weight: 600; color: #333;">Aesthetic Range</h4>
                        <p class="desc mb-0 text-muted" style="font-size: 0.95rem;">Available in elegant wood-effect,
                            stone-effect, marble-effect, and solid-colour finishes to fit any design layout.</p>
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
                        <img src="{{ asset('assets/images/products/p-2.png') }}" alt="Porcelain Tile Specifications"
                            class="img-fluid rounded shadow w-100">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="specs-content pe-lg-4">
                        <div class="section-title text-start mb-4">
                            <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s">
                                <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}"
                                    alt="icon">
                                SPECIFICATIONS
                            </div>
                            <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s">Product Specifications</h2>
                            <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                                Our porcelain tile range is available in a variety of sizes, thicknesses, and finishes to
                                meet the requirements of any residential or commercial project:
                            </p>
                        </div>

                        <div class="specs-grid wow fadeInUp" data-wow-delay=".6s">
                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded"
                                style="background-color: var(--theme2);">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i
                                        class="fas fa-expand"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Sizes</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">600x600mm, 800x800mm,
                                        600x1200mm, 1200x1200mm, and large-format porcelain slabs</p>
                                </div>
                            </div>

                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded"
                                style="background-color: var(--theme2);">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i
                                        class="fas fa-ruler-combined"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Thickness</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">9mm to 20mm (20mm recommended
                                        for outdoor porcelain tiles and heavy-duty applications)</p>
                                </div>
                            </div>

                            <div class="spec-item d-flex align-items-center mb-3 p-3 rounded"
                                style="background-color: var(--theme2);">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i
                                        class="fas fa-layer-group"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Finishes</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Polished, matte, lappato,
                                        textured, and anti-slip finishes</p>
                                </div>
                            </div>

                            <div class="spec-item d-flex align-items-center p-3 rounded"
                                style="background-color: var(--theme2);">
                                <div class="spec-icon me-3 text-theme-color" style="font-size: 1.5rem;"><i
                                        class="fas fa-globe"></i></div>
                                <div>
                                    <h5 class="mb-1" style="font-weight: 600; color: #333;">Sourcing</h5>
                                    <p class="mb-0 text-muted" style="font-size: 0.9rem;">Sourced from globally recognised
                                        tile manufacturers known for quality and innovation</p>
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
                <h2 class="text-center mt-15 wow fadeInUp" data-wow-delay=".3s">Applications of Porcelain Tiles</h2>
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Our porcelain floor tiles and wall tiles in Dubai
                    are specified for a wide range of residential, commercial, and hospitality projects across the UAE:</p>
            </div>

            <div class="row gy-4">
                <!-- Residential -->
                <div class="col-lg-4">
                    <div class="card h-100 border-0 rounded shadow-sm p-4 bg-white wow fadeInUp" data-wow-delay=".2s">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center mb-3">
                                <span class="text-theme-color me-3" style="font-size: 1.8rem;"><i
                                        class="fas fa-home"></i></span>
                                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0; color: #333;">
                                    Residential</h3>
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                    <span>Porcelain floor tiles for villas and apartments</span>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                    <span>Kitchen and bathroom wall tiles and floor tiles</span>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                    <span>Outdoor porcelain tiles for patios, terraces, and balconies</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                    <span>Swimming pool surround tiles</span>
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
                                <span class="text-theme-color me-3" style="font-size: 1.8rem;"><i
                                        class="fas fa-briefcase"></i></span>
                                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0; color: #333;">Commercial
                                </h3>
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                    <span>Office floor tiles and wall cladding</span>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                    <span>Retail store and shopping mall floor tiles UAE</span>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                    <span>Restaurant and café floor and wall tiles</span>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                    <span>Hotel lobby tiles and hospitality fit-out tiles Dubai</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                    <span>Cladding tiles for interior and exterior wall applications</span>
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
                                <span class="text-theme-color me-3" style="font-size: 1.8rem;"><i
                                        class="fas fa-clinic-medical"></i></span>
                                <h3 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 0; color: #333;">Specialist
                                </h3>
                            </div>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                    <span>Healthcare facility floor tiles that are hygienic, slip-resistant, and easy to
                                        maintain across clinical environments</span>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                    <span>Educational institution floor tiles that are durable and scratch-resistant for
                                        schools and universities</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="fas fa-check text-theme-color mt-1 me-2" style="font-size: 0.85rem;"></i>
                                    <span>Large-scale residential and commercial development flooring solutions supplied
                                        across Dubai and the UAE</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Outdoor Porcelain Section Start -->
    <section class="outdoor-section section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="outdoor-thumb sticky-image wow fadeInUp mb-4 mb-lg-0" data-wow-delay=".3s">
                        <img src="{{ asset('assets/images/products/p-3.png') }}" alt="Outdoor Porcelain Tiles Dubai"
                            class="img-fluid rounded shadow w-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="outdoor-content ps-lg-4">
                        <div class="section-title text-start mb-3">
                            <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s">
                                <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}"
                                    alt="icon">
                                OUTDOOR PORCELAIN
                            </div>
                            <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s" style="font-size: 2rem;">
                                Outdoor Porcelain Tiles in Dubai
                            </h2>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".4s">
                            Outdoor porcelain tiles have become one of the most specified exterior flooring solutions in
                            Dubai and across the UAE, valued for their ability to withstand extreme heat, UV exposure, and
                            heavy use without compromising on design.
                        </p>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                            Al Maha supplies a comprehensive range of outdoor porcelain tiles in Dubai, including anti-slip
                            outdoor tiles, 20mm thick outdoor porcelain floor tiles, and UV-resistant patio tiles suitable
                            for the Gulf climate.
                        </p>

                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".6s"
                            style="font-size: 1.15rem; font-weight: 700; color: #333;">Why Outdoor Porcelain Tiles Are
                            Ideal for Dubai</h4>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".7s">
                            Outdoor porcelain tiles are engineered to perform in Dubai's extreme climate conditions. Their
                            resistance to UV rays, heat, moisture, and heavy foot traffic makes them a reliable and
                            low-maintenance exterior flooring solution for both residential and commercial projects across
                            the UAE.
                        </p>

                        <h4 class="mt-4 mb-2 wow fadeInUp" data-wow-delay=".8s"
                            style="font-size: 1.15rem; font-weight: 700; color: #333;">Outdoor Applications</h4>
                        <div class="row wow fadeInUp" data-wow-delay=".9s">
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2"
                                            style="font-size: 0.75rem;"></i> Patios and terraces</li>
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2"
                                            style="font-size: 0.75rem;"></i> Pool surrounds with anti-slip finishes</li>
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2"
                                            style="font-size: 0.75rem;"></i> Garden areas & landscaping tiles</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2"
                                            style="font-size: 0.75rem;"></i> Balconies and rooftop terraces</li>
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2"
                                            style="font-size: 0.75rem;"></i> Driveways and pathways</li>
                                    <li class="mb-2"><i class="fas fa-chevron-right text-theme-color me-2"
                                            style="font-size: 0.75rem;"></i> Commercial outdoor areas</li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-4 p-3 rounded text-justify wow fadeInUp" data-wow-delay="1s"
                            style="background-color: var(--theme2); border-left: 4px solid var(--theme);">
                            <p class="mb-0 text-muted" style="font-size: 0.95rem;">
                                <strong>Anti-Slip and Heavy-Duty Outdoor Tile Options:</strong> All our outdoor porcelain
                                tiles in Dubai are weather-resistant, UV-stable, and available in slip-resistant finishes,
                                making them the preferred outdoor flooring choice for residential villas, luxury hotels,
                                landscaping projects, and commercial developments across Dubai and the UAE.
                            </p>
                        </div>
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
                        <img src="{{ asset('assets/images/products/p-4.png') }}" alt="Why Choose Al Maha Tiles Supplier"
                            class="img-fluid rounded shadow w-100">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="why-choose-content pe-lg-4">
                        <div class="section-title text-start mb-3">
                            <div class="subtitle text-start wow fadeInUp" data-wow-delay=".5s">
                                <img class="me-1" src="{{ asset('assets/images/shape/titleShape1_1.png') }}"
                                    alt="icon">
                                WHY CHOOSE US
                            </div>
                            <h2 class="text-start mt-15 wow fadeInUp" data-wow-delay=".3s" style="font-size: 2rem;">
                                Why Choose Al Maha for Porcelain Tiles in Dubai?
                            </h2>
                        </div>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".4s">
                            Al Maha is one of Dubai's most trusted porcelain tile suppliers, with over 15 years of
                            experience supplying premium porcelain tiles, natural stone, and surface solutions to
                            contractors, developers, architects, and homeowners across the UAE.
                        </p>
                        <p class="desc wow fadeInUp text-justify" data-wow-delay=".5s">
                            As a direct tile importer in Dubai, we source our porcelain tiles from leading international
                            manufacturers, giving our clients access to premium quality at competitive porcelain tile prices
                            in Dubai. From project consultation to UAE-wide delivery, Al Maha provides end-to-end support
                            for every project.
                        </p>

                        <ul class="list-unstyled mt-4 wow fadeInUp" data-wow-delay=".6s">
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i
                                        class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Competitive Pricing:</strong> Direct tiles importer in Dubai with competitive
                                    porcelain tile prices and no middleman markup.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i
                                        class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Premium Quality:</strong> Premium porcelain tiles sourced from globally
                                    recognised international manufacturers.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i
                                        class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>15+ Years Experience:</strong> Trusted tiles company in Dubai supplying
                                    residential, commercial, and hospitality projects.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i
                                        class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Diverse Collections:</strong> Wide range of sizes, finishes, and collections for
                                    every project type.
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i
                                        class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>UAE-Wide Delivery:</strong> Reliable supply and delivery backed by expert
                                    project consultation.
                                </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <span class="text-theme-color me-3" style="font-size: 1.2rem; line-height: 1;"><i
                                        class="fas fa-check-circle"></i></span>
                                <div>
                                    <strong>Expert Support:</strong> Dedicated support for contractors, developers, and
                                    interior designers in Dubai.
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
                <p class="text-center wow fadeInUp" data-wow-delay=".5s">Get answers to the most common questions about
                    porcelain tiles and their installation in Dubai.</p>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="porcelainFaqAccordion">

                        <!-- Q1 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".2s">
                            <h2 class="accordion-header" id="faqHeadingOne">
                                <button class="accordion-button font-weight-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true"
                                    aria-controls="faqCollapseOne" style="font-weight: 600;">
                                    What are porcelain tiles used for?
                                </button>
                            </h2>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="faqHeadingOne" data-bs-parent="#porcelainFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Porcelain tiles are used for flooring, wall cladding, kitchens, bathrooms, commercial
                                    spaces, hospitality projects, and outdoor areas. Their durability and low maintenance
                                    requirements make them one of the most versatile tile options available in Dubai.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".3s">
                            <h2 class="accordion-header" id="faqHeadingTwo">
                                <button class="accordion-button collapsed font-weight-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false"
                                    aria-controls="faqCollapseTwo" style="font-weight: 600;">
                                    Are porcelain tiles suitable for outdoor use in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo"
                                data-bs-parent="#porcelainFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Yes. Our outdoor porcelain tiles are weather-resistant, UV-resistant, and available in
                                    slip-resistant finishes, making them suitable for patios, terraces, walkways, garden
                                    areas, balconies, and pool surrounds across the UAE.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".4s">
                            <h2 class="accordion-header" id="faqHeadingThree">
                                <button class="accordion-button collapsed font-weight-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false"
                                    aria-controls="faqCollapseThree" style="font-weight: 600;">
                                    How much do porcelain tiles cost in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseThree" class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingThree" data-bs-parent="#porcelainFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Porcelain tile prices in Dubai vary depending on the finish, size, and collection. Al
                                    Maha offers competitive pricing across both standard and premium ranges. Contact us for
                                    a quote tailored to your project.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".5s">
                            <h2 class="accordion-header" id="faqHeadingFour">
                                <button class="accordion-button collapsed font-weight-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false"
                                    aria-controls="faqCollapseFour" style="font-weight: 600;">
                                    Are porcelain tiles waterproof?
                                </button>
                            </h2>
                            <div id="faqCollapseFour" class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingFour" data-bs-parent="#porcelainFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Porcelain tiles have very low water absorption properties, making them highly resistant
                                    to moisture and ideal for wet areas such as bathrooms, kitchens, and outdoor spaces.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".6s">
                            <h2 class="accordion-header" id="faqHeadingFive">
                                <button class="accordion-button collapsed font-weight-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false"
                                    aria-controls="faqCollapseFive" style="font-weight: 600;">
                                    Do porcelain tiles require special maintenance?
                                </button>
                            </h2>
                            <div id="faqCollapseFive" class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingFive" data-bs-parent="#porcelainFaqAccordion">
                                <div class="accordion-body text-muted">
                                    No. Porcelain tiles are easy to clean and maintain using standard cleaning methods,
                                    making them one of the most practical flooring choices for residential and commercial
                                    projects in Dubai.
                                </div>
                            </div>
                        </div>

                        <!-- Q6 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".7s">
                            <h2 class="accordion-header" id="faqHeadingSix">
                                <button class="accordion-button collapsed font-weight-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapseSix" aria-expanded="false"
                                    aria-controls="faqCollapseSix" style="font-weight: 600;">
                                    Why are porcelain tiles popular in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseSix" class="accordion-collapse collapse" aria-labelledby="faqHeadingSix"
                                data-bs-parent="#porcelainFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Porcelain tiles combine durability, moisture resistance, and style in a single product
                                    that aligns perfectly with Dubai's climate and the demands of modern UAE architecture.
                                    Their suitability for both indoor and outdoor use makes them a natural choice for a wide
                                    range of projects.
                                </div>
                            </div>
                        </div>

                        <!-- Q7 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm wow fadeInUp" data-wow-delay=".8s">
                            <h2 class="accordion-header" id="faqHeadingSeven">
                                <button class="accordion-button collapsed font-weight-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapseSeven" aria-expanded="false"
                                    aria-controls="faqCollapseSeven" style="font-weight: 600;">
                                    What sizes of porcelain tiles are available in Dubai?
                                </button>
                            </h2>
                            <div id="faqCollapseSeven" class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingSeven" data-bs-parent="#porcelainFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Al Maha stocks porcelain tiles in Dubai in a range of sizes including 600x600mm,
                                    800x800mm, 600x1200mm, 1200x1200mm, and large-format porcelain slabs. Contact our team
                                    to check availability for your specific project.
                                </div>
                            </div>
                        </div>

                        <!-- Q8 -->
                        <div class="accordion-item border rounded shadow-sm wow fadeInUp" data-wow-delay=".9s">
                            <h2 class="accordion-header" id="faqHeadingEight">
                                <button class="accordion-button collapsed font-weight-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapseEight" aria-expanded="false"
                                    aria-controls="faqCollapseEight" style="font-weight: 600;">
                                    What is the difference between porcelain and ceramic tiles?
                                </button>
                            </h2>
                            <div id="faqCollapseEight" class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingEight" data-bs-parent="#porcelainFaqAccordion">
                                <div class="accordion-body text-muted">
                                    Porcelain tiles are denser, harder, and have a significantly lower water absorption rate
                                    than standard ceramic tiles, making them more suitable for high-traffic areas, wet
                                    spaces, and outdoor use in Dubai's climate. For most residential and commercial projects
                                    in the UAE, porcelain tiles are the recommended choice.
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
                    <h3 class="text-white mb-2" style="font-size: 1.8rem; font-weight: 700; font-family: inherit;">Ready
                        to upgrade with premium porcelain tiles?</h3>
                    <p class="mb-0 text-white-50" style="font-size: 1.05rem;">Al Maha building materials has the largest
                        collection in Dubai. Sourced direct, priced competitively.</p>
                </div>
                <div class="col-lg-4 text-center text-lg-end mt-4 mt-lg-0">
                    <a href="{{ route('contact') }}">
                        <span class="theme-btn bg-white text-dark"
                            style="color: var(--theme) !important; background: white !important; font-weight: bold; border: 1px solid white;">GET
                            A QUOTE</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
