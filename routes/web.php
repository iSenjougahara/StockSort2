<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\loteController;
use App\Models\lote;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

//Route::get('/show', [loteController::class, 'show2'])->name('show2');

Route::get('/login', [UserController::class, 'show']);
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout']);



Route::get('/dd', function () {


    dd(auth()->user());
});




//lotes


Route::get('/lotes', [loteController::class, 'show'])->name('indexLote');
Route::get('/editlote/{id}/edit', [loteController::class, 'showEdit']);
Route::put('/loteUpdate/{id}', [loteController::class, 'loteUpdate'])->name('loteUpdate');
Route::delete('/deletelote/{lote}', [loteController::class, 'deletelote'])->name('deletelote');
Route::get('/newLote', function () {return view('newLote');});
Route::post('/StoreLote', [loteController::class, 'store'])->name('StoreLote');


Route::get('/index', [UserController::class, 'show']);



//users

Route::get('/users', function () {
    dd(request());
    return view('index', ['users' => User::all()]);
});
Route::get('/register', function () {
    return view('register');
});
Route::post('/newuser', [UserController::class, 'store']);
Route::get('/users/{user}', function (User $user) {
    return view('index', ['users' => $user]);
});
Route::get('/editUser/{id}/edit', [UserController::class, 'showEdit']);
Route::put('/userUpdate/{id}', [UserController::class, 'userUpdate'])->name('userUpdate');
Route::delete('/deleteUser/{user}', [UserController::class, 'deleteUser'])->name('deleteUser');

//produto
Route::get('/newProduto', function () {return view('newProduto');});
Route::post('/storeProduto', [ProdutoController::class, 'store'])->name('produtoStore');
Route::get('/editProduto/{id}/edit', [ProdutoController::class, 'showEdit']);
Route::put('/editProduto/{id}', [ProdutoController::class, 'produtoUpdate'])->name('produtoUpdate');
Route::delete('/deleteProduto/{produto}', [ProdutoController::class, 'deleteProduto'])->name('deleteProduto');
Route::get('/products', [ProdutoController::class, 'show'])->name('produtoIndex');
Route::put('/newProduto', [ProdutoController::class, 'newProduto'])->name('newProduto');




