<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition flex flex-col">

    <a
        href="{{ route('animal.show', $animal->id) }}"
        aria-label="Voir {{ $animal->name }}"
        class="flex-grow">

        <div class="p-2 relative z-0">
            <div class="h-60 w-full rounded-lg overflow-hidden bg-gray-100">
                @if ($animal->photo)
                <img
                    src="{{ asset('storage/' . $animal->photo) }}"
                    alt="{{ $animal->name }}"
                    class="h-full w-full object-cover">
                @else
                <div class="h-full w-full flex items-center justify-center text-gray-400">
                    Pas d'image
                </div>
                @endif
            </div>
        </div>

        <div class="px-2 pb-2 flex-grow relative z-0">
            <h3 class="text-2xl font-semibold text-gray-800">
                {{ $animal->name }}
            </h3>

            <p class="text-sm text-gray-600">
                <span class="font-medium">Espèce :</span> {{ $animal->species }}
            </p>

            <p class="text-sm text-gray-600">
                <span class="font-medium">Âge :</span> {{ $animal->age }} ans
            </p>

            <p class="text-gray-700 text-sm leading-relaxed">
                {{ $animal->description }}
            </p>
        </div>
    </a>

    <div class="pb-3 px-5 mt-auto relative z-20">
        <div class="flex gap-6 text-sm font-medium">
            <a
                href="{{ route('animal.update', $animal->id) }}"
                class="flex-1 text-center text-[#52c9ff] hover:underline transition">
                Modifier
            </a>

            <a
                href="{{ route('animal.delete', $animal->id) }}"
                class="flex-1 text-center text-[#52c9ff] hover:underline transition">
                Supprimer
            </a>
        </div>
    </div>

</div>
