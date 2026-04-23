<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Filament\Notifications\Notification;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

