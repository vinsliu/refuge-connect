<!-- resources/views/partials/header.blade.php -->
<header>
    <div class="header-container">

        <a href="{{ route('home') }}" class="logo">
            <img
                src="{{ asset('logo.png') }}"
                alt="{{ config('app.name') }}"
                class="logo-img">
        </a>

        <nav class="nav">
            <a href="{{ route('home') }}" class="nav-link">Accueil</a>
            <a href="{{ route('animal.create') }}" class="nav-link">Ajouter un animal</a>
        </nav>

    </div>
</header>
