<nav class="bg-white shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <div class="flex items-center">
                <h1 class="text-2xl font-bold text-blue-600">
                    <a href="/">E-Commerce</a>
                </h1>
            </div>
            
            <div class="hidden md:flex items-center space-x-8">
                <div class="relative group">
                    <button class="text-gray-700 hover:text-blue-600 font-medium flex items-center">
                        Catégories 
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="py-1">
                            <a href="/produits/hicking" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Randonnée & Outdoor</a>
                            <a href="/produits/electromenager" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Électroménager</a>
                        </div>
                    </div>
                </div>
                <a href="/produits/hicking" class="text-gray-700 hover:text-blue-600 font-medium">Randonnée</a>
                <a href="/produits/electromenager" class="text-gray-700 hover:text-blue-600 font-medium">Électroménager</a>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button class="text-gray-700 hover:text-blue-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
