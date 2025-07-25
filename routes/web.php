<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('home.index');
})->name('home.index');

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('course', [HomeController::class, 'course'])->name('home.course');

Route::get('register', [HomeController::class, 'register'])->name('home.register');

Route::get('login', [HomeController::class, 'login'])->name('home.login');

Route::get('teachers', [TeacherController::class, 'index'])->name('teachers.index');

Route::get('create-teachers', [TeacherController::class, 'create'])->name('teachers.create');

Route::get('courses', [CourseController::class, 'index'])->name('courses.index');

Route::get('create-course',[CourseController::class, 'create'])->name('courses.create');