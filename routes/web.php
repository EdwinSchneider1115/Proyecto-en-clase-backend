<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class); //landing page del ecommerce
Route::prefix('product')->controller(ProductController::class)->group(function () {
    Route::get('/', 'index'); //mostrar todos los productos
    Route::get('/create', 'create'); //formulario para crear un producto
    Route::get('/{idProduct}', 'show'); //detalle de un producto
});
