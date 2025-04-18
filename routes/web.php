<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'welcome'])->name('welcome');

Route::controller(UserController::class)->group(function(){
    Route::get('/listUsers', 'index')->name('users.index');
});