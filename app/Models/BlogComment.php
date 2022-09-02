<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogComment extends Model
{
    use HasFactory;
    protected $guarded = [];
    use SoftDeletes;
    public function blog () : BelongsTo{
        return $this->belongsTo(Blog::class, 'id_blog');
    }
    public function comment (): BelongsTo{
        return $this->belongsTo(Comment::class, 'id_comment');
    }
}
