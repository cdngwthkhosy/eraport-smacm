<?php

namespace App\Http\Controllers;

use App\Models\Mutabaah;
use Illuminate\Http\Request;

class MutabaahController extends Controller
{
    public function index(){
        return view('mutabaah.mutabaah');
    }

    public function store(Request $request){
        $data = $request->all();

        $datamutabaah = new Mutabaah;
        $datamutabaah->tanggal = $data['tanggal'];
        $datamutabaah->nama = auth()->user()->name;
        $datamutabaah->menjaga_menyempurnakan_wudhu = $data['wudhu'];
        $datamutabaah->sholat_subuh = $data['sholatwajibsubuh'];
        $datamutabaah->sholat_dzuhur = $data['sholatwajibdzuhur'];
        $datamutabaah->sholat_ashar = $data['sholatwajibashar'];
        $datamutabaah->sholat_maghrib = $data['sholatwajibmaghrib'];
        $datamutabaah->sholat_isya = $data['sholatwajibisya'];
        $datamutabaah->rawatib_subuh = $data['subuh'];
        $datamutabaah->rawatib_dzuhur = $data['dzuhur'];
        $datamutabaah->rawatib_ashar = $data['ashar'];
        $datamutabaah->rawatib_maghrib = $data['maghrib'];
        $datamutabaah->rawatib_isya = $data['isya'];
        $datamutabaah->dhuha = $data['dhuha'];
        $datamutabaah->tahajud = $data['tahajud'];
        $datamutabaah->witir = $data['witir'];
        $datamutabaah->tarawih = $data['tarawih'];
        $datamutabaah->sholat_sunnah_lainnya = $data['sholatsunnahlainnya'];
        $datamutabaah->shaum_senin_kamis = $data['seninkamis'];
        $datamutabaah->shaum_dawud = $data['dawud'];
        $datamutabaah->shaum_ramadhan = $data['ramadhan'];
        $datamutabaah->shaum_lainnya = $data['lainnya'];
        $datamutabaah->tilawah_quran = $data['tilawah'];
        $datamutabaah->juz_terakhir_yang_dibaca = $data['juzterakhir'];
        $datamutabaah->tadabbur_ayat = $data['tadabbur'];
        $datamutabaah->infaq_shadaqah = $data['infaq'];
        $datamutabaah->al_matsurat = $data['almatsurat'];
        $datamutabaah->dzikir_lainnya = $data['dzikirlainnya'];
        $datamutabaah->jamaah_prayer_parent = $data['jamaahprayer'];
        $datamutabaah->reciting_understanding_quran_parent = $data['recitingquran'];
        $datamutabaah->small_talk_parent = $data['smalltalk'];
        $datamutabaah->welcoming_parent = $data['welcoming'];
        $datamutabaah->offering_help_parent = $data['offerhelp'];
        $datamutabaah->having_dinner_parent = $data['havedinner'];
        $datamutabaah->personal_service_parent = $data['personalservice'];
        $datamutabaah->save();

        $request->session()->flash('berhasilInputMutabaah', 'Data berhasil di input');

        return redirect('/mutabaah');

    }
}
