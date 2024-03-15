<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    //
    public function index()
    {

        $absensi = Absensi::where('id_asisten', Auth::id())->get();
        return view('riwayat.index', ['absensi' => $absensi]);
    }
}
