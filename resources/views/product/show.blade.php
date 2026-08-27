@extends('layout.app')

@section('content')

  <div class="container" style="margin-top: 2rem;">
        <a href="{{ url('/product') }}" class="btn btn-primary" style="margin-bottom: 2rem;">
            ← Volver al Catálogo
        </a>

        @php
            $productos = [
                1 => [
                    'name' => 'P-51D Mustang',
                    'category' => 'WWII - Caza de Escolta',
                    'price' => 2500000,
                    'year' => 1944,
                    'motor' => 'Packard V-1650-7 Merlin',
                    'power' => '1,490 HP',
                    'speed' => '703 km/h (437 mph)',
                    'range' => '2,755 km (1,712 millas)',
                    'armament' => '6 ametralladoras .50 cal M2',
                    'wingspan' => '11.28 m (37 pies)',
                    'condition' => 'Restaurado - Vuelo',
                    'description' => 'Este excepcional P-51D Mustang representa la cúspide de la aviación de caza de la Segunda Guerra Mundial. Completamente restaurado en 2024.',
                    'image' => 'https://picsum.photos/seed/p51mustang/1200/800'
                ],
                2 => [
                    'name' => 'F-16C Fighting Falcon',
                    'category' => 'Moderno - Jet',
                    'price' => 18000000,
                    'year' => 1995,
                    'motor' => 'General Electric F110-GE-129',
                    'power' => '29,000 lbf',
                    'speed' => '2,414 km/h (Mach 2+)',
                    'range' => '4,220 km',
                    'armament' => 'Cañón M61 Vulcan + misiles',
                    'wingspan' => '9.96 m',
                    'condition' => 'En servicio activo',
                    'description' => 'Caza polivalente supersónico de 4ta generación.',
                    'image' => 'https://picsum.photos/seed/f16falcon/1200/800'
                ],
                3 => [
                    'name' => 'Supermarine Spitfire Mk IX',
                    'category' => 'WWII - Caza',
                    'price' => 3200000,
                    'year' => 1942,
                    'motor' => 'Rolls-Royce Merlin 61',
                    'power' => '1,565 HP',
                    'speed' => '656 km/h',
                    'range' => '1,827 km',
                    'armament' => '2 cañones de 20mm + 4 ametralladoras',
                    'wingspan' => '11.23 m',
                    'condition' => 'Restaurado - Vuelo',
                    'description' => 'Icono de la Batalla de Inglaterra.',
                    'image' => 'https://picsum.photos/seed/spitfire/1200/800'
                ],
                4 => [
                    'name' => 'F-22 Raptor',
                    'category' => '5ta Generación',
                    'price' => 150000000,
                    'year' => 2005,
                    'motor' => '2x Pratt & Whitney F119-PW-100',
                    'power' => '35,000 lbf c/u',
                    'speed' => '2,414 km/h (Mach 2.25)',
                    'range' => '2,960 km',
                    'armament' => 'Cañón M61A2 + misiles AIM-120',
                    'wingspan' => '13.56 m',
                    'condition' => 'Stealth - Activo',
                    'description' => 'Caza furtivo de superioridad aérea.',
                    'image' => 'https://picsum.photos/seed/f22raptor/1200/800'
                ],
                5 => [
                    'name' => 'Messerschmitt Bf 109G',
                    'category' => 'WWII - Caza',
                    'price' => 2800000,
                    'year' => 1943,
                    'motor' => 'Daimler-Benz DB 605',
                    'power' => '1,475 HP',
                    'speed' => '640 km/h',
                    'range' => '1,050 km',
                    'armament' => '2 cañones MG 151 + 2 ametralladoras',
                    'wingspan' => '9.92 m',
                    'condition' => 'Restauración museo',
                    'description' => 'Caza alemán icónico de la Luftwaffe.',
                    'image' => 'https://picsum.photos/seed/bf109/1200/800'
                ],
                6 => [
                    'name' => 'Sukhoi Su-27 Flanker',
                    'category' => 'Guerra Fría',
                    'price' => 35000000,
                    'year' => 1989,
                    'motor' => '2x Saturn AL-31F',
                    'power' => '27,560 lbf c/u',
                    'speed' => '2,500 km/h (Mach 2.35)',
                    'range' => '3,530 km',
                    'armament' => 'Cañón GSh-30-1 + misiles',
                    'wingspan' => '14.7 m',
                    'condition' => 'Excelente estado',
                    'description' => 'Caza de superioridad aérea soviético.',
                    'image' => 'https://picsum.photos/seed/su27/1200/800'
                ],
                7 => [
                    'name' => 'Mitsubishi A6M Zero',
                    'category' => 'WWII - Caza',
                    'price' => 2100000,
                    'year' => 1941,
                    'motor' => 'Nakajima NK1C Sakae 12',
                    'power' => '950 HP',
                    'speed' => '533 km/h',
                    'range' => '3,104 km',
                    'armament' => '2 cañones de 20mm + 2 ametralladoras',
                    'wingspan' => '12 m',
                    'condition' => 'Restaurado',
                    'description' => 'Caza naval japonés legendario.',
                    'image' => 'https://picsum.photos/seed/zero/1200/800'
                ],
                8 => [
                    'name' => 'F-35B Lightning II',
                    'category' => '5ta Generación',
                    'price' => 120000000,
                    'year' => 2020,
                    'motor' => 'Pratt & Whitney F135',
                    'power' => '43,000 lbf',
                    'speed' => '1,960 km/h (Mach 1.6)',
                    'range' => '2,220 km',
                    'armament' => 'Cañón GAU-22/A + misiles',
                    'wingspan' => '10.7 m',
                    'condition' => 'Despegue vertical - Nuevo',
                    'description' => 'Caza furtivo multirrol con despegue vertical.',
                    'image' => 'https://picsum.photos/seed/f35/1200/800'
                ],
                9 => [
                    'name' => 'F4U Corsair',
                    'category' => 'WWII - Caza',
                    'price' => 2300000,
                    'year' => 1944,
                    'motor' => 'Pratt & Whitney R-2800',
                    'power' => '2,000 HP',
                    'speed' => '717 km/h',
                    'range' => '1,633 km',
                    'armament' => '6 ametralladoras .50 cal',
                    'wingspan' => '12.5 m',
                    'condition' => 'Restaurado - Vuelo',
                    'description' => 'Caza embarcado con alas de gaviota.',
                    'image' => 'https://picsum.photos/seed/corsair/1200/800'
                ]
            ];

            $producto = $productos[$idProduct] ?? null;
        @endphp

        @if($producto)
        <div class="product-detail">
            <div>
                <img src="{{ $producto['image'] }}" alt="{{ $producto['name'] }}" class="product-detail-image">
                
                <div style="margin-top: 2rem; display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem;">
                    <img src="{{ $producto['image'] }}" style="width: 100%; border-radius: 5px; height: 150px; object-fit: cover;">
                    <img src="https://picsum.photos/seed/spitfire/400/300" style="width: 100%; border-radius: 5px; height: 150px; object-fit: cover;">
                    <img src="https://picsum.photos/seed/f16falcon/400/300" style="width: 100%; border-radius: 5px; height: 150px; object-fit: cover;">
                </div>
            </div>

            <div>
                <div class="product-category">{{ $producto['category'] }}</div>
                <h1>{{ $producto['name'] }}</h1>
                
                <div class="product-price" style="font-size: 2.5rem; margin: 1.5rem 0;">
                    ${{ number_format($producto['price']) }} USD
                </div>

                <div class="product-specs">
                    <h3 style="margin-bottom: 1rem; color: var(--dark-green);">Especificaciones Técnicas</h3>
                    
                    <div class="spec-item">
                        <span class="spec-label">Año:</span>
                        <span class="spec-value">{{ $producto['year'] }}</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">Motor:</span>
                        <span class="spec-value">{{ $producto['motor'] }}</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">Potencia:</span>
                        <span class="spec-value">{{ $producto['power'] }}</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">Velocidad Máxima:</span>
                        <span class="spec-value">{{ $producto['speed'] }}</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">Alcance:</span>
                        <span class="spec-value">{{ $producto['range'] }}</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">Armamento:</span>
                        <span class="spec-value">{{ $producto['armament'] }}</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">Envergadura:</span>
                        <span class="spec-value">{{ $producto['wingspan'] }}</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">Condición:</span>
                        <span class="spec-value">{{ $producto['condition'] }}</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">Disponibilidad:</span>
                        <span class="spec-value" style="color: var(--military-green); font-weight: bold;">✓ En Stock</span>
                    </div>
                </div>

                <div style="background: var(--white); padding: 1.5rem; border-radius: 5px; margin-bottom: 2rem;">
                    <h3 style="margin-bottom: 1rem; color: var(--dark-green);">Descripción</h3>
                    <p style="line-height: 1.8; color: var(--dark-gray);">
                        {{ $producto['description'] }}
                    </p>
                </div>

                <div style="display: flex; gap: 1rem;">
                    <button class="btn btn-success" style="flex: 1; padding: 1rem; font-size: 1.1rem;">
                        Comprar Ahora
                    </button>
                    <button class="btn btn-primary" style="flex: 1; padding: 1rem; font-size: 1.1rem;">
                        Solicitar Información
                    </button>
                </div>

                <div style="margin-top: 2rem; padding: 1rem; background: #fff3cd; border-left: 4px solid var(--warning); border-radius: 5px;">
                    <strong style="color: var(--dark-green);">📋 Incluye:</strong>
                    <ul style="margin-top: 0.5rem; margin-left: 1.5rem; color: var(--dark-gray);">
                        <li>Documentación histórica completa</li>
                        <li>Certificado de autenticidad</li>
                        <li>Manual de vuelo y mantenimiento</li>
                        <li>Garantía de 12 meses en motor</li>
                        <li>Entrega en nuestra instalación en Texas</li>
                    </ul>
                </div>
            </div>
        </div>
        @else
        <div style="text-align: center; padding: 3rem; background: var(--light-gray); border-radius: 10px; color: var(--dark-gray);">
            <h2 style="color: var(--danger); margin-bottom: 1rem;">Avión no encontrado</h2>
            <p>El producto con ID {{ $idProduct }} no existe en nuestro catálogo.</p>
            <a href="{{ url('/product') }}" class="btn btn-primary" style="margin-top: 1rem;">
                Volver al Catálogo
            </a>
        </div>
        @endif
    </div>

@endsection

  

