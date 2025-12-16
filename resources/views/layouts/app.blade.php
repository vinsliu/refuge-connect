<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>

</html>
