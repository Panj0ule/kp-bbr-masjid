<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryInformasi_kajian;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryInformasi_KajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->guest()) {
          abort(403);
        }
        return view('dashboard.categories.informasi-kajian.index', [
          'categories' => CategoryInformasi_kajian::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryInformasi_kajian  $categoryInformasi_kajian
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryInformasi_kajian $categoryInformasi_kajian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryInformasi_kajian  $categoryInformasi_kajian
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryInformasi_kajian $categoryInformasi_kajian)
    {
      return view('dashboard.categories.informasi-kajian.edit', [
        'category'=>$categoryInformasi_kajian,
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryInformasi_kajian  $categoryInformasi_kajian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryInformasi_kajian $categoryInformasi_kajian)
    {
      $rules = ([
        'name'=>'required|max:255',
      ]);

      $validatedData['name'] = $request->name;

      CategoryInformasi_kajian::where('id', $categoryInformasi_kajian->id)->update($validatedData);

        return redirect('/dashboard/informasi-kajian/')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryInformasi_kajian  $categoryInformasi_kajian
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryInformasi_kajian $categoryInformasi_kajian)
    {
        //
    }

    public function checkSlug(Request $request)
    {
      $slug = SlugService::createSlug(Informasi_kajian::class, 'slug', $request->name);
      return response()->json(['slug'=>$slug]);
    }
}
