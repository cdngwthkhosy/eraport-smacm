<?php

namespace App\Http\Controllers;

use App\Models\Murabbi;
use App\Models\Mutabaah;
use App\Models\User;
use Illuminate\Http\Request;

class FillformController extends Controller
{
    public function index()
    {

        $name = User::get()->where('role', 'siswa');

        return view('reports.fill-form', [
            'name' => $name
        ]);

    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'datasiswa' => 'required',
            'tanggal' => 'required',
            'ibadah' => 'required',
            'birrulwalidain' => 'required',
            'pelajaran' => 'required',
        ]);

        $datasiswa = new Murabbi;
        $datasiswa->tanggal = $validatedData['tanggal']; 
        $datasiswa->nama = $validatedData['datasiswa'];
        $datasiswa->ibadah_yang_masih_harus_diperbaiki = json_encode($validatedData['ibadah']);
        $datasiswa->birrul_walidain = json_encode($validatedData['birrulwalidain']);
        $datasiswa->tanggung_jawab_terhadap_matapelajaran = json_encode($validatedData['pelajaran']);
        $datasiswa->save();

        $request->session()->flash('berhasilInput', 'Data berhasil di input');

        return redirect('/fillform');


    }

}
