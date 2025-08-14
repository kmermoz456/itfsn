<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ViewController::class,'index'])->name('home');
Route::get('/temoi',[ViewController::class,'temoi'])->name('temoi');
Route::get('/contact',[ViewController::class,'contact'])->name('contact');
Route::get('/itf',[ViewController::class,'itf'])->name('itf');
Route::get('/cours',[ViewController::class,'cours'])->name('cours');
Route::get('/blog',[ViewController::class,'blog'])->name('blog');
Route::get('/inscription', [StudentController::class, 'index'])->name('students.create');
Route::post('/inscription', [StudentController::class, 'create'])->name('students.store');

