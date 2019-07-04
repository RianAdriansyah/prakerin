<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::all();
        $response = [
            'success' => true,
            'data' => $guru,
            'message' => 'Sukses'
        ];
        return response()->json($response, 200);
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
        $guru = new Guru();
        $guru->nama = $request->nama;
        $guru->nip = $request->nip;
        $guru->mapel = $request->mapel;
        $guru->alamat = $request->alamat;
        $guru->umur = $request->umur;
        $guru->save();
        $response = [
            'success' => true,
            'data' => $guru,
            'message' => 'Sukses'
        ];
        return response()->json($response, 200);
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
        //
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
        $guru = Guru::findOrFail($id);
        $guru->nama = $request->nama;
        $guru->nip = $request->nip;
        $guru->mapel = $request->mapel;
        $guru->alamat = $request->alamat;
        $guru->umur = $request->umur;
        $guru->save();
        $response = [
            'success' => true,
            'data' => $guru,
            'message' => 'Sukses'
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id)->delete();
        $response = [
            'success' => true,
            'data' => $guru,
            'message' => 'Sukses'
        ];
        return response()->json($response, 200);
    }
}
