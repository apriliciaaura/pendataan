<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KonfigurasiUser;

class KonfigurasiUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konfigurasi_user = KonfigurasiUser::all();
        return view('konfigurasi_user.index', ['konfigurasi_user' => $konfigurasi_user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('konfigurasi_user.create');
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
            'username' => 'required',
            'email' => 'required',
        ]);
        $form_data = array(
            'nama'    =>  $request->nama,
            'username'     =>  $request->username,
            'email'    =>  $request->email,
        );

        KonfigurasiUser::create($form_data);
        return redirect()->route('konfigurasi_user.index')->with('success', 'Data Added Successfully.');
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
    public function edit($id_user)
    {
        $konfigurasi_user = KonfigurasiUser::find($id_user);
        return view('konfigurasi_user.edit', compact('konfigurasi_user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_user)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required',
        ]);

        $konfigurasi_user = KonfigurasiUser::find($id_user);
        $konfigurasi_user->nama = $request->input('nama');
        $konfigurasi_user->username = $request->input('username');
        $konfigurasi_user->email = $request->input('email');
        $konfigurasi_user->save();
        return redirect()->route('konfigurasi_user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id_user)
    {
        $konfigurasi_user = KonfigurasiUser::findOrFail($id_user);
        $konfigurasi_user->delete();
        return redirect()->route('konfigurasi_user.index');
    }
}
