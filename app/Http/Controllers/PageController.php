<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Kuliner;

class PageController extends Controller
{
    public function index()
    {
        $galeris = Galeri::select('galeris.*')
            ->orderBy('galeris.created_at', 'DESC')->take(8)->get();

        $kuliners = Kuliner::select('kuliners.*')
            ->orderBy('kuliners.created_at', 'DESC')->take(4)->get();
        $beritas = Berita::select('beritas.*')
            ->orderBy('beritas.created_at', 'DESC')->take(2)->get();

        return view('pages.index', ['kuliners'=>$kuliners, 'beritas'=>$beritas, 'galeris'=>$galeris]);
    }

    public function kuliner(){
        $kuliners = Kuliner::select('kuliners.*')
            ->orderBy('kuliners.created_at', 'DESC')->paginate(15);
        return view('pages.wisatas.kuliner', ['kuliners'=>$kuliners]);
    }
    public function sejarah(){
        return view('pages.wisatas.sejarah');
    }
    public function listBerita(){
        $beritas = Berita::select('beritas.*')
            ->orderBy('beritas.created_at', 'DESC')->paginate(8);
        return view('pages.wisatas.berita.berita_index', ['beritas' => $beritas]);
    }
    public function isiBerita($id){
        $berita = Berita::select('beritas.*')
            ->where('beritas.id_berita', $id)->first();
        return view('pages.wisatas.berita.berita_isi', ['berita' => $berita]);
    }
    public function galeri()
    {
        $galeris = Galeri::select('galeris.*')
        ->orderBy('galeris.created_at', 'DESC')->paginate(20);
        return view('pages.wisatas.galeri', ['galeris' => $galeris]);
    }
}
