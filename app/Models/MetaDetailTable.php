<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetaDetailTable extends Model
{
    protected $fillable = ['index_meta_title','index_meta_description','index_schema','about_meta_title','about_meta_description','about_schema','blog_meta_title','blog_meta_description','blog_schema','contact_meta_title','contact_meta_description','contact_schema','all_page_scheme'];
}
