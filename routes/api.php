<?php

declare(strict_types=1);

use App\Http\Controllers\Todos\todoCreateController;
use App\Http\Controllers\Todos\TodoDeleteController;
use App\Http\Controllers\Todos\TodoDetailController;
use App\Http\Controllers\Todos\TodoListController;
use App\Http\Controllers\Users\UserLoginController;
use Illuminate\Support\Facades\Route;

Route::prefix('/users')->group(function () {
    Route::post('/login', UserLoginController::class);
});

Route::prefix('/todos')->group(function () {
    Route::get('/', TodoListController::class);
    Route::post('/', TodoCreateController::class);
    Route::get('/{id}', TodoDetailController::class);
    Route::delete('/{id}', TodoDeleteController::class);
    Route::put('/{id}', TodoUpdateController::class);
});
