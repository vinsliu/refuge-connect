<!-- resources/views/pages/animal-details.blade.php -->
@extends('layouts.app')

@section('title', $animal->name)

@section('content')

<h2 class="page-title">{{ $animal->name }}</h2>

<div class="animal-details-container">

    <div class="animal-image-wrapper">
        <div class="animal-image-box">
            @if ($animal->photo)
            <img
                src="{{ asset($animal->photo) }}"
                alt="{{ $animal->name }}">
            @endif
        </div>
    </div>

    <div class="animal-info">
        <p><span>Espèce :</span> {{ $animal->species }}</p>
        <p><span>Âge :</span> {{ $animal->age }} ans</p>
        <p>{{ $animal->description }}</p>
    </div>

</div>

@endsection
