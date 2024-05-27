<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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

Route::name('site.')->group(function () {
    Route::get('/',[PagesController::class, 'home'])->name('home');
    Route::get('/about',[PagesController::class, 'about'])->name('about');
    Route::get('/service',[PagesController::class, 'service'])->name('service');
    Route::get('/contact',[PagesController::class, 'contact'])->name('contact');
    Route::get('/feature',[PagesController::class, 'feature'])->name('feature');
    Route::get('/appointment',[PagesController::class, 'appointment'])->name('appointment');
    Route::get('/doctor',[PagesController::class, 'doctor'])->name('doctor');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
