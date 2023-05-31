<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <!-- Tambahkan navigasi atau header lainnya di sini -->
        </nav>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        <!-- Tambahkan footer atau bagian bawah lainnya di sini -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
