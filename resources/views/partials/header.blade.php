<!-- resources/views/partials/header.blade.php -->
<header>
    <div class="max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">

        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <img
                src="{{ asset('logo.png') }}"
                alt="{{ config('app.name') }}"
                class="h-15 w-auto">
        </a>

        <!-- Navigation -->
        <nav class="flex items-center gap-6">
            <a
                href="{{ route('home') }}"
                class="text-gray-600 hover:text-indigo-600 font-medium transition">
                Accueil
            </a>

            <a
                href="{{ route('animal.create') }}"
                class="text-gray-600 hover:text-indigo-600 font-medium transition">
                Ajouter un animal
            </a>
        </nav>

    </div>
</header>
