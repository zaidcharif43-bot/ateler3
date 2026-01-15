@extends('Master_page')

@section('title', isset($categorieTitle) ? $categorieTitle : 'Nos Produits')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Header Section -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">
            {{ isset($categorieTitle) ? $categorieTitle : 'Nos Produits' }}
        </h1>
        <div class="w-24 h-1 bg-blue-500 mx-auto rounded"></div>
        <p class="text-gray-600 mt-4 text-lg">Découvrez notre collection de produits exceptionnels</p>
        
        <!-- Category Navigation -->
        <div class="flex flex-wrap justify-center gap-4 mt-8">
            <a href="/produits/hicking" 
               class="px-6 py-2 rounded-full transition-all duration-200 {{ $categorie === 'hicking' ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                Randonnée
            </a>
            <a href="/produits/electromenager" 
               class="px-6 py-2 rounded-full transition-all duration-200 {{ $categorie === 'electromenager' ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                Électroménager
            </a>
        </div>
        
        <!-- View Toggle Button -->
        <div class="flex justify-center mt-6 mb-8">
            <button id="toggleView" class="bg-gray-800 hover:bg-gray-700 text-white px-6 py-2 rounded-lg transition-all duration-200 transform hover:scale-105">
                <span class="flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                    </svg>
                    Affichage Tableau
                </span>
            </button>
        </div>

    @if(count($products) > 0)
        <!-- Products Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="productsGrid">
            @foreach ($products as $index => $item)
                <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 opacity-0 animate-fadeIn" >
                    <div class="relative overflow-hidden rounded-t-lg">
                        <img src="{{ asset('img/'.$item['image']) }}" 
                             alt="{{ $item['nom'] }}" 
                             class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300"
                             onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzIwIiBoZWlnaHQ9IjE5MiIgdmlld0JveD0iMCAwIDMyMCAxOTIiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIzMjAiIGhlaWdodD0iMTkyIiBmaWxsPSIjRjNGNEY2Ii8+CjxwYXRoIGQ9Ik0xMjggOTZMMTQ0IDExMkwxNzYgODBMMjA4IDExMkwyNDAgODBWMTQ0SDgwVjk2SDE2MFoiIGZpbGw9IiNEMUQ1REIiLz4KPHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiBmaWxsPSIjRjNGNEY2Ii8+Cjwvc3ZnPgo='">
                        <div class="absolute top-3 right-3">
                            <span class="bg-blue-500 text-white px-2 py-1 rounded-full text-xs font-semibold">
                                Nouveau
                            </span>
                        </div>
                        @if(isset($item['categorie']))
                            <div class="absolute top-3 left-3">
                                <span class="bg-green-500 text-white px-2 py-1 rounded-full text-xs font-semibold capitalize">
                                    {{ ucfirst($item['categorie']) }}
                                </span>
                            </div>
                        @endif
                    </div>
                    
                    <!-- Product Info -->
                    <div class="p-5">
                        <h3 class="font-bold text-lg text-gray-800 mb-2 truncate" title="{{ $item['nom'] }}">
                            {{ $item['nom'] }}
                        </h3>
                        
                        @if(isset($item['description']))
                            <p class="text-gray-600 text-sm mb-3 line-clamp-2">{{ $item['description'] }}</p>
                        @endif
                        
                        <!-- Price and Rating -->
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-2xl font-bold text-blue-600">{{ number_format($item['prix'], 0, ',', ' ') }} DH</span>
                            <div class="flex items-center text-yellow-400">
                                @if(isset($item['note']))
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= floor($item['note']))
                                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                            </svg>
                                        @elseif($i <= $item['note'])
                                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" fill-opacity="0.5"/>
                                            </svg>
                                        @else
                                            <svg class="w-4 h-4 fill-current text-gray-300" viewBox="0 0 20 20">
                                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                            </svg>
                                        @endif
                                    @endfor
                                    <span class="text-gray-600 text-sm ml-1">({{ $item['note'] }})</span>
                                @endif
                            </div>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="flex space-x-2">
                            <button class="flex-1 bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg transition-colors duration-200 flex items-center justify-center group">
                                <svg class="w-4 h-4 mr-1 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5L12 15m0 0l7 3-7 3m0-6v6"></path>
                                </svg>
                                Ajouter
                            </button>
                            <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 py-2 px-3 rounded-lg transition-colors duration-200 group">
                                <svg class="w-4 h-4 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Table View -->
            <div id="tableView" class="hidden mt-8 bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gradient-to-r from-blue-500 to-blue-600 text-white">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-medium uppercase tracking-wider">Image</th>
                                <th class="px-6 py-4 text-left text-xs font-medium uppercase tracking-wider">Produit</th>
                                <th class="px-6 py-4 text-left text-xs font-medium uppercase tracking-wider">Prix</th>
                                @if($categorie === 'tous')
                                    <th class="px-6 py-4 text-left text-xs font-medium uppercase tracking-wider">Catégorie</th>
                                @endif
                                <th class="px-6 py-4 text-left text-xs font-medium uppercase tracking-wider">Note</th>
                                <th class="px-6 py-4 text-left text-xs font-medium uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($products as $item)
                                <tr class="hover:bg-gray-50 transition-colors duration-200">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <img src="{{ asset('img/'.$item['image']) }}" 
                                             alt="{{ $item['nom'] }}" 
                                             class="h-16 w-16 rounded-lg object-cover shadow-md">
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm font-medium text-gray-900">{{ $item['nom'] }}</div>
                                        @if(isset($item['description']))
                                            <div class="text-sm text-gray-500 mt-1">{{ Str::limit($item['description'], 50) }}</div>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="text-lg font-bold text-blue-600">{{ number_format($item['prix'], 0, ',', ' ') }} DH</span>
                                    </td>
                                    @if($categorie === 'tous')
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800 capitalize">
                                                {{ ucfirst($item['categorie']) }}
                                            </span>
                                        </td>
                                    @endif
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if(isset($item['note']))
                                            <div class="flex items-center">
                                                <div class="flex text-yellow-400">
                                                    @for($i = 1; $i <= 5; $i++)
                                                        @if($i <= floor($item['note']))
                                                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                            </svg>
                                                        @else
                                                            <svg class="w-4 h-4 fill-current text-gray-300" viewBox="0 0 20 20">
                                                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                                            </svg>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <span class="text-sm text-gray-600 ml-2">{{ $item['note'] }}</span>
                                            </div>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                                        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-all duration-200 transform hover:scale-105">
                                            Ajouter au panier
                                        </button>
                                        <button class="bg-gray-300 hover:bg-gray-400 text-gray-700 px-4 py-2 rounded-lg transition-all duration-200 transform hover:scale-105">
                                            Détails
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
</div>

<!-- Styles personnalisés -->
<style>
    .animate-fadeIn {
        animation: fadeIn 0.6s ease-out forwards;
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>

<!-- JavaScript for view toggle -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.getElementById('toggleView');
        const tableView = document.getElementById('tableView');
        const productsGrid = document.getElementById('productsGrid');
        
        if (toggleBtn) {
            toggleBtn.addEventListener('click', function() {
                const isTableHidden = tableView.classList.contains('hidden');
                
                if (isTableHidden) {
                    // Afficher le tableau et cacher la grille
                    tableView.classList.remove('hidden');
                    productsGrid.classList.add('hidden');
                    this.innerHTML = `
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                            </svg>
                            Affichage Grille
                        </span>
                    `;
                } else {
                    // Afficher la grille et cacher le tableau
                    tableView.classList.add('hidden');
                    productsGrid.classList.remove('hidden');
                    this.innerHTML = `
                        <span class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                            </svg>
                            Affichage Tableau
                        </span>
                    `;
                }
            });
        }
    });
</script>
</div>
@endsection