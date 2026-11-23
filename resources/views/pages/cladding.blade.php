@extends('layouts.app')

@section('meta_title', $page->meta_title ?? 'Cladding Tiles Dubai | Interior & Exterior | Al Maha')
@section('meta_description', $page->meta_description ?? 'Premium interior & exterior cladding tiles in Dubai with expert fixing services. Direct importer prices & UAE-wide delivery. Request a quote from Al Maha!')

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
      "@id": "https://www.mahabldg.com/cladding-tiles-fixing#webpage",
      "url": "https://www.mahabldg.com/cladding-tiles-fixing",
      "name": "Cladding Tiles Dubai | Interior & Exterior | Al Maha",
      "description": "Premium interior & exterior cladding tiles in Dubai with expert fixing services. Direct importer prices & UAE-wide delivery.",
      "isPartOf": {
        "@id": "https://www.mahabldg.com/#website"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.mahabldg.com/cladding-tiles-fixing#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What are cladding tiles used for in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Cladding tiles in Dubai are used for interior and exterior wall applications including building facades, feature walls, kitchen splashbacks, bathroom walls, hotel lobbies, and commercial interiors. Their durability, weather resistance, and wide range of designs make them one of the most versatile wall finishing solutions available in the UAE."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between cladding tiles and regular wall tiles?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Cladding tiles are specifically designed for wall surface applications and are available in thicker formats and larger sizes than standard wall tiles, making them suitable for both interior accent walls and exterior building facades. Regular wall tiles are typically lighter and thinner and are suited to interior wet areas such as bathrooms and kitchens."
          }
        },
        {
          "@type": "Question",
          "name": "Are cladding tiles suitable for exterior use in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Our exterior cladding tiles in Dubai are weather-resistant, UV-stable, and engineered to withstand Dubai's extreme heat, moisture, and wind conditions, making them suitable for building facades, exterior walls, and outdoor feature walls across the UAE."
          }
        },
        {
          "@type": "Question",
          "name": "Does Al Maha provide cladding tile fixing services in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Al Maha provides a complete supply and installation service for cladding tiles in Dubai through our experienced tile fixing contractors. We handle interior and exterior cladding installations for residential, commercial, and large-scale construction projects across the UAE."
          }
        },
        {
          "@type": "Question",
          "name": "How much do cladding tiles cost in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Cladding tile prices in Dubai vary depending on the material, finish, size, and collection. Al Maha offers competitive pricing across both standard and premium cladding tile ranges as a direct importer. Contact us for a quote tailored to your specific project requirements."
          }
        },
        {
          "@type": "Question",
          "name": "What finishes are available for cladding tiles in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Al Maha supplies cladding tiles in Dubai in a wide range of finishes including natural stone effect, wood effect, concrete effect, polished, matte, and textured surfaces. Our range covers porcelain cladding tiles, natural stone cladding, marble cladding, and granite cladding for every design specification."
          }
        },
        {
          "@type": "Question",
          "name": "Can cladding tiles be used for feature walls in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Cladding tiles are one of the most popular choices for interior feature walls and accent walls in Dubai, used across residential villas, hotel lobbies, office receptions, restaurants, and retail spaces. Our range includes large-format porcelain cladding panels and natural stone cladding tiles suitable for high-impact interior feature wall applications."
          }
        },
        {
          "@type": "Question",
          "name": "Where can I view cladding tiles in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can view our full range of cladding tiles in Dubai at Al Maha's showroom in Al Qusais Industrial Area 3, Dubai. Our team is available to help you select the right cladding tile finish, format, and material for your specific project. We also supply cladding tiles to project sites across all seven Emirates."
          }
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.mahabldg.com/cladding-tiles-fixing#breadcrumb",
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
          "name": "Cladding Tiles with Fixing",
          "item": "https://www.mahabldg.com/cladding-tiles-fixing"
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
                            <h1 class="breadcumb-title">{{ $page->name ?? 'Cladding Tiles with Fixing' }}</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li><a href="{{ route('categories') }}">Products</a></li>
                                <li class="text-white"><i class="fa-solid fa-chevrons-right"></i></li>
                                <li class="active">{{ $page->name ?? 'Cladding Tiles' }}</li>
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
        'defaultImage' => 'assets/images/products/cd-1.png',
        'defaultBadge' => 'WALL SURFACES',
        'defaultHeading' => 'Cladding Tiles Dubai',
        'defaultSubheading' => 'Interior and Exterior Cladding Tiles Supplier with Fixing'
    ])

    <!-- 2. Benefits Section -->
    @include('pages.partials.benefits', [
        'page' => $page,
        'defaultBadge' => 'BENEFITS',
        'defaultHeading' => 'Benefits of Cladding Tiles',
        'defaultDescription' => 'Engineered for aesthetics, durability, and building protection in the UAE.'
    ])

    <!-- 3. Specifications Section -->
    @include('pages.partials.specifications', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/cd-2.png',
        'defaultBadge' => 'SPECIFICATIONS',
        'defaultHeading' => 'Cladding Tile Specifications',
        'defaultDescription' => 'Our cladding tiles are available in a range of sizes, materials, and thicknesses for any project:'
    ])

    <!-- 4. Applications Section -->
    @include('pages.partials.applications', [
        'page' => $page,
        'defaultBadge' => 'APPLICATIONS',
        'defaultHeading' => 'Applications of Cladding Tiles',
        'defaultDescription' => 'Our cladding tiles in Dubai are specified for residential, commercial, and facade projects across the UAE:'
    ])

    <!-- 5. Feature Spotlight -->
    @include('pages.partials.spotlight', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/cd-3.png',
        'defaultBadge' => 'CLADDING FIXING & EXTERIOR',
        'defaultHeading' => 'Cladding Tile Fixing Services in Dubai'
    ])

    <!-- 6. Why Choose Us -->
    @include('pages.partials.why_choose', [
        'page' => $page,
        'defaultImage' => 'assets/images/products/cd-4.png',
        'defaultBadge' => 'WHY CHOOSE US',
        'defaultHeading' => 'Why Choose Al Maha for Cladding Tiles in Dubai?'
    ])

    <!-- 7. FAQs -->
    @include('pages.partials.faqs', [
        'page' => $page,
        'accordionId' => 'claddingFaqAccordion',
        'defaultBadge' => 'FAQ',
        'defaultHeading' => 'Frequently Asked Questions',
        'defaultDescription' => 'Get answers to the most common questions about interior and exterior cladding tiles and fixing in Dubai.'
    ])

    <!-- 8. CTA Banner -->
    @include('pages.partials.cta', [
        'page' => $page,
        'defaultHeading' => 'Ready to transform your walls with cladding tiles?',
        'defaultDescription' => 'Al Maha building materials has the largest collection in Dubai. Sourced direct, priced competitively.',
        'defaultButtonText' => 'GET A QUOTE',
        'defaultButtonUrl' => route('contact')
    ])

@endsection
