@extends('layouts.app')

@section('title', $animal->name)

@section('content')

<h2 class="text-4xl font-bold text-center mb-12">
    {{ $animal->name }}
</h2>

<div class="flex flex-col md:flex-row items-start gap-10">

    <div class="w-full md:w-1/3">
        <div class="overflow-hidden bg-gray-100">
            @if ($animal->photo)
            <img
                src="{{ asset('storage/' . $animal->photo) }}"
                alt="{{ $animal->name }}"
                class="w-full h-auto object-cover">
            @else
            <div class="h-64 flex items-center justify-center text-gray-400">
                Pas d'image
            </div>
            @endif
        </div>
    </div>

    <div class="w-full md:w-2/3 space-y-5 text-lg text-gray-800">

        <p>
            <span class="font-semibold">Espèce :</span>
            {{ $animal->species }}
        </p>

        <p>
            <span class="font-semibold">Âge :</span>
            {{ $animal->age }} ans
        </p>

        <p class="leading-relaxed">
            {{ $animal->description }}
        </p>

    </div>

</div>

@endsection
