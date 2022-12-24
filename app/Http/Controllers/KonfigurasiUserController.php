<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KonfigurasiUser;
use App\Models\User;

class KonfigurasiUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users');
        return view('konfigurasi_user.index', ['users' => $users]);
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
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
        ]);
        $form_data = array(
            'name'    =>  $request->name,
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
    public function edit($id)
    {
        $users = KonfigurasiUser::find($id);
        return view('konfigurasi_user.edit', compact('users'));
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
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
        ]);

        $users = KonfigurasiUser::find($id);
        $users->name = $request->input('name');
        $users->username = $request->input('username');
        $users->email = $request->input('email');
        $users->save();
        return redirect()->route('konfigurasi_user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $users = KonfigurasiUser::findOrFail($id);
        $users->delete();
        return redirect()->route('konfigurasi_user.index');
    }
}
