<!-- resources/views/components/animal-card.blade.php -->
@vite(['resources/css/components/animal-card.css'])

<div class="animal-card">

    <a href="{{ route('animal.show', $animal->id) }}"
        aria-label="Voir {{ $animal->name }}"
        class="animal-card-link">

        <div class="animal-card-image-box">
            <img src="{{ asset($animal->photo) }}" alt="{{ $animal->name }}">
        </div>

        <div class="animal-card-info">
            <h2 class="animal-card-name">{{ $animal->name }}</h2>

            <p><span>Espèce :</span> {{ $animal->species }}</p>
            <p><span>Âge :</span> {{ $animal->age }} ans</p>
            <p class="animal-card-description">{{ $animal->description }}</p>
        </div>

    </a>

    <div class="animal-card-actions">
        <a href="{{ route('animal.update', $animal->id) }}" class="animal-card-action-link">Modifier</a>
        <a href="{{ route('animal.delete', $animal->id) }}" class="animal-card-action-link">Supprimer</a>
    </div>

</div>
