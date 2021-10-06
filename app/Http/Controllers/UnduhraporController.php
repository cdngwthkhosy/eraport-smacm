<?php

namespace App\Http\Controllers;

use App\Models\Murabbi;
use App\Models\Mutabaah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnduhraporController extends Controller
{
    public function index()
    {

        $data = User::get()->where('role', 'siswa');

        return view('reports.unduh-rapor', [
            'datasiswa' => $data
        ]);

    }


    public function unduh(Request $request)
    {
        $data = $request->all();
        $siswa = $data['namasiswa'];
        

        $rapor = Murabbi::get()->where('nama', $siswa);
        $mutabaah = Mutabaah::get()->where('nama', $siswa);
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
                'dzikir_lainnya' => $value2->dzikir_lainnya
            ];
        }

        return view('reports.pdf', compact('datasiswa', 'datamutabaah'));  

    }

    public function unduhFile(Request $request){

        $data = $request->all();
        $siswa = $data['namasiswa'];
        

        $rapor = Murabbi::get()->where('nama', $siswa);
        $mutabaah = Mutabaah::get()->where('nama', $siswa);
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
                'dzikir_lainnya' => $value2->dzikir_lainnya
            ];
        }

        

    }
}
