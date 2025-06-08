<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    // Menambahkan resep ke favorit
    public function store($id)
    {
        $recipe = Recipe::findOrFail($id);

        // Menambahkan ke favorit untuk pengguna yang sedang login
        auth()->user()->favorites()->attach($recipe);

        return redirect()->back();
    }

    // Menghapus resep dari favorit
    public function destroy($id)
    {
        $recipe = Recipe::findOrFail($id);

        // Menghapus dari favorit untuk pengguna yang sedang login
        auth()->user()->favorites()->detach($recipe);

        return redirect()->back();
    }
}
