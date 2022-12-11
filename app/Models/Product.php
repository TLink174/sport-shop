<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public function sizes(): BelongsToMany
    {
        return $this->belongsToMany(Size::class, ProductSize::class, 'id_product', 'id_size');
    }

    public function colors(): BelongsToMany
    {
        return $this->belongsToMany(Color::class, ProductColor::class, 'id_product', 'id_color');

    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryProduct::class, 'id_category');
    }

    public function cartDetail():hasMany
    {
        return $this->hasMany(CartDetail::class, 'id_cart');
    }
}
