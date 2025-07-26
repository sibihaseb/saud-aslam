<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\IndexController;
use App\Http\Controllers\Dashboard\ProjectController;
use App\Http\Controllers\Dashboard\TvAdminUserController;
use App\Http\Controllers\ContactController;


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

Route::get('/', [IndexController::class, 'landing']);
Route::get('landing', [IndexController::class, 'landing']);
Route::get('project/{id}', [IndexController::class, 'project'])->name('project.display');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('pages.welcome');
    });
    Route::resource('adminuser', TvAdminUserController::class);
    Route::resource('projects', ProjectController::class);
    Route::post('projectimage', [ProjectController::class, 'deleteImage'])->name('image.delete');
    Route::post('projectfile/{id}', [ProjectController::class, 'uploadfile']);
    // Show contact form (GET)
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.show');
    Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
    Route::post('/contact/bulk-delete', [ContactController::class, 'bulkDelete'])->name('contact.bulkDelete');
});
// Submit contact form (POST)
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');

//resume
Route::get('/resume', [IndexController::class, 'resume'])->name('resume');
