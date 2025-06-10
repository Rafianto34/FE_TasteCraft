<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Users - TasteCraft</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="flex bg-gray-100">

 <!-- Sidebar -->
    <aside class="w-64 bg-orange-500 text-white flex flex-col justify-between">
      <div>
        <div class="px-6 py-4 text-xl font-bold border-b border-gray-700">TasteCraft</div>
        <nav class="mt-4 space-y-2 px-4">
          <a href="#" class="flex items-center gap-2 p-2 hover:bg-orange-600 rounded">
            <i class="fas fa-tachometer-alt"></i>
            Dashboard
          </a>
          <a href="#" class="flex items-center gap-2 p-2 hover:bg-orange-600 rounded">
            <i class="fas fa-utensils"></i>
            Recipes
          </a>
          <a href="#" class="flex items-center gap-2 p-2 bg-orange-600 rounded">
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
    <main class="flex-1 p-6 space-y-6">
    <!-- Header -->
    <div class="flex justify-between items-center">
      <h2 class="text-2xl font-bold">Users</h2>
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
        <p class="text-green-500 text-sm mt-1">↑ 12.5% Since last month</p>
      </div>
      <div class="bg-white p-4 rounded shadow border-l-4 border-green-500">
        <div class="flex items-center space-x-2 text-green-500">
          <span class="material-icons">group</span>
          <p class="font-medium">Total Pengguna</p>
        </div>
        <h3 class="text-2xl font-bold mt-2">1,823</h3>
        <p class="text-green-500 text-sm mt-1">↑ 12.5% Since last month</p>
      </div>
      <div class="bg-white p-4 rounded shadow border-l-4 border-yellow-500">
        <div class="flex items-center space-x-2 text-yellow-500">
          <span class="material-icons">comment</span>
          <p class="font-medium">Total Komentar</p>
        </div>
        <h3 class="text-2xl font-bold mt-2">3,542</h3>
        <p class="text-green-500 text-sm mt-1">↑ 12.5% Since last month</p>
      </div>
      <div class="bg-white p-4 rounded shadow border-l-4 border-purple-600">
        <div class="flex items-center space-x-2 text-purple-600">
          <span class="material-icons">bookmark</span>
          <p class="font-medium">Total Bookmark</p>
        </div>
        <h3 class="text-2xl font-bold mt-2">2,718</h3>
        <p class="text-red-500 text-sm mt-1">↓ 3.2% Since last month</p>
      </div>
    </div>
    
      
      <!-- Recent Users -->
      <div class="bg-white p-6 rounded shadow">
        <div class="flex justify-between items-center mb-4">
          <h3 class="font-semibold text-lg">Recent Users</h3>
          <a href="#" class="text-sm text-pink-500">View All</a>
        </div>
        <div class="space-y-4">
          <div class="flex items-center justify-between text-sm border-b pb-3">
            <div class="flex items-center space-x-4">
              <div class="bg-red-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-semibold">JD</div>
              <div>
                <p class="font-semibold">John Doe</p>
                <p class="text-gray-500 text-xs">john@example.com</p>
              </div>
            </div>
            <div class="flex space-x-3">
              <span class="bg-blue-100 text-blue-700 text-xs font-medium px-2 py-1 rounded-full">Admin</span>
              <span class="bg-green-100 text-green-700 text-xs font-medium px-2 py-1 rounded-full">Active</span>
              <span class="text-gray-500 text-xs">2 days ago</span>
            </div>
          </div>

          <div class="flex items-center justify-between text-sm border-b pb-3">
            <div class="flex items-center space-x-4">
              <div class="bg-purple-600 text-white rounded-full w-10 h-10 flex items-center justify-center font-semibold">JS</div>
              <div>
                <p class="font-semibold">Jane Smith</p>
                <p class="text-gray-500 text-xs">jane@example.com</p>
              </div>
            </div>
            <div class="flex space-x-3">
              <span class="bg-purple-100 text-purple-700 text-xs font-medium px-2 py-1 rounded-full">Editor</span>
              <span class="bg-green-100 text-green-700 text-xs font-medium px-2 py-1 rounded-full">Active</span>
              <span class="text-gray-500 text-xs">5 days ago</span>
            </div>
          </div>

          <div class="flex items-center justify-between text-sm">
            <div class="flex items-center space-x-4">
              <div class="bg-green-600 text-white rounded-full w-10 h-10 flex items-center justify-center font-semibold">RJ</div>
              <div>
                <p class="font-semibold">Robert Johnson</p>
                <p class="text-gray-500 text-xs">robert@example.com</p>
              </div>
            </div>
            <div class="flex space-x-3">
              <span class="bg-gray-100 text-gray-700 text-xs font-medium px-2 py-1 rounded-full">User</span>
              <span class="bg-yellow-100 text-yellow-700 text-xs font-medium px-2 py-1 rounded-full">Pending</span>
              <span class="text-gray-500 text-xs">1 week ago</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
