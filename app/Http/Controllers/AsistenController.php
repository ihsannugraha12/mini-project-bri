<?php

namespace App\Http\Controllers;

use App\Http\Requests\AsistenPostRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;


class AsistenController extends Controller
{

    public function index()
    {
        //
        $users = User::with('role')->get();
        return view('asisten.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::all();
        return view('asisten.create', ['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\AsistenPostRequest  $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(AsistenPostRequest $request): RedirectResponse
    {
        //
        $validated = $request->validated();

        $input = $request->all();
        $user = new User;
        $input['password'] = Hash::make($request->newPassword);


        $result = User::create($input);

        return redirect('/asisten')->with('succes', "Berhasil Menambahkan data");
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
        $user = User::findorfail($id);
        $roles = Role::all();
        return view('asisten.edit', [
            'user' => $user,
            'roles' => $roles
        ]);
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
        $user = User::find($id);
        $user->id_asisten = $request->id_asisten;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->join_date = $request->join_date;

        $user->save();
        return redirect('/asisten')->with('succes', "Berhasil Mengubah Data");
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
        $deleted = User::find($id)->delete();
        return redirect('/asisten')->with('succes', "Berhasil Menghapus Data");
    }
}
