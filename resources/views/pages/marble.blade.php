@extends('layouts.app')

@section('meta_title', $page->meta_title ?? 'Marble & Granite Supplier Dubai | Al Maha Materials')
@section('meta_description', $page->meta_description ?? 'Source premium natural stone, marble, and granite at competitive direct-importer prices in Dubai. 15+ years experience. Contact Al Maha for a quote today!')

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
      "@id": "https://www.mahabldg.com/marble-granite#webpage",
      "url": "https://www.mahabldg.com/marble-granite",
      "name": "Marble & Granite Supplier Dubai | Al Maha Materials",
      "description": "Source premium natural stone, marble, and granite at competitive direct-importer prices in Dubai. 15+ years experience.",
      "isPartOf": {
        "@id": "https://www.mahabldg.com/#website"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.mahabldg.com/marble-granite#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What marble and granite does Al Maha supply in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Al Maha supplies a comprehensive range of marble and granite in Dubai, including marble flooring, granite flooring, wall cladding slabs, countertops, staircase pieces, and natural stone mosaics for residential, commercial, and hospitality projects across the UAE."
          }
        },
        {
          "@type": "Question",
          "name": "Is Al Maha a direct marble and granite importer in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Al Maha is a direct marble and granite importer in Dubai, sourcing natural stone directly from internationally recognised quarries and manufacturers across Italy, Spain, India, Turkey, and Brazil. This allows us to offer premium quality at competitive marble and granite prices in Dubai with no middleman markup."
          }
        },
        {
          "@type": "Question",
          "name": "What types of marble are available in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Al Maha supplies a wide range of marble in Dubai including Carrara marble, Statuario marble, Emperador marble, and a variety of imported and locally stocked natural stone collections. Our marble range is available in polished, honed, and brushed finishes in standard tile formats, large-format slabs, and custom-cut pieces."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between marble and granite?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Marble is a metamorphic natural stone known for its distinctive veining and polished finish, making it the preferred choice for luxury bathrooms, lobbies, and feature walls. Granite is an igneous natural stone known for its superior hardness, scratch resistance, and durability, making it ideal for kitchen countertops, high-traffic flooring, and exterior applications. Al Maha supplies both marble and granite in Dubai to suit every project requirement."
          }
        },
        {
          "@type": "Question",
          "name": "Does Al Maha supply marble and granite for hospitality projects in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Al Maha is a trusted natural stone supplier for hospitality projects in Dubai and across the UAE, supplying marble flooring, granite surfaces, and complete natural stone solutions for luxury hotels, resorts, spas, serviced apartments, and large-scale hospitality developments."
          }
        },
        {
          "@type": "Question",
          "name": "How much do marble and granite cost in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Marble and granite prices in Dubai vary depending on the stone type, origin, finish, format, and collection. Al Maha offers competitive pricing across both standard and premium natural stone ranges as a direct importer. Contact us for a quote tailored to your specific project requirements."
          }
        },
        {
          "@type": "Question",
          "name": "Can I view marble and granite at Al Maha's Dubai showroom?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. You can view our full range of marble and granite in Dubai at Al Maha's showroom in Al Qusais Industrial Area 3, Dubai. Our team is available to help you select the right natural stone for your project budget, design specification, and application. We also supply natural stone to project sites across all seven Emirates."
          }
        },
        {
          "@type": "Question",
          "name": "Does Al Maha supply marble and granite for large-scale construction projects in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Al Maha supplies marble and granite for large-scale residential developments, commercial buildings, mixed-use projects, and hospitality developments across Dubai and the UAE, providing reliable supply, consistent stone quality, and UAE-wide delivery for projects of every scale."
          }
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.mahabldg.com/marble-granite#breadcrumb",
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
          "name": "Marble & Granite",
          "item": "https://www.mahabldg.com/marble-granite"
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
                            <h1 class="breadcumb-title">{{ $page->name ?? 'Marble and Granite' }}</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li><a href="{{ route('categories') }}">Products</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">{{ $page->name ?? 'Marble & Granite' }}</li>
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
        'defaultImage' => 'assets/images/products/mg-1.png',
        'defaultBadge' => 'NATURAL STONES',
        'defaultHeading' => 'Marble & Granite Dubai',
        'defaultSubheading' => 'Premium Marble and Granite Supplier and Importer'
    ])

    <!-- 2. Benefits Section -->
    @include('pages.partials.benefits', [
        'page' => $page,
        'defaultBadge' => 'BENEFITS',
        'defaultHeading' => 'Benefits of Marble & Granite',
        'defaultDescription' => 'Engineered by nature for timeless elegance, durability, and prestige in Dubai.'
    ])

    <!-- 3. Specifications Section -->
    @include('pages.partials.specifications', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/mg-2.png',
        'defaultBadge' => 'PRODUCT RANGE',
        'defaultHeading' => 'Marble & Granite Specifications',
        'defaultDescription' => 'Our natural stone range includes slabs, tiles, countertops, and custom cut formats:'
    ])

    <!-- 4. Applications Section -->
    @include('pages.partials.applications', [
        'page' => $page,
        'defaultBadge' => 'APPLICATIONS',
        'defaultHeading' => 'Applications of Marble & Granite',
        'defaultDescription' => 'Specified for luxury villas, hospitality developments, and commercial fit-outs across Dubai:'
    ])

    <!-- 5. Feature Spotlight -->
    @include('pages.partials.spotlight', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/mg-3.png',
        'defaultBadge' => 'LUXURY NATURAL STONE',
        'defaultHeading' => 'Luxury Marble & Granite Solutions in Dubai'
    ])

    <!-- 6. Why Choose Us -->
    @include('pages.partials.why_choose', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/mg-4.png',
        'defaultBadge' => 'WHY CHOOSE US',
        'defaultHeading' => 'Why Choose Al Maha for Marble & Granite in Dubai?'
    ])

    <!-- 7. FAQs -->
    @include('pages.partials.faqs', [
        'page' => $page,
        'accordionId' => 'marbleFaqAccordion',
        'defaultBadge' => 'FAQ',
        'defaultHeading' => 'Frequently Asked Questions',
        'defaultDescription' => 'Get answers to the most common questions about natural marble and granite in Dubai.'
    ])

    <!-- 8. CTA Banner -->
    @include('pages.partials.cta', [
        'page' => $page,
        'defaultHeading' => 'Ready to elevate your project with natural stone?',
        'defaultDescription' => 'Al Maha building materials has the largest collection in Dubai. Sourced direct, priced competitively.',
        'defaultButtonText' => 'GET A QUOTE',
        'defaultButtonUrl' => route('contact')
    ])

@endsection
