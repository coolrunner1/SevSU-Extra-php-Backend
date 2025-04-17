<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\InteractionController;
use App\Http\Controllers\PersonalityController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::apiResource('genres', GenreController::class)->except(['create', 'edit']);
Route::apiResource('videos', VideoController::class)->except(['create', 'edit']);
Route::apiResource('personalities', PersonalityController::class)->except(['create', 'edit']);
Route::apiResource('playlists', PlaylistController::class)->except(['create', 'edit']);
Route::apiResource('users', UserController::class)->except(['create', 'edit']);
Route::apiResource('interactions', InteractionController::class)->except(['create', 'edit']);
