<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
//
//Route::get('/', function () {
//    return view('admin.layout');
//});


Route::middleware(['auth','admin'])->prefix(env('ADMIN_PATH'))->group(function () {

    Route::get("/dashboard", [\App\Http\Controllers\WebControllner::class, "home"]);


    Route::prefix('newspaper')->group(function () {

        Route::get('/list', [\App\Http\Controllers\NewspaperControllner::class, "list"]);
        Route::get('/create', [\App\Http\Controllers\NewspaperControllner::class, "create"]);
        Route::post('/create', [\App\Http\Controllers\NewspaperControllner::class, "save"]);


    });


});


Route::prefix('title')->group(function () {
    Route::get("/title", [\App\Http\Controllers\TitleControllner::class, "list"]);


});


Route::get("/", [\App\Http\Controllers\GuestControllner::class,"index"]);
Route::get("/single-page", [\App\Http\Controllers\GuestControllner::class,"singlePage"]);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

