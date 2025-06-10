<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Comments - TasteCraft</title>
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
          <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
        <a href="#" class="flex items-center gap-2 p-2 hover:bg-orange-600 rounded">
          <i class="fas fa-utensils"></i> Recipes
        </a>
        <a href="#" class="flex items-center gap-2 p-2 bg-orange-600 rounded">
          <i class="fas fa-users"></i> Users
        </a>
        <a href="#" class="flex items-center gap-2 p-2 bg-orange-600 rounded">
          <i class="fas fa-comments"></i> Comments
        </a>
        <a href="#" class="flex items-center gap-2 p-2 hover:bg-orange-600 rounded">
          <i class="fas fa-bookmark"></i> Bookmarks
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
      <h2 class="text-2xl font-bold">Comments</h2>
      <div class="flex items-center space-x-2">
        <input type="text" placeholder="Search..." class="px-4 py-2 border rounded-md">
        <button class="flex items-center px-4 py-2 border rounded text-sm hover:bg-gray-200">⟳ Refresh</button>
        <button class="flex items-center px-4 py-2 bg-orange-500 text-white rounded text-sm hover:bg-orange-600">⬇ Export</button>
      </div>
    </div>

    <!-- Comment Table -->
    <div class="bg-white p-6 rounded shadow">
      <div class="overflow-x-auto">
        <table class="min-w-full text-sm text-left text-gray-500">
          <thead class="text-xs text-gray-700 uppercase bg-gray-100">
            <tr>
              <th class="px-6 py-3">User</th>
              <th class="px-6 py-3">Comment</th>
              <th class="px-6 py-3">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($comments as $comment)
              <tr class="border-b">
                <td class="px-6 py-4">{{ $comment->user->name }}</td>
                <td class="px-6 py-4">{{ $comment->content }}</td>
                <td class="px-6 py-4">
                  <form action="{{ route('admin.comments.delete', $comment->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-800">
                      <i class="fas fa-trash"></i> Delete
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </main>
</body>

</html>
