<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        $filename = \App\Article::get()->last() ? \App\Article::get()->last()->filename : 'No Article';
        View::share('lastPostedArticle', $filename);

        /*View::composer('master', function ($view){
            return $view->with('count', \App\Article::count());
        });*/
    }
}
