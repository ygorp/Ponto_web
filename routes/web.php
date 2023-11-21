<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'home'])->name('home');

Route::get('/e', [EmpresaController::class, 'list'])->name('empresa.list');
Route::get('/e/create', [EmpresaController::class, 'create'])->name('empresa.create');
Route::post('/e/store', [EmpresaController::class, 'store'])->name('empresa.store');
Route::get('/e/{id}/edit', [EmpresaController::class, 'edit'])->name('empresa.edit');
Route::put('/e/{id}', [EmpresaController::class, 'update'])->name('empresa.update');
Route::delete('/e/{id}', [EmpresaController::class, 'delete'])->name('empresa.delete');

Route::get('/f', [FuncionarioController::class, 'list'])->name('funcionario.list');
Route::get('/f/create', [FuncionarioController::class, 'create'])->name('funcionario.create');
Route::post('/f/store', [FuncionarioController::class, 'store'])->name('funcionario.store');
Route::get('/f/{id}/edit', [FuncionarioController::class, 'edit'])->name('funcionario.edit');
Route::put('/f/{id}', [FuncionarioController::class, 'update'])->name('funcionario.update');
Route::delete('/f/{id}', [FuncionarioController::class, 'delete'])->name('funcionario.delete');

Route::get('/h', [HorarioController::class, 'list'])->name('horario.list');