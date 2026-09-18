<nav class="navbar">
    <div class="navbar-container">
        <a href="{{ url('/') }}" class="navbar-brand">✈️ Warbirds Elite</a>
        
        <ul class="navbar-nav">
            <li><a href="{{ url('/') }}" class="nav-link">Inicio</a></li>
            <li><a href="{{ url('/product') }}" class="nav-link">Catálogo</a></li>

            {{-- Visible SOLO para usuarios autenticados --}}
            @auth
                <li><a href="{{ url('/product/create') }}" class="nav-link nav-link--accent">Vender Avión</a></li>
                <li class="user-info">
                    <span class="user-greeting"> Hola, <strong>{{ Auth::user()->name }}</strong></span>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" class="logout-form">
                        @csrf
                        <button type="submit" class="btn-logout">🚪 Salir</button>
                    </form>
                </li>
            @endauth

            {{-- Visible SOLO para visitantes no autenticados --}}
            @guest
                <li><a href="{{ route('login') }}" class="nav-link">Iniciar Sesión</a></li>
                <li><a href="{{ route('register') }}" class="nav-link nav-link--accent">Registrarse</a></li>
            @endguest
        </ul>
    </div>
</nav>

<style>
    /* ===== NAVBAR WARBIrds Elite ===== */
    .navbar {
        background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .navbar-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 15px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 15px;
    }

    .navbar-brand {
        color: #ffffff;
        text-decoration: none;
        font-size: 1.5rem;
        font-weight: bold;
        letter-spacing: 1px;
        transition: transform 0.3s ease;
        background: linear-gradient(90deg, #e94560, #f5a623);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .navbar-brand:hover {
        transform: scale(1.05);
    }

    .navbar-nav {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
        gap: 10px;
        align-items: center;
        flex-wrap: wrap;
    }

    .nav-link {
        color: #e0e0e0;
        text-decoration: none;
        padding: 10px 18px;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .nav-link:hover {
        background: rgba(255, 255, 255, 0.1);
        color: #ffffff;
        border-color: #e94560;
        transform: translateY(-2px);
    }

    .nav-link--accent {
        background: linear-gradient(135deg, #e94560, #f5a623);
        color: #ffffff;
        font-weight: bold;
    }

    .nav-link--accent:hover {
        box-shadow: 0 4px 15px rgba(233, 69, 96, 0.5);
        border-color: transparent;
    }

    .user-info {
        display: flex;
        align-items: center;
    }

    .user-greeting {
        color: #f5a623;
        font-size: 0.95rem;
        padding: 10px 15px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 8px;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .logout-form {
        margin: 0;
    }

    .btn-logout {
        background: #e94560;
        color: #ffffff;
        border: none;
        padding: 10px 18px;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        transition: all 0.3s ease;
        font-size: 0.9rem;
    }

    .btn-logout:hover {
        background: #c73652;
        box-shadow: 0 4px 12px rgba(233, 69, 96, 0.4);
        transform: translateY(-2px);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .navbar-container {
            flex-direction: column;
            padding: 15px;
        }

        .navbar-nav {
            justify-content: center;
            width: 100%;
        }
    }
</style>