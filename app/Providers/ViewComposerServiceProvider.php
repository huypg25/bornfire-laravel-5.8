<?php

namespace App\Providers;
use App\Models\Brand;
use App\Models\Post;
use App\Models\Product;
use Cart;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer('site.partials.header', function ($view) {
            $view->with('categories', Category::orderByRaw('-name ASC')->get()->nest());
        });
        View::composer('site.partials.header', function ($view) {
            $view->with('cartCount', Cart::getContent()->count());
        });
        View::composer('site.pages.homepage', function ($view) {
            $view->with('products', Product::all());

        });
        View::composer('site.pages.homepage', function ($view) {
            $view->with('posts', Post::all());

        });
        View::composer('site.pages.homepage', function ($view) {
            $view->with('brands', Brand::all());

        });

    }
}
