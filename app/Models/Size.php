<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Size extends Model
{
    use HasFactory;
    protected $guarded = [];
    use SoftDeletes;
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, ProductSize::class, 'id_size', 'id_product');

    }
}
