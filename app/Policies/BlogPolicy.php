<?php

namespace App\Policies;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        if ($user->isAdmin()|| $user->isBlogManager()) {
            return true;
        }
        return $user->hasPermissionTo('blog-list');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, $id)
    {
        if ($user->isAdmin()|| $user->isBlogManager()) {
            return true;
        }
        $blog = Blog::withTrashed()->find($id);
        if ($user->hasPermissionTo('blog-view') && $user->id == $blog->id_user) {
            return true;
        }
    }


    /**
     * Determine whether the user can create models.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        if ($user->isAdmin()|| $user->isBlogManager()) {
            return true;
        }
        return $user->hasPermissionTo('blog-create');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, $id)
    {
        if ($user->isAdmin()|| $user->isBlogManager()) {
            return true;
        }
        $blog = Blog::withTrashed()->find($id);
        if ($user->hasPermissionTo('blog-update') && $user->id == $blog->id_user) {
            return true;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public
    function delete(User $user, $id)
    {
        if ($user->isAdmin()|| $user->isBlogManager()) {
            return true;
        }
        $blog = Blog::withTrashed()->find($id);
        if ($user->hasPermissionTo('blog-delete') && $user->id == $blog->id_user) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, $id)
    {
        if ($user->isAdmin()|| $user->isBlogManager()) {
            return true;
        }
        $blog = Blog::withTrashed()->find($id);
        if ($user->hasPermissionTo('blog-restore') && $user->id == $blog->id_user) {
            return true;
        }
        return false;
    }


    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Blog $blog)
    {
        //
        if ($user->isAdmin()|| $user->isBlogManager()) {
            return true;
        }
        if ($user->hasPermissionTo('blog-force-delete') && $blog->id_user == $user->id) {
            return true;
        }
        return false;

    }
}
