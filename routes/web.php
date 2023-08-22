<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\StandardController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\Assign_Chapter_Controller;
use App\Http\Controllers\Assign_Subject_Controller;
use App\Http\Controllers\Assign_Student_Controller;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/user', [AuthController::class, 'register'])->name('user.store');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login'); 

Route::get('register', [AuthController::class, 'register_view'])->name('register');
// Route::post('register', [AuthController::class, 'register'])->name('register'); 

Route::get('adduser', [AuthController::class, 'adduser_view'])->name('adduser');
Route::post('adduser', [AuthController::class, 'adduser'])->name('adduser');


//Authenticate Users Only
Route::group(['middleware'=>'auth'],function()
{
    Route::get('home', [AuthController::class, 'home']); 
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});


//users
Route::get('list-users', [AuthController::class, 'listusers'])->name('list-users');

Route::get('delete-user/{id}', [AuthController::class, 'delete'])->name('delete-user');

Route::put('/users/{id}', [AuthController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit', [AuthController::class, 'edit'])->name('users.edit');
Route::get('/users/{id}', [AuthController::class, 'show'])->name('users.show');


//sub
Route::post('/subject/store', [SubjectController::class, 'store'])->name('subject.store');
Route::get('/subject/show', [SubjectController::class, 'show'])->name('subject.show');

Route::put('/subject/edit/{id}', [SubjectController::class, 'update'])->name('subject.update');
Route::get('/subject/edit/{id}', [SubjectController::class, 'edit'])->name('subject.edit');

Route::get('/subject/display/{id}', [SubjectController::class, 'display'])->name('subject.display');
Route::delete('/subject/delete/{id}', [SubjectController::class, 'delete'])->name('subject.delete');

//std
Route::post('/standard/store', [StandardController::class, 'store'])->name('standard.store');
Route::get('/standard/show', [StandardController::class, 'show'])->name('standard.show');

Route::put('/standard/edit/{id}', [StandardController::class, 'update'])->name('standard.update');
Route::get('/standard/edit/{id}', [StandardController::class, 'edit'])->name('standard.edit');

Route::get('/standard/display/{id}', [StandardController::class, 'display'])->name('standard.display');
Route::delete('/standard/delete/{id}', [StandardController::class, 'delete'])->name('standard.delete');


//chap

Route::post('/chapter/store', [ChapterController::class, 'store'])->name('chapter.store');
Route::get('/chapter/show', [ChapterController::class, 'show'])->name('chapter.show');
Route::put('/chapter/edit/{id}', [ChapterController::class, 'update'])->name('chapter.update');
Route::get('/chapter/edit/{id}', [ChapterController::class, 'edit'])->name('chapter.edit');
Route::get('/chapter/display/{id}', [ChapterController::class, 'display'])->name('chapter.display');
Route::delete('/chapter/delete/{id}', [ChapterController::class, 'delete'])->name('chapter.delete');

//assign
Route::get('/assign_chapter', [Assign_Chapter_Controller::class, 'index'])->name('assign_chapter.show');
Route::post('/assign_chapter', [Assign_Chapter_Controller::class, 'assign'])->name('assign_chapter.store');

Route::get('/assign_subject', [Assign_Subject_Controller::class, 'index'])->name('assign_subject.show');
Route::post('/assign_subject', [Assign_Subject_Controller::class, 'assign'])->name('assign_subject.store');

Route::get('/assign_student', [Assign_Student_Controller::class, 'index'])->name('assign_student.show');
Route::post('/assign_student', [Assign_Student_Controller::class, 'assign'])->name('assign_student.store');








