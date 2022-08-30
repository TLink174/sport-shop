<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded=[];
    public function permissions():BelongsToMany
    {
        return $this->belongsToMany(Permission::class, RolePermission::class, 'id_role', 'id_permission');
    }
    public function users():BelongsToMany
    {
        return $this->belongsToMany(User::class, UserRole::class, 'id_role', 'id_user');
    }


}
