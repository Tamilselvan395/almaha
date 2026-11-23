@extends('layouts.app')

@section('meta_title', $page->meta_title ?? 'Premium Porcelain Tiles Dubai | Al Maha Building Materials')
@section('meta_description', $page->meta_description ?? 'Source outdoor porcelain tiles and slabs at competitive direct-importer prices in Dubai. UAE-wide delivery. Contact Al Maha for a quote today!')

@section('schema')
@if(!empty($page?->formatted_schema))
{!! $page->formatted_schema !!}
@else
@verbatim
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [
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
      "@type": "FAQPage",
      "@id": "https://www.mahabldg.com/porcelain#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What are porcelain tiles used for?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Porcelain tiles are used for flooring, wall cladding, kitchens, bathrooms, commercial spaces, hospitality projects, and outdoor areas. Their durability and low maintenance requirements make them one of the most versatile tile options available in Dubai."
          }
        },
        {
          "@type": "Question",
          "name": "Are porcelain tiles suitable for outdoor use in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Outdoor porcelain tiles are weather-resistant, UV-resistant, and available in slip-resistant finishes, making them suitable for patios, terraces, walkways, garden areas, balconies, and pool surrounds across the UAE."
          }
        },
        {
          "@type": "Question",
          "name": "How much do porcelain tiles cost in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Porcelain tile prices in Dubai vary depending on the finish, size, and collection. Al Maha offers competitive pricing across both standard and premium ranges. Contact us for a quote tailored to your project."
          }
        },
        {
          "@type": "Question",
          "name": "Are porcelain tiles waterproof?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Porcelain tiles have very low water absorption properties, making them highly resistant to moisture and ideal for wet areas such as bathrooms, kitchens, and outdoor spaces."
          }
        },
        {
          "@type": "Question",
          "name": "Do porcelain tiles require special maintenance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Porcelain tiles are easy to clean and maintain using standard cleaning methods, making them one of the most practical flooring choices for residential and commercial projects in Dubai."
          }
        },
        {
          "@type": "Question",
          "name": "Why are porcelain tiles popular in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Porcelain tiles combine durability, moisture resistance, and style in a single product that aligns with Dubai's climate and modern UAE architecture, suiting both indoor and outdoor use."
          }
        },
        {
          "@type": "Question",
          "name": "What sizes of porcelain tiles are available in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Al Maha stocks porcelain tiles in sizes including 600x600mm, 800x800mm, 600x1200mm, 1200x1200mm, and large-format porcelain slabs. Contact the team to check availability for your project."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between porcelain and ceramic tiles?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Porcelain tiles are denser, harder, and have a significantly lower water absorption rate than standard ceramic tiles, making them more suitable for high-traffic areas, wet spaces, and outdoor use in Dubai's climate."
          }
        }
      ]
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
                            <h1 class="breadcumb-title">{{ $page->name ?? 'Porcelain Tiles' }}</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li><a href="{{ route('categories') }}">Products</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">{{ $page->name ?? 'Porcelain Tiles' }}</li>
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
        'defaultImage' => 'assets/images/products/p-1.png',
        'defaultBadge' => 'PREMIUM TILES',
        'defaultHeading' => 'Porcelain Tiles Dubai',
        'defaultSubheading' => 'What are Porcelain Tiles?'
    ])

    <!-- 2. Benefits Section -->
    @include('pages.partials.benefits', [
        'page' => $page,
        'defaultBadge' => 'BENEFITS',
        'defaultHeading' => 'Benefits of Porcelain Tiles',
        'defaultDescription' => 'Engineered for durability, aesthetic appeal, and outstanding performance in the UAE climate.'
    ])

    <!-- 3. Specifications Section -->
    @include('pages.partials.specifications', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/p-2.png',
        'defaultBadge' => 'SPECIFICATIONS',
        'defaultHeading' => 'Product Specifications',
        'defaultDescription' => 'Our porcelain tile range is available in a variety of sizes, thicknesses, and finishes to meet the requirements of any residential or commercial project:'
    ])

    <!-- 4. Applications Section -->
    @include('pages.partials.applications', [
        'page' => $page,
        'defaultBadge' => 'APPLICATIONS',
        'defaultHeading' => 'Applications of Porcelain Tiles',
        'defaultDescription' => 'Our porcelain floor tiles and wall tiles in Dubai are specified for a wide range of residential, commercial, and hospitality projects across the UAE:'
    ])

    <!-- 5. Feature Spotlight -->
    @include('pages.partials.spotlight', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/p-3.png',
        'defaultBadge' => 'OUTDOOR PORCELAIN',
        'defaultHeading' => 'Outdoor Porcelain Tiles in Dubai'
    ])

    <!-- 6. Why Choose Us -->
    @include('pages.partials.why_choose', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/p-4.png',
        'defaultBadge' => 'WHY CHOOSE US',
        'defaultHeading' => 'Why Choose Al Maha for Porcelain Tiles in Dubai?'
    ])

    <!-- 7. FAQs -->
    @include('pages.partials.faqs', [
        'page' => $page,
        'accordionId' => 'porcelainFaqAccordion',
        'defaultBadge' => 'FAQ',
        'defaultHeading' => 'Frequently Asked Questions',
        'defaultDescription' => 'Get answers to the most common questions about porcelain tiles and their installation in Dubai.'
    ])

    <!-- 8. CTA Banner -->
    @include('pages.partials.cta', [
        'page' => $page,
        'defaultHeading' => 'Ready to upgrade with premium porcelain tiles?',
        'defaultDescription' => 'Al Maha building materials has the largest collection in Dubai. Sourced direct, priced competitively.',
        'defaultButtonText' => 'GET A QUOTE',
        'defaultButtonUrl' => route('contact')
    ])

@endsection
