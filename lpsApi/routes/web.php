<?php

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

use App\Http\Controllers\PessoaController;

Route::get('/', [PessoaController::class, 'index']);
Route::get('/pessoas/create', [PessoaController::class, 'create']);
Route::get('/pessoas/read', [PessoaController::class, 'read']);
Route::get('/pessoas/update', [PessoaController::class, 'update']);
Route::get('/pessoas/delete', [PessoaController::class, 'delete']);