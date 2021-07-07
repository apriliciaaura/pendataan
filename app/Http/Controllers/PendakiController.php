<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Pendaki;
use App\Exports\PendakiExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class PendakiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaki = Pendaki::paginate(1);
        return view('pendaki.index', ['pendaki' => $pendaki]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pendaki.create');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
 
        $pendaki = DB::table('pendaki')
        ->where('nama', 'LIKE', '%'.$cari.'%')
        ->paginate(1);
 
        return view('pendaki.index',['pendaki' => $pendaki]);
    }

    public function export_excel()
	{
		return Excel::download(new PendakiExport, 'pendaki.xlsx');
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
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'jenis_identitas' => 'required',
            'no_identitas' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'tanggal_berangkat' => 'required',
            'tanggal_kembali' => 'required',
            'status' => 'required',
        ]);
        $form_data = array(
            'nama'    =>  $request->nama,
            'jenis_kelamin'     =>  $request->jenis_kelamin,
            'jenis_identitas'    =>  $request->jenis_identitas,
            'no_identitas'    =>  $request->no_identitas,
            'alamat'     =>  $request->alamat,
            'no_hp'    =>  $request->no_hp,
            'email'    =>  $request->email,
            'tanggal_berangkat'     =>  $request->tanggal_berangkat,
            'tanggal_kembali'    =>  $request->tanggal_kembali,
            'status'    =>  $request->status,
        );

        Pendaki::create($form_data);
        return redirect()->route('pendaki.index')->with('success', 'Data Added Successfully.');
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
    public function edit($id_pendaki)
    {
        $pendaki = Pendaki::find($id_pendaki);
        return view('pendaki.edit', compact('pendaki'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pendaki)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'jenis_identitas' => 'required',
            'no_identitas' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'tanggal_berangkat' => 'required',
            'tanggal_kembali' => 'required',
            'status' => 'required',
        ]);

        $pendaki = Pendaki::find($id_pendaki);
        $pendaki->nama = $request->input('nama');
        $pendaki->jenis_kelamin = $request->input('jenis_kelamin');
        $pendaki->jenis_identitas = $request->input('jenis_identitas');
        $pendaki->no_identitas = $request->input('no_identitas');
        $pendaki->alamat = $request->input('alamat');
        $pendaki->no_hp = $request->input('no_hp');
        $pendaki->email = $request->input('email');
        $pendaki->tanggal_berangkat = $request->input('tanggal_berangkat');
        $pendaki->tanggal_kembali = $request->input('tanggal_kembali');
        $pendaki->status = $request->input('status');
        $pendaki->save();
        return redirect()->route('pendaki.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id_pendaki)
    {
        $pendaki = Pendaki::findOrFail($id_pendaki);
        $pendaki->delete();
        return redirect()->route('pendaki.index');
    }
}
