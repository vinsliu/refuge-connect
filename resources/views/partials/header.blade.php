<!-- ressources/views/partials/header.blade.php -->
<header>
    <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">

        <h1> <img src="{{ asset('logo.png') }}" alt="{{ config('app.name') }}"> </h1>

        <nav class="space-x-6">
            <a href="{{ route('home') }}"> Accueil </a>
            <a href="{{ route('home') }}"> Ajouter un animal </a>
        </nav>

    </div>
</header>
