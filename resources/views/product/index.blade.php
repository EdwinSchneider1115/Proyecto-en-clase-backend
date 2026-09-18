@extends('layout.app')

@section('content')
    <h1 style="text-align: center; margin-bottom: 1rem; font-size: 3rem;">Catálogo de Aviones</h1>
    <p style="text-align: center; margin-bottom: 3rem; font-size: 1.2rem;">
        Explora nuestra colección de aviones de guerra históricos y modernos
    </p>

    <div class="products-grid">
        @foreach ($listaDeProductos as $producto)
            <div class="product-card" style="border: 1px solid #ddd; border-radius: 8px; padding: 1.5rem; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                <h3 class="product-name" style="margin-top: 0; color: #1a1a2e;">{{ $producto->name }}</h3>
                <p class="product-description" style="color: #555;">{{ $producto->description }}</p>
                <p class="product-price" style="font-size: 1.2rem; font-weight: bold; color: #e94560;">Precio: ${{ number_format($producto->price, 2) }}</p>
                
                {{-- Si tienes la relación category configurada, puedes usar $producto->category->name, si no, deja el ID --}}
                <p class="product-category" style="font-size: 0.9rem; color: #777;">Categoría ID: {{ $producto->category_id }}</p>

                {{-- ZONA DE ACCIONES (Paso 5: Protección Visual) --}}
                <div style="margin-top: 1.5rem; display: flex; gap: 0.5rem; flex-wrap: wrap;">
                    {{-- Botón Ver: Público --}}
                    <a href="{{ route('product.show', $producto->id) }}" style="text-decoration: none; background: #0f3460; color: white; padding: 8px 15px; border-radius: 5px; font-size: 0.9rem;">
                        👁️ Ver
                    </a>

                    {{-- Botones Editar/Eliminar: SOLO para usuarios autenticados --}}
                    @auth
                        <a href="{{ route('product.edit', $producto->id) }}" style="text-decoration: none; background: #f5a623; color: white; padding: 8px 15px; border-radius: 5px; font-size: 0.9rem;">
                            ✏️ Editar
                        </a>
                        
                        <form action="{{ route('product.destroy', $producto->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este avión?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: #e94560; color: white; border: none; padding: 8px 15px; border-radius: 5px; font-size: 0.9rem; cursor: pointer;">
                                🗑️ Eliminar
                            </button>
                        </form>
                    @endauth
                </div>
            </div>
        @endforeach
    </div>

    {{-- Si usas paginación en el controlador, agrega esto al final para que aparezcan los números de página --}}
    @if(method_exists($listaDeProductos, 'links'))
        <div style="margin-top: 2rem;">
            {{ $listaDeProductos->links() }}
        </div>
    @endif
@endsection