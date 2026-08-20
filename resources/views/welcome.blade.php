<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warbirds Elite - Aviones de Guerra Históricos</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <nav class="navbar">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <a href="{{ url('/') }}" class="navbar-brand">✈️ Warbirds Elite</a>
            <ul class="navbar-nav">
                <li><a href="{{ url('/') }}" class="nav-link">Inicio</a></li>
                <li><a href="{{ url('/product') }}" class="nav-link">Catálogo</a></li>
                <li><a href="{{ url('/product/create') }}" class="nav-link">Vender Avión</a></li>
            </ul>
        </div>
    </nav>

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

            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1580674285054-bed31e145f59?w=600&h=400&fit=crop" alt="F-16 Fighting Falcon" class="product-image">
                <div class="product-info">
                    <div class="product-category">Moderno - Jet</div>
                    <h3 class="product-title">F-16 Fighting Falcon</h3>
                    <p class="product-description">Caza polivalente de 4ta generación, uno de los más exitosos del mundo</p>
                    <div class="product-price">$18,000,000</div>
                    <a href="{{ url('/product/2') }}" class="btn btn-success">Ver Detalles</a>
                </div>
            </div>

            <div class="product-card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Supermarine_Spitfire_Mk_Vb_EP120.jpg/640px-Supermarine_Spitfire_Mk_Vb_EP120.jpg" alt="Supermarine Spitfire" class="product-image">
                <div class="product-info">
                    <div class="product-category">WWII - Caza</div>
                    <h3 class="product-title">Supermarine Spitfire Mk IX</h3>
                    <p class="product-description">Icono de la Batalla de Inglaterra, diseño elegante y letal</p>
                    <div class="product-price">$3,200,000</div>
                    <a href="{{ url('/product/3') }}" class="btn btn-success">Ver Detalles</a>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 3rem;">
            <a href="{{ url('/product') }}" class="btn btn-primary" style="font-size: 1.2rem;">Ver Todos los Aviones</a>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2026 Warbirds Elite. Todos los derechos reservados.</p>
        <p style="margin-top: 0.5rem; font-size: 0.9rem;">Aviones de guerra históricos y modernos para coleccionistas</p>
    </footer>

</body>
</html>