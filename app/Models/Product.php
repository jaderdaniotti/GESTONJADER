<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "name",
        "category_id",
        "description",
        "price",
        "image",
        "stock"
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
