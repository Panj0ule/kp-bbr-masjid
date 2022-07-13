<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi_kajian;
use App\Models\CategoryInformasi_kajian;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardInformasi_KajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postByAdmin = Informasi_kajian::where('user_id', auth()->user()->id)->get();
        return view('dashboard.informasi-kajian.index', [
          'allPosts' => Informasi_kajian::all(),
          'postsByAdmin' => $postByAdmin
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.informasi-kajian.create', [
          'categories'=>CategoryInformasi_kajian::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $validatedData = $request->validate([
          'title'=>'required|max:255',
          'slug'=>'required|unique:informasi-kajians',
          'category_id'=>'required',
          'body'=>'required'
        ]); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Informasi_kajian  $informasi_kajian
     * @return \Illuminate\Http\Response
     */
    public function show(Informasi_kajian $informasi_kajian)
    {
        return view('dashboard.informasi-kajian.show', [
          'post' => $informasi_kajian
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informasi_kajian  $informasi_kajian
     * @return \Illuminate\Http\Response
     */
    public function edit(Informasi_kajian $informasi_kajian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informasi_kajian  $informasi_kajian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informasi_kajian $informasi_kajian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informasi_kajian  $informasi_kajian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informasi_kajian $informasi_kajian)
    {
        //
    }

    public function checkSlug(Request $request)
    {
      $slug = SlugService::createSlug(Informasi_kajian::class, 'slug', $request->title);
      return response()->json(['slug'=>$slug]);
    }
}
