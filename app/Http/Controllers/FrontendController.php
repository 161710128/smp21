<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Eskul;
use App\galeri;
use App\jabatan;
use App\guru;
use App\Kategori_artikel;
use App\Kategori_fasilitas;
use App\Kategori_galeri;
use App\Staf;


class FrontendController extends Controller
{
    public function artikel()
    {
        $artikels = Artikel::all();
        return view ('frontend.artikel', compact('artikels'));
    }
  
    public function  single(Artikel $artikel)
    {
        $previous = Artikel::where('id', '<', $artikel->id)->orderBy('id', 'desc')->first();
        $next = Artikel::where('id', '>', $artikel->id)->orderBy('id')->first();

        return view('frontend.single', compact('artikel','next','previous'));
    }
}

