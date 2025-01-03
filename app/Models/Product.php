<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $guarded = [
        'id',
    ];


    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }


    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }
}
