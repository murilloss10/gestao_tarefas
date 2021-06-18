<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('tarefas/', [TaskController::class, 'index']);
Route::post('tarefas/inserir', [TaskController::class, 'insertTask']);
Route::post('tarefas/alterar', [TaskController::class, 'updateTask']);
Route::get('tarefas/excluir/{id}', [TaskController::class, 'deleteTask']);

//Route::get('DataTableReadAllUsers', [UserController::class, 'DataTableReadAllUsers']);