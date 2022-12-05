<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ComunityController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ComentaryController;
use App\Http\Controllers\UserStatusController;
use App\Http\Controllers\AdminPaymentController;
use App\Http\Controllers\UserComunityController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\UserManagementController;

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

Route::get('/', [PostController::class, 'index']);
Route::get('/blog', [PostController::class, 'blog']);
Route::get('/post/{post:slug}', [PostController::class, 'post']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'autenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

Route::resource('/dashboard/users', UserManagementController::class)->middleware('admin');

// Route::get('/dashboard/payments', [AdminPaymentController::class, 'index'])->middleware('auth');
// Route::get('/dashboard/payments/{payment:id}', [AdminPaymentController::class, 'edit'])->middleware('auth');
// Route::put('/dashboard/payments/{payment:id}', [AdminPaymentController::class, 'edit'])->middleware('auth');

Route::resource('/dashboard/payments', AdminPaymentController::class)->middleware('auth');

Route::get('/user-comunity/{user:username}', 'App\Http\Controllers\UserComunityController@comunity')->middleware('auth');
Route::get('/user-comunity-post/{user:username}', 'App\Http\Controllers\UserComunityController@post')->middleware('auth');

Route::resource('/comentary', ComentaryController::class)->middleware('auth');

Route::get('/dashboard/status/{user:id}', [UserStatusController::class, 'index'])->middleware('auth');
Route::get('/dashboard/status/{payment:id}/show', [UserStatusController::class, 'show'])->middleware('auth');

Route::get('/payment', [PaymentController::class, 'index'])->middleware('auth');
Route::get('/payment/instruksi', [PaymentController::class, 'instruksi'])->middleware('auth');
Route::get('/payment/instruksi/create', [PaymentController::class, 'create'])->middleware('auth');
Route::post('/payment/instruksi/create', [PaymentController::class, 'store']);

Route::resource('/comunity', ComunityController::class)->middleware('auth');


