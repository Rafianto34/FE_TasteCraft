<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Recipe - TasteCraft</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-orange-500 text-white flex flex-col justify-between">
      <div>
        <div class="px-6 py-4 text-xl font-bold border-b border-gray-700">TasteCraft</div>
        <nav class="mt-4 space-y-2 px-4">
          <a href="#" class="flex items-center gap-2 p-2 hover:bg-orange-600 rounded">
            <i class="fas fa-tachometer-alt"></i>
            Dashboard
          </a>
          <a href="#" class="flex items-center gap-2 p-2 bg-orange-600 rounded">
            <i class="fas fa-utensils"></i>
            Recipes
          </a>
          <a href="#" class="flex items-center gap-2 p-2 hover:bg-orange-600 rounded">
            <i class="fas fa-users"></i>
            Users
          </a>
          <a href="#" class="flex items-center gap-2 p-2 hover:bg-orange-600 rounded">
            <i class="fas fa-comments"></i>
            Comments
          </a>
          <a href="#" class="flex items-center gap-2 p-2 hover:bg-orange-600 rounded">
            <i class="fas fa-bookmark"></i>
            Bookmarks
          </a>
          <a href="#" class="flex items-center gap-2 p-2 hover:bg-orange-600 rounded">
            <i class="fas fa-cog"></i>
            Settings
          </a>
          <a href="#" class="flex items-center gap-2 p-2 hover:bg-orange-600 rounded">
            <i class="fas fa-bell"></i>
            Notifications
          </a>
        </nav>
      </div>
      <div class="px-4 py-4">
        <button class="w-full flex items-center justify-center gap-2 px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded">
          <i class="fas fa-sign-out-alt"></i> Logout
        </button>
      </div>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 bg-gray-50 p-6">
    <!-- Header -->
    <div class="flex justify-between items-center">
      <h2 class="text-2xl font-bold">Recipes</h2>
      <div class="flex items-center space-x-2">
        <input type="text" placeholder="Cari..." class="px-4 py-2 border rounded-md">
        <button class="flex items-center px-4 py-2 border rounded text-sm hover:bg-gray-200">
          ⟳ Refresh
        </button>
        <button class="flex items-center px-4 py-2 bg-orange-500 text-white rounded text-sm hover:bg-orange-600">
          ⬇ Export
        </button>
      </div>
    </div>

    <!-- Statistic Cards -->
    <div class="grid grid-cols-4 gap-4 mb-6">
      <div class="bg-white p-4 rounded shadow border-l-4 border-blue-600">
        <div class="flex items-center space-x-2 text-blue-600">
          <span class="material-icons">menu_book</span>
          <p class="font-medium">Total Resep</p>
        </div>
        <h3 class="text-2xl font-bold mt-2">124</h3>
      </div>
      <div class="bg-white p-4 rounded shadow border-l-4 border-green-500">
        <div class="flex items-center space-x-2 text-green-500">
          <span class="material-icons">group</span>
          <p class="font-medium">Total Pengguna</p>
        </div>
        <h3 class="text-2xl font-bold mt-2">1,823</h3>
      </div>
      <div class="bg-white p-4 rounded shadow border-l-4 border-yellow-500">
        <div class="flex items-center space-x-2 text-yellow-500">
          <span class="material-icons">comment</span>
          <p class="font-medium">Total Komentar</p>
        </div>
        <h3 class="text-2xl font-bold mt-2">3,542</h3>
      </div>
      <div class="bg-white p-4 rounded shadow border-l-4 border-purple-600">
        <div class="flex items-center space-x-2 text-purple-600">
          <span class="material-icons">bookmark</span>
          <p class="font-medium">Total Bookmark</p>
        </div>
        <h3 class="text-2xl font-bold mt-2">2,718</h3>
      </div>
    </div>

    <!-- Tables -->
    <div class="grid grid-cols-2 gap-6">
      <!-- Resep Terbaru -->
      <div class="bg-white p-4 rounded shadow">
        <h4 class="text-lg font-bold mb-4">Resep Terbaru</h4>
        <table class="w-full text-sm text-left">
          <thead class="text-gray-500 border-b">
            <tr>
              <th class="py-2">Nama Resep</th>
              <th>Penulis</th>
              <th>Tanggal</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b">
              <td class="py-2">Nasi Goreng Spesial</td>
              <td>Budi Santoso</td>
              <td>12 Jun 2023</td>
            </tr>
            <tr class="border-b">
              <td class="py-2">Soto Ayam Lamongan</td>
              <td>Siti Aminah</td>
              <td>10 Jun 2023</td>
            </tr>
            <tr class="border-b">
              <td class="py-2">Rendang Daging</td>
              <td>Dewi Putri</td>
              <td>8 Jun 2023</td>
            </tr>
            <tr>
              <td class="py-2">Ayam Bakar Madu</td>
              <td>Agus Wijaya</td>
              <td>5 Jun 2023</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Pengguna Terbaru -->
      <div class="bg-white p-4 rounded shadow">
        <h4 class="text-lg font-bold mb-4">Pengguna Terbaru</h4>
        <table class="w-full text-sm text-left">
          <thead class="text-gray-500 border-b">
            <tr>
              <th class="py-2">Nama</th>
              <th>Email</th>
              <th>Tanggal Daftar</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b">
              <td class="py-2">Rini Susanti</td>
              <td>rini@example.com</td>
              <td>14 Jun 2023</td>
            </tr>
            <tr class="border-b">
              <td class="py-2">Joko Widodo</td>
              <td>joko@example.com</td>
              <td>13 Jun 2023</td>
            </tr>
            <tr class="border-b">
              <td class="py-2">Anita Dewi</td>
              <td>anita@example.com</td>
              <td>12 Jun 2023</td>
            </tr>
            <tr>
              <td class="py-2">Bambang Sutrisno</td>
              <td>bambang@example.com</td>
              <td>11 Jun 2023</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>
</html>