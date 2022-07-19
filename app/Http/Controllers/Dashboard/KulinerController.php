<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Kuliner;
use Exception;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\DataTables;

class KulinerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('dashboard.kuliner.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kuliner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama'=>'required|string|unique:kuliners,nama',
            'foto'=>'required|image',
            'deskripsi'=>'required|string'
        ]);
        if ($validator->passes()) {
            $validated = $validator->validated();
            $foto = $request->foto;
            $filename = $validated['foto']->hashName();
            $imagePath = $validated['foto']->move('images/kuliner/', $filename);
            try {
                Kuliner::create([
                    'nama'=>$validated['nama'],
                    'foto'=>$imagePath,
                    'deskripsi'=>$validated['deskripsi']
                ]);
                $swal = [
                    'type'=>'success',
                    'title'=>'Data berhasil ditambahkan'
                ];
                return redirect()->route('kuliner.index')->with('alert', $swal);
            } catch (Exception $e) {
                return response()->json(['error' => 'Data gagal ditambahkan.']);
            }
        }
        return redirect()->route('kuliner.create')
        ->withErrors($validator)
            ->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function show(Kuliner $kuliner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kuliner = Kuliner::where('id_kuliner', $id)->first();
        return view('dashboard.kuliner.edit', [
            'kuliner'=>$kuliner
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'deskripsi' => 'required|string'
        ]);
        $validator2 = Validator::make($request->all(),[
            'foto' => 'image|required',
        ]);
        if ($validator->passes()) {
            $validated = $validator->validated();
            try {
                $kuliner = Kuliner::where('id_kuliner', $id)->first();
                
                $kuliner->nama = $validated['nama'];
                if ($validator2->passes()){
                    $validated2 = $validator2->validated();
                    $filename = $validated2['foto']->hashName();
                    $imagePath = $validated2['foto']->move('images/kuliner/', $filename);
                    $kuliner->foto = $imagePath;
                }
                $kuliner->deskripsi = $validated['deskripsi'];
                $kuliner->save();

                $swal = [
                    'type' => 'success',
                    'title' => 'Data berhasil ditambahkan'
                ];
                return redirect()->route('kuliner.index')->with('alert', $swal);
            } catch (Exception $e) {
                return response()->json(['error' => $e]);
            }
        }
        return redirect()->route('kuliner.edit', $id)
        ->withErrors($validator)
            ->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $kuliner = Kuliner::where('id_kuliner', $id)->first();
        if ($kuliner != null) {
            try {
                $kuliner->delete();
                return true;
            } catch (Exception $e) {
                return false;
            }
        }
        return false;

    }
}
