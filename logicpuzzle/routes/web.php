<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Pessoa;
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

Route::get('/', function () {
    return view('crud-options');
});

Route::get('/read', function () {
    return view('crud/read');
});
Route::get('/read/1', function () {
    return view('crud/read-id');
});

Route::get('/create', function () {
    return view('crud/create');
});


Route::POST('/create', [PessoaController::Class, 'store']);






Route::get('/createnewuser', function () {

    $pessoa = User::create([
        'name' => 'rian',
        'email' => 'rianreis2109@gmail.com',
        'password' => 'password'

    ]);



    return view('crud-options', ['pessoa' => $pessoa]);
});



Route::get('/find/{id}', function($id) {

    $pessoa = User::find($id);

    return view('single-pessoa', ['pessoa' => $pessoa]);

});