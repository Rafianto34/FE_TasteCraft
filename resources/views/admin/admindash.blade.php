<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard - TasteCraft</title>
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
          <a href="#" class="flex items-center gap-2 p-2 bg-orange-600 rounded">
            <i class="fas fa-tachometer-alt"></i>
            Dashboard
          </a>
          <a href="#" class="flex items-center gap-2 p-2 hover:bg-orange-600 rounded">
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
    <main class="flex-1 p-6 space-y-6">
    <!-- Header -->
    <div class="flex justify-between items-center">
      <h2 class="text-2xl font-bold">Dashboard</h2>
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

    <!-- User Growth and Recipe Categories (placeholder) -->
      <div class="grid grid-cols-2 gap-4 mb-6">
        <div class="bg-white p-4 rounded shadow h-48">User Growth</div>
        <div class="bg-white p-4 rounded shadow h-48">Recipe Categories</div>
      </div>

    <!-- Informasi Sistem dan Aktivitas -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <!-- System Info -->
      <div class="bg-white p-4 rounded shadow space-y-4">
        <h3 class="font-semibold">System Information</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
          <div>
            <p>Server Status</p>
            <p class="text-green-600 font-medium">● Online</p>
          </div>
          <div>
            <p>CPU Usage</p>
            <p>32%</p>
            <div class="w-full bg-gray-200 h-2 rounded">
              <div class="bg-yellow-500 h-2 rounded" style="width: 32%"></div>
            </div>
          </div>
          <div>
            <p>Memory Usage</p>
            <p>68%</p>
            <div class="w-full bg-gray-200 h-2 rounded">
              <div class="bg-yellow-500 h-2 rounded" style="width: 68%"></div>
            </div>
          </div>
          <div>
            <p>Disk Space</p>
            <p>45%</p>
            <div class="w-full bg-gray-200 h-2 rounded">
              <div class="bg-yellow-500 h-2 rounded" style="width: 45%"></div>
            </div>
          </div>
        </div>
        <div class="text-sm">
          <p><strong>Operating System:</strong> Ubuntu 20.04 LTS</p>
          <p><strong>Web Server:</strong> Nginx 1.18.0</p>
          <p><strong>PHP Version:</strong> PHP 8.1.0</p>
          <p><strong>Database:</strong> MySQL 8.0.27</p>
        </div>
        <div class="text-sm">
          <p class="font-semibold">Last System Updates</p>
          <ul class="list-disc pl-4">
            <li>Security Patch - 2 days ago</li>
            <li>Database Backup - Today, 03:45 AM</li>
            <li>System Scan - Today, 12:30 PM</li>
            <li>Cache Cleared - Today, 02:15 PM</li>
          </ul>
        </div>
      </div>

      <!-- Aktivitas -->
      <div class="bg-white p-4 rounded shadow space-y-2">
        <div class="flex justify-between items-center">
          <h3 class="font-semibold">Recent Activity</h3>
          <a href="#" class="text-orange-500 text-sm">View All</a>
        </div>
        <div class="text-sm space-y-2">
          <p>👥 <strong>New user registered</strong> - John Doe created a new account <em>(10 minutes ago)</em></p>
          <p>🥘 <strong>New recipe added</strong> - Admin added "Italian Pasta Carbonara" <em>(45 minutes ago)</em></p>
          <p>🗑️ <strong>Comment deleted</strong> - Admin removed a comment from "Chocolate Cake Recipe" <em>(1 hour ago)</em></p>
          <p>✏️ <strong>Recipe updated</strong> - Admin updated "Vegetarian Burger" <em>(3 hours ago)</em></p>
          <p>🔄 <strong>User role changed</strong> - Admin changed Jane Smith's role to Editor <em>(5 hours ago)</em></p>
        </div>
      </div>
    </div>
  </main>
</body>
</html>