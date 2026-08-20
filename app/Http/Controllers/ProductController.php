<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return "show all products";
    }
    public function create()
    {
        return "create product with id";
    }
    public function show($idProduct)
    {
        return "show product with id: $idProduct";
    }
}
