<?php

namespace App\Http\Controllers;

use App\Models\CategoryInformasi_kajian;
use Illuminate\Http\Request;
use App\Models\Informasi_kajian;

class Informasi_kajianController extends Controller
{
  public function index()
  {
    $title = '';
    if(request('category')){
      $category = CategoryInformasi_kajian::firstWhere('slug', request('category'));
      $title = ': '. $category->name;
    }
    return view('kajianBlog',[
      'title' => 'Informasi Kajian'. $title,
      "posts" =>Informasi_kajian::latest()->filter(request(['search', 'category']))->paginate(7)->withQueryString(),
    ]);
  }

  public function show(Informasi_kajian $post)
  {
    return view('post',[
      "post" => $post,
    ]);
  }
}
