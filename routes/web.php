<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products/export/csv', [ProductController::class, 'exportCSV']);
Route::get('/products/export/pdf', [ProductController::class, 'exportPDF']);
