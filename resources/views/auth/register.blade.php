<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar - TasteCraft</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-orange-50 flex">
    
    <!-- Kiri: Gambar -->
    <div class="w-1/2 hidden lg:block">
        <img src="{{ asset('images/food.jpg') }}" alt="Food" class="object-cover h-full w-full">
    </div>

    <!-- Kanan: Form Registrasi -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-[url('/images/pattern.png')] bg-repeat">
        <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
            <!-- Tab Masuk / Daftar -->
            <div class="flex justify-between mb-6">
                <a href="/login" class="text-gray-500 hover:text-orange-500">Masuk</a>
                <h2 class="text-orange-500 font-semibold border-b-2 border-orange-500 pb-1">Daftar</h2>
            </div>

            <h1 class="text-xl font-bold text-gray-800 mb-1">Yuk, Daftar Akun Baru!</h1>
            <p class="text-sm text-gray-500 mb-6">Isi data berikut untuk membuat akun baru.</p>

            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Upload Gambar -->
                <div class="flex justify-center mb-4">
                    <div class="text-center">
                        <div class="bg-orange-100 text-orange-600 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-2">
                            <i class="fas fa-user fa-lg"></i>
                        </div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Foto Profil (Opsional)</label>
                        <input type="file" name="photo" class="text-sm text-gray-500 file:border file:rounded-md file:px-3 file:py-1">
                    </div>
                </div>

                <div class="flex gap-2 mb-4">
                    <input type="text" name="first_name" placeholder="Nama Depan" required class="w-1/2 px-4 py-2 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500">
                    <input type="text" name="last_name" placeholder="Nama Belakang" required class="w-1/2 px-4 py-2 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500">
                </div>

                <div class="mb-4">
                    <input type="email" name="email" placeholder="example@example.com" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500">
                </div>

                <div class="mb-4">
                    <input type="password" name="password" placeholder="Password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500">
                </div>

                <div class="mb-6">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500">
                </div>

                <button type="submit" class="w-full bg-orange-500 text-white py-2 rounded-lg hover:bg-orange-600 transition">
                    Buat Akun Sekarang
                </button>
            </form>

            <p class="text-sm text-center text-gray-600 mt-6">
                Sudah punya akun? <a href="/login" class="text-orange-500 hover:underline">Masuk di sini</a>
            </p>
        </div>
    </div>

</body>
</html>
