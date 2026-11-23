@extends('layouts.app')

@section('meta_title', $page->meta_title ?? 'Swimming Pool Tiles Dubai | Anti-Slip & Coping | Al Maha')
@section('meta_description', $page->meta_description ?? 'Buy premium mosaic pool tiles, anti-slip tiles, & coping in Dubai. Direct importer prices, 15+ years of experience, and UAE-wide delivery. Get a quote!')

@section('schema')
@if(!empty($page?->formatted_schema))
{!! $page->formatted_schema !!}
@else
@verbatim
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "CollectionPage",
      "@id": "https://www.mahabldg.com/swimming-pool-tiles#webpage",
      "url": "https://www.mahabldg.com/swimming-pool-tiles",
      "name": "Swimming Pool Tiles Dubai | Anti-Slip & Coping | Al Maha",
      "description": "Buy premium mosaic pool tiles, anti-slip tiles, & coping in Dubai. Direct importer prices, 15+ years of experience, and UAE-wide delivery.",
      "isPartOf": {
        "@id": "https://www.mahabldg.com/#website"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.mahabldg.com/swimming-pool-tiles#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What types of swimming pool tiles does Al Maha supply in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Al Maha supplies a comprehensive range of swimming pool tiles in Dubai including anti-slip pool tiles, coping tiles, mosaic pool tiles, porcelain pool tiles, and ceramic pool tiles. Our range covers residential villas, hotel pools, resort developments, spas, and recreational facilities across the UAE."
          }
        },
        {
          "@type": "Question",
          "name": "Are swimming pool tiles suitable for outdoor pools in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Our swimming pool tiles in Dubai are weather-resistant, UV-stable, and engineered to withstand Dubai's extreme heat, direct sun exposure, and constant water contact, making them suitable for both indoor and outdoor pools across the UAE."
          }
        },
        {
          "@type": "Question",
          "name": "What are anti-slip pool tiles and why are they important?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Anti-slip pool tiles in Dubai feature textured or treated surfaces that provide better grip in wet conditions. They are essential for pool steps, entry areas, pool edges, and surrounding walkways where slip resistance is a critical safety requirement for both residential and commercial pools."
          }
        },
        {
          "@type": "Question",
          "name": "What are coping tiles used for in a swimming pool?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Coping tiles in Dubai are used to finish the edge of a swimming pool, creating a clean, safe border between the pool water and the surrounding area. They protect the pool structure, provide a comfortable edge for swimmers, and contribute to the visual finish of the pool design."
          }
        },
        {
          "@type": "Question",
          "name": "How much do swimming pool tiles cost in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Swimming pool tile prices in Dubai vary depending on the tile type, finish, size, and collection. Al Maha offers competitive pricing across both standard and premium pool tile ranges. Contact us for a quote tailored to your project."
          }
        },
        {
          "@type": "Question",
          "name": "Can swimming pool tiles be used for spas and water features?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Our swimming pool tiles in Dubai are commonly used for spas, jacuzzis, fountains, water features, and other wet environments due to their durability, water resistance, and wide range of available finishes."
          }
        },
        {
          "@type": "Question",
          "name": "Where can I buy swimming pool tiles in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can view and purchase swimming pool tiles in Dubai at Al Maha's showroom in Al Qusais Industrial Area 3, Dubai. As a direct pool tiles supplier in Dubai, we also supply to project sites across all seven Emirates."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between pool tiles and regular tiles?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Swimming pool tiles are specifically engineered for constant water immersion, chemical exposure, and wet environment conditions. Unlike standard floor or wall tiles, pool tiles have very low water absorption rates, enhanced chemical resistance, and are available in anti-slip finishes, making them the only recommended choice for pool interiors, pool surrounds, and wet areas across Dubai and the UAE."
          }
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.mahabldg.com/swimming-pool-tiles#breadcrumb",
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
          "name": "Swimming Pool Tiles",
          "item": "https://www.mahabldg.com/swimming-pool-tiles"
        }
      ]
    }
  ]
}
</script>
@endverbatim
@endif
@endsection

@section('content')

    <!-- Breadcumb Section  S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">{{ $page->name ?? 'Swimming Pool Tiles' }}</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li><a href="{{ route('categories') }}">Products</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">{{ $page->name ?? 'Swimming Pool Tiles' }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 1. Intro Section -->
    @include('pages.partials.intro', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/sm-1.png',
        'defaultBadge' => 'POOL SOLUTIONS',
        'defaultHeading' => 'Swimming Pool Tiles Dubai',
        'defaultSubheading' => 'What are Swimming Pool Tiles?'
    ])

    <!-- 2. Benefits Section -->
    @include('pages.partials.benefits', [
        'page' => $page,
        'defaultBadge' => 'BENEFITS',
        'defaultHeading' => 'Benefits of Swimming Pool Tiles',
        'defaultDescription' => 'Engineered for safety, durability, and beauty in extreme UAE conditions.'
    ])

    <!-- 3. Specifications Section -->
    @include('pages.partials.specifications', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/sm-2.png',
        'defaultBadge' => 'SPECIFICATIONS',
        'defaultHeading' => 'Swimming Pool Tile Specifications',
        'defaultDescription' => 'Our swimming pool tile range is available in a variety of materials, sizes, and slip ratings:'
    ])

    <!-- 4. Applications Section -->
    @include('pages.partials.applications', [
        'page' => $page,
        'defaultBadge' => 'APPLICATIONS',
        'defaultHeading' => 'Applications of Swimming Pool Tiles',
        'defaultDescription' => 'Our swimming pool tiles are specified for residential, commercial, and resort projects across the UAE:'
    ])

    <!-- 5. Feature Spotlight -->
    @include('pages.partials.spotlight', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/sm-3.png',
        'defaultBadge' => 'ANTI-SLIP & COPING',
        'defaultHeading' => 'Anti-Slip Pool Tiles and Coping Solutions in Dubai'
    ])

    <!-- 6. Why Choose Us -->
    @include('pages.partials.why_choose', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/sm-4.png',
        'defaultBadge' => 'WHY CHOOSE US',
        'defaultHeading' => 'Why Choose Al Maha for Swimming Pool Tiles in Dubai?'
    ])

    <!-- 7. FAQs -->
    @include('pages.partials.faqs', [
        'page' => $page,
        'accordionId' => 'swimmingFaqAccordion',
        'defaultBadge' => 'FAQ',
        'defaultHeading' => 'Frequently Asked Questions',
        'defaultDescription' => 'Get answers to the most common questions about swimming pool tiles and installation in Dubai.'
    ])

    <!-- 8. CTA Banner -->
    @include('pages.partials.cta', [
        'page' => $page,
        'defaultHeading' => 'Ready to build or renovate your swimming pool?',
        'defaultDescription' => 'Al Maha building materials has the largest collection in Dubai. Sourced direct, priced competitively.',
        'defaultButtonText' => 'GET A QUOTE',
        'defaultButtonUrl' => route('contact')
    ])

@endsection
