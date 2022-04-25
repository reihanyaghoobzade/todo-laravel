<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TodoController::class, 'index'])->name('todos.index');
Route::get('/todos/create', [TodoController::class, 'create'])->name('todos.create');
Route::get('/todos/show/{todo}', [TodoController::class, 'show'])->name('todos.show');
Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');
Route::get('/todos/edit/{todo}', [TodoController::class, 'edit'])->name('todos.edit');
Route::put('/todos/update/{todo}', [TodoController::class, 'update'])->name('todos.update');
Route::get('/todos/destroy/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');
Route::get('/todos/{todo}/compelete', [TodoController::class, 'compelete'])->name('todos.compelete');
