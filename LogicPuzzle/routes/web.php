<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;

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


Route::resource('/', PessoaController::class);


Route::get('/read', function () {
    return view('pessoas.read');
});
Route::post('/read-id', [PessoaController::Class, 'read']);




Route::get('/update', function () {
    return view('pessoas.edit');
});
Route::post('/update', [PessoaController::Class, 'edit']);

Route::put('/update/{id}', [PessoaController::Class, 'update']);

Route::get('/update/{id}', [PessoaController::Class, 'index']);


Route::get('/delete', function () {
    return view('pessoas.delete');
});
Route::post('/delete', [PessoaController::Class, 'delete']);