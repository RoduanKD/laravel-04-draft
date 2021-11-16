<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\Setting;
use App\Models\User;
use Gate;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::defaultView('pagination-bulma::bulma');
        Paginator::defaultSimpleView('pagination-bulma::bulma-simple');
        View::share('settings', Setting::all());

        Gate::define('update-post', function (User $user, Post $post) {
            return $user->id === $post->user_id;
        });
    }
}
