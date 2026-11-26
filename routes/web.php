<?php

use App\Http\Controllers\AuditRequestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\SolutionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/modules', [ModuleController::class, 'index'])->name('modules.index');
Route::get('/solutions/{service}', [SolutionController::class, 'show'])->name('solutions.show');
Route::post('/audit-request', [AuditRequestController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('audit-requests.store');
