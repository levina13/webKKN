<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;
class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.berita.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|unique:beritas,judul',
            'foto' => 'required|image',
            'isi' => 'required|string'
        ]);
        if ($validator->passes()) {
            $validated = $validator->validated();
            $foto = $request->foto;
            $filename = $validated['foto']->hashName();
            $imagePath = $validated['foto']->move('images/berita/', $filename);
            try {
                Berita::create([
                    'judul' => $validated['judul'],
                    'foto' => $imagePath,
                    'isi' => $validated['isi']
                ]);
                $swal = [
                    'type' => 'success',
                    'title' => 'Data berhasil ditambahkan'
                ];
                return redirect()->route('berita.index')->with('alert', $swal);
            } catch (Exception $e) {
                return response()->json(['error' => 'Data gagal ditambahkan.']);
            }
        }
        return redirect()->route('berita.create')
        ->withErrors($validator)
            ->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::where('id_berita', $id)->first();
        return view('dashboard.berita.edit', [
            'berita' => $berita
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string',
            'isi' => 'required|string'
        ]);
        $validator2 = Validator::make($request->all(), [
            'foto' => 'image|required',
        ]);
        if ($validator->passes()) {
            $validated = $validator->validated();
            try {
                $berita = Berita::where('id_berita', $id)->first();

                $berita->judul = $validated['judul'];
                if ($validator2->passes()) {
                    $validated2 = $validator2->validated();
                    $filename = $validated2['foto']->hashName();
                    $imagePath = $validated2['foto']->move('images/berita/', $filename);
                    $berita->foto = $imagePath;
                }
                $berita->isi = $validated['isi'];
                $berita->save();

                $swal = [
                    'type' => 'success',
                    'title' => 'Data berhasil ditambahkan'
                ];
                return redirect()->route('berita.index')->with('alert', $swal);
            } catch (Exception $e) {
                return response()->json(['error' => $e]);
            }
        }
        return redirect()->route('berita.edit', $id)
            ->withErrors($validator)
            ->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::where('id_berita', $id)->first();
        if ($berita != null) {
            try {
                $berita->delete();
                return true;
            } catch (Exception $e) {
                return false;
            }
        }
        return false;
    }
}
