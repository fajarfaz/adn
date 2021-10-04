<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PortfolioController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');



Route::group(['middleware' => ['auth:sanctum'], 'prefix' => 'user', 'as' => 'user.'], function() {
	Route::get('/portfolio', [PortfolioController::class, 'index'])->name('index');
	Route::post('/portfolio', [PortfolioController::class, 'store']);
	Route::patch('/portfolio/edit/{id}', [PortfolioController::class, 'update']);
	Route::delete('/portfolio/delete/{id}', [PortfolioController::class, 'delete']);
});
