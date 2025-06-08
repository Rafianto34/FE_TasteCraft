<?php
namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Review;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    // Menampilkan bahan-bahan resep
    public function showIngredients($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('recipe.ingredients', compact('recipe'));
    }

    // Menampilkan langkah-langkah resep
    public function showSteps($id)
    {
        $recipe = Recipe::findOrFail($id);
        return view('recipe.steps', compact('recipe'));
    }

    // Menampilkan review-recipe
    public function showReviews($id)
    {
        $recipe = Recipe::findOrFail($id);
        $reviews = Review::where('recipe_id', $id)->get();
        return view('recipe.reviews', compact('recipe', 'reviews'));
    }
    public function showFavorites()
{
    $favorites = auth()->user()->favorites;
    return view('favorites.index', compact('favorites'));
}

}
