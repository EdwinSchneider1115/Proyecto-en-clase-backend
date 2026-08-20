<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index'); //vista que mostrara todos los productos
    }
    public function create()
    {
        return view('product.create');
    }

    public function show($idProduct)
    {
        return view('product.show', compact('idProduct'));
    }
}
