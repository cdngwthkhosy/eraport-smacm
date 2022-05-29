<?php

namespace App\Http\Controllers;

use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'siswa')->get();

        return view('dashboard.daftar-siswa', compact('users'));
    }

    public function edit($id)
    {
        $users = User::where('id', $id)->get();

        return view('dashboard.edit-siswa', compact('users'));
    }

    public function update(Request $request)
    {
        // $user = $request->validate(
        //     [
        //         'id' => 'numeric',
        //         'name' => 'string',
        //         'username' => 'string',
        //         'angkatan' => 'numeric',
        //         'email' => 'string',
        //         'password' => 'string'
        //     ]
        //     );

        $userPwd = Hash::make($request['password']);

        User::where('id', $request->id)->update([
            'name' => $request->name,
            'username' => $request->username,
            'angkatan' => $request->angkatan,
            'email' => $request->email,
            'password' => $userPwd
        ]);

        return redirect()->route('daftar-siswa')->with('updated', 'Data siswa telah di update');
    }
}
