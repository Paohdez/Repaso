<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Libro</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('principal') }}">Biblioteca Repaso</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-secondary" href="{{ route('principal') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('registro') }}">Registrar Libro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5">
        <h1 class="text-center text-primary mb-4" style="font-size: 2.5rem; font-weight: bold;">Registrar Libro</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>¡Errores encontrados!</strong> Por favor corrige los siguientes errores:
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
               {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('guardarLibro') }}" method="POST" class="bg-white p-4 rounded shadow-sm">
            @csrf
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN:</label>
                <input type="text" id="isbn" name="isbn" class="form-control @error('isbn') is-invalid @enderror" value="{{ old('isbn') }}">
                @error('isbn')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" id="titulo" name="titulo" class="form-control" value="{{ old('titulo') }}">
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor:</label>
                <input type="text" id="autor" name="autor" class="form-control" value="{{ old('autor') }}">
            </div>
            <div class="mb-3">
                <label for="paginas" class="form-label">Páginas:</label>
                <input type="number" id="paginas" name="paginas" class="form-control" value="{{ old('paginas') }}">
            </div>
            <div class="mb-3">
                <label for="año" class="form-label">Año:</label>
                <input type="number" id="año" name="año" class="form-control" value="{{ old('año') }}">
            </div>
            <div class="mb-3">
                <label for="editorial" class="form-label">Editorial:</label>
                <input type="text" id="editorial" name="editorial" class="form-control" value="{{ old('editorial') }}">
            </div>
            <div class="mb-3">
                <label for="email_editorial" class="form-label">Email de Editorial:</label>
                <input type="email" id="email_editorial" name="email_editorial" class="form-control" value="{{ old('email_editorial') }}">
            </div>
            <button type="submit" class="btn btn-primary w-100">Registrar</button>
        </form>
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <div class="container">
            <p class="mb-0">&copy; Biblioteca Repaso - {{ date('Y') }}</p>
        </div>
    </footer>

</body>
</html>
