<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Praktikum Laravel')</title>
</head>
<body>
    @include('partials.navbar')
    <main>
        @yield('content')
    </main>
    <footer>&copy; {{ date('Y') }}</footer>
</body>
</html>