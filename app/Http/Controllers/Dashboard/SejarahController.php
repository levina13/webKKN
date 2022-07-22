<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\sejarah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;


class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.sejarah.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.sejarah.create');
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
            'foto' => 'required|image',
            'isi' => 'required|string'
        ]);
        if ($validator->passes()) {
            $validated = $validator->validated();
            $foto = $request->foto;
            $filename = $validated['foto']->hashName();
            $imagePath = $validated['foto']->move('images/sejarah/', $filename);
            try {
                sejarah::create([
                    'foto' => $imagePath,
                    'isi' => $validated['isi']
                ]);
                $swal = [
                    'type' => 'success',
                    'title' => 'Data berhasil ditambahkan'
                ];
                return redirect()->route('sejarah.index')->with('alert', $swal);
            } catch (Exception $e) {
                return response()->json(['error' => 'Data gagal ditambahkan.']);
            }
        }
        return redirect()->route('sejarah.create')
        ->withErrors($validator)
            ->withInput();
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
        $sejarah = sejarah::where('id_sejarah', $id)->first();
        return view('dashboard.sejarah.edit', [
            'sejarah' => $sejarah
        ]);
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
        $validator = Validator::make($request->all(), [
            'isi' => 'required|string'
        ]);
        $validator2 = Validator::make($request->all(), [
            'foto' => 'image|required',
        ]);
        if ($validator->passes()) {
            $validated = $validator->validated();
            try {
                $sejarah = sejarah::where('id_sejarah', $id)->first();

                if ($validator2->passes()) {
                    $validated2 = $validator2->validated();
                    $filename = $validated2['foto']->hashName();
                    $imagePath = $validated2['foto']->move('images/sejarah/', $filename);
                    $sejarah->foto = $imagePath;
                }
                $sejarah->isi = $validated['isi'];
                $sejarah->save();

                $swal = [
                    'type' => 'success',
                    'title' => 'Data berhasil ditambahkan'
                ];
                return redirect()->route('sejarah.index')->with('alert', $swal);
            } catch (Exception $e) {
                return response()->json(['error' => $e]);
            }
        }
        return redirect()->route('sejarah.edit', $id)
            ->withErrors($validator)
            ->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sejarah = sejarah::where('id_sejarah', $id)->first();
        if ($sejarah != null) {
            try {
                $sejarah->delete();
                return true;
            } catch (Exception $e) {
                return false;
            }
        }
        return false;

    }
}
