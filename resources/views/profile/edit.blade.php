@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <div class="flex flex-col items-center bg-white p-6 rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold mb-6">Edit Profil</h1>

            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="w-full max-w-lg">
                @csrf

                <!-- Input untuk Nama -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="w-full p-3 mt-1 border rounded-md" required>
                </div>

                <!-- Input untuk Bio -->
                <div class="mb-4">
                    <label for="bio" class="block text-sm font-medium text-gray-700">Bio</label>
                    <textarea id="bio" name="bio" class="w-full p-3 mt-1 border rounded-md">{{ old('bio', $user->bio) }}</textarea>
                </div>

                <!-- Input untuk Gambar Profil -->
                <div class="mb-4">
                    <label for="profile_picture" class="block text-sm font-medium text-gray-700">Gambar Profil</label>
                    <input type="file" id="profile_picture" name="profile_picture" class="w-full p-3 mt-1 border rounded-md">
                </div>

                <!-- Tombol Submit -->
                <div class="mb-4">
                    <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded-md">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
