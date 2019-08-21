<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Rekomendasi;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Auth;

class RekomendasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekomendasi = Rekomendasi::with('artikel')->get();

        return view('backend.rekomendasi.index', compact('rekomendasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rekomendasi = Rekomendasi::all();
        $artikel = Artikel::all();

        return view('backend.rekomendasi.create', compact('rekomendasi', 'artikel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rekomendasi = new Rekomendasi;
        $rekomendasi->judul = $request->judul;
        $rekomendasi->artikel_id = $request->artikel_id;
        $rekomendasi->slug = str_slug($request->judul);
        # Foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path().'/assets/img/rekomendasi/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $rekomendasi->foto = $filename;
        }
        $rekomendasi->save();
        
        return redirect()->route('rekomendasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rekomendasi = Rekomendasi::findOrFail($id);
        $artikel = Artikel::all();

        return view('backend.rekomendasi.show', compact('artikel', 'rekomendasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rekomendasi = Rekomendasi::findOrFail($id);
        $artikel = Artikel::all();

        return view('backend.rekomendasi.edit', compact('artikel', 'rekomendasi'));
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
        $rekomendasi = Rekomendasi::findOrFail($id);
        $rekomendasi->judul = $request->judul;
        $rekomendasi->artikel_id = $request->artikel_id;
        $rekomendasi->slug = str_slug($request->judul);
        # Foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path().'/assets/img/rekomendasi/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $rekomendasi->foto = $filename;
        }
        $rekomendasi->save();
        
        return redirect()->route('rekomendasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rekomendasi = Rekomendasi::findOrFail($id);
        if($rekomendasi->foto){
            $old_foto = $rekomendasi->foto;
            $filepath = public_path().'/assets/img/rekomendasi/'.$rekomendasi->foto;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
                //Exception $e;
            }
        }
        $rekomendasi->delete();
        
        return redirect()->route('rekomendasi.index');
    }
}
