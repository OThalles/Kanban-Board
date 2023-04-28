<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KanbanController;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Homepage');
});

Route::get('/kanban/{id}', [KanbanController::class, 'index'])->name('kanban')->middleware('auth');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::post('/newKanban', [KanbanController::class, 'create'])->name('newKanban');
Route::post('/newTask', [TaskController::class, 'create'])->name('newTask');
Route::post('/nextStatus' , [TaskController::class, 'nextStatus']);

Route::delete('/deleteTask', [TaskController::class, 'delete'])->name('deleteTask');

Route::post('/getTasks', [TaskController::class, 'getTaskByStatus'])->middleware('auth');
Route::get('/getTask/{id}/{kanban_id}', [TaskController::class, 'getOne'])->middleware('auth');


Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'store'])->name('newUser');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'auth']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/profile', [UserController::class, 'profile'])->name('profile');
