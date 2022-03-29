<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\CommentController;
use App\Models\Technology;
use App\Models\Projects;

Route::get('/', function () {
    $technologies = Technology::all();
    $projects = Projects::all();
    return view('welcome', compact('technologies', 'projects'));
})->name('home');

Route::group(['middlewere' => 'auth'], function(){
    Route::resource('comments', CommentController::class)->only([
        'store',
    ]);
});

Route::middleware(['admin'])->group(function () {
    Route::get('admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resources([
        'admin/projects' => ProjectsController::class,
        'admin/technologies' => TechnologyController::class,
    ]);

    Route::resource('admin/comments', CommentController::class)->except([
        'store',
    ]);
});

Route::middleware(['client'])->group(function () {

});


