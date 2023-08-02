<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login'); 

Route::get('register', [AuthController::class, 'register_view'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register'); 

Route::get('adduser', [AuthController::class, 'adduser_view'])->name('adduser');
Route::post('adduser', [AuthController::class, 'adduser'])->name('adduser');



Route::group(['middleware'=>'auth'],function()
{
    Route::get('home', [AuthController::class, 'home']); 
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});


Route::get('list-users', [AuthController::class, 'listusers'])->name('list-users');
Route::get('show-user', [AuthController::class, 'show-user'])->name('show-user');
Route::get('edit-user/{id}', [AuthController::class, 'edituser'])->name('edit-user');
// Route::delete('delete-user', [AuthController::class, 'deleteuser'])->name('delete-user');
Route::get('update-user/{id}', [AuthController::class, 'updateUser'])->name('update-user');
Route::get('delete-user/{id}', [AuthController::class, 'delete'])->name('delete-user');











