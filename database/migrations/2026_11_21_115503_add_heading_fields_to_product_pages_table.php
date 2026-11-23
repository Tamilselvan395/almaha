<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('product_pages', function (Blueprint $table) {
            $table->string('subtitle')->nullable()->after('slug');
            $table->string('heading')->nullable()->after('subtitle');
            $table->string('subheading')->nullable()->after('heading');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_pages', function (Blueprint $table) {
            $table->dropColumn(['subtitle', 'heading', 'subheading']);
        });
    }
};
