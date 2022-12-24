<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Pendaki;
use App\Exports\PendakiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Mail\KirimEmail;
use Illuminate\Support\Facades\Mail;

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
        $pendaki = DB::table('pendaki')->Paginate(5);
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
        ->where('nama', 'LIKE', '%'.$cari.'%')->orWhere('status', 'LIKE', '%'.$cari.'%')
        ->paginate(5);
 
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
            'foto_identitas' => 'mimes:jpeg,png,jpg,gif,svg',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'anggota' => 'required',
            'tanggal_berangkat' => 'required',
            'tanggal_kembali' => 'required',
            'status' => 'required',
        ]);

        $imgName = null;

        $imgName = $request->foto_identitas->getClientOriginalName() . '-' . time() . '-' . $request->foto_identitas->extension();
        $request->foto_identitas->move(public_path('image'), $imgName);

        Pendaki::create([
            'nama'    =>  $request->nama,
            'jenis_kelamin'     =>  $request->jenis_kelamin,
            'jenis_identitas'    =>  $request->jenis_identitas,
            'no_identitas'    =>  $request->no_identitas,
            'foto_identitas' => $imgName,
            'alamat'     =>  $request->alamat,
            'no_hp'    =>  $request->no_hp,
            'email'    =>  $request->email,
            'anggota'    =>  $request->anggota,
            'tanggal_berangkat'     =>  $request->tanggal_berangkat,
            'tanggal_kembali'    =>  $request->tanggal_kembali,
            'status'    =>  $request->status,
        ]);

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
            'foto_identitas' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'anggota' => 'required',
            'tanggal_berangkat' => 'required',
            'tanggal_kembali' => 'required',
            'status' => 'required',
        ]);

        $imgName = null;

        if($request->foto_identitas){
            $imgName = $request->foto_identitas->getClientOriginalName() . '-' . time() . '-' . $request->foto_identitas->extension();
            $request->foto_identitas->move(public_path('image'), $imgName);
        }

        Pendaki::find($id_pendaki)->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jenis_identitas' => $request->jenis_identitas,
            'no_identitas' => $request->no_identitas,
            'foto_identitas' => $imgName,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'anggota' => $request->anggota,
            'tanggal_berangkat' => $request->tanggal_berangkat,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
        ]);

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

    public function proses_kirim($id_pendaki)
    {
        $pendaki = Pendaki::findOrFail($id_pendaki);
        Mail::to($pendaki->email)->send(new KirimEmail());
        return "Berhasil dikirim";
    }

    public function email($id_pendaki)
    {
        $pendaki = Pendaki::findOrFail($id_pendaki);
        Mail::to($pendaki->email)->send(new KirimEmail());
        return redirect()->route('pendaki.index')->with('status', 'Berhasil Mengirim Email');
    }

    public function sms($id_pendaki)
    {
        $pendaki = Pendaki::findOrFail($id_pendaki);
        Send::to($pendaki->no_hp)->send(new KirimSMS());
        return redirect()->route('pendaki.index')->with('status', 'Berhasil Mengirim SMS');
    }
}

