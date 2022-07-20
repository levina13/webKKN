<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Kuliner;
use App\Models\ObjekWisatas;
use App\Models\Ulasans;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $wisataPilihans =ObjekWisatas::select('objek_wisatas.*', 'kecamatans.kecamatan as nama_kecamatan', 'jenis_wisatas.jenis as nama_kategori', 'gambar_objeks.gambar as gambar')
        ->join('kecamatans', 'objek_wisatas.kecamatan', '=', 'kecamatans.id_kecamatan')
        ->join('jenis_wisatas', 'objek_wisatas.jenis_wisata', '=', 'jenis_wisatas.id_jenis_wisata')
        ->join('gambar_objeks', 'objek_wisatas.id_gambar', '=', 'gambar_objeks.id_gambar_objek')
        // ->orderBy('objek_wisatas.created_at', 'DESC')->take(8)->get();
        ->inRandomOrder()->take(8)->get();

        $wisataPopulers = ObjekWisatas::select('objek_wisatas.*', 'kecamatans.kecamatan as nama_kecamatan', 'jenis_wisatas.jenis as nama_kategori', 'gambar_objeks.gambar as gambar')
            ->join('kecamatans', 'objek_wisatas.kecamatan', '=', 'kecamatans.id_kecamatan')
            ->join('jenis_wisatas', 'objek_wisatas.jenis_wisata', '=', 'jenis_wisatas.id_jenis_wisata')
            ->join('gambar_objeks', 'objek_wisatas.id_gambar', '=', 'gambar_objeks.id_gambar_objek')
            ->orderBy('objek_wisatas.created_at', 'DESC')->take(3)->get();

        $ulasans= Ulasans::select('ulasans.*', 'users.name as nama_pengguna', 'objek_wisatas.nama as nama_pariwisata')
            ->join('users', 'ulasans.id_user', '=', 'users.id')
            ->join('objek_wisatas', 'ulasans.id_objek_wisata', '=', 'objek_wisatas.id_objek_wisata')
            ->orderBy('ulasans.created_at', 'DESC')->take(3)->get();
        
        $galeris = Galeri::select('galeris.*')
            ->orderBy('galeris.created_at', 'DESC')->take(8)->get();

        $kuliners = Kuliner::select('kuliners.*')
            ->orderBy('kuliners.created_at', 'DESC')->take(4)->get();
        $beritas = Berita::select('beritas.*')
            ->orderBy('beritas.created_at', 'DESC')->take(2)->get();

        return view('pages.index', ['wisataPopulers' => $wisataPopulers, 'wisataPilihans'=>$wisataPilihans, 'ulasans'=>$ulasans, 'kuliners'=>$kuliners, 'beritas'=>$beritas, 'galeris'=>$galeris]);
    }

    public function listWisata()
    {
        $wisatas = ObjekWisatas::select('objek_wisatas.*', 'kecamatans.kecamatan as nama_kecamatan', 'jenis_wisatas.jenis as nama_kategori', 'gambar_objeks.gambar as gambar')
            ->join('kecamatans', 'objek_wisatas.kecamatan', '=', 'kecamatans.id_kecamatan')
            ->join('jenis_wisatas', 'objek_wisatas.jenis_wisata', '=', 'jenis_wisatas.id_jenis_wisata')
            ->join('gambar_objeks', 'objek_wisatas.id_gambar', '=', 'gambar_objeks.id_gambar_objek')
            ->orderBy('objek_wisatas.created_at', 'DESC')->paginate(8);
        return view('pages.wisatas.list', ['wisatas' => $wisatas]);
    }

    public function wisata($id)
    {
        $wisata = ObjekWisatas::select('objek_wisatas.*', 'kecamatans.kecamatan as nama_kecamatan', 'jenis_wisatas.jenis as nama_kategori', 'gambar_objeks.gambar as gambar')
            ->join('kecamatans', 'objek_wisatas.kecamatan', '=', 'kecamatans.id_kecamatan')
            ->join('jenis_wisatas', 'objek_wisatas.jenis_wisata', '=', 'jenis_wisatas.id_jenis_wisata')
            ->join('gambar_objeks', 'objek_wisatas.id_gambar', '=', 'gambar_objeks.id_gambar_objek')
            ->where('objek_wisatas.id_objek_wisata', $id)->first();
        return view('pages.wisatas.index', [
            'wisata'    => $wisata
        ]);
    }

    public function lokasi($id)
    {
        $wisata = ObjekWisatas::select('*')
            ->where('id_objek_wisata', $id)->first();
        return view('pages.wisatas.lokasi', [
            'wisata'    => $wisata
        ]);
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
