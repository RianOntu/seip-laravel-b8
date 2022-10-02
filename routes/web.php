<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//http verbs: get, post, put/patch, delete

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});



Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/categories/{id}/delete', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');


Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');

Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');

Route::put('/students/{id}/update', [StudentController::class, 'update'])->name('students.update');


Route::get('/students/{id}/delete', [StudentController::class, 'destroy'])->name('students.destroy');





Route::get('/profile', function () {
    return view('users.profile');
});

Route::get('/home', function () {
    return view('home');
});

Route::prefix('admin')->group(function () {

    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');

        // Route::get('/{id}', function ($userId) {
        //     dd('showing---->' . $userId);
        // })->name('show');

        Route::get('/{id}', [UserController::class, 'show'])->name('show');
    });
});

Route::fallback(function () {
    dd('Tomar chaoa puron korte parbona.....');
});
