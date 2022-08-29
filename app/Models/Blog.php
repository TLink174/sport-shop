<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];
    use SoftDeletes;
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
    public function getAllHasSoftDeletes()
    {
        return $this->withTrashed();
    }
    public function findHasSoftDeletes($id)
    {
        return $this->withTrashed()->find($id);
    }
}
