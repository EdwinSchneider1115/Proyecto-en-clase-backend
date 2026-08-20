<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo - Warbirds Elite</title>
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

    <div class="container">
        <h1 style="text-align: center; margin-bottom: 1rem; font-size: 3rem;">Catálogo de Aviones</h1>
        <p style="text-align: center; margin-bottom: 3rem; font-size: 1.2rem;">
            Explora nuestra colección de aviones de guerra históricos y modernos
        </p>

        <div class="products-grid">
            
            <!-- ID: 1 -->
            <div class="product-card">
                <img src="https://i.imgur.com/8Kf8ZqL.jpg" alt="P-51 Mustang" class="product-image">
                <div class="product-info">
                    <div class="product-category">WWII - Caza</div>
                    <h3 class="product-title">P-51D Mustang</h3>
                    <p class="product-description">Caza de escolta de largo alcance. Motor Merlin V-1650-7.</p>
                    <div class="product-price">$2,500,000</div>
                    <a href="{{ url('/product/1') }}" class="btn btn-success" style="width: 100%; text-align: center;">Ver Detalles</a>
                </div>
            </div>

            <!-- ID: 2 -->
            <div class="product-card">
                <img src="https://i.imgur.com/jK9mPqW.jpg" alt="F-16" class="product-image">
                <div class="product-info">
                    <div class="product-category">Moderno - Jet</div>
                    <h3 class="product-title">F-16C Fighting Falcon</h3>
                    <p class="product-description">Caza polivalente supersónico. Año 1995.</p>
                    <div class="product-price">$18,000,000</div>
                    <a href="{{ url('/product/2') }}" class="btn btn-success" style="width: 100%; text-align: center;">Ver Detalles</a>
                </div>
            </div>

            <!-- ID: 3 -->
            <div class="product-card">
                <img src="https://i.imgur.com/vN8kR2p.jpg" alt="Spitfire" class="product-image">
                <div class="product-info">
                    <div class="product-category">WWII - Caza</div>
                    <h3 class="product-title">Supermarine Spitfire Mk IX</h3>
                    <p class="product-description">Restaurado completamente. Histórico de la Batalla de Inglaterra.</p>
                    <div class="product-price">$3,200,000</div>
                    <a href="{{ url('/product/3') }}" class="btn btn-success" style="width: 100%; text-align: center;">Ver Detalles</a>
                </div>
            </div>

            <!-- ID: 4 -->
            <div class="product-card">
                <img src="https://i.imgur.com/3TqVx9M.jpg" alt="F-22 Raptor" class="product-image">
                <div class="product-info">
                    <div class="product-category">5ta Generación</div>
                    <h3 class="product-title">F-22 Raptor</h3>
                    <p class="product-description">Caza furtivo de superioridad aérea. Stealth technology.</p>
                    <div class="product-price">$150,000,000</div>
                    <a href="{{ url('/product/4') }}" class="btn btn-success" style="width: 100%; text-align: center;">Ver Detalles</a>
                </div>
            </div>

            <!-- ID: 5 -->
            <div class="product-card">
                <img src="https://i.imgur.com/wL5hG8T.jpg" alt="Bf 109" class="product-image">
                <div class="product-info">
                    <div class="product-category">WWII - Caza</div>
                    <h3 class="product-title">Messerschmitt Bf 109G</h3>
                    <p class="product-description">Caza alemán icónico. Motor DB 605. Restauración museo.</p>
                    <div class="product-price">$2,800,000</div>
                    <a href="{{ url('/product/5') }}" class="btn btn-success" style="width: 100%; text-align: center;">Ver Detalles</a>
                </div>
            </div>

            <!-- ID: 6 -->
            <div class="product-card">
                <img src="https://i.imgur.com/2mN9fKp.jpg" alt="Su-27" class="product-image">
                <div class="product-info">
                    <div class="product-category">Guerra Fría</div>
                    <h3 class="product-title">Sukhoi Su-27 Flanker</h3>
                    <p class="product-description">Caza de superioridad aérea soviético. 1989.</p>
                    <div class="product-price">$35,000,000</div>
                    <a href="{{ url('/product/6') }}" class="btn btn-success" style="width: 100%; text-align: center;">Ver Detalles</a>
                </div>
            </div>

            <!-- ID: 7 -->
            <div class="product-card">
                <img src="https://i.imgur.com/5RqP8nL.jpg" alt="Zero" class="product-image">
                <div class="product-info">
                    <div class="product-category">WWII - Caza</div>
                    <h3 class="product-title">Mitsubishi A6M Zero</h3>
                    <p class="product-description">Caza naval japonés. Legendario por su maniobrabilidad.</p>
                    <div class="product-price">$2,100,000</div>
                    <a href="{{ url('/product/7') }}" class="btn btn-success" style="width: 100%; text-align: center;">Ver Detalles</a>
                </div>
            </div>

            <!-- ID: 8 -->
            <div class="product-card">
                <img src="https://i.imgur.com/9WqT7hN.jpg" alt="F-35" class="product-image">
                <div class="product-info">
                    <div class="product-category">5ta Generación</div>
                    <h3 class="product-title">F-35B Lightning II</h3>
                    <p class="product-description">Caza furtivo multirrol con despegue vertical. 2020.</p>
                    <div class="product-price">$120,000,000</div>
                    <a href="{{ url('/product/8') }}" class="btn btn-success" style="width: 100%; text-align: center;">Ver Detalles</a>
                </div>
            </div>

            <!-- ID: 9 -->
            <div class="product-card">
                <img src="https://i.imgur.com/kL3mR9P.jpg" alt="Corsair" class="product-image">
                <div class="product-info">
                    <div class="product-category">WWII - Caza</div>
                    <h3 class="product-title">F4U Corsair</h3>
                    <p class="product-description">Caza embarcado con alas de gaviota. Pacific Theater.</p>
                    <div class="product-price">$2,300,000</div>
                    <a href="{{ url('/product/9') }}" class="btn btn-success" style="width: 100%; text-align: center;">Ver Detalles</a>
                </div>
            </div>

        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2026 Warbirds Elite. Todos los derechos reservados.</p>
    </footer>

</body>
</html>