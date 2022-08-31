<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Blog;
use App\Models\Category;
use App\Policies\BlogPolicy;
use App\Policies\CategoryPolicy;
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
        Gate::define('category-create', [CategoryPolicy::class, 'create']);
        Gate::define('category-update', [CategoryPolicy::class, 'update']);
        Gate::define('category-delete', [CategoryPolicy::class, 'delete']);
        Gate::define('category-restore', [CategoryPolicy::class, 'restore']);

        //Blog Gate
        Gate::define('blog-list', [BlogPolicy::class, 'viewAny']);
        Gate::define('blog-create', [BlogPolicy::class, 'create']);
        Gate::define('blog-update', [BlogPolicy::class, 'update']);
        Gate::define('blog-delete', [BlogPolicy::class, 'delete']);
        Gate::define('blog-restore', [BlogPolicy::class, 'restore']);


    }
}
