<?php

use App\Http\Controllers\CategoryInformasi_KajianController;
use App\Http\Controllers\DashboardInformasi_KajianController;

use Illuminate\Support\Facades\Route;
use App\Models\CategoryInformasi_kajian;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\informasi_kajianController;


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

route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
route::post('/login', [LoginController::class, 'authenticate']);
route::post('/logout', [LoginController::class, 'logout']);

route::get('/dashboard', function(){
  return view('dashboard.index');
})->middleware('auth');


route::get('/dashboard/informasi-kajian/checkSlug', [DashboardInformasi_KajianController::class, 'checkSlug'])->middleware('auth');
route::resource('/dashboard/informasi-kajian', DashboardInformasi_KajianController::class)->middleware('auth');

//category
route::get('/dashboard/categories-informasi-kajian/checkSlug', [CategoryInformasi_KajianController::class, 'checkSlug'])->middleware('auth');
route::resource('/dashboard/categories-informasi-kajian', CategoryInformasi_KajianController::class)->except('show')->middleware('auth');
