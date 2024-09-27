<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutmeController;
use App\Http\Controllers\projectController;

Route::get('/home', [homeController::class, 'home'])->name('home');
Route::get('/aboutme', [aboutmeController::class, 'aboutme'])->name('aboutme');
Route::get('/project', [projectController::class, 'project'])->name('project');



