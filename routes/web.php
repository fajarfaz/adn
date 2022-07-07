<?php

require __DIR__.'/auth.php';
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
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');	
#AUTH
Route::group(['middleware' => ['auth:sanctum'], 'prefix' => 'admin'], function() {
	Route::resource('categories', App\Http\Controllers\CategoryController::class);
	Route::resource('tags', App\Http\Controllers\TagController::class);
	#POST
	Route::resource('posts', App\Http\Controllers\PostController::class);
	Route::get('/post-trash',[App\Http\Controllers\PostController::class, 'trash'])->name('posts.trash');
	Route::post('/post-trash/{slug}/restore',[App\Http\Controllers\PostController::class, 'restore'])->name('posts.restore');
	Route::delete('/post-trash/{slug}/destroy',[App\Http\Controllers\PostController::class, 'deletePermanent'])->name('posts.deletePermanent');
});