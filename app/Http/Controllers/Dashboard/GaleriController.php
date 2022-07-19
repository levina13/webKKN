<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Validator;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.galeri.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.galeri.create');
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
            'judul' => 'required|string',
            'foto' => 'required|image',
        ]);
        if ($validator->passes()) {
            $validated = $validator->validated();
            $foto = $request->foto;
            $filename = $validated['foto']->hashName();
            $imagePath = $validated['foto']->move('images/galeri/', $filename);
            try {
                Galeri::create([
                    'judul' => $validated['judul'],
                    'foto' => $imagePath,
                ]);
                $swal = [
                    'type' => 'success',
                    'title' => 'Data berhasil ditambahkan'
                ];
                return redirect()->route('galeri.index')->with('alert', $swal);
            } catch (Exception $e) {
                return response()->json(['error' => 'Data gagal ditambahkan.']);
            }
        }
        return redirect()->route('galeri.create')
        ->withErrors($validator)
            ->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeri = Galeri::where('id_galeri', $id)->first();
        return view('dashboard.galeri.edit', [
            'galeri' => $galeri
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string',
        ]);
        $validator2 = Validator::make($request->all(), [
            'foto' => 'image|required',
        ]);
        if ($validator->passes()) {
            $validated = $validator->validated();
            try {
                $galeri = Galeri::where('id_galeri', $id)->first();

                $galeri->judul = $validated['judul'];
                if ($validator2->passes()) {
                    $validated2 = $validator2->validated();
                    $filename = $validated2['foto']->hashName();
                    $imagePath = $validated2['foto']->move('images/galeri/', $filename);
                    $galeri->foto = $imagePath;
                }
                $galeri->save();

                $swal = [
                    'type' => 'success',
                    'title' => 'Data berhasil ditambahkan'
                ];
                return redirect()->route('galeri.index')->with('alert', $swal);
            } catch (Exception $e) {
                return response()->json(['error' => $e]);
            }
        }
        return redirect()->route('galeri.edit', $id)
            ->withErrors($validator)
            ->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = Galeri::where('id_galeri', $id)->first();
        if ($galeri != null) {
            try {
                $galeri->delete();
                return true;
            } catch (Exception $e) {
                return false;
            }
        }
        return false;
    }
}
