<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { 
    return redirect('/produits/hicking'); 
}); 

Route::get('/produits/{cat}', function ($cat) { 
    $produits = []; 
 
    if ($cat == 'hicking') { 
        $produits = [ 
            ["nom" => "Sac à dos de randonnée", "prix" => 200, "image" => "sac.jpg"],
            ["nom" => "Tente 2 places", "prix" => 300, "image" => "tente.jpg"],
            ["nom" => "Montre GPS Sport", "prix" => 150, "image" => "watch.jpg"]
        ]; 
    } elseif ($cat == 'electromenager') { 
        $produits = [ 
            ["nom" => "Machine à laver 8kg", "prix" => 3000, "image" => "machinealaver.jpg"],
            ["nom" => "Four électrique", "prix" => 1500, "image" => "forne.jpg"],
            ["nom" => "Micro-onde 25L", "prix" => 1000, "image" => "mecroonde.jpg"]
        ]; 
    } 
 
    return view('Produits', [ 
        'products' => $produits, 
        'categorie' => $cat,
        'categorieTitle' => $cat == 'hicking' ? 'Équipements de Randonnée' : ($cat == 'electromenager' ? 'Électroménager' : 'Produits')
    ]); 
});

// Route de fallback pour la page 404
Route::fallback(function () {
    return response()->view('404', [], 404);
}); 