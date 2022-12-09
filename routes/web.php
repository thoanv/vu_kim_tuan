<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\HomeController;
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
});


require __DIR__.'/auth.php';
