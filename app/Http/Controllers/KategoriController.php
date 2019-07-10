<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kategori;

class KategoriController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = Kategori::all();

        return view('backend.kategori.index', compact('cat'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Kategori::all();

        return view('backend.kategori.create', compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new Kategori;

        $cat->nama_kategori = $request->nama_kategori;
        $cat->slug = str_slug($request->nama_kategori);
        $cat->save();

        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Kategori::findOrFail($id);

        return view('backend.kategori.edit', compact('cat'));
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
        $cat = Kategori::findOrFail($id);

        $cat->nama_kategori = $request->nama_kategori;
        $cat->slug = str_slug($request->nama_kategori);
        $cat->save();

        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Kategori::findOrFail($id);
        $cat->nama_kategori;
        $cat->delete();

        return redirect()->route('kategori.index');
    }
}
