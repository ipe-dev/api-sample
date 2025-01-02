<?php

use App\Http\Controllers¥todos\todoController;
use Illuminate\Support\Facades\Route;

Route::prefix('/users')->group(function() {
    Route::post('/login', [UserController::class, 'login']);
});

Route::prefix('/todos')->group(function () {
   Route::get('/', [todoController::class, 'index']); 
   Route::post('/create', [todoController::class, 'create']);
   Route::get('/{id}', [todoController::class, 'show']);
   Route::delete('/{id}', [todoController::class, 'delete']);
   Route::put('/{id}', [todoController::class, 'update']);
});