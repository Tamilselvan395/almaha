@extends('layouts.app')

@section('meta_title', $page->meta_title ?? 'Premium Solid Surface Sheets Dubai | Al Maha Materials')
@section('meta_description', $page->meta_description ?? 'Source premium solid surface solutions at competitive direct-importer prices in Dubai. 15+ years experience. Contact Al Maha for a bulk or project quote today!')

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
      "@id": "https://www.mahabldg.com/solid-surface-filler-sheets#webpage",
      "url": "https://www.mahabldg.com/solid-surface-filler-sheets",
      "name": "Premium Solid Surface Sheets Dubai | Al Maha Materials",
      "description": "Source premium solid surface solutions at competitive direct-importer prices in Dubai. 15+ years experience.",
      "isPartOf": {
        "@id": "https://www.mahabldg.com/#website"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.mahabldg.com/solid-surface-filler-sheets#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What solid surface sheets and fillers does Al Maha supply in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Al Maha supplies a comprehensive range of solid surface sheets and fillers in Dubai, including standard panels, stone-look sheets, translucent backlit panels, colour-matched fillers, and jointing adhesives for residential, commercial, and hospitality projects across the UAE."
          }
        },
        {
          "@type": "Question",
          "name": "Is Al Maha a direct solid surface sheets supplier in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Al Maha is a direct building materials supplier in Dubai, sourcing solid surface sheets and fillers directly from internationally recognised manufacturers, offering premium quality at competitive prices with no middleman markup."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between solid surface sheets and natural stone?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Solid surface sheets are engineered, non-porous panels offering seamless joining, full repairability, and design flexibility that natural stone cannot match. Natural stone offers unique natural patterning and premium aesthetic appeal. Al Maha supplies both to suit every project requirement and budget."
          }
        },
        {
          "@type": "Question",
          "name": "What colours and finishes are available for solid surface sheets in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Al Maha supplies solid surface sheets in a wide range of colours, patterns, and finishes including stone-look, wood-look, solid colours, veined patterns, and translucent designs, with matte, satin, gloss, and textured surface finishes."
          }
        },
        {
          "@type": "Question",
          "name": "What are solid surface fillers used for?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Solid surface fillers are colour-matched jointing compounds used to create seamless, invisible joins between sheets during installation, and are also used for surface repairs and achieving a continuous, high-finish appearance."
          }
        },
        {
          "@type": "Question",
          "name": "Does Al Maha supply solid surface sheets for hospitality projects in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Al Maha supplies solid surface sheets, vanity tops, reception desk surfaces, and complete solutions for luxury hotels, spas, resorts, serviced apartments, and large-scale hospitality developments across the UAE."
          }
        },
        {
          "@type": "Question",
          "name": "How much do solid surface sheets cost in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Prices vary depending on material type, thickness, colour, finish, and collection. Al Maha offers competitive pricing across standard and premium ranges as a direct supplier. Contact us for a tailored quote."
          }
        },
        {
          "@type": "Question",
          "name": "Can I view solid surface sheets at Al Maha's Dubai showroom?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. You can view the full range of solid surface sheets and fillers at Al Maha's showroom in Al Qusais Industrial Area 3, Dubai, with team support for selecting the right solution. Materials are also supplied across all seven Emirates."
          }
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.mahabldg.com/solid-surface-filler-sheets#breadcrumb",
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
          "name": "Solid Surface Filler & Sheets",
          "item": "https://www.mahabldg.com/solid-surface-filler-sheets"
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
                            <h1 class="breadcumb-title">{{ $page->name ?? 'Solid Surface Filler and Sheets' }}</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li><a href="{{ route('categories') }}">Products</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">{{ $page->name ?? 'Solid Surface Sheets' }}</li>
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
        'defaultImage' => 'assets/images/products/ss-1.png',
        'defaultBadge' => 'MODERN SURFACES',
        'defaultHeading' => 'Solid Surface Sheets Dubai',
        'defaultSubheading' => 'Premium Solid Surface Supplier and Importer'
    ])

    <!-- 2. Benefits Section -->
    @include('pages.partials.benefits', [
        'page' => $page,
        'defaultBadge' => 'BENEFITS',
        'defaultHeading' => 'Benefits of Solid Surface Sheets & Fillers',
        'defaultDescription' => 'Engineered for seamless aesthetics, hygienic non-porous performance, and durability in Dubai.'
    ])

    <!-- 3. Specifications Section -->
    @include('pages.partials.specifications', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/ss-2.png',
        'defaultBadge' => 'PRODUCT RANGE',
        'defaultHeading' => 'Solid Surface Specifications',
        'defaultDescription' => 'Our solid surface range includes standard panels, translucent sheets, and color-matched fillers:'
    ])

    <!-- 4. Applications Section -->
    @include('pages.partials.applications', [
        'page' => $page,
        'defaultBadge' => 'APPLICATIONS',
        'defaultHeading' => 'Applications of Solid Surface Sheets',
        'defaultDescription' => 'Specified for luxury kitchens, hospitality counters, and healthcare environments across Dubai:'
    ])

    <!-- 5. Feature Spotlight -->
    @include('pages.partials.spotlight', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/ss-3.png',
        'defaultBadge' => 'LUXURY SOLID SURFACE',
        'defaultHeading' => 'Luxury Solid Surface Solutions in Dubai'
    ])

    <!-- 6. Why Choose Us -->
    @include('pages.partials.why_choose', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/ss-4.png',
        'defaultBadge' => 'WHY CHOOSE US',
        'defaultHeading' => 'Why Choose Al Maha for Solid Surface Sheets in Dubai?'
    ])

    <!-- 7. FAQs -->
    @include('pages.partials.faqs', [
        'page' => $page,
        'accordionId' => 'solidFaqAccordion',
        'defaultBadge' => 'FAQ',
        'defaultHeading' => 'Frequently Asked Questions',
        'defaultDescription' => 'Get answers to the most common questions about solid surface sheets and fillers in Dubai.'
    ])

    <!-- 8. CTA Banner -->
    @include('pages.partials.cta', [
        'page' => $page,
        'defaultHeading' => 'Ready to transform your interiors with solid surfaces?',
        'defaultDescription' => 'Al Maha building materials has the largest collection in Dubai. Sourced direct, priced competitively.',
        'defaultButtonText' => 'GET A QUOTE',
        'defaultButtonUrl' => route('contact')
    ])

@endsection
