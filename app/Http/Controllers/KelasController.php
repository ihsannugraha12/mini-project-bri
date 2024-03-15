<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.index', ['kelas' => $kelas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kelas.create');
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
        $input = $request->all();
        $kelas = new Kelas;


        $result = Kelas::create($input);

        return redirect('./kelas')->with('succes', 'Berhasi Menambahkan Data');
    }


    public function show($id)
    {
        //
        $kelas = Kelas::findorfail($id);
        return view('kelas.edit', ['kelas' => $kelas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kelas, $id)
    {
        //
        $result = $kelas->find($id);
        $result->jurusan = $request->jurusan;
        $result->fakultas = $request->fakultas;
        $result->tingkat = $request->tingkat;
        $result->nama_kelas = $request->nama_kelas;

        $result->save();
        return redirect('/kelas')->with('succes', "Berhasil Mengubah Data");
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas, $id)
    {
        //
        $kelas->find($id)->delete();
        return redirect('/kelas')->with('succes', "Berhasil Menghapus Data");
    }
}
