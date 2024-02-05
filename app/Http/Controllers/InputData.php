<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InputData extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function tambah()
    {
    
        // memanggil view tambah
        return view('admininputdata');
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('tambah_user')->insert([
            'email' => $request->email,
            'nip' => $request->nip,
            'jabatan' => $request->jabatan,
            'nama' => $request->nama,
            'hak_akses' => $request->hak_akses,
            'foto' => $request->foto
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/admininputdata');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}