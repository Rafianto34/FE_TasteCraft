<div class="recipe-info">
    <h1>{{ $recipe->name }}</h1>
    <p>Rating: ★★★★☆ ({{ $recipe->rating }} reviews)</p>
    <p>{{ $recipe->description }}</p>

    <!-- Tombol untuk menambahkan ke favorit -->
    @if(auth()->user()->favorites->contains($recipe->id))
        <form action="{{ route('favorite.destroy', $recipe->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500">Hapus dari Favorit</button>
        </form>
    @else
        <form action="{{ route('favorite.store', $recipe->id) }}" method="POST">
            @csrf
            <button type="submit" class="text-orange-500">Tambahkan ke Favorit</button>
        </form>
    @endif
</div>
