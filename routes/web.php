<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\IndexController;
use App\Http\Controllers\Dashboard\TvAdminUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index']);

Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', function () {
        return view('pages.welcome');
    });
    Route::resource('adminuser', TvAdminUserController::class);
    // Route::post('setappconfig', [IndexController::class, 'appCodeSet']);
    // Route::resource('category', CategoryContoller::class);
    // Route::resource('genre', GenreContoller::class);
    // Route::resource('streamquality', TvStreamQualityContoller::class);
    // Route::resource('rating', TvRatingContoller::class);
    // Route::resource('actor', TvActorContoller::class);
    // Route::resource('contentadvisory', TvContentAdvisoryContoller::class);
});
