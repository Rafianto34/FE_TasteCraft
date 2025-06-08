@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <div class="flex flex-col items-center bg-white p-6 rounded-lg shadow-lg">
            <!-- Menampilkan foto profil pengguna -->
            <div class="mb-4">
                <img src="{{ asset('images/' . ($user->profile_picture ?? 'default-profile.png')) }}" alt="Profile Picture" class="w-32 h-32 rounded-full object-cover mb-4">
            </div>
            
            <!-- Menampilkan Nama dan Bio -->
            <h1 class="text-3xl font-bold">{{ $user->name }}</h1>
            <p class="text-gray-600 text-sm">{{ $user->bio ?? 'Belum ada bio.' }}</p>

            <!-- Tombol untuk Mengedit Profil -->
            <div class="mt-4">
                <a href="{{ route('profile.edit') }}" class="text-blue-500">Edit Profil</a>
            </div>
        </div>

        <!-- Menampilkan daftar resep yang dimiliki pengguna -->
        <div class="mt-6">
            <h2 class="text-2xl font-bold mb-4">Recipe</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
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
    </div>
@endsection
