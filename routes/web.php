<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\SoftwareController;
use App\Http\Controllers\AboutController;


Route::redirect(uri:'/', destination:'login');
/*Route::get('/', function () {
    return view('welcome');
});*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
});
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('tasks', \App\Http\Controllers\TaskController::class);
    Route::resource('users', \App\Http\Controllers\UsersController::class);
    Route::resource('software', \App\Http\Controllers\SoftwareController::class); 
    Route::resource('phonebooks', \App\Http\Controllers\PhonebookController::class); 
    Route::resource('mercury', \App\Http\Controllers\MercuryController::class);
});

Route::get('/search_faq', '\App\Http\Controllers\SoftwareController@search')->name('search');
Route::get('/phonebook', '\App\Http\Controllers\PhonebookController@search')->name('search');
Route::get('/search', '\App\Http\Controllers\MercuryController@search')->name('search');
