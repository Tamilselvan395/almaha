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
        // 1. Ensure public storage directory exists and copy default product images
        $srcDir = public_path('assets/images/products');
        $destDir = storage_path('app/public/product-pages');

        if (!File::isDirectory($destDir)) {
            File::makeDirectory($destDir, 0755, true);
        }

        $prefixes = ['p', 'sm', 'cd', 'san', 'r', 'm', 'sl', 'in'];
        foreach ($prefixes as $prefix) {
            for ($i = 1; $i <= 4; $i++) {
                $filename = "{$prefix}-{$i}.png";
                $src = "{$srcDir}/{$filename}";
                $dest = "{$destDir}/{$filename}";
                if (File::exists($src) && !File::exists($dest)) {
                    File::copy($src, $dest);
                }
            }
        }

        // 2. Load complete product content from JSON
        $dataPath = database_path('data/product_pages.json');
        if (!File::exists($dataPath)) {
            $this->command->error("Data file not found: {$dataPath}");
            return;
        }

        $pages = json_decode(File::get($dataPath), true);
        if (empty($pages)) {
            $this->command->error("No data found in {$dataPath}");
            return;
        }

        foreach ($pages as $item) {
            ProductPage::updateOrCreate(
                ['slug' => $item['slug']],
                [
                    'name' => $item['name'],
                    'subtitle' => $item['subtitle'] ?? null,
                    'heading' => $item['heading'] ?? null,
                    'subheading' => $item['subheading'] ?? null,
                    'intro_image' => $item['intro_image'] ?? null,
                    'content' => $item['content'] ?? null,
                    'meta_title' => $item['meta_title'] ?? null,
                    'meta_description' => $item['meta_description'] ?? null,
                    'schema' => $item['schema'] ?? null,
                    'status' => true,
                    'benefits_data' => $item['benefits_data'] ?? [],
                    'specs_data' => $item['specs_data'] ?? [],
                    'apps_data' => $item['apps_data'] ?? [],
                    'spotlight_data' => $item['spotlight_data'] ?? [],
                    'why_data' => $item['why_data'] ?? [],
                    'faq_data' => $item['faq_data'] ?? [],
                    'cta_data' => $item['cta_data'] ?? [],
                ]
            );
        }
    }
}
