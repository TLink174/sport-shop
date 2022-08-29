<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    use SoftDeletes;
    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class, 'id_category');
    }
    public function parent(): HasOne
    {
        return $this->hasOne(Category::class, 'id_category', 'parent_id');
    }
    public function children(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id', 'id_category');
    }
    public function blogBySlug($slug): HasMany
    {
        return $this->hasMany(Blog::class, 'id_category')->where('slug', $slug);
    }
    public function findAllHaveSoftDeletes()
    {
        return $this->withTrashed();
    }
    public function findAllNotHaveSoftDeletes()
    {
        return $this->withoutTrashed();
    }


}
