<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TasteCraft Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-orange-50 flex">
    
    <!-- Left side with image -->
    <div class="w-1/2 hidden lg:block">
        <img src="{{ asset('images/food.jpg') }}" alt="Food" class="object-cover h-full w-full">
    </div>

    <!-- Right side with form -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-[url('/images/pattern.png')] bg-repeat">
        <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
            <div class="flex justify-between mb-6">
                <h2 class="text-orange-500 font-semibold border-b-2 border-orange-500 pb-1">Masuk</h2>
                <a href="{{ route('register') }}" class="text-gray-500 hover:text-orange-500">Daftar</a>
            </div>

            <h1 class="text-xl font-bold text-gray-800 mb-2">Selamat Datang Kembali!</h1>
            <p class="text-sm text-gray-500 mb-6">Silakan masuk ke akunmu di TasteCraft.</p>

            <form action="#" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500" placeholder="example@example.com" required>
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500" required>
                </div>

                <button type="submit" class="w-full bg-orange-500 text-white py-2 rounded-lg hover:bg-orange-600 transition">
                    Masuk Sekarang
                </button>
            </form>

            <p class="text-sm text-center text-gray-600 mt-6">
                Belum punya akun? <a href="{{ route('register') }}" class="text-orange-500 hover:underline">Daftar di sini</a>
            </p>
        </div>
    </div>

</body>
</html>
