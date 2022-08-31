<?php

namespace App\Policies;

use App\Models\PermissionCategory;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermissionCategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        if ($user->isAdmin()) {
            return true;
        }
        return $user->hasPermissionTo('permission-category-list');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PermissionCategory  $permissionCategory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user)
    {
        if ($user->isAdmin()) {
            return true;
        }
        return $user->hasPermissionTo('permission-category-view');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        if ($user->isAdmin()) {
            return true;
        }
        return $user->hasPermissionTo('permission-category-create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PermissionCategory  $permissionCategory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user)
    {
        if ($user->isAdmin()) {
            return true;
        }
        return $user->hasPermissionTo('permission-category-update');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PermissionCategory  $permissionCategory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user)
    {
        if ($user->isAdmin()) {
            return true;
        }
        return $user->hasPermissionTo('permission-category-delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PermissionCategory  $permissionCategory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user)
    {
        if ($user->isAdmin()) {
            return true;
        }
        return $user->hasPermissionTo('permission-category-restore');
    }


    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PermissionCategory  $permissionCategory
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user)
    {
        if ($user->isAdmin()) {
            return true;
        }
        return $user->hasPermissionTo('permission-category-force-delete');
    }
}
