<?php

use Illuminate\Database\Migrations\Migration;
use App\Models\MetaDetailTable;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $index_schema = <<<'JSON'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "https://www.mahabldg.com/#organization",
      "name": "Al Maha Building Materials",
      "alternateName": "Al Maha International Building Materials Trading Company LLC",
      "url": "https://www.mahabldg.com/",
      "logo": {
        "@type": "ImageObject",
        "@id": "https://www.mahabldg.com/#logo",
        "url": "https://www.mahabldg.com/assets/images/logo.png",
        "caption": "Al Maha Building Materials Logo"
      },
      "image": "https://www.mahabldg.com/assets/images/products/p-1.png",
      "description": "Al Maha is a premier importer and supplier of premium building materials in Dubai, UAE, specializing in high-quality porcelain tiles, sanitary ware, marble, granite, cladding, and roofing sheets.",
      "email": "info@mahabldg.com",
      "telephone": "+97142671988",
      "foundingDate": "2009",
      "sameAs": [
        "https://www.facebook.com/share/1RrAASitd1/",
        "https://www.instagram.com/almahainternationalbuilding/"
      ],
      "knowsAbout": [
        "Porcelain Tiles",
        "Swimming Pool Tiles",
        "Marble and Granite Cladding",
        "Sanitary Ware",
        "Roofing Materials",
        "Tile Adhesives",
        "Tile Fixing Services"
      ]
    },
    {
      "@type": ["Store", "HomeAndConstructionBusiness"],
      "@id": "https://www.mahabldg.com/#localbusiness",
      "name": "Al Maha Building Materials Showroom",
      "parentOrganization": {
        "@id": "https://www.mahabldg.com/#organization"
      },
      "image": "https://www.mahabldg.com/assets/images/products/p-1.png",
      "logo": {
        "@id": "https://www.mahabldg.com/#logo"
      },
      "url": "https://www.mahabldg.com/",
      "telephone": "+97142671988",
      "email": "info@mahabldg.com",
      "priceRange": "$$",
      "currenciesAccepted": "AED, USD",
      "paymentAccepted": "Cash, Credit Card, Bank Transfer",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Amman St, Al Qusais Industrial Area 3",
        "addressLocality": "Dubai",
        "addressRegion": "Dubai",
        "postalCode": "00000",
        "addressCountry": "AE"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "25.2939844",
        "longitude": "55.3901175"
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday"
          ],
          "opens": "08:00",
          "closes": "18:00"
        }
      ],
      "areaServed": [
        {
          "@type": "AdministrativeArea",
          "name": "Dubai"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Abu Dhabi"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Sharjah"
        },
        {
          "@type": "Country",
          "name": "United Arab Emirates"
        }
      ],
      "hasOfferCatalog": {
        "@id": "https://www.mahabldg.com/#offercatalog"
      }
    },
    {
      "@type": "OfferCatalog",
      "@id": "https://www.mahabldg.com/#offercatalog",
      "name": "Al Maha Building Materials Catalog",
      "itemListElement": [
        {
          "@type": "OfferCatalog",
          "@id": "https://www.mahabldg.com/#porcelain-catalog",
          "name": "Porcelain Tiles",
          "description": "High-quality floor, wall, and outdoor porcelain tiles."
        },
        {
          "@type": "OfferCatalog",
          "@id": "https://www.mahabldg.com/#pool-catalog",
          "name": "Swimming Pool Tiles",
          "description": "Anti-slip, moisture-resistant mosaics and tiles."
        },
        {
          "@type": "OfferCatalog",
          "@id": "https://www.mahabldg.com/#fixing-catalog",
          "name": "Tile Fixing Services",
          "description": "Professional installation and cladding services in Dubai."
        }
      ]
    },
    {
      "@type": "WebSite",
      "@id": "https://www.mahabldg.com/#website",
      "url": "https://www.mahabldg.com/",
      "name": "Al Maha Building Materials",
      "publisher": {
        "@id": "https://www.mahabldg.com/#organization"
      },
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://www.mahabldg.com/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "WebPage",
      "@id": "https://www.mahabldg.com/#webpage",
      "url": "https://www.mahabldg.com/",
      "name": "Premium Tiles & Building Materials Supplier in Dubai | Al Maha",
      "isPartOf": {
        "@id": "https://www.mahabldg.com/#website"
      },
      "about": {
        "@id": "https://www.mahabldg.com/#localbusiness"
      },
      "description": "Al Maha is the leading supplier of premium porcelain tiles, swimming pool tiles, sanitary ware, and tile fixing adhesives in Al Qusais, Dubai."
    },
    {
      "@type": "FAQPage",
      "@id": "https://www.mahabldg.com/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Why choose Al Maha as your tile supplier?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Al Maha Building Materials is a trusted tile supplier in Dubai with over 15 years of industry experience. As one of the most established Dubai tiles companies and a leading building materials supplier, we supply premium porcelain tiles, swimming pool tiles, outdoor tiles, sanitary ware, marble, granite, and surface solutions for residential, commercial, and construction projects across the UAE."
          }
        },
        {
          "@type": "Question",
          "name": "What types of tiles do you supply in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We supply a wide range of tiles, including porcelain tiles, swimming pool tiles, outdoor tiles, cladding tiles, coping tiles, and decorative wall tiles suitable for residential, commercial, and hospitality projects across the UAE."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide porcelain tiles in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We offer premium porcelain tiles or flooring, walls, outdoor areas, and commercial developments. Our collection is available in various sizes, finishes, colours, and designs to suit every project requirement."
          }
        },
        {
          "@type": "Question",
          "name": "Do you offer swimming pool tiles in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Al Maha is a trusted swimming pool tiles company and swimming pool tiles supplier, supplying high-quality pool tiles including anti-slip pool tiles designed for safety, durability, and long-term performance in residential and commercial pools."
          }
        },
        {
          "@type": "Question",
          "name": "Do you supply sanitary ware in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. As a trusted sanitary ware and sanitary supplier in Dubai, we offer quality sanitary ware solutions for homes, offices, hotels, retail spaces, and large-scale construction projects across the UAE."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide tile fixing services in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We offer professional tile fixing services in Dubai for residential, commercial, and industrial projects. Our experienced tile fixing contractors ensure accurate installation, clean finishes, and durable results."
          }
        },
        {
          "@type": "Question",
          "name": "Do you supply building materials across the UAE?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. As a leading building materials supplier and one of the most reliable building materials suppliers in Dubai, we provide reliable supply and delivery of porcelain tiles, outdoor tiles, pool tiles, marble, granite, and sanitary ware across Dubai, Abu Dhabi, Sharjah, Ajman, Ras Al Khaimah, Fujairah, and other regions of the UAE."
          }
        },
        {
          "@type": "Question",
          "name": "Where is Al Maha located in Dubai?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Al Maha Building Materials is located in Al Qusais Industrial Area 3, Dubai. Our showroom is open for contractors, developers, and homeowners to view our full range of tiles, sanitary ware, marble, granite, and surface solutions in person."
          }
        }
      ]
    },
    {
      "@type": "ItemList",
      "@id": "https://www.mahabldg.com/#service-list",
      "name": "Al Maha Building Materials Categories",
      "numberOfItems": 8,
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Porcelain Tiles",
          "url": "https://www.mahabldg.com/porcelain"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Swimming Pool Tiles",
          "url": "https://www.mahabldg.com/swimming-pool-tiles"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Cladding Tiles with Fixing",
          "url": "https://www.mahabldg.com/cladding-tiles-fixing"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "Sanitary Ware",
          "url": "https://www.mahabldg.com/sanitary-ware"
        },
        {
          "@type": "ListItem",
          "position": 5,
          "name": "Roofing Materials in Dubai",
          "url": "https://www.mahabldg.com/roofing-materials-dubai"
        },
        {
          "@type": "ListItem",
          "position": 6,
          "name": "Marble and Granite",
          "url": "https://www.mahabldg.com/marble-granite"
        },
        {
          "@type": "ListItem",
          "position": 7,
          "name": "Solid Surface Filler and Sheets",
          "url": "https://www.mahabldg.com/solid-surface-filler-sheets"
        },
        {
          "@type": "ListItem",
          "position": 8,
          "name": "Interior Tiles Glue",
          "url": "https://www.mahabldg.com/interior-tiles-glue"
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.mahabldg.com/#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://www.mahabldg.com/"
        }
      ]
    }
  ]
}
</script>
JSON;

        $about_schema = <<<'JSON'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "AboutPage",
      "@id": "https://www.mahabldg.com/about#webpage",
      "url": "https://www.mahabldg.com/about",
      "name": "About Al Maha Building Materials Trading LLC",
      "description": "Learn about Al Maha, Dubai's premier building materials importer and supplier with over 15 years of industry experience.",
      "isPartOf": {
        "@id": "https://www.mahabldg.com/#website"
      },
      "about": {
        "@id": "https://www.mahabldg.com/#localbusiness"
      }
    },
    {
      "@type": "Organization",
      "@id": "https://www.mahabldg.com/#organization",
      "name": "Al Maha Building Materials",
      "alternateName": "Al Maha International Building Materials Trading Company LLC",
      "url": "https://www.mahabldg.com/",
      "logo": "https://www.mahabldg.com/assets/images/logo.png",
      "foundingDate": "2009",
      "description": "Al Maha is a premier importer and supplier of premium building materials in Dubai, UAE, specializing in high-quality porcelain tiles, sanitary ware, marble, granite, cladding, and roofing sheets."
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.mahabldg.com/about#breadcrumb",
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
          "name": "About Us",
          "item": "https://www.mahabldg.com/about"
        }
      ]
    }
  ]
}
</script>
JSON;

        $blog_schema = <<<'JSON'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "CollectionPage",
      "@id": "https://www.mahabldg.com/blogs#webpage",
      "url": "https://www.mahabldg.com/blogs",
      "name": "Latest Building Materials Tips & News Blog | Al Maha",
      "description": "Read helpful guides, installation instructions, and design trends about porcelain tiles, marble, sanitary ware, and stone fixing in the UAE.",
      "isPartOf": {
        "@id": "https://www.mahabldg.com/#website"
      },
      "mainEntity": {
        "@type": "Blog",
        "@id": "https://www.mahabldg.com/blogs#blog",
        "name": "Al Maha Tiles and Stones Blog",
        "blogPost": [
          {
            "@type": "BlogPosting",
            "headline": "How to Choose the Best Tiles for Swimming Pools in Dubai",
            "url": "https://www.mahabldg.com/blog/how-to-choose-best-pool-tiles"
          }
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.mahabldg.com/blogs#breadcrumb",
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
          "name": "Blog",
          "item": "https://www.mahabldg.com/blogs"
        }
      ]
    }
  ]
}
</script>
JSON;

        $contact_schema = <<<'JSON'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "ContactPage",
      "@id": "https://www.mahabldg.com/contact-us#webpage",
      "url": "https://www.mahabldg.com/contact-us",
      "name": "Contact Al Maha Building Materials Dubai",
      "description": "Get in touch with Al Maha showroom for inquiries, product prices, project consultations, or tile fixing services in Dubai.",
      "isPartOf": {
        "@id": "https://www.mahabldg.com/#website"
      },
      "mainEntity": {
        "@type": "LocalBusiness",
        "@id": "https://www.mahabldg.com/#localbusiness",
        "name": "Al Maha Building Materials Showroom",
        "telephone": "+97142671988",
        "email": "info@mahabldg.com",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Amman St, Al Qusais Industrial Area 3",
          "addressLocality": "Dubai",
          "addressRegion": "Dubai",
          "addressCountry": "AE"
        },
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": "25.2939844",
          "longitude": "55.3901175"
        },
        "contactPoint": {
          "@type": "ContactPoint",
          "telephone": "+971565004077",
          "contactType": "sales manager",
          "areaServed": "AE",
          "availableLanguage": ["English", "Arabic", "Hindi"]
        }
      }
    },
    {
      "@type": "BreadcrumbList",
      "@id": "https://www.mahabldg.com/contact-us#breadcrumb",
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
          "name": "Contact Us",
          "item": "https://www.mahabldg.com/contact-us"
        }
      ]
    }
  ]
}
</script>
JSON;

        $meta = MetaDetailTable::first();
        $data = [
            'index_meta_title' => 'Al Maha Building Materials | Premium Tiles Supplier Dubai',
            'index_meta_description' => 'Al Maha Building Materials is a leading supplier of high-quality porcelain tiles, swimming pool tiles, sanitary ware, marble, granite, cladding and roofing sheets in Dubai, UAE.',
            'index_schema' => $index_schema,
            'about_meta_title' => 'About Al Maha Building Materials Trading LLC | Dubai',
            'about_meta_description' => 'Discover the legacy of Al Maha International, a premier supplier of premium tiles, stones, and sanitary ware in the UAE since 15 years.',
            'about_schema' => $about_schema,
            'contact_meta_title' => 'Contact Al Maha Building Materials | Dubai Tile Supplier',
            'contact_meta_description' => 'Contact Al Maha Building Materials in Al Qusais, Dubai for tile, sanitary ware, and building material inquiries, quotes, and project consultations. Call +971 4 267 1988.',
            'contact_schema' => $contact_schema,
            'blog_meta_title' => 'Al Maha International Building Materials Trading LLC | Blogs',
            'blog_meta_description' => 'Stay updated with the latest trends, guides, and tips on tile selection, stone cladding, and construction materials in Dubai.',
            'blog_schema' => $blog_schema,
            'status' => true,
        ];

        if ($meta) {
            $meta->update($data);
        } else {
            MetaDetailTable::create($data);
        }

        // Truncate and seed Testimonials to ensure only the requested 3 reviews exist
        \App\Models\Testimonial::truncate();
        \App\Models\Testimonial::insert([
            [
                'text' => 'Al Maha has been our go-to partner for premium porcelain and outdoor swimming pool tiles in Dubai. Their material quality is consistently excellent, and the delivery schedules are always met.',
                'name' => 'Ahmad Al-Mansoori',
                'role' => 'Senior Architect, Landmark Developments',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'text' => 'The variety of marble, granite, and interior tiles glue we sourced from Al Maha for our residential villa projects was outstanding. Highly professional service and top-grade building materials.',
                'name' => 'Sarah Jenkins',
                'role' => 'Principal Interior Designer, Luxe Spaces',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'text' => 'Reliability, competitive pricing, and outstanding support. Their cladding tiles and sanitary ware collections helped us achieve the premium finish required for our commercial projects.',
                'name' => 'Vikram Malhotra',
                'role' => 'Project Manager, BuildCorp UAE',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Seed the 2 dummy/test blogs if they do not exist
        $blog1_slug = 'porcelain-tiles-vs-ceramic-tiles-dubai';
        if (!\App\Models\Blog::where('slug', $blog1_slug)->exists()) {
            \App\Models\Blog::create([
                'title' => 'Porcelain Tiles vs Ceramic Tiles: Which Is Better for Dubai Homes?',
                'slug' => $blog1_slug,
                'short_description' => 'Compare porcelain tiles vs ceramic tiles to discover the best flooring solution for Dubai homes, covering durability, water resistance, maintenance, and cost.',
                'long_description' => '<h3>Porcelain vs Ceramic</h3><p>When selecting the best tiling for Dubai homes, the choice often comes down to porcelain tiles vs ceramic tiles. Both materials have their advantages, but porcelain is denser, harder, and has a lower water absorption rate. This makes it highly durable and ideal for wet areas like bathrooms and kitchens, as well as outdoor areas. Ceramic tiles, on the other hand, are lighter and easier to cut, making them a cost-effective option for walls and low-traffic indoor spaces.</p>',
                'image' => 'blog/01KWV4KPVREXZP7MW7KMS4RTTJ.png',
                'meta_title' => 'Porcelain Tiles vs Ceramic Tiles Dubai | Al Maha',
                'meta_description' => 'Discover the key differences between porcelain and ceramic tiles to make the best choice for your Dubai home renovation.',
                'status' => true,
                'created_at' => now()->subDays(5),
                'updated_at' => now()->subDays(5),
            ]);
        }

        $blog2_slug = '10-luxury-bathroom-design-ideas-with-premium-sanitary-ware';
        if (!\App\Models\Blog::where('slug', $blog2_slug)->exists()) {
            \App\Models\Blog::create([
                'title' => '10 Luxury Bathroom Design Ideas with Premium Sanitary Ware',
                'slug' => $blog2_slug,
                'short_description' => 'Discover 10 inspiring luxury bathroom design ideas featuring premium sanitary ware, porcelain tiles, elegant fixtures, and modern finishes.',
                'long_description' => '<h3>Luxury Bathroom Design</h3><p>Creating a spa-like retreat in your home is easier than ever with premium sanitary ware. From wall-hung toilets and freestanding bathtubs to elegant chrome faucets, modern fixtures offer both functionality and aesthetic appeal. Pairing premium sanitary ware with high-quality porcelain tiling completes the look, providing a clean, elegant, and durable finish that lasts.</p>',
                'image' => 'blog/01KTRR20DPPWJP055D42X11K58.png',
                'meta_title' => '10 Luxury Bathroom Design Ideas Dubai | Al Maha',
                'meta_description' => 'Explore 10 designer bathroom layouts and fixtures to transform your bathroom into a luxury retreat.',
                'status' => true,
                'created_at' => now()->subDays(10),
                'updated_at' => now()->subDays(10),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // No-op
    }
};
