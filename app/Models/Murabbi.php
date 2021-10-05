<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murabbi extends Model
{
    use HasFactory;
    protected $table = "murabbi_tables";
    protected $fillable = [
        'tanggal',
        'nama',
        'ibadah_yang_masih_harus_diperbaiki',
        'birrul_walidain',
        'tanggung_jawab_terhadap_matapelajaran'
    ];
}
