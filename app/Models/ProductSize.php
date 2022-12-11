<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductSize extends Model
{
    use HasFactory;
    public function size():belongsTo
    {
        return $this->belongsTo(Size::class, 'id_size');
    }
    public function product():belongsTo
    {
        return $this->belongsTo(Product::class, 'id_product');
    }
}
