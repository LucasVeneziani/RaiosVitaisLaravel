<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// ── Public: Login / Logout ──────────────────────────────────────────────────
Route::get('/login',   [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/login',  [AuthController::class, 'login'])->name('admin.login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

// ── Public: Home ────────────────────────────────────────────────────────────
Route::get('/', [HomeController::class, 'index'])->name('home');

// ── Protected: any authenticated user (admin OR funcionario) ────────────────
Route::middleware('require.auth')->group(function () {

    // Users CRUD — accessible by admins and employees
    Route::get('/users',             [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create',      [UserController::class, 'create'])->name('users.create');
    Route::post('/users',            [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}',      [UserController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}',      [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}',   [UserController::class, 'destroy'])->name('users.destroy');

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
