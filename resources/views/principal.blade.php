<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <!-- Incluye Bootstrap -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Estilo para que el cuerpo ocupe el 100% de la altura de la ventana */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Asegúrate de que el contenido ocupe todo el espacio disponible */
        main {
            flex: 1;
        }
    </style>
</head>
<body class="bg-light">

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('principal') }}">Biblioteca Repaso</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('principal') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('registro') }}">Registrar Libro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="container my-5">
        <div class="text-center">
            <h1 class="display-4 text-primary">Noticia Literaria</h1>
            <p class="lead text-muted">¡Última novedad! Nueva colección de libros de ciencia ficción disponibles.</p>
            <!-- Botón para registrar un libro -->
            <a href="{{ route('registro') }}" class="btn btn-primary mt-3">Registrar Libro</a>
        </div>
    </main>

    <!-- Pie de página -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p class="mb-0">&copy; Biblioteca Repaso - {{ date('Y') }}</p>
        </div>
    </footer>

    <!-- Incluye los scripts de Bootstrap al final del body para un mejor rendimiento -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
