<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori;
use App\Rekomendasi;
use App\Tag;

class FrontendController extends Controller
{
    public function index()
    {
        $artikel = Artikel::with('kategori','tag')->paginate(6);
        $kategori = Kategori::all();
        $tag = Tag::all();
        $rekomendasi = Rekomendasi::all();
        return view('index', compact('artikel', 'kategori', 'tag', 'rekomendasi'));
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
        $tag = Tag::all();
        $artikel = $cat->artikel()->latest()->paginate(5);
        return view('category', compact('artikel', 'cat', 'tag'));
    }

    public function blogtag(Tag $tag)
    {
        $kategori = Kategori::all();
        $artikel = $tag->artikel()->latest()->paginate(5);
        return view('tag', compact('artikel', 'tag', 'kategori'));
    }

    public function about()
    {
        $artikel = Artikel::with('kategori','tag')->orderBy('created_at','desc')->paginate(4);
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('about', compact('artikel', 'kategori', 'tag'));
    }
}
