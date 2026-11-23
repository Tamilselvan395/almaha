<?php

namespace Database\Seeders;

use App\Models\ProductPage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ProductPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $srcDir = public_path('assets/images/products');
        $destDir = storage_path('app/public/product-pages');

        if (!File::isDirectory($destDir)) {
            File::makeDirectory($destDir, 0755, true);
        }

        $pages = [
            [
                'name' => 'Porcelain Tiles',
                'slug' => 'porcelain',
                'prefix' => 'p',
                'subtitle' => 'PREMIUM TILES',
                'heading' => 'Porcelain Tiles Dubai',
                'subheading' => 'Premium Floor & Wall Tile Supplier',
                'intro_image' => 'product-pages/p-1.png',
                'file' => resource_path('views/pages/porcelain.blade.php'),
            ],
            [
                'name' => 'Swimming Pool Tiles',
                'slug' => 'swimming-pool-tiles',
                'prefix' => 'sm',
                'subtitle' => 'POOL SOLUTIONS',
                'heading' => 'Swimming Pool Tiles Dubai',
                'subheading' => 'Anti-Slip Pool Tiles & Coping Tiles Supplier',
                'intro_image' => 'product-pages/sm-1.png',
                'file' => resource_path('views/pages/swimming.blade.php'),
            ],
            [
                'name' => 'Cladding Tiles with Fixing',
                'slug' => 'cladding-tiles-fixing',
                'prefix' => 'cd',
                'subtitle' => 'WALL SURFACES',
                'heading' => 'Cladding Tiles Dubai',
                'subheading' => 'Interior and Exterior Cladding Tiles Supplier with Fixing',
                'intro_image' => 'product-pages/cd-1.png',
                'file' => resource_path('views/pages/cladding.blade.php'),
            ],
            [
                'name' => 'Sanitary Ware',
                'slug' => 'sanitary-ware',
                'prefix' => 'san',
                'subtitle' => 'BATHROOM FITTINGS',
                'heading' => 'Sanitary Ware Dubai',
                'subheading' => 'Premium Sanitary Ware Supplier and Importer',
                'intro_image' => 'product-pages/san-1.png',
                'file' => resource_path('views/pages/sanitary.blade.php'),
            ],
            [
                'name' => 'Roofing Materials in Dubai',
                'slug' => 'roofing-materials-dubai',
                'prefix' => 'r',
                'subtitle' => 'STRUCTURAL COVERING',
                'heading' => 'Roofing Sheets Dubai',
                'subheading' => 'Premium Roofing Supplier and Importer',
                'intro_image' => 'product-pages/r-1.png',
                'file' => resource_path('views/pages/roofing.blade.php'),
            ],
            [
                'name' => 'Marble and Granite',
                'slug' => 'marble-granite',
                'prefix' => 'm',
                'subtitle' => 'NATURAL STONES',
                'heading' => 'Marble & Granite Dubai',
                'subheading' => 'Premium Marble and Granite Supplier and Importer',
                'intro_image' => 'product-pages/m-1.png',
                'file' => resource_path('views/pages/marble.blade.php'),
            ],
            [
                'name' => 'Solid Surface Filler and Sheets',
                'slug' => 'solid-surface-filler-sheets',
                'prefix' => 'sl',
                'subtitle' => 'MODERN SURFACES',
                'heading' => 'Solid Surface Sheets Dubai',
                'subheading' => 'Premium Solid Surface Supplier and Importer',
                'intro_image' => 'product-pages/sl-1.png',
                'file' => resource_path('views/pages/solid.blade.php'),
            ],
            [
                'name' => 'Interior Tiles Glue',
                'slug' => 'interior-tiles-glue',
                'prefix' => 'in',
                'subtitle' => 'TILE FIXING',
                'heading' => 'Tile Adhesive Dubai',
                'subheading' => 'Premium Interior Tile Glue Supplier and Importer',
                'intro_image' => 'product-pages/in-1.png',
                'file' => resource_path('views/pages/interior.blade.php'),
            ],
        ];

        foreach ($pages as $item) {
            $prefix = $item['prefix'];
            for ($i = 1; $i <= 4; $i++) {
                $filename = "{$prefix}-{$i}.png";
                $src = "{$srcDir}/{$filename}";
                $dest = "{$destDir}/{$filename}";
                if (File::exists($src) && !File::exists($dest)) {
                    File::copy($src, $dest);
                }
            }
            $content = File::exists($item['file']) ? File::get($item['file']) : '';

            $metaTitle = '';
            if (preg_match("/@section\('meta_title',\s*(\\\$page->meta_title\s*\?\?\s*)?['\"](.*?)['\"]\)/s", $content, $matches)) {
                $metaTitle = end($matches);
            }

            $metaDescription = '';
            if (preg_match("/@section\('meta_description',\s*(\\\$page->meta_description\s*\?\?\s*)?['\"](.*?)['\"]\)/s", $content, $matches)) {
                $metaDescription = end($matches);
            }

            $schema = '';
            if (preg_match("/<script type=\"application\/ld\+json\">(.*?)<\/script>/s", $content, $matches)) {
                $schema = trim($matches[1]);
            }

            // Intro content paragraphs
            $introContent = '';
            if (preg_match('/<!-- Intro Section Start -->(.*?)<!-- Benefits Section Start -->/s', $content, $m)) {
                if (preg_match('/<div class="about-content[^>]*>(.*?)<\/div>\s*<\/div>\s*<\/div>\s*<\/div>\s*<\/section>/s', $m[1], $cm)) {
                    $rawIntro = preg_replace('/<div class="section-title[^>]*>.*?<\/div>/s', '', $cm[1], 1);
                    $introContent = trim($rawIntro);
                }
            }

            $parsed = $this->parseSections($content, $item['prefix']);

            ProductPage::updateOrCreate(
                ['slug' => $item['slug']],
                [
                    'name' => $item['name'],
                    'subtitle' => $item['subtitle'],
                    'heading' => $item['heading'],
                    'subheading' => $item['subheading'],
                    'intro_image' => $item['intro_image'],
                    'content' => $introContent,
                    'meta_title' => $metaTitle,
                    'meta_description' => $metaDescription,
                    'schema' => $schema,
                    'status' => true,
                    'benefits_data' => $parsed['benefits_data'],
                    'specs_data' => $parsed['specs_data'],
                    'apps_data' => $parsed['apps_data'],
                    'spotlight_data' => $parsed['spotlight_data'],
                    'why_data' => $parsed['why_data'],
                    'faq_data' => $parsed['faq_data'],
                    'cta_data' => $parsed['cta_data'],
                ]
            );
        }
    }

    private function cleanText(?string $text): string
    {
        if (empty($text)) {
            return '';
        }
        return trim(preg_replace('/\s+/', ' ', strip_tags($text)));
    }

    private function parseSections(string $content, string $prefix = 'p'): array
    {
        // 1. Benefits
        $benefits = [
            'badge' => 'BENEFITS',
            'heading' => '',
            'description' => '',
            'items' => []
        ];
        if (preg_match('/<!-- Benefits Section Start -->(.*?)<!-- (Specifications|Product Range) Section Start -->/s', $content, $m)) {
            $sec = $m[1];
            if (preg_match('/<div class="subtitle[^>]*>(.*?)<\/div>/s', $sec, $sm)) {
                $benefits['badge'] = $this->cleanText($sm[1]);
            }
            if (preg_match('/<h2[^>]*>(.*?)<\/h2>/s', $sec, $hm)) {
                $benefits['heading'] = $this->cleanText($hm[1]);
            }
            if (preg_match('/<\/h2>\s*<p[^>]*>(.*?)<\/p>/s', $sec, $dm)) {
                $benefits['description'] = $this->cleanText($dm[1]);
            }
            preg_match_all('/<div class="strength-card[^>]*>(.*?)<\/div>\s*<\/div>/s', $sec, $cm);
            foreach ($cm[1] as $card) {
                $icon = 'fas fa-check-circle';
                if (preg_match('/<i class="([^"]+)"/s', $card, $im)) {
                    $icon = trim($im[1]);
                }
                $title = '';
                if (preg_match('/<h4[^>]*>(.*?)<\/h4>/s', $card, $tm)) {
                    $title = $this->cleanText($tm[1]);
                }
                $desc = '';
                if (preg_match('/<p class="desc[^>]*>(.*?)<\/p>/s', $card, $dm)) {
                    $desc = $this->cleanText($dm[1]);
                }
                if ($title) {
                    $benefits['items'][] = [
                        'title' => $title,
                        'icon' => $icon,
                        'description' => $desc
                    ];
                }
            }
        }

        // 2. Specifications
        $specs = [
            'badge' => 'SPECIFICATIONS',
            'heading' => '',
            'description' => '',
            'image' => "product-pages/{$prefix}-2.png",
            'items' => []
        ];
        if (preg_match('/<!-- (Specifications|Product Range) Section Start -->(.*?)<!-- Applications Section Start -->/s', $content, $m)) {
            $sec = $m[2];
            if (preg_match('/<div class="subtitle[^>]*>(.*?)<\/div>/s', $sec, $sm)) {
                $specs['badge'] = $this->cleanText($sm[1]);
            }
            if (preg_match('/<h2[^>]*>(.*?)<\/h2>/s', $sec, $hm)) {
                $specs['heading'] = $this->cleanText($hm[1]);
            }
            if (preg_match('/<p class="desc[^>]*>(.*?)<\/p>/s', $sec, $dm)) {
                $specs['description'] = $this->cleanText($dm[1]);
            }
            preg_match_all('/<div class="spec-item[^>]*>(.*?)<\/div>\s*<\/div>/s', $sec, $sim);
            foreach ($sim[1] as $item) {
                $icon = 'fas fa-layer-group';
                if (preg_match('/<i class="([^"]+)"/s', $item, $im)) {
                    $icon = trim($im[1]);
                }
                $label = '';
                if (preg_match('/<h5[^>]*>(.*?)<\/h5>/s', $item, $lm)) {
                    $label = $this->cleanText($lm[1]);
                }
                $val = '';
                if (preg_match('/<p[^>]*>(.*?)<\/p>/s', $item, $vm)) {
                    $val = $this->cleanText($vm[1]);
                }
                if ($label) {
                    $specs['items'][] = [
                        'label' => $label,
                        'icon' => $icon,
                        'value' => $val
                    ];
                }
            }
        }

        // 3. Applications
        $apps = [
            'badge' => 'APPLICATIONS',
            'heading' => '',
            'description' => '',
            'items' => []
        ];
        if (preg_match('/<!-- Applications Section Start -->(.*?)<\/section>/s', $content, $m)) {
            $sec = $m[1];
            if (preg_match('/<div class="subtitle[^>]*>(.*?)<\/div>/s', $sec, $sm)) {
                $apps['badge'] = $this->cleanText($sm[1]);
            }
            if (preg_match('/<h2[^>]*>(.*?)<\/h2>/s', $sec, $hm)) {
                $apps['heading'] = $this->cleanText($hm[1]);
            }
            if (preg_match('/<\/h2>\s*<p[^>]*>(.*?)<\/p>/s', $sec, $dm)) {
                $apps['description'] = $this->cleanText($dm[1]);
            }
            preg_match_all('/<div class="col-lg-4">(.*?)<\/div>\s*<\/div>\s*<\/div>/s', $sec, $aim);
            foreach ($aim[1] as $card) {
                $title = '';
                if (preg_match('/<h3[^>]*>(.*?)<\/h3>/s', $card, $tm)) {
                    $title = $this->cleanText($tm[1]);
                }
                $icon = 'fas fa-building';
                if (preg_match('/<i class="([^"]+)"/s', $card, $im)) {
                    $icon = trim($im[1]);
                }
                preg_match_all('/<li[^>]*>.*?<span>(.*?)<\/span>.*?<\/li>/s', $card, $lm);
                $points = array_map(fn($p) => $this->cleanText($p), $lm[1]);
                if ($title) {
                    $apps['items'][] = [
                        'title' => $title,
                        'icon' => $icon,
                        'points' => implode("\n", $points)
                    ];
                }
            }
        }

        // 4. Spotlight
        $spotlight = [
            'badge' => '',
            'heading' => '',
            'image' => "product-pages/{$prefix}-3.png",
            'content' => ''
        ];
        if (preg_match('/<!-- (Outdoor Porcelain|Anti-Slip and Coping|Cladding Fixing & Exterior|Luxury Sanitary Ware|Premium|Luxury) Section Start -->(.*?)<!-- Why Choose Section Start -->/s', $content, $m)) {
            $sec = $m[2];
            if (preg_match('/<div class="subtitle[^>]*>(.*?)<\/div>/s', $sec, $sm)) {
                $spotlight['badge'] = $this->cleanText($sm[1]);
            }
            if (preg_match('/<h2[^>]*>(.*?)<\/h2>/s', $sec, $hm)) {
                $spotlight['heading'] = $this->cleanText($hm[1]);
            }
            if (preg_match('/<div class="[^"]*content[^"]*">(.*?)<\/div>\s*<\/div>\s*<\/div>\s*<\/div>\s*<\/section>/s', $sec, $cm)) {
                $rawContent = $cm[1];
                $rawContent = preg_replace('/<div class="section-title[^>]*>.*?<\/div>/s', '', $rawContent, 1);
                $spotlight['content'] = trim($rawContent);
            }
        }

        // 5. Why Choose
        $why = [
            'badge' => 'WHY CHOOSE US',
            'heading' => '',
            'description' => '',
            'image' => "product-pages/{$prefix}-4.png",
            'items' => []
        ];
        if (preg_match('/<!-- Why Choose Section Start -->(.*?)<!-- FAQ Section Start -->/s', $content, $m)) {
            $sec = $m[1];
            if (preg_match('/<div class="subtitle[^>]*>(.*?)<\/div>/s', $sec, $sm)) {
                $why['badge'] = $this->cleanText($sm[1]);
            }
            if (preg_match('/<h2[^>]*>(.*?)<\/h2>/s', $sec, $hm)) {
                $why['heading'] = $this->cleanText($hm[1]);
            }
            preg_match_all('/<p class="desc[^>]*>(.*?)<\/p>/s', $sec, $dm);
            $why['description'] = implode("\n\n", array_map(fn($d) => $this->cleanText($d), $dm[1]));
            preg_match_all('/<li[^>]*>.*?<strong>(.*?):?<\/strong>(.*?)<\/li>/s', $sec, $wm);
            for ($i = 0; $i < count($wm[1]); $i++) {
                $why['items'][] = [
                    'title' => trim(rtrim($this->cleanText($wm[1][$i]), ':')),
                    'description' => $this->cleanText($wm[2][$i])
                ];
            }
        }

        // 6. FAQ
        $faq = [
            'badge' => 'FAQ',
            'heading' => 'Frequently Asked Questions',
            'description' => '',
            'items' => []
        ];
        if (preg_match('/<!-- FAQ Section Start -->(.*?)(<!-- Quick CTA Section -->|@endsection)/s', $content, $m)) {
            $sec = $m[1];
            if (preg_match('/<div class="subtitle[^>]*>(.*?)<\/div>/s', $sec, $sm)) {
                $faq['badge'] = $this->cleanText($sm[1]);
            }
            if (preg_match('/<h2[^>]*>(.*?)<\/h2>/s', $sec, $hm)) {
                $faq['heading'] = $this->cleanText($hm[1]);
            }
            if (preg_match('/<\/h2>\s*<p[^>]*>(.*?)<\/p>/s', $sec, $dm)) {
                $faq['description'] = $this->cleanText($dm[1]);
            }
            preg_match_all('/<button[^>]*class="[^"]*accordion-button[^"]*"[^>]*>(.*?)<\/button>.*?<div[^>]*class="[^"]*accordion-body[^"]*"[^>]*>(.*?)<\/div>/s', $sec, $fm);
            for ($i = 0; $i < count($fm[1]); $i++) {
                $faq['items'][] = [
                    'question' => $this->cleanText($fm[1][$i]),
                    'answer' => $this->cleanText($fm[2][$i])
                ];
            }
        }

        // 7. CTA
        $cta = [
            'heading' => 'Ready to upgrade with premium materials?',
            'description' => 'Al Maha building materials has the largest collection in Dubai. Sourced direct, priced competitively.',
            'button_text' => 'GET A QUOTE',
            'button_url' => '/contact-us'
        ];
        if (preg_match('/<!-- Quick CTA Section -->(.*?)@endsection/s', $content, $m)) {
            $sec = $m[1];
            if (preg_match('/<h3[^>]*>(.*?)<\/h3>/s', $sec, $hm)) {
                $cta['heading'] = $this->cleanText($hm[1]);
            }
            if (preg_match('/<p class="mb-0[^>]*>(.*?)<\/p>/s', $sec, $dm)) {
                $cta['description'] = $this->cleanText($dm[1]);
            }
            if (preg_match('/<span class="theme-btn[^>]*>(.*?)<\/span>/s', $sec, $bm)) {
                $cta['button_text'] = $this->cleanText($bm[1]);
            }
        }

        return [
            'benefits_data' => $benefits,
            'specs_data' => $specs,
            'apps_data' => $apps,
            'spotlight_data' => $spotlight,
            'why_data' => $why,
            'faq_data' => $faq,
            'cta_data' => $cta
        ];
    }
}
