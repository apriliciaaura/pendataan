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
            'foto_identitas' => 'mimes:jpeg,png,jpg,gif,svg',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'anggota' => 'required',
            'tanggal_berangkat' => 'required',
            'tanggal_kembali' => 'required',
        ]);

        $imgName = $request->foto_identitas->getClientOriginalName() . '-' . time() . '-' . $request->foto_identitas->extension();
        $request->foto_identitas->move(public_path('image'), $imgName);

        Pendaki::create([
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
            'status' => "Baru Daftar",
        ]);

        return redirect('/')->with('status', 'Berhasil mendaftarkan diri. Silahkan menunggu email untuk mendapatkan pemberitahuan mengenai konfirmasi pendakian. Jika dalam 3 hari belum ada konfirmasi, silahkan hubungi nomor CP (0341-456-789)');
    }
}
