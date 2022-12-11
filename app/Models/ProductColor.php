<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductColor extends Model
{
    use HasFactory;
    public function color():belongsTo
    {
        return $this->belongsTo(Color::class, 'id_color');
    }
    public function product():belongsTo
    {
        return $this->belongsTo(Product::class, 'id_product');
    }
}
