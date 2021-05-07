<?php

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})-> name('pagina-home');

Route::get('/products', function () {

    $pasta = config('pasta');
    
    
    $collection = collect($pasta);
    
    $pasta_lunga = $collection->where('tipo', 'lunga');
    $pasta_corta = $collection->where('tipo', 'corta');
    $pasta_cortissima = $collection->where('tipo', 'cortissima');

    
    $data = [
        
        'formati' => [
            'LE LUNGHE' => $pasta_lunga,
            'LE CORTE' => $pasta_corta,
            'LE CORTISSIME' => $pasta_cortissima

        ]
    ];

    return view('products', $data);
})-> name('pagina-prodotti');

Route::get('/news', function () {
    return view('news');
})-> name('pagina-news');


