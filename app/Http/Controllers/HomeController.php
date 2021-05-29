<?php

namespace App\Http\Controllers;
use App\Models\anggota;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $anggota = anggota::select('select * from anggota');

        return view('anggota');
    }
}
