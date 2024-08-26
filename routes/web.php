<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
// use App\Http\Middleware\Admin;
// use App\Models\Admin;

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

Route::get('/', [HomeController::class, 'homepage']);
// Route::get('/login1', function(){
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home'); 
Route::get('/news', [HomeController::class, 'homepage1'])->middleware('auth')->name('home'); 
Route::get('/post_details/{id}', [HomeController::class, 'post_details']);
// Route::get('post', [HomeController::class, 'post'])->middleware(['auth', 'admin']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/post_page', [AdminController::class, 'index']);
    Route::post('/add_post', [AdminController::class, 'store']);
    Route::get('/show_post', [AdminController::class, 'show']);
    Route::get('/delete_post/{id}', [AdminController::class, 'destroy']);
    Route::get('/edit_post/{id}', [AdminController::class, 'edit']);
    Route::post('/update_post/{id}', [AdminController::class, 'update']);
    
});

require __DIR__.'/auth.php';
