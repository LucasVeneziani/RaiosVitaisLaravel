<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PainelAdminController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// ── Public: Login / Logout ──────────────────────────────────────────────────
Route::get('/login',   [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/login',  [AuthController::class, 'login'])->name('admin.login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

// ── Public: Home ────────────────────────────────────────────────────────────
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/paineladmin', [PainelAdminController::class, 'index'])->name('paineladmin.index');

// ── Protected: any authenticated user (admin OR funcionario) ────────────────
Route::middleware('require.auth')->group(function () {

    // Clientes CRUD — accessible by admins and employees
    Route::get('/clientes',                [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/clientes/create',         [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/clientes',               [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/clientes/{cliente}',      [ClienteController::class, 'show'])->name('clientes.show');
    Route::get('/clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('/clientes/{cliente}',      [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('/clientes/{cliente}',   [ClienteController::class, 'destroy'])->name('clientes.destroy');

    // Agenda — calendário de consultas por funcionário
    Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');
    Route::get('/agenda/create', [AgendaController::class, 'create'])->name('agenda.create');
    Route::post('/agenda', [AgendaController::class, 'store'])->name('agenda.store');
    Route::get('/agenda/events', [AgendaController::class, 'events'])->name('agenda.events');
    Route::get('/agenda/{agenda}/edit', [AgendaController::class, 'edit'])->name('agenda.edit');
    Route::put('/agenda/{agenda}', [AgendaController::class, 'update'])->name('agenda.update');
    Route::delete('/agenda/{agenda}', [AgendaController::class, 'destroy'])->name('agenda.destroy');

    // Funcionários CRUD — admin only
    Route::middleware('admin.only')->group(function () {
        Route::get('/funcionarios',                    [FuncionarioController::class, 'index'])->name('funcionarios.index');
        Route::get('/funcionarios/create',             [FuncionarioController::class, 'create'])->name('funcionarios.create');
        Route::post('/funcionarios',                   [FuncionarioController::class, 'store'])->name('funcionarios.store');
        Route::get('/funcionarios/{funcionario}',      [FuncionarioController::class, 'show'])->name('funcionarios.show');
        Route::get('/funcionarios/{funcionario}/edit', [FuncionarioController::class, 'edit'])->name('funcionarios.edit');
        Route::put('/funcionarios/{funcionario}',      [FuncionarioController::class, 'update'])->name('funcionarios.update');
        Route::delete('/funcionarios/{funcionario}',   [FuncionarioController::class, 'destroy'])->name('funcionarios.destroy');
    });

});
