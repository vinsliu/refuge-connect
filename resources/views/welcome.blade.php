<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

<h2 class="text-4xl font-bold text-center mb-6">Nos animaux</h2>

@if (session('success'))
<div class="bg-green-100 text-green-800 p-4 rounded mb-6 text-center">
    {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="bg-red-100 text-red-800 p-4 rounded mb-6 text-center">
    {{ session('error') }}
</div>
@endif

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($animals as $animal)
    @if ($loop->last)
    @break
    @endif
    <x-animal-card :animal="$animal" />
    @endforeach
</div>

@endsection
