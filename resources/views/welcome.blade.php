<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@vite(['resources/css/welcome.css'])

@section('title', 'Accueil')

@section('content')

<h2 class="page-title">Nos animaux</h2>

@if (session('success'))
<div class="alert success">
    {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="alert error">
    {{ session('error') }}
</div>
@endif

<div class="animal-grid">
    @foreach ($animals as $animal)
    <x-animal-card :animal="$animal" />
    @endforeach
</div>

@endsection
