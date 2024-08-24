<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Auth\LessorController;
use App\Http\Controllers\Auth\RenterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them
| will be assigned to the "web" middleware group. Make something great!
|
*/

// الصفحات الثابتة
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

// Route::get('/home', function () {
//     return view('Route::get('/home', [PropertyController::class, 'home'])->name('register');
// );
// })->name('home');

Route::get('/agents', function () {
    return view('frontend.agents');
})->name('agents');

Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/viewProfile', function () {
    return view('frontend.profile');
})->name('viewProfile');

Route::get('/property-comparison', function () {
    return view('frontend.property-comparison');
})->name('property-comparison');

// Route::get('/property-details', function () {
//     return view('frontend.property-details');
// })->name('property-details');

Route::get('/property-submit', function () {
    return view('frontend.property-submit');
})->name('property-submit');

// Route::get('/property', function () {
//     return view('frontend.property');
// })->name('property');


Route::get('/login_register', function () {
    return view('login_register');
})->name('login_register');

// تسجيل مستخدم جديد
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

// تسجيل الدخول
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');

// لوحة تحكم الـ Admin
// Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

// لوحة تحكم الـ Lessor
Route::get('/lessor/dashboard', [LessorController::class, 'index'])->name('lessor.dashboard');

// لوحة تحكم الـ Renter
// Route::get('/renter/dashboard', [RenterController::class, 'index'])->name('renter.dashboard');

// تسجيل الخروج
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// ------------------------------------ for home----------------------------------
Route::get('/home', [PropertyController::class, 'home'])->name('home');
Route::get('/property-details/{id}', [PropertyController::class, 'property'])->name('viewProperty');
Route::get('/property', [PropertyController::class, 'AllProperty'])->name('property');
