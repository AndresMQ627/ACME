<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PlanosController;

Route::get('/', function () {
    return view('admin.dashboard');
});
Route::group(['prefix'=>'dashboard'],function(){
    Route::get("/",function(){
        return view('admin.dashboard');
    });
    Route::get("/users",[UsersController::class,'getUsers']);
    Route::get("/planos",[PlanosController::class,'getPlanos']);
    Route::post("/planos",[PlanosController::class,'createPlano']);
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
