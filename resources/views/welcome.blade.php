<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

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
    @if ($loop->last)
    @break
    @endif
    <x-animal-card :animal="$animal" />
    @endforeach
</div>

@endsection
