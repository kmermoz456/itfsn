<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\StudentController as AdminStudentController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ViewController::class,'index'])->name('home');
Route::get('/temoi',[ViewController::class,'temoi'])->name('temoi');

Route::get('/itf',[ViewController::class,'itf'])->name('itf');
Route::get('/cours',[ViewController::class,'cours'])->name('cours');



Route::get('/inscription', [StudentController::class, 'create'])->name('students.create');
Route::post('/inscription', [StudentController::class, 'store'])->name('students.store');


Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login.form');
Route::post('/admin/login', [AuthController::class, 'login'])
    ->middleware('throttle:5,1') // 5 tentatives par minute
    ->name('admin.login');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::middleware('admin.gate')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); 
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('/posts', PostController::class);
    Route::get('/students', [AdminStudentController::class, 'index'])->name('students.index');
});

Route::post('/admin/uploads/image', [UploadController::class, 'image'])
    ->name('admin.upload.image');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');