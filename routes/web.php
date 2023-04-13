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


Route::middleware(['auth', 'admin'])->prefix(env('ADMIN_PATH'))->group(function () {

    Route::get("/dashboard", [\App\Http\Controllers\WebControllner::class, "home"]);


    Route::prefix('newspaper')->group(function () {

        Route::get('/list', [\App\Http\Controllers\NewspaperControllner::class, "list"]);


        Route::get('/details-c/{newspaper:slug}', [\App\Http\Controllers\NewspaperControllner::class, "details"])->name('newspaper.details');

        Route::put('/details-b/{newspaper}', [\App\Http\Controllers\NewspaperControllner::class, "lenLich"])->name('newspaper_lenlich');
        Route::get('/details-a/{newspaper}', [\App\Http\Controllers\NewspaperControllner::class, "khongDuyetBai"])->name('newspaper.khongduyet');

        Route::get('/create', [\App\Http\Controllers\NewspaperControllner::class, "create"]);
        Route::post('/create', [\App\Http\Controllers\NewspaperControllner::class, "save"]);
        Route::get('/bai-viet-cua-toi', [\App\Http\Controllers\NewspaperControllner::class, "myNews"]);
        Route::get('/edit/{newspaper}', [\App\Http\Controllers\NewspaperControllner::class, "edit"])->name('newspaper.edit');
        Route::put('/edit/{newspaper}', [\App\Http\Controllers\NewspaperControllner::class, "update"])->name('newspaper.update');
        Route::get('/list/{newspaper}', [\App\Http\Controllers\NewspaperControllner::class, "goBai"])->name('newspaper.gobai');
        Route::delete('/list/{newspaper}', [\App\Http\Controllers\NewspaperControllner::class, "xoaBai"])->name('newspaper.xoabai');


    });


    Route::prefix('user')->group(function () {
        Route::get('/list', [\App\Http\Controllers\UserControllner::class, "list"]);
        Route::get('/create', [\App\Http\Controllers\UserControllner::class, "create"]);
        Route::post('/create-a', [\App\Http\Controllers\UserControllner::class, "save"]);
        Route::delete("/list/{user}", [\App\Http\Controllers\UserControllner::class, "delete"])->name('user.xoaphongvien');



    });

    Route::prefix('title')->group(function () {
        Route::get("/list", [\App\Http\Controllers\TitleControllner::class, "list"]);
        Route::get('/create', [\App\Http\Controllers\TitleControllner::class, "create"]);
        Route::post('/create-a', [\App\Http\Controllers\TitleControllner::class, "save"]);


    });
    Route::prefix('comment')->group(function () {
        Route::get("/list", [\App\Http\Controllers\CommentControllner::class, "list"]);
        Route::delete("/list/{comment}", [\App\Http\Controllers\CommentControllner::class, "delete"])->name('comment.xoabinhluan');
        Route::post('/create-a', [\App\Http\Controllers\CommentControllner::class, "save"]);


    });


});


Route::get("/", [\App\Http\Controllers\GuestControllner::class, "index"]);
Route::get("/single-page/{newspaper:slug}", [\App\Http\Controllers\GuestControllner::class, "singlePage"]);
Route::get("/cong-nghe", [\App\Http\Controllers\GuestControllner::class, "congNghePage"])->name('thoisu');
Route::get("/du-lich", [\App\Http\Controllers\GuestControllner::class, "duLichPage"]);
Route::get("/giai-tri", [\App\Http\Controllers\GuestControllner::class, "giaiTriPage"]);
Route::get("/giao-duc", [\App\Http\Controllers\GuestControllner::class, "giaoDucPage"]);
Route::get("/kinh-doanh", [\App\Http\Controllers\GuestControllner::class, "kinhDoanhPage"]);
Route::get("/phap-luat", [\App\Http\Controllers\GuestControllner::class, "phapLuatPage"]);
Route::get("/the-gioi", [\App\Http\Controllers\GuestControllner::class, "theGioiPage"]);
Route::get("/the-thao", [\App\Http\Controllers\GuestControllner::class, "theThaoPage"]);
Route::get("/thoi-su", [\App\Http\Controllers\GuestControllner::class, "thoiSuPage"]);
Route::get("/van-hoa", [\App\Http\Controllers\GuestControllner::class, "vanHoaPage"]);
Route::get("/xe", [\App\Http\Controllers\GuestControllner::class, "xePage"]);
Route::post("/aa", [\App\Http\Controllers\CommentControllner::class, "store"]);


Route::post('test-ajax', [\App\Http\Controllers\CommentControllner::class, "demoAjax"])->name('test.ajax');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

