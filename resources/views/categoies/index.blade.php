@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-3xl font-bold mb-8">Eksplorasi Kategori Makanan Favorit!</h1>
        <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-6 gap-6">
            @foreach($categories as $category)
                <div class="text-center bg-white shadow-md rounded-lg p-6 hover:shadow-lg">
                    <i class="{{ $category->icon }} text-4xl mb-4"></i>
                    <h3 class="font-semibold text-lg mb-2">{{ $category->name }}</h3>
                    <p>{{ $category->recipes->count() }} resep</p>
                    <a href="{{ route('categories.show', $category->id) }}" class="text-orange-500">Lihat Resep</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
