<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionCategory extends Model
{
    use HasFactory;
    protected $guarded=[];
    use SoftDeletes;
    public function permissions(): HasMany
    {
        return $this->hasMany(Permission::class, 'id_permission_category');
    }

}
