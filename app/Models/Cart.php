<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = [];
    use SoftDeletes;

    public function cartDetails(): HasMany
    {
        return $this->hasMany(CartDetail::class, 'id_cart');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function products(): array
    {
        $cartDetails = $this->cartDetails()->get();
        $products = [];
        foreach ($cartDetails as $cartDetail) {
            $products[] = $cartDetail->product;
        }
        return $products;
    }

}
