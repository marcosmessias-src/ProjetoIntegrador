<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AtaController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProntuarioController;
use App\Http\Controllers\UserController;
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
Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('welcome');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/data', [DashboardController::class, 'data'])->name('dashboard.data');

    Route::resource('ata', AtaController::class)->except([
        'create', 'edit', 'show'
    ]);
    Route::get('ata-semanal', [AtaController::class, 'indexSemanal'])->name('ataSemanal');
    Route::get('ata-mensal', [AtaController::class, 'indexMensal'])->name('ataMensal');

    Route::get('/alunos/find/{id}', [AlunoController::class, 'find'])->name('alunos.find');
    Route::get('/alunos/all', [AlunoController::class, 'all'])->name('alunos.all');
    Route::resource('alunos', AlunoController::class)->except([
        'create', 'edit', 'show'
    ]);

    Route::resource('prontuario', ProntuarioController::class)->except([
        'create', 'edit', 'show'
    ]);

    Route::resource('usuarios', UserController::class)->except([
        'create', 'edit', 'show'
    ]);
});

require __DIR__.'/auth.php';
