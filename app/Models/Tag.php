<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory;
    protected $guarded = [];
    use SoftDeletes;
    public function blogs(): BelongsToMany
    {
        return $this->belongsToMany(Blog::class, BlogTag::class, 'id_tag', 'id_blog');
    }
}
