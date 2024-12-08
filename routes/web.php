<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceDetailsController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('home', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('news', [HomeController::class, 'homepage1']);
Route::get('service_details/{id}', [ServiceDetailsController::class, 'index']);
<<<<<<< HEAD
//Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');
=======

>>>>>>> 9df9d5599493e92f435a04226c06ea7de51f727e
// Route::get('post', [HomeController::class, 'post'])->middleware(['auth', 'admin']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('services', ServiceController::class);
    Route::resource('faq', FaqController::class);
    Route::delete('/services/liststuffs{id}', [ServiceController::class, 'deleteListstuff'])->name('services.delete-liststuff');
});

 // Route untuk detail service


require __DIR__.'/auth.php';
