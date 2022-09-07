<?php

namespace App\Http\Controllers;

use App\Models\User;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\CursorPaginator;
use Illuminate\Pagination\Paginator;

class SiswaController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'siswa')->get();

        if (request()->search_name) {
            $users = User::where([
                ['name', 'like', '%' . request()->search_name . '%'],
                ['role', 'siswa']
            ])->get();
        } else if (request()->search_angkatan) {
            $users = User::where([
                ['angkatan', request()->search_angkatan],
                ['role', 'siswa']
            ])->get(); 
        }

        return view('dashboard.daftar-siswa', compact('users'));
    }

    public function edit($id)
    {
        $users = User::where('id', $id)->get();

        return view('dashboard.edit-siswa', compact('users'));
    }

    public function update(Request $request)
    {
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

    public function delete($id)
    {
        $users = User::where('id', $id)->delete();

        return redirect()->route('daftar-siswa')->with('user_deleted', 'Data siswa telah dihapus');
    }

}
