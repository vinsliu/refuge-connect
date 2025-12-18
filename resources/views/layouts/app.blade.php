<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <title>@yield('title')</title>

    @vite([
    'resources/css/app.css',
    'resources/css/partials/header.css',
    'resources/css/partials/footer.css',
    'resources/css/welcome.css',
    'resources/css/animal-detail.css',
    'resources/css/components/animal-card.css',
    'resources/js/app.js'
    ])
</head>

<body class="app-body">

    @include('partials.header')

    <main class="app-main">
        <div class="app-container">
            @yield('content')
        </div>
    </main>

    @include('partials.footer')

</body>

</html>
