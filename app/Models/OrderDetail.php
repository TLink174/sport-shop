<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OrderDetail extends Model
{
    use HasFactory;


//    public function orderDetails(): HasMany
//    {
//        return $this->hasMany(OrderDetail::class, 'id_order');
//    }
    public function order(): BelongsTo
    {
        return $this->belongsTo(Cart::class, 'id_order');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id_product');
    }
}
