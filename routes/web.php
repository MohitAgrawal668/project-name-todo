<?php

use App\Http\Controllers\TodoController;
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
});


Route::get("todo", [TodoController::class, "index"])->name("todo.index");

Route::get("todo/show/{todo}", [TodoController::class,"show"])->name("todo.show");

Route::get("todo/add", [TodoController::class, "add"])->name("todo.add");

Route::post("todo/save", [TodoController::class, "save"])->name("todo.save");

Route::get("todo/{id}/edit",[TodoController::class, "edit"])->name("todo.edit");

Route::post("todo/{id}/update",[TodoController::class, "update"])->name("todo.update");
Route::get("todo/{id}/delete",[TodoController::class, "destroy"])->name("todo.delete");

Route::get("todo/{id}/complete",[TodoController::class, "complete"])->name("todo.complete");