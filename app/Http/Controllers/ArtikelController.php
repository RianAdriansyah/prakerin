<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Artikel;
use App\Kategori;
use App\Tag;
use User;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Auth;

class ArtikelController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $artikel = Artikel::with('kategori', 'tag')->get();

        return view('backend.artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = Tag::all();
        $cat = Kategori::all();

        return view('backend.artikel.create', compact('tag', 'cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artikel = new Artikel;
        $artikel->judul = $request->judul;
        $artikel->slug = str_slug($request->judul);
        $artikel->konten = $request->konten;
        $artikel->user_id = Auth::user()->id;
        $artikel->kategori_id = $request->kategori_id;
        # Foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path().'/assets/img/artikel/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $artikel->foto = $filename;
        }
        $artikel->save();
        $artikel->tag()->attach($request->tag);
        
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        $kategori = Kategori::all();
        $tag = Tag::all();
        $selected = $artikel->tag->pluck('id')->toArray();


        return view('backend.artikel.show', compact('selected', 'artikel', 'tag', 'kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        $cat = Kategori::all();
        $tag = Tag::all();
        $select = $artikel->tag->pluck('id')->toArray();

        return view('backend.artikel.edit', compact('artikel', 'cat', 'tag', 'select'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->slug = str_slug($request->judul);
        $artikel->konten = $request->konten;
        $artikel->user_id = Auth::user()->id;
        $artikel->kategori_id = $request->kategori_id;
        # Foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path().'/assets/img/artikel/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $upload = $file->move($path, $filename);

            if($artikel->foto){
                $old_foto = $artikel->foto;
                $filepath = public_path().'/assets/img/artikel/'.$artikel->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    //Exception $e;
                }
            }
            $artikel->foto = $filename;
        }
        $artikel->save();
        $artikel->tag()->sync($request->tag);
        
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        if($artikel->foto){
            $old_foto = $artikel->foto;
            $filepath = public_path().'/assets/img/artikel/'.$artikel->foto;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
                //Exception $e;
            }
        }

        $artikel->tag()->detach($artikel->id);
        $artikel->delete();
        
        return redirect()->route('artikel.index');
    }
}
