<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $recipe->name }} - Langkah</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <nav>
        <ul>
            <li><a href="{{ route('recipe.ingredients', $recipe->id) }}">Bahan</a></li>
            <li><a href="{{ route('recipe.steps', $recipe->id) }}">Langkah</a></li>
            <li><a href="{{ route('recipe.reviews', $recipe->id) }}">Review</a></li>
        </ul>
    </nav>

    <section class="recipe-detail">
        <h1>{{ $recipe->name }}</h1>
        <h2>Langkah-Langkah</h2>
        <ol>
            @foreach(json_decode($recipe->steps, true) as $step)
                <li>{{ $step }}</li>
            @endforeach
        </ol>
    </section>
</body>
</html>
