<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Galeri;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::all();
        return view('galeri.index', ['galeri' => $galeri]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'mimes:jpeg,png,jpg,gif,svg',
            'keterangan' => 'required',
        ]);

        $imgName = $request->gambar->getClientOriginalName() . '-' . time() . '-' . $request->gambar->extension();
        $request->gambar->move(public_path('image'), $imgName);

        Galeri::create([
            'gambar' => $imgName,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('galeri.index')->with('sukses', 'Data berhasil ditambah');
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
    public function edit($id_galeri)
    {
        $galeri = Galeri::find($id_galeri);
        return view('galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_galeri)
    {
        $request->validate([
            'keterangan' => 'required',
        ]);

        $imgName = null;

        if($request->gambar){
            $imgName = $request->gambar->getClientOriginalName() . '-' . time() . '-' . $request->gambar->extension();
            $request->gambar->move(public_path('image'), $imgName);
        }

        Galeri::find($id_galeri)->update([
            'gambar' => $imgName,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('galeri.index')->with('sukses', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id_galeri)
    {
        $galeri = Galeri::findOrFail($id_galeri);
        $galeri->delete();
        return redirect()->route('galeri.index')->with('sukses', 'Data berhasil dihapus');
    }


}
