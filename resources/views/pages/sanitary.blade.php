@extends('layouts.app')

@section('meta_title', $page->meta_title ?? 'Premium Sanitary Ware Supplier Dubai | Al Maha Materials')
@section('meta_description', $page->meta_description ?? 'Source luxury bathroom sanitary ware & accessories at direct-importer prices in Dubai. 15+ years of expertise with UAE-wide delivery. Contact us today.')

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
      "@id": "https://www.mahabldg.com/sanitary-ware#webpage",
      "url": "https://www.mahabldg.com/sanitary-ware",
      "name": "Premium Sanitary Ware Supplier Dubai | Al Maha Materials",
      "description": "Source luxury bathroom sanitary ware & accessories at direct-importer prices in Dubai. 15+ years of expertise with UAE-wide delivery.",
      "isPartOf": {
        "@id": "https://www.mahabldg.com/#website"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.mahabldg.com/sanitary-ware#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What sanitary ware does Al Maha supply in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Al Maha supplies a comprehensive range of sanitary wares, including basins, toilets, bathtubs, shower trays, shower enclosures, urinals, and bathroom accessories for residential, commercial, and hospitality projects across the UAE."
          }
        },
        {
          "@type": "Question",
          "name": "Is Al Maha a direct sanitary ware importer in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Al Maha is a direct sanitary ware importer in Dubai, sourcing bathroom fittings and sanitary ware directly from internationally recognised manufacturers. This allows us to offer premium quality at competitive sanitary ware prices in Dubai with no middleman markup."
          }
        },
        {
          "@type": "Question",
          "name": "What styles of sanitary ware are available in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Al Maha supplies sanitary ware across Dubai in a wide range of styles including modern, contemporary, classic, and minimalist designs. Our range covers gloss white, matte white, custom colour, and metallic finishes to suit every bathroom specification and interior design requirement."
          }
        },
        {
          "@type": "Question",
          "name": "Does Al Maha supply luxury sanitary ware in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Al Maha supplies a carefully curated range of luxury sanitary ware in Dubai including designer basins, freestanding bathtubs, wall-hung toilets, and frameless shower enclosures for high-end residential villas, luxury hotels, and premium hospitality developments across the UAE."
          }
        },
        {
          "@type": "Question",
          "name": "How much do sanitary ware cost in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sanitary ware prices in Dubai vary depending on the product type, style, finish, and collection. Al Maha offers competitive pricing across both standard and premium sanitary ware ranges as a direct importer. Contact us for a quote tailored to your specific project requirements."
          }
        },
        {
          "@type": "Question",
          "name": "Does Al Maha supply sanitary ware for hotels and hospitality projects in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Al Maha is a trusted sanitary ware supplier for hospitality projects in Dubai and across the UAE, supplying bathroom fittings, hotel bathroom sanitary ware, and complete washroom solutions for luxury hotels, resorts, serviced apartments, and large-scale hospitality developments."
          }
        },
        {
          "@type": "Question",
          "name": "Can I view sanitary ware in Al Maha's Dubai showroom?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. You can view our full range of sanitary ware in Dubai at Al Maha's showroom in Al Qusais Industrial Area 3, Dubai. Our team is available to help you select the right sanitary ware for your project budget and specifications. We also supply sanitary ware to project sites across all seven Emirates."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between standard and luxury sanitary ware?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard sanitary ware offers reliable quality and practical functionality at competitive prices, making it suitable for residential developments, commercial washrooms, and budget-conscious projects. Luxury sanitary ware combines premium materials, designer aesthetics, and advanced functionality, making it the preferred choice for high-end villas, boutique hotels, and premium hospitality projects in Dubai."
          }
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.mahabldg.com/sanitary-ware#breadcrumb",
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
          "name": "Sanitary Ware",
          "item": "https://www.mahabldg.com/sanitary-ware"
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
                            <h1 class="breadcumb-title">{{ $page->name ?? 'Sanitary Ware' }}</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li><a href="{{ route('categories') }}">Products</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">{{ $page->name ?? 'Sanitary Ware' }}</li>
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
        'defaultImage' => 'assets/images/products/sw-1.png',
        'defaultBadge' => 'BATHROOM FITTINGS',
        'defaultHeading' => 'Sanitary Ware Dubai',
        'defaultSubheading' => 'Premium Sanitary Ware Supplier and Importer'
    ])

    <!-- 2. Benefits Section -->
    @include('pages.partials.benefits', [
        'page' => $page,
        'defaultBadge' => 'BENEFITS',
        'defaultHeading' => 'Benefits of Sanitary Ware',
        'defaultDescription' => 'Engineered for luxury, hygiene, and lasting durability in the UAE.'
    ])

    <!-- 3. Specifications Section -->
    @include('pages.partials.specifications', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/sw-2.png',
        'defaultBadge' => 'PRODUCT RANGE',
        'defaultHeading' => 'Sanitary Ware Specifications',
        'defaultDescription' => 'Our sanitary ware collection includes a full spectrum of bathroom fittings:'
    ])

    <!-- 4. Applications Section -->
    @include('pages.partials.applications', [
        'page' => $page,
        'defaultBadge' => 'APPLICATIONS',
        'defaultHeading' => 'Applications of Sanitary Ware',
        'defaultDescription' => 'Our sanitary ware products are specified for luxury villas, hotels, and developments across Dubai:'
    ])

    <!-- 5. Feature Spotlight -->
    @include('pages.partials.spotlight', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/sw-3.png',
        'defaultBadge' => 'LUXURY SANITARY WARE',
        'defaultHeading' => 'Luxury Bathroom Design with Premium Sanitary Ware'
    ])

    <!-- 6. Why Choose Us -->
    @include('pages.partials.why_choose', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/sw-4.png',
        'defaultBadge' => 'WHY CHOOSE US',
        'defaultHeading' => 'Why Choose Al Maha for Sanitary Ware in Dubai?'
    ])

    <!-- 7. FAQs -->
    @include('pages.partials.faqs', [
        'page' => $page,
        'accordionId' => 'sanitaryFaqAccordion',
        'defaultBadge' => 'FAQ',
        'defaultHeading' => 'Frequently Asked Questions',
        'defaultDescription' => 'Get answers to the most common questions about sanitary ware in Dubai.'
    ])

    <!-- 8. CTA Banner -->
    @include('pages.partials.cta', [
        'page' => $page,
        'defaultHeading' => 'Ready to upgrade your bathrooms with premium sanitary ware?',
        'defaultDescription' => 'Al Maha building materials has the largest collection in Dubai. Sourced direct, priced competitively.',
        'defaultButtonText' => 'GET A QUOTE',
        'defaultButtonUrl' => route('contact')
    ])

@endsection
