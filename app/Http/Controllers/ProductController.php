<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category; // Necesario para el código nuevo
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $listaDeProductos = Product::latest()->paginate(10);
        
        return view('product.index', compact('listaDeProductos')); 
    }

    public function create()
    {
        // NUEVO: Cargamos las categorías para el formulario
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    public function store(ProductRequest $request)
    {
        // NUEVO: Validación automática + Mensaje flash de éxito
        Product::create($request->validated());
        return redirect()->route('product.index')->with('success', 'Producto creado correctamente.');
    }

    public function show(Product $product)
    {
        // ANTIGUO: Vista en singular
        return view('product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('product.edit', compact('product', 'categories'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        return redirect()->route('product.index')->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Producto eliminado correctamente.');
    }
}