@extends('layout.app')

@section('content')
    <h1 style="text-align: center; margin-bottom: 1rem; font-size: 3rem;">Catálogo de Aviones</h1>
    <p style="text-align: center; margin-bottom: 3rem; font-size: 1.2rem;">
        Explora nuestra colección de aviones de guerra históricos y modernos
    </p>

    <div class="products-grid">
        @foreach ($listaDeProductos as $producto)
            <div class="product-card">
                <h3 class="product-name">{{ $producto->name }}</h3>
                <p class="product-description">{{ $producto->description }}</p>
                <p class="product-price">Precio: ${{ $producto->price }}</p>
                <p class="product-category">Categoría ID: {{ $producto->category_id }}</p>
            </div>
        @endforeach
    </div>
@endsection
