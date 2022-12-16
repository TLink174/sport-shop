<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    public function orderDetails(): HasMany
    {
        return $this->hasMany(OrderDetail::class, 'id_order');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function products(): array
    {
        $orderDetails = $this->orderDetails()->get();
        $products = [];
        foreach ($orderDetails as $orderDetail) {
            $products[] = $orderDetails->product;
        }
        return $products;
    }


}
