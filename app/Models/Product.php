<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
