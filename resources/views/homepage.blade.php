<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TasteCraft - Your Culinary Journey Starts Here</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #ff6b35 0%, #f7931e 50%, #ff4757 100%);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% {
                background-position: 200% 0;
            }

            100% {
                background-position: -200% 0;
            }
        }

        .category-icon {
            transition: all 0.3s ease;
        }

        .category-icon:hover {
            transform: scale(1.1);
        }

        .search-focus {
            box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.1);
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen">
    <!-- Navigation Header -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-2xl font-bold text-orange-600">
                            <i class="fas fa-utensils mr-2"></i>TasteCraft
                        </h1>
                    </div>
                </div>

                <!-- Search Bar -->
                <div class="flex-1 max-w-lg mx-8">
                    <div class="relative">
                        <input
                            type="text"
                            id="global-search"
                            placeholder="Search recipes, ingredients, or categories..."
                            class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all duration-200">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                    </div>
                </div>

                <!-- User Menu -->
                <div class="flex items-center space-x-4">
                    <!-- Admin Panel Link (for admins only) -->
                    <a href="/admin/dashboard" id="admin-link" class="hidden text-gray-700 hover:text-orange-600 transition-colors">
                        <i class="fas fa-cog mr-1"></i>Admin Panel
                    </a>

                    <!-- User Profile Dropdown -->
                    <div class="relative">
                        <button id="user-menu-button" class="flex items-center text-gray-700 hover:text-orange-600 transition-colors">
                            <div class="w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center text-white font-semibold mr-2">
                                <span id="user-initial">U</span>
                            </div>
                            <span id="user-name">User</span>
                            <i class="fas fa-chevron-down ml-1 text-sm"></i>
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="user-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
                            <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-user mr-2"></i>Profile
                            </a>
                            <a href="/bookmarks" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-bookmark mr-2"></i>My Bookmarks
                            </a>

                            <hr class="my-1">
                            <button onclick="logout()" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <i class="fas fa-sign-out-alt mr-2"></i>Logout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-gradient text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl lg:text-6xl font-bold mb-4">
                        Welcome back, <span id="hero-user-name">Chef</span>! 👨‍🍳
                    </h1>
                    <p class="text-xl mb-8 text-orange-100">
                        Ready to discover amazing recipes and share your culinary creations with the world?
                    </p>

                    <!-- Quick Stats -->
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="bg-white/20 backdrop-blur-sm rounded-lg p-4 text-center">
                            <div class="text-2xl font-bold" id="user-bookmarks-count">0</div>
                            <div class="text-sm text-orange-100">My Bookmarks</div>
                        </div>
                        <div class="bg-white/20 backdrop-blur-sm rounded-lg p-4 text-center">
                            <div class="text-2xl font-bold" id="user-comments-count">0</div>
                            <div class="text-sm text-orange-100">My Comments</div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="flex flex-wrap gap-4">
                        <!-- Create Recipe button only for admin -->
                        <a href="/admin/dashboard" id="admin-create-recipe" class="hidden bg-white text-orange-600 px-6 py-3 rounded-lg font-semibold hover:bg-orange-50 transition-colors">
                            <i class="fas fa-cog mr-2"></i>Admin Dashboard
                        </a>
                        <a href="/recipes" class="border-2 border-white text-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-orange-600 transition-colors">
                            <i class="fas fa-search mr-2"></i>Browse Recipes
                        </a>
                        <a href="/bookmarks" class="bg-white text-orange-600 px-6 py-3 rounded-lg font-semibold hover:bg-orange-50 transition-colors">
                            <i class="fas fa-bookmark mr-2"></i>My Bookmarks
                        </a>
                    </div>
                </div>

                <!-- Featured Recipe Card -->
                <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">
                    <div id="featured-recipe-card" class="p-6">
                        <!-- Featured recipe will be loaded here -->
                        <div class="skeleton h-48 rounded-lg mb-4"></div>
                        <div class="skeleton h-6 mb-2"></div>
                        <div class="skeleton h-4 w-3/4"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Recipe Categories -->
        <section class="mb-16">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900">
                    <i class="fas fa-th-large mr-3 text-orange-500"></i>Recipe Categories
                </h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6" id="categories-grid">
                <!-- Categories will be loaded here -->
            </div>
        </section>

        <!-- Featured Recipes -->
        <section class="mb-16">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900">
                    <i class="fas fa-star mr-3 text-orange-500"></i>Featured Recipes
                </h2>
                <a href="/recipes" class="text-orange-600 hover:text-orange-700 font-semibold">
                    View All <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6" id="featured-recipes">
                <!-- Featured recipes will be loaded here -->
            </div>
        </section>

        <!-- User Activity & Community Highlights -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
            <!-- Recent Bookmarks -->
            <section class="lg:col-span-1">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-bookmark mr-2 text-orange-500"></i>Recent Bookmarks
                </h3>
                <div class="space-y-4" id="recent-bookmarks">
                    <!-- Recent bookmarks will be loaded here -->
                </div>
                <a href="/bookmarks" class="block text-center mt-4 text-orange-600 hover:text-orange-700 font-semibold">
                    View All Bookmarks <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </section>

            <!-- Recent Comments -->
            <section class="lg:col-span-1">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-comments mr-2 text-orange-500"></i>Recent Comments
                </h3>
                <div class="space-y-4" id="recent-comments">
                    <!-- Recent comments will be loaded here -->
                </div>
            </section>

            <!-- Community Highlights -->
            <section class="lg:col-span-1">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-fire mr-2 text-orange-500"></i>Recently Added
                </h3>
                <div class="space-y-4" id="recent-recipes">
                    <!-- Recent recipes will be loaded here -->
                </div>
            </section>
        </div>

        <!-- Cooking Tips Sidebar -->
        <section class="bg-gradient-to-r from-orange-50 to-red-50 rounded-2xl p-8 mb-16">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">
                <i class="fas fa-lightbulb mr-2 text-orange-500"></i>Cooking Tips & Tricks
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="cooking-tips">
                <!-- Cooking tips will be loaded here -->
            </div>
        </section>
    </main>

    <!-- Recipe Quick Preview Modal -->
    <div id="recipe-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-2xl font-bold text-gray-900" id="modal-recipe-title">Recipe Title</h3>
                    <button onclick="closeRecipeModal()" class="text-gray-500 hover:text-gray-700">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <div id="modal-recipe-content">
                    <!-- Recipe content will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">
                        <i class="fas fa-utensils mr-2"></i>TasteCraft
                    </h3>
                    <p class="text-gray-400">
                        Your ultimate destination for discovering, sharing, and creating amazing recipes.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/recipes" class="hover:text-white transition-colors">Browse Recipes</a></li>

                        <li><a href="/bookmarks" class="hover:text-white transition-colors">My Bookmarks</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Categories</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/recipes?category=breakfast" class="hover:text-white transition-colors">Breakfast</a></li>
                        <li><a href="/recipes?category=lunch" class="hover:text-white transition-colors">Lunch</a></li>
                        <li><a href="/recipes?category=dinner" class="hover:text-white transition-colors">Dinner</a></li>
                        <li><a href="/recipes?category=dessert" class="hover:text-white transition-colors">Desserts</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Connect</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 TasteCraft. All rights reserved. Made with ❤️ for food lovers.</p>
            </div>
        </div>
    </footer>

    <script>
        // Global variables
        const token = localStorage.getItem('token');
        let currentUser = null;



        async function initializePage() {
            try {
                // Load user data first
                await loadUserData();

                // Load all sections
                await Promise.all([
                    loadFeaturedRecipe(),
                    loadCategories(),
                    loadFeaturedRecipes(),
                    loadRecentBookmarks(),
                    loadRecentComments(),
                    loadRecentRecipes(),
                    loadCookingTips()
                ]);

                // Setup event listeners
                setupEventListeners();

            } catch (error) {
                console.error('Error initializing page:', error);
                showErrorMessage('Failed to load homepage data');
            }
        }

        async function loadUserData() {
            try {
                const response = await fetch('/api/user', {
                    headers: {
                        'Authorization': `Bearer ${token}`,
                        'Content-Type': 'application/json'
                    }
                });

                if (response.ok) {
                    const responseData = await response.json();
                    currentUser = responseData.user || responseData;
                    // Convert profile_image to full URL if exists
                    if (currentUser.profile_image) {
                        currentUser.profile_image_url = `/storage/${currentUser.profile_image}?t=${Date.now()}`;
                    } else {
                        currentUser.profile_image_url = null;
                    }
                    console.log(currentUser);
                    updateUserInterface();
                    await loadUserStats();
                } else {
                    throw new Error('Failed to load user data');
                }
            } catch (error) {
                console.error('Error loading user data:', error);
                localStorage.removeItem('token');
                window.location.href = '/login';
            }
        }

        function updateUserInterface() {
            if (!currentUser) return;

            // Update user name and initial
            const userName = currentUser.first_name || 'User';
            const userInitial = userName.charAt(0).toUpperCase();

            document.getElementById('user-name').textContent = userName;
            document.getElementById('hero-user-name').textContent = userName;

            // Update profile image or initial
            const userMenuButton = document.getElementById('user-menu-button');
            const existingImg = userMenuButton.querySelector('img');
            const initialDiv = userMenuButton.querySelector('div');

            if (currentUser.profile_image_url && currentUser.profile_image_url !== null && currentUser.profile_image_url !== '') {
                // User has profile image
                if (existingImg) {
                    // Update existing image
                    existingImg.src = currentUser.profile_image_url;
                } else {
                    // Create new image element and replace initial div
                    const img = document.createElement('img');
                    img.src = currentUser.profile_image_url;
                    img.alt = 'Profile';
                    img.className = 'w-8 h-8 rounded-full object-cover mr-2';
                    img.onerror = function() {
                        // Fallback to initial if image fails to load
                        this.style.display = 'none';
                        initialDiv.style.display = 'flex';
                    };
                    userMenuButton.insertBefore(img, initialDiv);
                    initialDiv.style.display = 'none';
                }
            } else {
                // No profile image, show initial
                if (existingImg) {
                    existingImg.style.display = 'none';
                }
                if (initialDiv) {
                    initialDiv.style.display = 'flex';
                    document.getElementById('user-initial').textContent = userInitial;
                }
            }

            // Show admin link if user is admin
            if (currentUser.role === 'admin') {
                document.getElementById('admin-link').classList.remove('hidden');
                document.getElementById('admin-create-recipe').classList.remove('hidden');
            }
        }

        async function loadUserStats() {
            try {
                // Load user's bookmarks count
                const bookmarksResponse = await fetch('/api/bookmarks', {
                    headers: {
                        'Authorization': `Bearer ${token}`
                    }
                });

                if (bookmarksResponse.ok) {
                    const bookmarksData = await bookmarksResponse.json();
                    document.getElementById('user-bookmarks-count').textContent = bookmarksData.data?.length || 0;
                }

                // For comments count, we'll use a placeholder for now
                document.getElementById('user-comments-count').textContent = '12';

            } catch (error) {
                console.error('Error loading user stats:', error);
            }
        }

        async function loadFeaturedRecipe() {
            try {
                const response = await fetch('/api/recipes?per_page=1', {
                    headers: {
                        'Authorization': `Bearer ${token}`
                    }
                });

                if (response.ok) {
                    const data = await response.json();
                    const recipe = data.data?.[0];

                    if (recipe) {
                        displayFeaturedRecipe(recipe);
                    }
                }
            } catch (error) {
                console.error('Error loading featured recipe:', error);
            }
        }

        function displayFeaturedRecipe(recipe) {
            const card = document.getElementById('featured-recipe-card');
            const imageUrl = recipe.image_url ? `/storage/${recipe.image_url}` : '/images/default-recipe.jpg';

            card.innerHTML = `
                <div class="relative">
                    <img src="${imageUrl}" alt="${recipe.title}" class="w-full h-48 object-cover rounded-lg">
                    <div class="absolute top-4 right-4 bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                        Featured
                    </div>
                </div>
                <div class="mt-4">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">${recipe.title}</h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">${recipe.description}</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-clock mr-1"></i>
                            ${recipe.cooking_time} mins
                        </div>
                        <button onclick="viewRecipe('${recipe.id}')" class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 transition-colors">
                            View Recipe
                        </button>
                    </div>
                </div>
            `;
        }

        async function loadCategories() {
            const categories = [{
                    name: 'Breakfast',
                    icon: 'fas fa-coffee',
                    count: 45,
                    color: 'bg-yellow-100 text-yellow-800'
                },
                {
                    name: 'Lunch',
                    icon: 'fas fa-hamburger',
                    count: 67,
                    color: 'bg-green-100 text-green-800'
                },
                {
                    name: 'Dinner',
                    icon: 'fas fa-drumstick-bite',
                    count: 89,
                    color: 'bg-red-100 text-red-800'
                },
                {
                    name: 'Dessert',
                    icon: 'fas fa-ice-cream',
                    count: 34,
                    color: 'bg-pink-100 text-pink-800'
                },
                {
                    name: 'Snacks',
                    icon: 'fas fa-cookie-bite',
                    count: 56,
                    color: 'bg-purple-100 text-purple-800'
                },
                {
                    name: 'Beverages',
                    icon: 'fas fa-glass-cheers',
                    count: 23,
                    color: 'bg-blue-100 text-blue-800'
                }
            ];

            const grid = document.getElementById('categories-grid');
            grid.innerHTML = categories.map(category => `
                <div class="category-icon bg-white rounded-xl p-6 text-center shadow-md hover:shadow-lg transition-all cursor-pointer" onclick="filterByCategory('${category.name.toLowerCase()}')">
                    <div class="w-16 h-16 ${category.color} rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="${category.icon} text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-1">${category.name}</h3>
                    <p class="text-sm text-gray-500">${category.count} recipes</p>
                </div>
            `).join('');
        }

        async function loadFeaturedRecipes() {
            try {
                const response = await fetch('/api/recipes?per_page=8', {
                    headers: {
                        'Authorization': `Bearer ${token}`
                    }
                });

                if (response.ok) {
                    const data = await response.json();
                    displayFeaturedRecipes(data.data || []);
                }
            } catch (error) {
                console.error('Error loading featured recipes:', error);
            }
        }

        function displayFeaturedRecipes(recipes) {
            const container = document.getElementById('featured-recipes');

            if (recipes.length === 0) {
                container.innerHTML = '<p class="text-gray-500 text-center col-span-full">No recipes found.</p>';
                return;
            }

            container.innerHTML = recipes.map(recipe => {
                const imageUrl = recipe.image_url ? `/storage/${recipe.image_url}` : '/images/default-recipe.jpg';
                return `
                    <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover cursor-pointer" onclick="viewRecipe('${recipe.id}')">
                        <div class="relative">
                            <img src="${imageUrl}" alt="${recipe.title}" class="w-full h-48 object-cover">
                            <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm rounded-full px-2 py-1 text-xs font-semibold text-gray-700">
                                ${recipe.category || 'Recipe'}
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-gray-900 mb-2 line-clamp-1">${recipe.title}</h3>
                            <p class="text-gray-600 text-sm mb-3 line-clamp-2">${recipe.description}</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="fas fa-clock mr-1"></i>
                                    ${recipe.cooking_time} mins
                                </div>
                                <div class="flex items-center text-sm text-gray-500">
                                    <i class="fas fa-bookmark mr-1"></i>
                                    ${recipe.bookmarks_count || 0}
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            }).join('');
        }

        async function loadRecentBookmarks() {
            try {
                const response = await fetch('/api/bookmarks?per_page=4', {
                    headers: {
                        'Authorization': `Bearer ${token}`
                    }
                });

                if (response.ok) {
                    const data = await response.json();
                    displayRecentBookmarks(data.data || []);
                }
            } catch (error) {
                console.error('Error loading recent bookmarks:', error);
            }
        }

        function displayRecentBookmarks(bookmarks) {
            const container = document.getElementById('recent-bookmarks');

            if (bookmarks.length === 0) {
                container.innerHTML = '<p class="text-gray-500 text-center">No bookmarks yet.</p>';
                return;
            }

            container.innerHTML = bookmarks.map(bookmark => {
                const recipe = bookmark.recipe;
                const imageUrl = recipe.image_url ? `/storage/${recipe.image_url}` : '/images/default-recipe.jpg';
                return `
                    <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-shadow cursor-pointer" onclick="viewRecipe('${recipe.id}')">
                        <div class="flex items-center space-x-3">
                            <img src="${imageUrl}" alt="${recipe.title}" class="w-12 h-12 object-cover rounded-lg">
                            <div class="flex-1 min-w-0">
                                <h4 class="font-semibold text-gray-900 truncate">${recipe.title}</h4>
                                <p class="text-sm text-gray-500">${recipe.cooking_time} mins • ${recipe.category}</p>
                            </div>
                        </div>
                    </div>
                `;
            }).join('');
        }

        async function loadRecentComments() {
            // For now, we'll use placeholder data since we don't have a user comments endpoint
            const placeholderComments = [{
                    recipe: {
                        title: 'Chocolate Cake',
                        id: '1'
                    },
                    content: 'Amazing recipe! Loved it.',
                    created_at: '2024-01-15'
                },
                {
                    recipe: {
                        title: 'Pasta Carbonara',
                        id: '2'
                    },
                    content: 'Perfect for dinner.',
                    created_at: '2024-01-14'
                },
                {
                    recipe: {
                        title: 'Caesar Salad',
                        id: '3'
                    },
                    content: 'Fresh and delicious!',
                    created_at: '2024-01-13'
                }
            ];

            displayRecentComments(placeholderComments);
        }

        function displayRecentComments(comments) {
            const container = document.getElementById('recent-comments');

            if (comments.length === 0) {
                container.innerHTML = '<p class="text-gray-500 text-center">No comments yet.</p>';
                return;
            }

            container.innerHTML = comments.map(comment => `
                <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-shadow cursor-pointer" onclick="viewRecipe('${comment.recipe.id}')">
                    <div class="mb-2">
                        <h4 class="font-semibold text-gray-900 text-sm">${comment.recipe.title}</h4>
                        <p class="text-xs text-gray-500">${new Date(comment.created_at).toLocaleDateString()}</p>
                    </div>
                    <p class="text-sm text-gray-600 line-clamp-2">"${comment.content}"</p>
                </div>
            `).join('');
        }

        async function loadRecentRecipes() {
            try {
                const response = await fetch('/api/recipes?per_page=4&sort=newest', {
                    headers: {
                        'Authorization': `Bearer ${token}`
                    }
                });

                if (response.ok) {
                    const data = await response.json();
                    displayRecentRecipes(data.data || []);
                }
            } catch (error) {
                console.error('Error loading recent recipes:', error);
            }
        }

        function displayRecentRecipes(recipes) {
            const container = document.getElementById('recent-recipes');

            if (recipes.length === 0) {
                container.innerHTML = '<p class="text-gray-500 text-center">No recent recipes.</p>';
                return;
            }

            container.innerHTML = recipes.map(recipe => {
                const imageUrl = recipe.image_url ? `/storage/${recipe.image_url}` : '/images/default-recipe.jpg';
                return `
                    <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-shadow cursor-pointer" onclick="viewRecipe('${recipe.id}')">
                        <div class="flex items-center space-x-3">
                            <img src="${imageUrl}" alt="${recipe.title}" class="w-12 h-12 object-cover rounded-lg">
                            <div class="flex-1 min-w-0">
                                <h4 class="font-semibold text-gray-900 truncate">${recipe.title}</h4>
                                <p class="text-sm text-gray-500">by ${recipe.user?.first_name || 'Chef'}</p>
                            </div>
                        </div>
                    </div>
                `;
            }).join('');
        }

        function loadCookingTips() {
            const tips = [{
                    title: "Perfect Pasta",
                    tip: "Always salt your pasta water generously - it should taste like the sea!",
                    icon: "fas fa-utensils"
                },
                {
                    title: "Knife Skills",
                    tip: "Keep your knives sharp - a dull knife is more dangerous than a sharp one.",
                    icon: "fas fa-cut"
                },
                {
                    title: "Flavor Boost",
                    tip: "Toast your spices in a dry pan for 30 seconds to unlock their full flavor.",
                    icon: "fas fa-fire"
                }
            ];

            const container = document.getElementById('cooking-tips');
            container.innerHTML = tips.map(tip => `
                <div class="bg-white rounded-lg p-6 shadow-sm">
                    <div class="flex items-center mb-3">
                        <div class="w-10 h-10 bg-orange-100 rounded-full flex items-center justify-center mr-3">
                            <i class="${tip.icon} text-orange-600"></i>
                        </div>
                        <h4 class="font-semibold text-gray-900">${tip.title}</h4>
                    </div>
                    <p class="text-gray-600 text-sm">${tip.tip}</p>
                </div>
            `).join('');
        }

        function setupEventListeners() {
            // User menu dropdown
            const userMenuButton = document.getElementById('user-menu-button');
            const userDropdown = document.getElementById('user-dropdown');

            userMenuButton.addEventListener('click', function(e) {
                e.stopPropagation();
                userDropdown.classList.toggle('hidden');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function() {
                userDropdown.classList.add('hidden');
            });

            // Global search
            const searchInput = document.getElementById('global-search');
            let searchTimeout;

            searchInput.addEventListener('input', function() {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(() => {
                    const query = this.value.trim();
                    if (query.length > 2) {
                        performSearch(query);
                    }
                }, 300);
            });

            // Close modal when clicking outside
            document.getElementById('recipe-modal').addEventListener('click', function(e) {
                if (e.target === this) {
                    closeRecipeModal();
                }
            });
        }

        async function performSearch(query) {
            try {
                const response = await fetch(`/api/recipes?search=${encodeURIComponent(query)}`, {
                    headers: {
                        'Authorization': `Bearer ${token}`
                    }
                });

                if (response.ok) {
                    const data = await response.json();
                    // For now, redirect to recipes page with search
                    window.location.href = `/recipes?search=${encodeURIComponent(query)}`;
                }
            } catch (error) {
                console.error('Error performing search:', error);
            }
        }

        function filterByCategory(category) {
            window.location.href = `/recipes?category=${category}`;
        }

        async function viewRecipe(recipeId) {
            window.location.href = `/recipe/detail?id=${recipeId}`;
        }

        function closeRecipeModal() {
            document.getElementById('recipe-modal').classList.add('hidden');
        }

        function logout() {
            localStorage.removeItem('token');
            window.location.href = '/login';
        }

        function showErrorMessage(message) {
            // Create a simple error toast
            const toast = document.createElement('div');
            toast.className = 'fixed top-4 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg z-50';
            toast.textContent = message;
            document.body.appendChild(toast);

            setTimeout(() => {
                toast.remove();
            }, 5000);
        }

        // Add some utility CSS classes
        const style = document.createElement('style');
        style.textContent = `
            .line-clamp-1 {
                display: -webkit-box;
                -webkit-line-clamp: 1;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
            .line-clamp-2 {
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
            }
        `;
        document.head.appendChild(style);
    </script>
</body>

</html>