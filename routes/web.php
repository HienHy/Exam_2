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

Route::get('/', function () {
    return view('admin.layout');
});


Route::middleware(['auth','admin'])-> prefix(env('ADMIN_PATH'))->group(function () {

    Route::get("/dashboard", [\App\Http\Controllers\WebControllner::class, "home"]);


    Route::prefix('newspaper')->group(function (){






    });


    });








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
