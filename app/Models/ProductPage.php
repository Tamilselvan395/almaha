<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'subtitle',
        'heading',
        'subheading',
        'intro_image',
        'meta_title',
        'meta_description',
        'schema',
        'content',
        'status',
        'benefits_data',
        'specs_data',
        'apps_data',
        'spotlight_data',
        'why_data',
        'faq_data',
        'cta_data',
    ];

    protected $casts = [
        'status' => 'boolean',
        'benefits_data' => 'array',
        'specs_data' => 'array',
        'apps_data' => 'array',
        'spotlight_data' => 'array',
        'why_data' => 'array',
        'faq_data' => 'array',
        'cta_data' => 'array',
    ];

    public function getFormattedSchemaAttribute(): ?string
    {
        if (empty($this->schema)) {
            return null;
        }

        $trimmed = trim($this->schema);
        if (str_starts_with($trimmed, '<script')) {
            return $trimmed;
        }

        return '<script type="application/ld+json">' . PHP_EOL . $trimmed . PHP_EOL . '</script>';
    }
}
