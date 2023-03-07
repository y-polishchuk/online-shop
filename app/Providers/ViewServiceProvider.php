<?php

namespace App\Providers;

use App\Models\Admin\Category;
use App\Models\Wishlist;
use Auth;
use Illuminate\Support\Facades;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Facades\View::composer('layouts.app', function (View $view) {
            $view->with(['categories' => Category::all(), 'wishlist' => Wishlist::where('user_id', Auth::id())->get()]);
        });
    }
}