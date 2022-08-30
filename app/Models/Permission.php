<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use HasFactory;
    protected $guarded=[];
    use SoftDeletes;
    public function permissionCategory(): BelongsTo
    {
        return $this->belongsTo(PermissionCategory::class, 'id_permission_category');
    }
}
