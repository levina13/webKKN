<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Kuliner;
use App\Models\ObjekWisatas;
use App\Models\Ulasans;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main(){
        $wisatas    = ObjekWisatas::all();
        $jumlah_pengguna    = User::count();
        $jumlah_ulasan  = Ulasans::count();
        $jumlah_kuliner = Kuliner::count();
        $jumlah_berita = Berita::count();
        $jumlah_galeri=Galeri::count();
        return view('dashboard.main')
            ->with('wisatas', $wisatas)
            ->with('jumlah_pengguna', $jumlah_pengguna)
            ->with('jumlah_kuliner', $jumlah_kuliner)
            ->with('jumlah_berita', $jumlah_berita)
            ->with('jumlah_galeri', $jumlah_galeri)
            ->with('jumlah_ulasan', $jumlah_ulasan);
    }
}
