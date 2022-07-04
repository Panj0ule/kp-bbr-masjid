<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi_warga;

class Informasi_wargaController extends Controller
{
  public function index()
  {
    return view('wargaBlog',[
      "posts" => Informasi_warga::all(),
    ]);
  }

  public function show(Informasi_warga $post)
  {
    return view('post',[
      "post" => $post,
    ]);
  }
}
