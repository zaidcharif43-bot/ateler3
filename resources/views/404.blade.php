@extends('Master_page')

@section('title', 'Page non trouvée - 404')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 text-center">
        <!-- 404 Illustration -->
        <div class="mx-auto">
            <div class="text-9xl font-bold text-gray-300 mb-4">404</div>
            <div class="text-6xl mb-8">
                😵
            </div>
        </div>
        
        <!-- Error Message -->
        <div>
            <h2 class="text-3xl font-extrabold text-gray-900 mb-4">
                Page non trouvée
            </h2>
            <p class="text-lg text-gray-600 mb-8">
                Désolé, la page que vous recherchez n'existe pas ou a été déplacée.
            </p>
        </div>
        
        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/produits/hicking" 
               class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg transition duration-200 transform hover:scale-105">
                🥾 Voir nos produits de randonnée
            </a>
            <a href="/produits/electromenager" 
               class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-3 px-6 rounded-lg transition duration-200 transform hover:scale-105">
                🏠 Voir l'électroménager
            </a>
        </div>
        
        <!-- Additional Help -->
        <div class="mt-12 p-6 bg-white rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-gray-800 mb-3">Que faire maintenant ?</h3>
            <ul class="text-sm text-gray-600 text-left space-y-2">
                <li class="flex items-center">
                    <svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Vérifiez l'URL dans la barre d'adresse
                </li>
                <li class="flex items-center">
                    <svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Utilisez le menu de navigation
                </li>
                <li class="flex items-center">
                    <svg class="w-4 h-4 mr-2 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Consultez nos catégories de produits
                </li>
            </ul>
        </div>
    </div>
</div>

<style>
    @keyframes bounce {
        0%, 20%, 53%, 80%, 100% {
            transform: translate3d(0,0,0);
        }
        40%, 43% {
            transform: translate3d(0,-20px,0);
        }
        70% {
            transform: translate3d(0,-10px,0);
        }
        90% {
            transform: translate3d(0,-4px,0);
        }
    }
    
    .animate-bounce-custom {
        animation: bounce 2s infinite;
    }
</style>
@endsection