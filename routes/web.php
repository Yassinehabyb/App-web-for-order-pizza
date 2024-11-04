<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('pizzas.welcome');
});

Route::get('/pizzas', [PizzaController::class,'index'])->name("pizzas.index")->middleware('auth');

Route::get('/pizzas/create', [PizzaController::class,'create'])->name("pizzas.create");

Route::post('/pizzas', [PizzaController::class,'store'])->name("pizzas.store");

Route::get('/pizzas/{id}', [PizzaController::class,'show'])->name("pizzas.show")->middleware('auth');

Route::delete('/pizzas/{id}', [PizzaController::class,'destroy'])->name("pizzas.destroy")->middleware('auth');

Auth::routes([
    'register' => false,
]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);