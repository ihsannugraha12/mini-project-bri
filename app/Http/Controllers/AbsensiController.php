<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Code;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsensiController extends Controller
{
    //
    public function create(Request $request)
    {
        $start = Carbon::now('Asia/Jakarta');
        $timestamp_start = strtotime($start);
        $time_start = date('H:i:s', $timestamp_start);
        $date = $start->toDateString();
        $results = Code::where('code', $request->kode)->first();
        if ($results->id_user === Auth::id()) {
            return redirect('/home')->with('error', "Tidak dapat menggunakan kode sendiri");
        }

        if ($results->id_user_get !== null) {
            return redirect('/home')->with('error', "Kode Telah Digunakan oleh Pengguna Lain");
        }

        $results->id_user_get = Auth::id();
        $results->save();

        $absensi = new Absensi;
        $absensi->id_asisten = $request->id_asisten;
        $absensi->teaching_role = $request->teaching_role;
        $absensi->kelas = $request->kelas;
        $absensi->materi = $request->materi;
        $absensi->date = $date;
        $absensi->start = $time_start;

        $id_kode = $results->id;
        $absensi->id_code = $id_kode;
        $absensi->save();


        $expirationTime = now('Asia/Jakarta')->addDay();
        $request->session()->put('check_in', [
            'value' => 'telah check in',
            'expires_at' => $expirationTime
        ]);
        $request->session()->put('id_kode', $id_kode);
        return redirect('/home')->with($id_kode);
    }

    public function update(Request $request, Absensi $absensi)
    {
        $id_absensi = $request->id_absensi;
        $update = $absensi->find($id_absensi);

        $end = Carbon::now('Asia/Jakarta');
        $timestamp_end = strtotime($end);
        $time_end = date('H:i:s', $timestamp_end);

        $update->end = $time_end;
        $start = Carbon::parse($update->start, 'Asia/Jakarta');
        $update->duration = $start->diffInMinutes($time_end);

        $request->session()->forget('check_in');
        $value = $request->session()->get('check_in');

        $update->save();

        return redirect('/home')->with($value);
    }
}
