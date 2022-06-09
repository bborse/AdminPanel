<?php

use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\LoginControllers;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/welcome', function () {
    // return Inertia::render('Welcome', 
    // [
    //     'canLogin' => Route::has('login'),
    //     'canRegister' => Route::has('register'),
    //     'laravelVersion' => Application::VERSION,
    //     'phpVersion' => PHP_VERSION,
    // ]
// );
});

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/dashboard/new', function () {
    return Inertia::render('Dashboard');
})->name('admin.dashboard.new');

Route::controller(LoginControllers::class)->group(function () {
    Route::get('/', 'login')->name('admin.login');
    Route::post('login/post', 'loginPost')->name('login.post');
});

Route::controller(AdminControllers::class)->group(function () {
    Route::get('admin-dashboard', 'index')->name('admin');
    Route::get('user-index', 'user')->name('user');
    Route::get('user-create', 'create')->name('user-create');
    Route::get('user-store', 'store')->name('user-store');
});


