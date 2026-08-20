<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vender Avión - Warbirds Elite</title>
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

    <div class="container" style="margin-top: 2rem;">
        <div class="form-container">
            <h1 style="text-align: center; margin-bottom: 0.5rem; color: var(--dark-green);">
                Vende tu Avión de Guerra
            </h1>
            <p style="text-align: center; margin-bottom: 2rem; color: var(--steel-gray);">
                Completa el formulario para listar tu aeronave en nuestra plataforma
            </p>

            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                    <div class="form-group" style="grid-column: span 2;">
                        <label class="form-label" for="name">Nombre del Avión *</label>
                        <input type="text" id="name" name="name" class="form-control" 
                               placeholder="Ej: P-51D Mustang" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="categoria">Categoría *</label>
                        <select id="categoria" name="categoria" class="form-control" required>
                            <option value="">Seleccionar...</option>
                            <option value="WWII Caza">WWII - Caza</option>
                            <option value="WWII Bombardero">WWII - Bombardero</option>
                            <option value="Guerra Fría">Guerra Fría</option>
                            <option value="Jet Moderno">Jet Moderno</option>
                            <option value="5ta Generación">5ta Generación</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="precio">Precio (USD) *</label>
                        <input type="number" id="precio" name="precio" class="form-control" 
                               placeholder="Ej: 2500000" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="anio">Año de Fabricación *</label>
                        <input type="number" id="anio" name="anio" class="form-control" 
                               placeholder="Ej: 1944" min="1914" max="2026" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="condicion">Condición *</label>
                        <select id="condicion" name="condicion" class="form-control" required>
                            <option value="">Seleccionar...</option>
                            <option value="Restaurado - Vuelo">Restaurado - Vuelo</option>
                            <option value="Restaurado - Estático">Restaurado - Estático</option>
                            <option value="Proyecto Restauración">Proyecto Restauración</option>
                            <option value="Partes/Restos">Partes/Restos</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="descripcion">Descripción Detallada *</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" 
                              placeholder="Describe el historial del avión, restauraciones, horas de vuelo, documentación, etc..."
                              required></textarea>
                </div>

                <div style="background: var(--white); padding: 1.5rem; border-radius: 5px; margin-bottom: 1.5rem;">
                    <h3 style="margin-bottom: 1rem; color: var(--dark-green);">Especificaciones Técnicas</h3>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                        <div class="form-group">
                            <label class="form-label" for="motor">Motor</label>
                            <input type="text" id="motor" name="motor" class="form-control" 
                                   placeholder="Ej: Packard V-1650-7 Merlin">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="velocidad">Velocidad Máxima</label>
                            <input type="text" id="velocidad" name="velocidad" class="form-control" 
                                   placeholder="Ej: 703 km/h">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="alcance">Alcance</label>
                            <input type="text" id="alcance" name="alcance" class="form-control" 
                                   placeholder="Ej: 2,755 km">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="armamento">Armamento</label>
                            <input type="text" id="armamento" name="armamento" class="form-control" 
                                   placeholder="Ej: 6 ametralladoras .50 cal">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="imagen">Imagen Principal *</label>
                    <input type="file" id="imagen" name="imagen" class="form-control" 
                           accept="image/*" required>
                    <small style="color: var(--steel-gray); display: block; margin-top: 0.5rem;">
                        Formatos aceptados: JPG, PNG, WEBP. Tamaño máximo: 5MB
                    </small>
                </div>

                <div style="background: var(--white); padding: 1.5rem; border-radius: 5px; margin-bottom: 1.5rem;">
                    <h3 style="margin-bottom: 1rem; color: var(--dark-green);">Información de Contacto</h3>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                        <div class="form-group">
                            <label class="form-label" for="vendedor_nombre">Nombre Completo *</label>
                            <input type="text" id="vendedor_nombre" name="vendedor_nombre" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="vendedor_email">Email *</label>
                            <input type="email" id="vendedor_email" name="vendedor_email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="vendedor_telefono">Teléfono</label>
                            <input type="tel" id="vendedor_telefono" name="vendedor_telefono" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="ubicacion">Ubicación del Avión *</label>
                            <input type="text" id="ubicacion" name="ubicacion" class="form-control" 
                                   placeholder="Ciudad, País" required>
                        </div>
                    </div>
                </div>

                <div style="display: flex; gap: 1rem; justify-content: center; margin-top: 2rem;">
                    <button type="submit" class="btn btn-success" style="padding: 1rem 3rem; font-size: 1.1rem;">
                        Publicar Avión
                    </button>
                    <a href="{{ url('/product') }}" class="btn btn-primary" style="padding: 1rem 3rem; font-size: 1.1rem;">
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2026 Warbirds Elite. Todos los derechos reservados.</p>
    </footer>

</body>
</html>