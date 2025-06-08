<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        // Mengambil data pengguna yang sedang login
        $user = auth()->user();
        
        // Mengambil resep yang dimiliki oleh pengguna (jika ada)
        $recipes = $user->recipes; 

        return view('profile.show', compact('user', 'recipes'));
    }

    public function edit()
    {
        $user = auth()->user();
        return view('profile.edit', compact('user'));
    }

    // Menyimpan perubahan profil
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string|max:1000',
            'profile_picture' => 'nullable|image|mimes:jpg,png,jpeg,gif',
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->bio = $request->bio;

        // Menyimpan gambar profil baru jika ada
        if ($request->hasFile('profile_picture')) {
            $imagePath = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile_picture = $imagePath;
        }

        $user->save();

        return redirect()->route('profile.show')->with('success', 'Profil berhasil diperbarui!');
    }
}
