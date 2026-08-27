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

        @yield('content')


    </div>

    <footer class="footer">
        <p>&copy; 2026 Warbirds Elite. Todos los derechos reservados.</p>
    </footer>

</body>
</html>