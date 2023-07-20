<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('/tasks', [TaskController::class, "getTasks"])->name('table');
Route::get('/task/add', [TaskController::class, "getAddTaskPage"])->name("add.taks.page");

Route::post('post/task/add', [TaskController::class, "createTask"])->name("create.taks");
Route::get('task/edit/{id}', [TaskController::class, "getEditTaskPage"])->name("edit.taks.page");
Route::post('post/task/edit', [TaskController::class, "updateTask"])->name("update.taks");
Route::get('task/delete/{id}', [TaskController::class, "getDeleteTaskPage"])->name("delete.taks.page");
Route::post('post/task/delete}', [TaskController::class, "deleteTask"])->name("delete.taks");





