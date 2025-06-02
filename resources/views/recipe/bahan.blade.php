<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayam Goreng Rempah</title>
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
            <img src="{{ asset('images/food.jpg') }}" alt="Ayam Goreng">
            <div class="recipe-info">
                <h1>Ayam Goreng Rempah</h1>
                <p>Rating: ★★★★☆ (5 reviews)</p>
                <p>Keterangan: Ayam goreng dengan rempah khas Indonesia yang menjadikan hidangan ini lezat dan gurih.</p>
            </div>
        </div>
        
        <div class="recipe-content">
            <div class="ingredients">
                <h2>Bahan-Bahan</h2>
                <ul>
                    <li><strong>Bahan Utama:</strong>
                        <ul>
                            <li>4 Potong Ayam (Paha, Dada, Atau Sesuai Selera)</li>
                            <li>500 Ml Air (Untuk Merebus Ayam)</li>
                            <li>Minyak Goreng Secukupnya</li>
                        </ul>
                    </li>
                    <li><strong>Bumbu Halus:</strong>
                        <ul>
                            <li>5 Siung Bawang Putih</li>
                            <li>6 Siung Bawang Merah</li>
                            <li>2 Buah Kemiri, Sangrai</li>
                            <li>1 Sdt Ketumbar Butir</li>
                            <li>1 Ruas Kunyit (Sekitar 3–4 Cm)</li>
                            <li>1 Ruas Jahe (Sekitar 2–3 Cm)</li>
                            <li>Garam Secukupnya</li>
                            <li>Kaldu Bubuk Atau Penyedap (Opsional)</li>
                        </ul>
                    </li>
                    <li><strong>Rempah Tambahan:</strong>
                        <ul>
                            <li>1 Batang Serai, Memarkan</li>
                            <li>2 Lembar Daun Salam</li>
                            <li>2 Lembar Daun Jeruk</li>
                            <li>1/2 Sdt Merica Bubuk</li>
                        </ul>
                    </li>
                    <li><strong>Pelengkap (Opsional):</strong>
                        <ul>
                            <li>Daun Kari Goreng Atau Serundeng Kelapa</li>
                            <li>Sambal Dan Nasi Hangat</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="instructions">
                <h2>Langkah</h2>
                <ol>
                    <li>Langkah pertama.</li>
                    <li>Langkah kedua.</li>
                    <li>Langkah ketiga.</li>
                </ol>
            </div>
            <div class="reviews">
                <h2>Review</h2>
                <p>No reviews yet</p>
            </div>
        </div>
    </section>
</body>
</html>
