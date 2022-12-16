<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Testing\Fluent\Concerns\Has;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function blogs(): HasMany
    {
        return $this->HasMany(Blog::class, 'id_user');
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, UserRole::class, 'id_user', 'id_role');
    }

    public function details(): BelongsTo
    {
        return $this->belongsTo(UserDetail::class, 'id_user');
    }

    public function checkPermission($value): bool
    {
        $roles = $this->roles()->get();
        foreach ($roles as $role) {
            $permission = $role->permissions;
            if ($permission->contains('slug', $value)) {
                return true;
            }
        }
        return false;
    }

    public function permissions()
    {
        $roles = $this->roles()->get();
        $permissions = [];
        foreach ($roles as $role) {
            foreach ($role->permissions as $permission) {
                $permissions[] = $permission;
            }
        }
        return $permissions;
    }

    public function hasPermissionTo($string): bool
    {
        return $this->checkPermission($string);
    }

//    public function isUser()
//    {
//        if ($this->isAdmin()) {
//            return true;
//        }
//        $roles = $this->roles()->get();
//        foreach ($roles as $role) {
//            if ($role->slug == 'blog-manager') {
//                return true;
//            }
//        }
//    }

    public function isAdmin()
    {
        if ($this->name == 'admin') {
            return true;
        }
        $role = $this->roles()->get();
        foreach ($role as $item) {
            if ($item->slug == 'admin') {
                return true;
            }
        }
        return false;
    }

    public function getParent(): array
    {
        $permissions = $this->permissions();
        $parent = [];
        foreach ($permissions as $permission) {

            $parent_name = strtolower($permission->permissionCategory->slug);
            if (!in_array($parent_name, $parent)) {
                $parent[] = $parent_name;
            }
        }
        return $parent;
    }

    public function checkAllow($value): bool
    {
        if ($this->isAdmin()) {
            return true;
        }
        $permissions = $this->getParent();
        foreach ($permissions as $permission) {
            if ($permission == $value) {
                return true;
            }
        }
        return false;
    }

    public function cart(): HasOne
    {
        return $this->hasOne(Cart::class, 'id_user');
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'id_user');
    }


}
