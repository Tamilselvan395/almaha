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
        Schema::create('meta_detail_tables', function (Blueprint $table) {
            $table->id();
            $table->string('index_meta_title')->nullable();
            $table->string('index_meta_description')->nullable();
            $table->text('index_schema')->nullable();
            $table->string('about_meta_title')->nullable();
            $table->string('about_meta_description')->nullable();
            $table->text('about_schema')->nullable();
            $table->string('contact_meta_title')->nullable();
            $table->string('contact_meta_description')->nullable();
            $table->text('contact_schema')->nullable();
            $table->string('blog_meta_title')->nullable();
            $table->string('blog_meta_description')->nullable();
            $table->text('blog_schema')->nullable();
            $table->text('all_page_scheme')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meta_detail_tables');
    }
};
