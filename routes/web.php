<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/events', [FrontendController::class, 'events'])->name('events');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/menu', [FrontendController::class, 'menu'])->name('menu');
Route::get('/menu2', [FrontendController::class, 'menu2'])->name('menu2');
Route::get('/subscription', [FrontendController::class, 'subscription'])->name('subscription');
Route::get('/chef', [FrontendController::class, 'chef'])->name('chef');
Route::get('/page', [FrontendController::class, 'page'])->name('page');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/team', [FrontendController::class, 'team'])->name('team');
Route::get('/booking', [FrontendController::class, 'booking'])->name('booking');
Route::get('/testimonial', [FrontendController::class, 'testimonial'])->name('testimonial');
