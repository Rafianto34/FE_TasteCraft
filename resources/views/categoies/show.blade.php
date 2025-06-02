@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-3xl font-bold mb-8">Resep dalam Kategori: {{ $category->name }}</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($recipes as $recipe)
                <div class="bg-white shadow-md rounded-lg p-6">
                    <img src="{{ asset('images/' . $recipe->name . '.jpg') }}" alt="{{ $recipe->name }}" class="w-full h-40 object-cover mb-4 rounded-lg">
                    <h3 class="font-semibold text-lg mb-2">{{ $recipe->name }}</h3>
                    <p class="text-sm text-gray-500">{{ Str::limit($recipe->description, 100) }}</p>
                    <a href="{{ route('recipes.show', $recipe->id) }}" class="text-orange-500">Lihat Detail</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
