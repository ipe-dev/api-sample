<?php

use App\Http\Controllers\Todos\todoListController;
use Illuminate\Support\Facades\Route;

Route::prefix('/users')->group(function() {
    Route::post('/login', [UserController::class, 'login']);
});

Route::prefix('/todos')->group(function () {
   Route::get('/', [todoListController::class, 'index']); 
   Route::post('/create', [todoCreateController::class, 'create']);
   Route::get('/{id}', [todoDetailController::class, 'show']);
   Route::delete('/{id}', [todoDeleteController::class, 'delete']);
   Route::put('/{id}', [todoUpdateController::class, 'update']);
});