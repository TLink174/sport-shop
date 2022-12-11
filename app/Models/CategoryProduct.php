<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryProduct extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    public function products():hasMany
    {
        return $this->hasMany(Product::class, 'id_category');
    }
    public function findAllHaveSoftDeletes()
    {
        return $this->withTrashed();
    }

}
