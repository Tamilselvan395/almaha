@extends('layouts.app')

@section('meta_title', $page->meta_title ?? 'Premium Roofing Sheets Dubai | Al Maha')
@section('meta_description', $page->meta_description ?? 'Premium Roofing Sheets in Dubai for residential, commercial, and industrial projects. Visit our showroom or get a free quote today!')

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
      "@id": "https://www.mahabldg.com/roofing-materials-dubai#webpage",
      "url": "https://www.mahabldg.com/roofing-materials-dubai",
      "name": "Premium Roofing Sheets Dubai | Al Maha",
      "description": "Premium roofing sheets in Dubai for residential, commercial, and industrial projects. Sourced direct, competitively priced.",
      "isPartOf": {
        "@id": "https://www.mahabldg.com/#website"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.mahabldg.com/roofing-materials-dubai#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What roofing sheets does Al Maha supply in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Al Maha supplies a comprehensive range of roofing sheets in Dubai, including corrugated roofing panels, polycarbonate sheets, metal roofing, insulated sandwich panels, and roofing accessories for residential, commercial, and industrial projects across the UAE."
          }
        },
        {
          "@type": "Question",
          "name": "Is Al Maha a direct roofing sheet supplier in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Al Maha is a direct roofing supplier in Dubai, sourcing roofing sheets and construction materials directly from internationally recognised manufacturers. This allows us to offer premium quality at competitive roofing sheet prices with no middleman markup."
          }
        },
        {
          "@type": "Question",
          "name": "What types of roofing sheets are available in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Al Maha supplies roofing sheets in Dubai in a wide range of materials and profiles including corrugated metal, polycarbonate, aluminium, galvanised steel, and insulated sandwich panels. Our range covers multiple finishes and specifications to suit every construction and architectural requirement."
          }
        },
        {
          "@type": "Question",
          "name": "Does Al Maha supply roofing sheets for industrial projects in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Al Maha is a trusted building materials supplier for industrial projects in Dubai and across the UAE, supplying heavy-duty roofing sheets, insulated panels, and complete roofing solutions for warehouses, factories, cold storage facilities, and large-scale industrial developments."
          }
        },
        {
          "@type": "Question",
          "name": "How much do roofing sheets cost in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Roofing sheet prices in Dubai vary depending on the material type, profile, finish, and specification. Al Maha offers competitive pricing across both standard and premium roofing ranges as a direct building materials supplier. Contact us for a quote tailored to your specific project requirements."
          }
        },
        {
          "@type": "Question",
          "name": "Does Al Maha supply roofing sheets for commercial buildings in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Al Maha supplies roofing sheets for commercial buildings, warehouses, retail developments, and large-scale construction projects across Dubai and the UAE, providing reliable supply and UAE-wide delivery for every project scale."
          }
        },
        {
          "@type": "Question",
          "name": "Can I view roofing sheets at Al Maha's Dubai showroom?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. You can view our roofing sheet range at Al Maha's showroom in Al Qusais Industrial Area 3, Dubai. Our team is available to help you select the right roofing solution for your project budget and specifications. We also supply roofing materials to project sites across all seven Emirates."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between standard and luxury roofing sheets?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard roofing sheets offer reliable weather protection and practical performance at competitive prices, making them suitable for industrial facilities, warehouses, and budget-conscious construction projects. Premium roofing sheets combine high-performance materials, superior insulation, and architectural finishes, making them the preferred choice for luxury residential developments, high-end commercial buildings, and premium hospitality projects in Dubai."
          }
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.mahabldg.com/roofing-materials-dubai#breadcrumb",
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
          "name": "Roofing Materials",
          "item": "https://www.mahabldg.com/roofing-materials-dubai"
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
                            <h1 class="breadcumb-title">{{ $page->name ?? 'Roofing Materials in Dubai' }}</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li><a href="{{ route('categories') }}">Products</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">{{ $page->name ?? 'Roofing Sheets' }}</li>
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
        'defaultImage' => 'assets/images/products/rf-1.png',
        'defaultBadge' => 'STRUCTURAL COVERING',
        'defaultHeading' => 'Roofing Sheets Dubai',
        'defaultSubheading' => 'Premium Roofing Supplier and Importer'
    ])

    <!-- 2. Benefits Section -->
    @include('pages.partials.benefits', [
        'page' => $page,
        'defaultBadge' => 'BENEFITS',
        'defaultHeading' => 'Benefits of Roofing Sheets',
        'defaultDescription' => 'Engineered for weather resistance, durability, and lasting performance in the UAE.'
    ])

    <!-- 3. Specifications Section -->
    @include('pages.partials.specifications', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/rf-2.png',
        'defaultBadge' => 'PRODUCT RANGE',
        'defaultHeading' => 'Roofing Sheet Specifications',
        'defaultDescription' => 'Our roofing materials include corrugated sheets, polycarbonate, and insulated panels:'
    ])

    <!-- 4. Applications Section -->
    @include('pages.partials.applications', [
        'page' => $page,
        'defaultBadge' => 'APPLICATIONS',
        'defaultHeading' => 'Applications of Roofing Sheets',
        'defaultDescription' => 'Our roofing materials are specified across residential, commercial, and industrial facilities in Dubai:'
    ])

    <!-- 5. Feature Spotlight -->
    @include('pages.partials.spotlight', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/rf-3.png',
        'defaultBadge' => 'PREMIUM ROOFING',
        'defaultHeading' => 'Premium Roofing Materials & Solutions in Dubai'
    ])

    <!-- 6. Why Choose Us -->
    @include('pages.partials.why_choose', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/rf-4.png',
        'defaultBadge' => 'WHY CHOOSE US',
        'defaultHeading' => 'Why Choose Al Maha for Roofing Sheets in Dubai?'
    ])

    <!-- 7. FAQs -->
    @include('pages.partials.faqs', [
        'page' => $page,
        'accordionId' => 'roofingFaqAccordion',
        'defaultBadge' => 'FAQ',
        'defaultHeading' => 'Frequently Asked Questions',
        'defaultDescription' => 'Get answers to the most common questions about roofing materials and installation in Dubai.'
    ])

    <!-- 8. CTA Banner -->
    @include('pages.partials.cta', [
        'page' => $page,
        'defaultHeading' => 'Ready to source high-performance roofing sheets?',
        'defaultDescription' => 'Al Maha building materials has the largest collection in Dubai. Sourced direct, priced competitively.',
        'defaultButtonText' => 'GET A QUOTE',
        'defaultButtonUrl' => route('contact')
    ])

@endsection
