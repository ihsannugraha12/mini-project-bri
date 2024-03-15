<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    public function index()
    {
        $absensi = Absensi::all();
        return view('report.index', ['absensi' => $absensi]);
    }
}
