<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
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

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, UserRole::class, 'id_user', 'id_role');
    }

    public function details(): BelongsTo
    {
        return $this->belongsTo(UserDetail::class, 'id_user');
    }
    public function checkPermission($permissioncheck){
        $roles = $this->roles()->get();
        foreach ($roles as $role){
            $permission = $role->permissions;
            if( $permission ->contains('slug',$permissioncheck)){
                return true;
            }
        }
        return false;
    }
    public function permissions(){
        $roles = $this->roles()->get();
        $permissions = [];
        foreach ($roles as $role){
            foreach ($role->permissions as $permission){
                $permissions[] = $permission->slug;
            }
        }
        return $permissions;
    }



}
