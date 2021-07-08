<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Gunung;
use App\Models\Pendaki;
use App\Models\Pengumuman;
use App\Models\Peraturan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $gunung = Gunung::latest()->first();
        $aturan = Peraturan::latest()->first();
        $galeri = Galeri::all();
        $pengumuman = Pengumuman::all();
        $berita = Berita::all();
        $jk = ['Pria','Wanita'];
        $identitas = ['KTP', 'SIM', 'Kartu Pelajar', 'Passport'];

        return view('layouts.usermain', compact('gunung', 'aturan', 'galeri', 'pengumuman', 'berita', 'jk', 'identitas'));
    }

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
        ]);

        Pendaki::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->nama,
            'jenis_identitas' => $request->jenis_identitas,
            'no_identitas' => $request->no_identitas,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'tanggal_berangkat' => $request->tanggal_berangkat,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => "Baru daftar",
        ]);

        return redirect('/')->with('status', 'Berhasil mendaftarkan diri');
    }
}
