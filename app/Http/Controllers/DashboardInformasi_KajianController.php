<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Informasi_kajian;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;
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
        $validatedData = $request->validate([
          'title'=>'required|max:255',
          'slug'=>'required|unique:informasi_kajians',
          'category_id'=>'required',
          'image' => 'image',
          'body'=>'required'
        ]);

        if ($request->file('image')) {
          $validatedData['image'] = $request->file('image')->store('informasi_kajian-images');
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Informasi_kajian::create($validatedData);

        return redirect('/dashboard/informasi-kajian/')->with('success', 'New post has been added!');
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
      return view('dashboard.informasi-kajian.edit', [
        'categories'=>CategoryInformasi_kajian::all(),
        'post' => $informasi_kajian
      ]);
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
      $rules = ([
        'title'=>'required|max:255',
        'category_id'=>'required',
        'image' => 'image',
        'body'=>'required'
      ]);

      if ($request->slug != $informasi_kajian->slug) {
        $rules['slug'] = 'required|unique:informasi_kajians';
      }
      $validatedData =  $request->validate($rules);

      if ($request->file('image')) {
        if ($request->oldImage) {
          Storage::delete($request->oldImage);
        }
        $validatedData['image'] = $request->file('image')->store('informasi_kajian-images');
      }

      $validatedData['user_id'] = auth()->user()->id;
      $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Informasi_kajian::where('id', $informasi_kajian->id)->update($validatedData);

        return redirect('/dashboard/informasi-kajian/')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informasi_kajian  $informasi_kajian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informasi_kajian $informasi_kajian)
    {
      if ($informasi_kajian->image) {
        Storage::delete($informasi_kajian->image);
      }
      Informasi_kajian::destroy($informasi_kajian->id);

      return redirect('/dashboard/informasi-kajian/')->with('success', 'Post Has Been deleted');
    }

    public function checkSlug(Request $request)
    {
      $slug = SlugService::createSlug(Informasi_kajian::class, 'slug', $request->title);
      return response()->json(['slug'=>$slug]);
    }
}
