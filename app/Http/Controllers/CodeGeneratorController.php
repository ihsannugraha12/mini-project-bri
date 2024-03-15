<?php

namespace App\Http\Controllers;

use App\Models\Code;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CodeGeneratorController extends Controller
{

    public function index()
    {
        $kode = Code::all();
        return view('kode.index', ['kode' => $kode]);
    }

    public function store()
    {
        //
        $kode = Str::random(10);
        dd($kode);
        $store = new Code;
        $store->code = $kode;
        $store->id_user = Auth::id();
        $store->save();


        if (!$store) {
            $Response = ["Error" => "Error Generating Code"];
        } else {
            $Response = ['kode' => $kode];
        }

        return $Response;
    }
}
