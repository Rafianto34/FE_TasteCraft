<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $recipe['title'] }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<style>
    body {
    font-family: 'Poppins', sans-serif;
    background-color: #f8f8f8;
    margin: 0;
}

.navbar {
    background-color: #f4b400;
    padding: 20px;
}

.navbar .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar-menu {
    list-style-type: none;
    padding: 0;
    display: flex;
    gap: 15px;
}

.navbar-menu li {
    padding: 10px;
}

.navbar-menu li a {
    color: white;
    text-decoration: none;
    font-weight: 600;
}

.navbar-menu li input {
    padding: 8px;
    border-radius: 5px;
    border: none;
}

.recipe-detail {
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.recipe-header {
    display: flex;
    gap: 20px;
}

.recipe-image img {
    width: 300px;
    height: auto;
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
    gap: 20px;
    margin-top: 30px;
}

.ingredients, .instructions {
    width: 45%;
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

.review-section {
    margin-top: 50px;
    background-color: white;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.review-box {
    padding: 20px;
    text-align: center;
}

.review-box h2 {
    font-size: 24px;
    color: #333;
}

.review-box p {
    color: #666;
}

</style>
<body class="body-style">
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <div>
                <a href="#" class="navbar-brand">Tastecraft</a>
            </div>
            <div>
                <ul class="navbar-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Kategori</a></li>
                    <li><a href="#">Favorit</a></li>
                    <li><input type="text" placeholder="Cari resep..."></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Recipe Detail Section -->
    <section class="recipe-detail">
        <div class="recipe-header">
            <div class="recipe-image">
                <img src="{{ $recipe['image'] }}" alt="{{ $recipe['title'] }}">
            </div>
            <div class="recipe-info">
                <h1>{{ $recipe['title'] }}</h1>
                <p class="rating">Rating: 
                    @for ($i = 0; $i < 5; $i++)
                        @if ($i < $recipe['rating'])
                            ★
                        @else
                            ☆
                        @endif
                    @endfor
                </p>
                <p>{{ $recipe['description'] }}</p>
            </div>
        </div>

        <!-- Ingredients and Steps Section -->
        <div class="recipe-content">
            <div class="ingredients">
                <h2>Bahan-Bahan</h2>
                <ul>
                    @foreach ($recipe['ingredients'] as $category => $items)
                        <li><strong>{{ $category }}:</strong>
                            <ul>
                                @foreach ($items as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="instructions">
                <h2>Langkah-Langkah</h2>
                <ol>
                    @foreach ($recipe['steps'] as $step)
                        <li>{{ $step }}</li>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>

    <!-- Review Section -->
    <section class="review-section">
        <div class="review-box">
            <h2>Review</h2>
            <p>{{ $recipe['reviews'] }}</p>
        </div>
    </section>
</body>
</html>
