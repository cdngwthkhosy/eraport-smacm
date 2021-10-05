<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutabaah extends Model
{
    use HasFactory;
    protected $table = 'mutabaah_tables';
    protected $fillable = [
        'tanggal',
        'nama',
        'menjaga_menyempurnakan_wudhu',
        'sholat_subuh',
        'sholat_dzuhur',
        'sholat_ashar',
        'sholat_maghrib',
        'sholat_isya',
        'rawatib_subuh',
        'rawatib_dzuhur',
        'rawatib_ashar',
        'rawatib_maghrib',
        'rawatib_isya',
        'dhuha',
        'tahajud',
        'witir',
        'tarawih',
        'sholat_sunnah_lainnya',
        'shaum_senin_kamis',
        'shaum_dawud',
        'shaum_ramadhan',
        'shaum_lainnya',
        'tilawah_quran',
        'juz_terakhir_yang_dibaca',
        'tadabbur_ayat',
        'infaq_shadaqah',
        'al_matsurat',
        'dzikir_lainnya',
        'jamaah_prayer_parent',
        'reciting_understanding_quran_parent',
        'small_talk_parent',
        'welcoming_parent',
        'offering_help_parent',
        'having_dinner_parent',
        'personal_service_parent'
    ];
}
