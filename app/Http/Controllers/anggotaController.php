<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class anggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = \App\Models\anggota::All();
        return view('home' , ['anggota' => $anggota]);
        $buku = \App\Models\buku::All();
        return view('home' , ['buku' => $buku]);
        $kategori = \App\Models\kategori::All();
        return view('home' , ['kategori' => $kategori]);
        $kembali = \App\Models\kembali::All();
        return view('home' , ['kembali' => $kembali]);
        $petugas = \App\Models\petugas::All();
        return view('home' , ['petugas' => $petugas]);
        $pinjam = \App\Models\pinjam::All();
        return view('home' , ['pinjam' => $pinjam]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
