<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// --- ACCESO PÚBLICO (Solo consulta) ---
Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::get('/product', [ProductController::class, 'index'])->name('product.index'); // <-- ¡ESTA ERA LA QUE FALTABA!
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');

// --- ACCESO RESTRINGIDO (Requiere iniciar sesión) ---
Route::middleware(['auth'])->group(function () {
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
});

require __DIR__.'/auth.php';