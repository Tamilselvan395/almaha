<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('product_pages', function (Blueprint $table) {
            $table->string('intro_image')->nullable()->after('subheading');
            $table->json('benefits_data')->nullable()->after('content');
            $table->json('specs_data')->nullable()->after('benefits_data');
            $table->json('apps_data')->nullable()->after('specs_data');
            $table->json('spotlight_data')->nullable()->after('apps_data');
            $table->json('why_data')->nullable()->after('spotlight_data');
            $table->json('faq_data')->nullable()->after('why_data');
            $table->json('cta_data')->nullable()->after('faq_data');
        });
    }

    public function down(): void
    {
        Schema::table('product_pages', function (Blueprint $table) {
            $table->dropColumn([
                'intro_image',
                'benefits_data',
                'specs_data',
                'apps_data',
                'spotlight_data',
                'why_data',
                'faq_data',
                'cta_data',
            ]);
        });
    }
};
