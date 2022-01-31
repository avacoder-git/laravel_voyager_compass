<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group( ['prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {


        Route::get('/', function () {

            return view('site.index');
        });

        Route::get("/news", [SiteController::class, 'newsBrowse'])->name("news.browse");
        Route::get("/news/{news}", [SiteController::class, 'newsIndex'])->name("news.index");
        Route::get("/courses", [SiteController::class, 'courses'])->name("courses.browse");
        Route::get("/register", [SiteController::class, 'register'])->name("register");
        Route::post("/register", [SiteController::class, 'registerStore'])->name("register.post");
        Route::get("/success", function (){
            return view('site.success');
        })->name("register.success");
        Route::get("/results", [SiteController::class, 'results'])->name("results.browse");
        Route::get("/about", function (){
            return view('site.about');
        })->name("about");

    });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


