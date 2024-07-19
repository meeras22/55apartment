<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage']);
Route::get('/test', fn () => "Hello world!");
Route::get('/projects', [PageController::class, 'projects']);
