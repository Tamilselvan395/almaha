<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductFeaturePivot extends Model
{
    protected $fillable = ['product_id','feature_id','slug','status'];
}
