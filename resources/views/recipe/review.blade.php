<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $recipe->name }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f8f8;
        margin: 0;
    }

    nav ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: space-between;
        background-color: #f4b400;
        padding: 20px;
    }

    nav ul li {
        padding: 10px;
    }

    nav ul li a {
        color: white;
        text-decoration: none;
        font-weight: 600;
    }

    .recipe-detail {
        margin: 20px;
    }

    .recipe-header {
        display: flex;
    }

    .recipe-header img {
        width: 200px;
        height: 200px;
        margin-right: 20px;
    }

    .recipe-header .recipe-info {
        display: flex;
        flex-direction: column;
    }

    .recipe-info h1 {
        font-size: 24px;
        color: #333;
    }

    .recipe-info p {
        color: #666;
    }

    .recipe-content {
        display: flex;
        justify-content: space-between;
    }

    .ingredients, .instructions, .reviews {
        width: 30%;
    }

    h2 {
        color: #f4b400;
    }

    ul {
        list-style-type: disc;
        margin-left: 20px;
    }

    ol {
        margin-left: 20px;
    }

    .review {
        background-color: #f4f4f4;
        margin-top: 10px;
        padding: 10px;
        border-radius: 8px;
    }

</style>
<body>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Kategori</a></li>
            <li><a href="#">Favorit</a></li>
            <li><input type="text" placeholder="Cari resep..."></li>
        </ul>
    </nav>

    <section class="recipe-detail">
        <div class="recipe-header">
            <img src="{{ asset('images/food.jpg') }}" alt="{{ $recipe->name }}">
            <div class="recipe-info">
                <h1>{{ $recipe->name }}</h1>
                <p>Rating: ★★★★☆ ({{ $reviews->count() }} reviews)</p>
                <p>{{ $recipe->description }}</p>
            </div>
        </div>

        <div class="recipe-content">
            <div class="reviews">
                <h2>Review</h2>
                @if($reviews->isEmpty())
                    <p>No reviews yet</p>
                @else
                    @foreach($reviews as $review)
                        <div class="review">
                            <p><strong>{{ $review->user_name }}:</strong> {{ $review->review_text }}</p>
                            <p>Rating: {{ $review->rating }} ★</p>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
</body>
</html>
