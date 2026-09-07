<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ClaimController;

Route::get('/', function () {
    return view("index");
});

Route::get('abouts',[AdminController::class , 'abouts'])->name("abouts");

Route::get('blogs',[AdminController::class , 'blogs'])->name("blogs");

Route::get('form',[AdminController::class , 'form'])->name("form");

Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);

Route::post('/create',[AdminController::Class, 'create'])->name('create');
Route::post('/form/insert',[AdminController::class, 'insert']);


Route::get('/delete/{id}',[AdminController::class, 'delete']);
Route::get('/change/{id}',[AdminController::class, 'change']);
Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [AdminController::class, 'update']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
