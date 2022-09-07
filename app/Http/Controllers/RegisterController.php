<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3|unique:users',
            'angkatan' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);

        if ($user) {
            return redirect(route('dashboard'))->with('register_succed', 'User berhasil teregistrasi, silahkan login untuk aktivasi');
        } else {
            return redirect(route('dashboard'))->with('register_failed', 'User gagal teregistrasi, silahkan hubungi tim IT');
        }
    }
}
