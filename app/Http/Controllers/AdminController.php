<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\User;
use App\Models\Comment;
use App\Models\Bookmark;

class AdminController extends Controller
{
    // Dashboard Routes
    public function getDashboardStats() {
        // Logika untuk mengambil statistik dashboard
        return view('admindash');
    }

    public function getSystemInfo() {
        // Logika untuk mengambil informasi sistem
        return view('admindash');
    }

    // Manajemen Resep
    public function getRecipes() {
        $recipes = Recipe::all();
        return view('adminresep', compact('recipes'));
    }

    public function updateRecipe($id, Request $request) {
        $recipe = Recipe::find($id);
        $recipe->update($request->all());
        return redirect()->route('admin.recipes')->with('success', 'Recipe updated successfully');
    }

    public function deleteRecipe($id) {
        Recipe::find($id)->delete();
        return redirect()->route('admin.recipes')->with('success', 'Recipe deleted successfully');
    }

    // Manajemen Pengguna
    public function getUsers() {
        $users = User::all();
        return view('adminuser', compact('users'));
    }

    public function createUser(Request $request) {
        User::create($request->all());
        return redirect()->route('admin.users')->with('success', 'User created successfully');
    }

    public function updateUser($id, Request $request) {
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('admin.users')->with('success', 'User updated successfully');
    }

    public function deleteUser($id) {
        User::find($id)->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully');
    }

    public function updateUserRole($id, Request $request) {
        $user = User::find($id);
        $user->role = $request->role;
        $user->save();
        return redirect()->route('admin.users')->with('success', 'User role updated successfully');
    }

    // Manajemen Komentar
    public function getComments() {
        $comments = Comment::all();
        return view('admincomments', compact('comments'));
    }

    public function deleteComment($id) {
        Comment::find($id)->delete();
        return redirect()->route('admin.comments')->with('success', 'Comment deleted successfully');
    }

    // Manajemen Bookmark
    public function getBookmarks() {
        $bookmarks = Bookmark::all();
        return view('adminbookmarks', compact('bookmarks'));
    }

    public function deleteBookmark($id) {
        Bookmark::find($id)->delete();
        return redirect()->route('admin.bookmarks')->with('success', 'Bookmark deleted successfully');
    }

    public function getComments()
{
    $comments = Comment::with('user')->get();  // Mengambil komentar beserta user yang membuat komentar
    return view('admincomments', compact('comments'));
}

public function deleteComment($id)
{
    $comment = Comment::findOrFail($id);
    $comment->delete();
    return redirect()->route('admin.comments')->with('success', 'Comment deleted successfully');
}

}
