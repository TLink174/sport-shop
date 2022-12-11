<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CartDetail extends Model
{
    use HasFactory;

    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class, 'id_cart');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id_product');
    }

}
