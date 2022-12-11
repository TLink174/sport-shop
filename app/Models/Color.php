<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Color extends Model
{
    use HasFactory;
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, ProductColor::class, 'id_color', 'id_product');

    }
}
