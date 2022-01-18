<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

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
//        view share
//        \Illuminate\Support\Facades\View::share('my',(Object)["name"=>"Min Khant","age"=>"20"]);
        Paginator::useBootstrap();
        Blade::if('isAdmin',function (){
            return Auth::user()->role == 0;
        });

        DB::listen(function ($q){
            logger($q->sql,$q->bindings);
        });
//        Check table
//        if (Schema::hasTable('categories')){
//
//        }
        \Illuminate\Support\Facades\View::composer(['welcome','auth.login'],function (){
            \Illuminate\Support\Facades\View::share('my',Category::all());
        });
    }


}
