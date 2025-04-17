<?php
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ProductController;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('categories', CategoryController::class)->only(['index', 'store']);
    Route::get('categories/{id}/products', [CategoryController::class, 'products']);
    
    Route::apiResource('products', ProductController::class);
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
