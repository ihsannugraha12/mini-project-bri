<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Kelas;
use App\Models\Materi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $id = Auth::id();
        $data = User::find($id);
        $kelas = Kelas::all();
        $materi = Materi::all();
        $value = null;
        // $request->session()->forget('check_in');

        // Check if session exists and if it has expired
        if ($request->session()->has('check_in')) {
            $sessionData = $request->session()->get('check_in');

            // Check if session data is an array
            if (is_array($sessionData) && isset($sessionData['expires_at'])) {
                $expiresAt = $sessionData['expires_at'];

                // Check if session has expired
                if (Carbon::now('Asia/Jakarta')->gt($expiresAt)) {
                    // Session has expired, unset the session key
                    $request->session()->forget('check_in');
                } else {
                    $value = $sessionData['value'];
                }
            }
        }
        $dtAbsensi = null;
        if ($request->session()->has('id_kode')) {
            $id_kode = $request->session()->get('id_kode');
            $dtAbsensi = Absensi::where('id_code', $id_kode)->first();
        }


        return view('home', [
            'data' => $data,
            'kelas' => $kelas,
            'materi' => $materi,
            'value' => $value,
            'dtAbsensi' => $dtAbsensi
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
