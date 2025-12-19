<!-- resources/views/components/animal-card.blade.php -->
<div class="animal-card">

    <a href="{{ route('animal.show', $animal->id) }}"
        aria-label="Voir {{ $animal->name }}"
        class="animal-card-link">

        <div class="animal-card-image-wrapper">
            <div class="animal-card-image-box">
                @if ($animal->photo)
                <img
                    src="{{ asset($animal->photo) }}"
                    alt="{{ $animal->name }}"
                    class="animal-card-image">
                @endif
            </div>
        </div>

        <div class="animal-card-info">
            <h3 class="animal-card-name">{{ $animal->name }}</h3>

            <p class="animal-card-species"><span>Espèce :</span> {{ $animal->species }}</p>
            <p class="animal-card-age"><span>Âge :</span> {{ $animal->age }} ans</p>
            <p class="animal-card-description">{{ $animal->description }}</p>
        </div>
    </a>

    <div class="animal-card-actions">
        <a href="{{ route('animal.update', $animal->id) }}" class="animal-card-action-link">Modifier</a>
        <a href="{{ route('animal.delete', $animal->id) }}" class="animal-card-action-link">Supprimer</a>
    </div>

</div>
