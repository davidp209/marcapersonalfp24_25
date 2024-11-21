<?php

use App\Http\Controllers\UserController;

Route::get('users', [UserController::class, 'getIndex'])->name('users.index');
Route::get('users/show/{id}', [UserController::class, 'getShow'])->name('users.show');
Route::get('users/create', [UserController::class, 'getCreate'])->name('users.create');
Route::get('users/edit/{id}', [UserController::class, 'getEdit'])->name('users.edit');

