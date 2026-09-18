@extends('layout.app')

@section('content')
  <div class="container" style="margin-top: 2rem;">
        <a href="{{ route('product.index') }}" class="btn btn-primary" style="margin-bottom: 2rem; text-decoration: none; display: inline-block; padding: 0.5rem 1rem; background: #0f3460; color: white; border-radius: 5px;">
            ← Volver al Catálogo
        </a>

        {{-- Usamos la variable real $product que viene del Controlador --}}
        <div class="product-detail">
            <div>
                {{-- Imagen de ejemplo (puedes cambiarla si agregas un campo 'image' a tu base de datos después) --}}
                <img src="https://picsum.photos/seed/{{ $product->id }}/1200/800" alt="{{ $product->name }}" class="product-detail-image" style="width: 100%; border-radius: 10px; margin-bottom: 1rem;">
                
                <div style="margin-top: 2rem; display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem;">
                    <img src="https://picsum.photos/seed/{{ $product->id }}a/400/300" style="width: 100%; border-radius: 5px; height: 150px; object-fit: cover;">
                    <img src="https://picsum.photos/seed/{{ $product->id }}b/400/300" style="width: 100%; border-radius: 5px; height: 150px; object-fit: cover;">
                    <img src="https://picsum.photos/seed/{{ $product->id }}c/400/300" style="width: 100%; border-radius: 5px; height: 150px; object-fit: cover;">
                </div>
            </div>

            <div>
                <div class="product-category" style="color: #777; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px;">
                    Categoría ID: {{ $product->category_id }}
                </div>
                <h1 style="font-size: 2.5rem; margin: 0.5rem 0; color: #1a1a2e;">{{ $product->name }}</h1>
                
                <div class="product-price" style="font-size: 2.5rem; margin: 1.5rem 0; color: #e94560; font-weight: bold;">
                    ${{ number_format($product->price, 2) }} USD
                </div>

                <div style="background: #fff; padding: 1.5rem; border-radius: 5px; margin-bottom: 2rem; border: 1px solid #eee;">
                    <h3 style="margin-bottom: 1rem; color: #0f3460;">Descripción</h3>
                    <p style="line-height: 1.8; color: #333;">
                        {{ $product->description }}
                    </p>
                </div>

                {{-- PASO 5: Botones de acción protegidos con @auth --}}
                <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                    @auth
                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary" style="flex: 1; padding: 1rem; font-size: 1.1rem; text-align: center; text-decoration: none; background: #f5a623; color: white; border-radius: 5px; font-weight: bold;">
                            ✏️ Editar Avión
                        </a>
                        
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="flex: 1;" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este avión?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="width: 100%; padding: 1rem; font-size: 1.1rem; background: #e94560; color: white; border: none; border-radius: 5px; font-weight: bold; cursor: pointer;">
                                🗑️ Eliminar Avión
                            </button>
                        </form>
                    @endauth
                    
                    @guest
                        <p style="color: #777; font-style: italic; width: 100%; text-align: center; padding: 1rem; background: #f8f9fa; border-radius: 5px;">
                            🔒 Inicia sesión para editar o eliminar este producto.
                        </p>
                    @endguest
                </div>
            </div>
        </div>
    </div>
@endsection