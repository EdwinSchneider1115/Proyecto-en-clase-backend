@extends('layout.app')

@section('content')

    <section class="hero">
        <div class="hero-content">
            <h1>Legends of the Sky</h1>
            <p>Desde los héroes de la Segunda Guerra Mundial hasta los jets supersónicos modernos</p>
            <a href="{{ url('/product') }}" class="btn btn-primary">Ver Catálogo</a>
        </div>
    </section>

    <div class="container">
        <h2 style="text-align: center; margin-bottom: 2rem; font-size: 2.5rem;">¿Por Qué Elegirnos?</h2>
        <div class="features">
            <div class="feature">
                <div class="feature-icon">🛩️</div>
                <h3>Aviones Históricos</h3>
                <p>Cazas legendarios de la WWII como el Spitfire, Mustang P-51 y Messerschmitt Bf 109</p>
            </div>
            <div class="feature">
                <div class="feature-icon"></div>
                <h3>Jets Modernos</h3>
                <p>F-16, F-22 Raptor, Su-27 y los cazas de 5ta generación más avanzados</p>
            </div>
            <div class="feature">
                <div class="feature-icon">🏆</div>
                <h3>Certificación Auténtica</h3>
                <p>Todos nuestros aviones cuentan con documentación histórica y técnica verificada</p>
            </div>
            <div class="feature">
                <div class="feature-icon">🔧</div>
                <h3>Restauración Profesional</h3>
                <p>Servicio de restauración y mantenimiento por expertos en aviación militar</p>
            </div>
        </div>

        <h2 style="text-align: center; margin: 3rem 0 2rem; font-size: 2.5rem;">Aviones Destacados</h2>
        <div class="products-grid">
            <div class="product-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/P-51D_25_FG_434_FS_Kissimmee_AAF_1946.jpg/640px-P-51D_25_FG_434_FS_Kissimmee_AAF_1946.jpg" alt="P-51 Mustang" class="product-image">
                <div class="product-info">
                    <div class="product-category">WWII - Caza</div>
                    <h3 class="product-title">P-51D Mustang</h3>
                    <p class="product-description">El legendario caza de escolta de largo alcance que dominó los cielos de Europa</p>
                    <div class="product-price">$2,500,000</div>
                    <a href="{{ url('/product/1') }}" class="btn btn-success">Ver Detalles</a>
                </div>
            </div>

        </div>

        <div style="text-align: center; margin-top: 3rem;">
            <a href="{{ url('/product') }}" class="btn btn-primary" style="font-size: 1.2rem;">Ver Todos los Aviones</a>
        </div>
    </div>

@endsection

    