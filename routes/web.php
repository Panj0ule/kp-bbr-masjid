<?php

use App\Http\Controllers\informasi_kajianController;
use App\Models\CategoryInformasi_kajian;
use App\Models\Informasi_kajian;
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

Route::get('/informasi-kajian', [Informasi_kajianController::class, 'index']);

// single post
route::get('/informasi-kajian/post/{post:slug}', [Informasi_kajianController::class, 'show']);

route::get('/categories', function(){
  return view('categories_kajianBlog', [
    'title' => 'Post Categories',
    'categories' => CategoryInformasi_kajian::all(),
  ]);
});

route::get('/categories/{category:slug}', function(CategoryInformasi_kajian $category){
  return view('kajianBlog', [
    'title' => $category->name,
    'posts' => $category->posts->load('category','user'),
    'category' => $category->name,
  ]);
});
