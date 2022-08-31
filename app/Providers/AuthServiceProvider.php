<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Permission;
use App\Models\PermissionCategory;
use App\Models\Role;
use App\Models\Tag;
use App\Models\User;
use App\Policies\BlogPolicy;
use App\Policies\CategoryPolicy;
use App\Policies\PermissionCategoryPolicy;
use App\Policies\PermissionPolicy;
use App\Policies\RolePolicy;
use App\Policies\TagPolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [

        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Category::class => CategoryPolicy::class,
        Blog::class => BlogPolicy::class,
        Permission::class=> PermissionPolicy::class,
        Role::class => RolePolicy::class,
        PermissionCategory::class => PermissionCategoryPolicy::class,
        User::class => UserPolicy::class,
        Tag::class => TagPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //Category Gate
        Gate::define('category-list', [CategoryPolicy::class, 'viewAny']);
        Gate::define('category-view', [CategoryPolicy::class, 'view']);
        Gate::define('category-create', [CategoryPolicy::class, 'create']);
        Gate::define('category-update', [CategoryPolicy::class, 'update']);
        Gate::define('category-delete', [CategoryPolicy::class, 'delete']);
        Gate::define('category-restore', [CategoryPolicy::class, 'restore']);

        //Blog Gate
        Gate::define('blog-list', [BlogPolicy::class, 'viewAny']);
        Gate::define('blog-view', [BlogPolicy::class, 'view']);
        Gate::define('blog-create', [BlogPolicy::class, 'create']);
        Gate::define('blog-update', [BlogPolicy::class, 'update']);
        Gate::define('blog-delete', [BlogPolicy::class, 'delete']);
        Gate::define('blog-restore', [BlogPolicy::class, 'restore']);

        //Permission Gate
        Gate::define('permission-list', [PermissionPolicy::class, 'viewAny']);
        Gate::define('permission-view', [PermissionPolicy::class, 'view']);
        Gate::define('permission-create', [PermissionPolicy::class, 'create']);
        Gate::define('permission-update', [PermissionPolicy::class, 'update']);
        Gate::define('permission-delete', [PermissionPolicy::class, 'delete']);
        Gate::define('permission-restore', [PermissionPolicy::class, 'restore']);

        //PermissionCategory Gate
        Gate::define('permission-category-list', [PermissionCategoryPolicy::class, 'viewAny']);
        Gate::define('permission-category-view', [PermissionCategoryPolicy::class, 'view']);
        Gate::define('permission-category-create', [PermissionCategoryPolicy::class, 'create']);
        Gate::define('permission-category-update', [PermissionCategoryPolicy::class, 'update']);
        Gate::define('permission-category-delete', [PermissionCategoryPolicy::class, 'delete']);
        Gate::define('permission-category-restore', [PermissionCategoryPolicy::class, 'restore']);

        //Role Gate
        Gate::define('role-list', [RolePolicy::class, 'viewAny']);
        Gate::define('role-view', [RolePolicy::class, 'view']);
        Gate::define('role-create', [RolePolicy::class, 'create']);
        Gate::define('role-update', [RolePolicy::class, 'update']);
        Gate::define('role-delete', [RolePolicy::class, 'delete']);
        Gate::define('role-restore', [RolePolicy::class, 'restore']);

        //User Gate
        Gate::define('user-list', [UserPolicy::class, 'viewAny']);
        Gate::define('user-view', [UserPolicy::class, 'view']);
        Gate::define('user-create', [UserPolicy::class, 'create']);
        Gate::define('user-update', [UserPolicy::class, 'update']);
        Gate::define('user-delete', [UserPolicy::class, 'delete']);
        Gate::define('user-restore', [UserPolicy::class, 'restore']);

        //Tag Gate
        Gate::define('tag-list', [TagPolicy::class, 'viewAny']);
        Gate::define('tag-view', [TagPolicy::class, 'view']);
        Gate::define('tag-create', [TagPolicy::class, 'create']);
        Gate::define('tag-update', [TagPolicy::class, 'update']);
        Gate::define('tag-delete', [TagPolicy::class, 'delete']);
        Gate::define('tag-restore', [TagPolicy::class, 'restore']);





    }
}
