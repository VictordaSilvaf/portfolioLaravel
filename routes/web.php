<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TechnologyController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// my Routes
    Route::resources([
        'projects' => ProjectsController::class,
        'technology' => TechnologyController::class,
    ]);
