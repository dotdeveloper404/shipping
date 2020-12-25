<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $guarded = [];

    public function category_data()
    {
        return $this->belongsTo(ProductCategory::class, 'category', 'id');
    }
}
