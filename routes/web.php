<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Ajax\AjaxController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('/information', [InformationController::class, 'edit'])->name('information.edit');
    Route::post('/information', [InformationController::class, 'update'])->name('information.update');
    Route::resources([
        'posts' => PostController::class,
        'slides' => SlideController::class,
    ]);
    //Ajax
    Route::post('enable-column', [AjaxController::class, 'enableColumn'])->name('enable-column');
});


require __DIR__.'/auth.php';
