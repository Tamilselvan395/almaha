<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable =['name','icon','slug','status'];

    public function products()
    {
        return $this->belongsToMany(Product::class,'feature_product','product_id','feature_id');
    }
}
