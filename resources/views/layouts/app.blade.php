<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CovoitApp')</title>
</head>
<body>

    {{-- HEADER --}}
    <header style="background-color: #2d3748; color: white; padding: 1rem;">
        <nav>
            <a href="{{ route('employes.index') }}" style="color: white; margin-right: 1rem;">Employés</a>
        </nav>
    </header>

    {{-- CONTENU DE CHAQUE VUE --}}
    <main style="padding: 2rem;">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer style="background-color: #2d3748; color: white; padding: 1rem; text-align: center;">
        <p>© {{ date('Y') }} CovoitApp - IUT Bayonne</p>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>