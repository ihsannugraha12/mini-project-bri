<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $materi = Materi::all();
        return view('materi.index', ['materi' => $materi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('materi.create');
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
        $materi = new Materi;


        $result = Materi::create($input);

        return redirect('/materi')->with('succes', 'Berhasil Menambahkan Data');
    }

    public function show($id)
    {
        //
        $materi = Materi::findorfail($id);
        return view('materi.edit', ['materi' => $materi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materi  $materi
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 
        $result = Materi::find($id);
        $result->materi = $request->materi;
        $result->save();
        return redirect('/materi')->with('succes', "Berhasil Mengubah Data");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $res = Materi::find($id)->delete();
        return redirect('/materi')->with('succes', "Berhasil Menghapus Data");
    }
}
