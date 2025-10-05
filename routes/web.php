<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\ProductController;
// Home (your Vue)
Route::get('/', function () {
    return view('welcome');
});

// Task 3 – Simple JSON
Route::get('/hello', [TestController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);
// Task 4 – Email Form
Route::get('/email-form', [FormController::class, 'showForm']);
Route::post('/email-form', [FormController::class, 'handleForm']);

// Task 8 – Blade Greeting
Route::get('/greet', [GreetingController::class, 'showGreeting']);
