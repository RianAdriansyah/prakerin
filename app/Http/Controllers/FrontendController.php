<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori;
use App\Tag;

class FrontendController extends Controller
{
    public function index()
    {
        $artikel = Artikel::with('kategori','tag')->orderBy('created_at','desc')->paginate(4);
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('index', compact('artikel','kategori','tag'));
    }
    
    public function allblog(Request $request)
    {

        // $artikel = Artikel::orderBy('created_at','desc');
        // $kategori = Kategori::all();
        // $tag = Tag::all();
        // return view('news', compact('artikel','kategori','tag'));

        $artikel = Artikel::all();
        $kategori = Kategori::all();
        $tag = Tag::all();

        $cari = $request->cari;

        if($cari){
            $artikel = Artikel::where('judul', 'LIKE', "%$cari%")->paginate(4);
        }
        return view('news', compact('artikel','kategori','tag'));
    }

    public function detailblog(Artikel $artikel)
    {
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('single', compact('artikel','kategori','tag'));
    }

    public function blogcat(Kategori $cat)
    {
        $artikel = $cat->artikel()->latest()->paginate(5);
        return view('category', compact('artikel', 'cat'));
    }

    public function blogtag(Tag $tag)
    {
        $artikel = $tag->artikel()->latest()->paginate(5);
        return view('home', compact('artikel', 'cat'));
    }
}
