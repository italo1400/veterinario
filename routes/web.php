<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoasController;
use App\Http\Controllers\AnimaisController; 
use App\Http\Controllers\ConsultasController;
use App\Http\Controllers\AtendimentosController;

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
    return view('home');
})->middleware('auth');


Route::get('/cadastro',[PessoasController::class,'list'])->middleware('auth');
Route::post('/cadastro', [PessoasController::class, 'create'])->name('cadastrar_pessoa')->middleware('auth');
Route::post('/cadastro/pessoa/{id}', [PessoasController::class, 'edit'])->name('editar_pessoa')->middleware('auth');
Route::get('/cadastro/pessoa/{id}', [PessoasController::class, 'detail'])->middleware('auth');
Route::post('/cadastro/animal', [AnimaisController::class, 'create'])->name('cadastrar_animal')->middleware('auth');
Route::get('/cadastro/animal/{id}', [AnimaisController::class, 'detail'])->middleware('auth');
Route::post('/cadastro/animal/{id}', [AnimaisController::class, 'edit'])->name('editar_animal')->middleware('auth');
Route::get('/consulta', [ConsultasController::class,'list'])->middleware('auth');
Route::post('/consulta', [ConsultasController::class, 'create'])->name('cadastrar_consulta')->middleware('auth');
Route::post('/consulta/delete/{id}', [ConsultasController::class, 'delete'])->name('deletar_consulta')->middleware('auth');
Route::get('/atender/{id}',[AtendimentosController::class,'detail'])->middleware('auth');
Route::get('/atender', [AtendimentosController::class, 'list'])->middleware('auth');
Route::post('/atender/finalizar/{id}', [AtendimentosController::class, 'create'])->name('finalizar_atendimento')->middleware('auth');