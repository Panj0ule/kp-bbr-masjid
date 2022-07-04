<?php

use App\Http\Controllers\informasi_wargaController;
use App\Models\CategoryInformasi_warga;
use App\Models\Informasi_warga;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\CommonMark\Node\Block\IndentedCode;

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
    return view('welcome');
});

Route::get('/a', function () {
  return view('index');
});

Route::get('/informasi-warga', [Informasi_wargaController::class, 'index']);

// single post
route::get('/informasi-warga/post/{post:slug}', [Informasi_wargaController::class, 'show']);

route::get('/informasi-warga/categories/', function(){
  return view('categories_wargaBlog', [
    'title' => 'Post Categories',
    'categories' => CategoryInformasi_warga::all(),
  ]);
});

route::get('/informasi-warga/categories/{category:slug}', function(CategoryInformasi_warga $category){
  return view('category_wargaBlog', [
    'title' => $category->name,
    'posts' => $category->posts,
    'category' => $category->name,
  ]);
});
