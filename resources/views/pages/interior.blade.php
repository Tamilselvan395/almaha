@extends('layouts.app')

@section('meta_title', $page->meta_title ?? 'Premium Tile Adhesive Supplier Dubai | Al Maha Materials')
@section('meta_description', $page->meta_description ?? 'Source high-performance tile glue and adhesives at competitive direct-importer prices in Dubai. 15+ years of experience. Contact Al Maha for a quote today!')

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
      "@id": "https://www.mahabldg.com/interior-tiles-glue#webpage",
      "url": "https://www.mahabldg.com/interior-tiles-glue",
      "name": "Premium Tile Adhesive Supplier Dubai | Al Maha Materials",
      "description": "Source high-performance tile glue and adhesives at competitive direct-importer prices in Dubai. 15+ years of experience.",
      "isPartOf": {
        "@id": "https://www.mahabldg.com/#website"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.mahabldg.com/interior-tiles-glue#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What tile adhesive does Al Maha supply in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Al Maha supplies a comprehensive range of tile adhesives and interior tile glue in Dubai, including standard set, rapid set, flexible, large-format, white, and waterproof tile adhesives for residential, commercial, and hospitality tiling projects across the UAE."
          }
        },
        {
          "@type": "Question",
          "name": "Is Al Maha a direct tile adhesive supplier in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Al Maha is a direct building materials supplier in Dubai, sourcing tile adhesive and interior tile glue directly from internationally recognised manufacturers, offering premium quality at competitive prices with no middleman markup."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between standard and flexible tile adhesive?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard tile adhesive is a cement-based bonding compound for stable, rigid substrates. Flexible tile adhesive is a polymer-modified formulation for substrates subject to movement, vibration, or thermal expansion, including underfloor heating and large-format tiles."
          }
        },
        {
          "@type": "Question",
          "name": "What tile adhesive is best for large-format porcelain tiles in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Large-format porcelain tiles require a high-performance, non-slump adhesive with extended open time for accurate positioning and full back coverage. Al Maha supplies specialist large-format tile adhesive formulated for oversized slabs and heavy natural stone."
          }
        },
        {
          "@type": "Question",
          "name": "What tile adhesive is best for bathrooms and wet areas in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Bathrooms and wet areas require waterproof or moisture-resistant tile adhesive for long-term bond strength in high-humidity environments. Al Maha supplies waterproof tile adhesive suitable for wet area floor and wall tile fixing."
          }
        },
        {
          "@type": "Question",
          "name": "Does Al Maha supply tile adhesive for hospitality and hotel projects in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Al Maha supplies rapid-set, large-format, and waterproof tile adhesives for luxury hotels, resorts, spas, and large-scale hospitality fit-outs across the UAE."
          }
        },
        {
          "@type": "Question",
          "name": "How much does tile adhesive cost in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Tile adhesive prices vary depending on formulation, grade, brand, and quantity required. Al Maha offers competitive pricing across standard and premium ranges as a direct supplier. Contact us for a tailored quote."
          }
        },
        {
          "@type": "Question",
          "name": "Can I view tile adhesive products at Al Maha's Dubai showroom?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. You can visit Al Maha's showroom in Al Qusais Industrial Area 3, Dubai, to discuss tile fixing requirements with the team, who can advise on the right adhesive formulation. Tile adhesive is also supplied across all seven Emirates."
          }
        }
      ]
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
                            <h1 class="breadcumb-title">{{ $page->name ?? 'Interior Tiles Glue' }}</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li><a href="{{ route('categories') }}">Products</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">{{ $page->name ?? 'Tile Adhesive' }}</li>
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
        'defaultImage' => 'assets/images/products/ta-1.png',
        'defaultBadge' => 'TILE FIXING',
        'defaultHeading' => 'Tile Adhesive Dubai',
        'defaultSubheading' => 'Premium Interior Tile Glue Supplier and Importer'
    ])

    <!-- 2. Benefits Section -->
    @include('pages.partials.benefits', [
        'page' => $page,
        'defaultBadge' => 'BENEFITS',
        'defaultHeading' => 'Benefits of Quality Tile Adhesive',
        'defaultDescription' => 'Engineered for high bond strength, flexibility, and lasting performance in Dubai.'
    ])

    <!-- 3. Specifications Section -->
    @include('pages.partials.specifications', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/ta-2.png',
        'defaultBadge' => 'PRODUCT RANGE',
        'defaultHeading' => 'Tile Adhesive Specifications',
        'defaultDescription' => 'Our tile fixing solutions include rapid-set, flexible, and waterproof formulations:'
    ])

    <!-- 4. Applications Section -->
    @include('pages.partials.applications', [
        'page' => $page,
        'defaultBadge' => 'APPLICATIONS',
        'defaultHeading' => 'Applications of Tile Adhesive',
        'defaultDescription' => 'Specified for residential floors, bathroom walls, and commercial fit-outs across Dubai:'
    ])

    <!-- 5. Feature Spotlight -->
    @include('pages.partials.spotlight', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/ta-3.png',
        'defaultBadge' => 'PREMIUM ADHESIVE',
        'defaultHeading' => 'High-Performance Tile Adhesive Solutions in Dubai'
    ])

    <!-- 6. Why Choose Us -->
    @include('pages.partials.why_choose', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/ta-4.png',
        'defaultBadge' => 'WHY CHOOSE US',
        'defaultHeading' => 'Why Choose Al Maha for Tile Adhesive in Dubai?'
    ])

    <!-- 7. FAQs -->
    @include('pages.partials.faqs', [
        'page' => $page,
        'accordionId' => 'interiorFaqAccordion',
        'defaultBadge' => 'FAQ',
        'defaultHeading' => 'Frequently Asked Questions',
        'defaultDescription' => 'Get answers to the most common questions about tile adhesive and glue in Dubai.'
    ])

    <!-- 8. CTA Banner -->
    @include('pages.partials.cta', [
        'page' => $page,
        'defaultHeading' => 'Ready to source high-bonding tile adhesives?',
        'defaultDescription' => 'Al Maha building materials has the largest collection in Dubai. Sourced direct, priced competitively.',
        'defaultButtonText' => 'GET A QUOTE',
        'defaultButtonUrl' => route('contact')
    ])

@endsection
