<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Murabbi;
use App\Models\Mutabaah;
use App\Models\User;

class DataMutabaahSiswaController extends Controller
{
    public function index(){
        $data = User::get()->where('role', 'siswa');

        return view('data.index', [
            'datasiswa' => $data
        ]);
    }

    public function show_data(Request $request){
        $data = $request->all();
        $siswa = $data['namasiswa'];
        $startDate = $data['start'];
        $endDate = $data['end'];
        $rapor = Murabbi::where('nama','=', $siswa)->get();
        $mutabaah = Mutabaah::get()->where('nama', $siswa)->whereBetween('tanggal', [$startDate, $endDate]);
        // $nilaiwudhu = DB::table('mutabaah_tables')->sum('')
        $datasiswa = array();  
        $datamutabaah = array();
        $nilaitotal = array();

        foreach ($rapor as $value) {
            $datasiswa[] = [
                'tanggal' => $value->tanggal,
                'nama' => $value->nama,
                'ibadah_yang_masih_harus_diperbaiki' => json_decode($value->ibadah_yang_masih_harus_diperbaiki),
                'birrul_walidain' => json_decode($value->birrul_walidain),
                'tanggung_jawab_terhadap_matapelajaran' => json_decode($value->tanggung_jawab_terhadap_matapelajaran),
            ];
        }

        foreach ($mutabaah as $value2) {
            $datamutabaah[] = [
                'tanggal' => $value2->tanggal,
                'nama' => $value2->nama,
                'menjaga_menyempurnakan_wudhu' => $value2->menjaga_menyempurnakan_wudhu,
                'sholat_subuh' => $value2->sholat_subuh,
                'sholat_dzuhur' => $value2->sholat_dzuhur,
                'sholat_ashar' => $value2->sholat_ashar,
                'sholat_maghrib' => $value2->sholat_maghrib,
                'sholat_isya' => $value2->sholat_isya,
                'rawatib_subuh' => $value2->rawatib_subuh,
                'rawatib_dzuhur' => $value2->rawatib_dzuhur,
                'rawatib_ashar' => $value2->rawatib_ashar,
                'rawatib_maghrib' => $value2->rawatib_maghrib,
                'rawatib_isya' => $value2->rawatib_isya,
                'dhuha' => $value2->dhuha,
                'tahajud' => $value2->tahajud,
                'witir' => $value2->witir,
                'tarawih' => $value2->tarawih,
                'sholat_sunnah_lainnya' => $value2->sholat_sunnah_lainnya,
                'shaum_senin_kamis' => $value2->shaum_senin_kamis,
                'shaum_dawud' => $value2->shaum_dawud,
                'shaum_ramadhan' => $value2->shaum_ramadhan,
                'shaum_lainnya' => $value2->shaum_lainnya,
                'tilawah_quran' => $value2->tilawah_quran,
                'tadabbur_ayat' => $value2->tadabbur_ayat,
                'infaq_shadaqah' => $value2->infaq_shadaqah,
                'al_matsurat' => $value2->al_matsurat,
                'dzikir_lainnya' => $value2->dzikir_lainnya,
                'jamaah_prayer' => $value2->jamaah_prayer_parent,
                'reciting_understanding_quran_parent' => $value2->reciting_understanding_quran_parent,
                'small_talk_parent' => $value2->small_talk_parent,
                'welcoming_parent' => $value2->welcoming_parent,
                'offering_help_parent' => $value2->offering_help_parent,
                'having_dinner_parent' => $value2->having_dinner_parent,
                'personal_service_parent' => $value2->personal_service_parent,
            ];
        }

        return view('data.show-data', compact('datasiswa', 'datamutabaah', 'siswa'));
    }
}
