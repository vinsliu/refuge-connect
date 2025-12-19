@extends('layouts.app')

@vite(['resources/css/animal-detail.css'])

@section('title', $animal->name)

@section('content')

<h2 class="page-title">{{ $animal->name }}</h2>

<div class="animal-details-container">

    <div class="animal-image-box">
        <img src="{{ asset($animal->photo) }}" alt="{{ $animal->name }}">
    </div>

    <div class="animal-info">
        <p><span>Espèce :</span> {{ $animal->species }}</p>
        <p><span>Âge :</span> {{ $animal->age }} ans</p>
        <p>{{ $animal->description }}</p>
    </div>

</div>

@endsection
