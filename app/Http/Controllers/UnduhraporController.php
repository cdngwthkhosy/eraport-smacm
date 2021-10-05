<?php

namespace App\Http\Controllers;

use App\Models\Murabbi;
use App\Models\Mutabaah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;
use Dompdf\Options;

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

        $html =    '<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <style>
                        .page-break{
                            page-break-after: always;
                        }
                    </style>
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <!-- App favicon -->
                    <link rel="shortcut icon" href="/assets/images/favicon-cendekia.jpg">
                    <!-- Bootstrap Css -->
                    <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
                    <!-- Icons Css -->
                    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
                    <!-- App Css-->
                    <link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
                    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />';

        $html .= view('reports.pdf', compact('datasiswa', 'datamutabaah'));

        $html .= ' <script type="text/javascript">
        var ctx = document.getElementById("Chart").getContext("2d");
        var myChart = new Chart(ctx, {
            type: "line",
            data: {
                
                labels: [
                    @foreach ($datamutabaah as $value)
                            "{{$value["tanggal"]}}",
                    @endforeach
                ],
                datasets: [{
                    label: "Menjaga dan Menyempurnakan Wudhu",
                    data: [
                        @foreach ($datamutabaah as $value)
                            "{{$value["menjaga_menyempurnakan_wudhu"]}}",
                        @endforeach
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        var img1 = myChart.toBase64Image();


        var ctx2 = document.getElementById("Chart2").getContext("2d");
        var myChart2 = new Chart(ctx2, {
            type: "line",
            data: {
                labels: [
                    @foreach ($datamutabaah as $value)
                            "{{$value["tanggal"]}}",
                    @endforeach
                ],
                datasets: [{
                    label: "Sholat Subuh",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["sholat_subuh"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                },
                {
                    label: "Sholat Dzuhur",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["sholat_dzuhur"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                },
                {
                    label: "Sholat Ashar",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["sholat_ashar"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                },
                {
                    label: "Sholat Maghrib",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["sholat_maghrib"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                },
                {
                    label: "Sholat Isya",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["sholat_isya"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                }],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Start of Grafik Sholat Rawatib
        var ctx3 = document.getElementById("Chart3").getContext("2d");
        var myChart3 = new Chart(ctx3, {
            type: "line",
            data: {
                labels: [
                    @foreach ($datamutabaah as $value)
                            "{{$value["tanggal"]}}",
                    @endforeach
                ],
                datasets: [{
                    label: "Rawatib Subuh",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["rawatib_subuh"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                },
                {
                    label: "Rawatib Dzuhur",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["rawatib_dzuhur"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                },
                {
                    label: "Rawatib Ashar",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["rawatib_ashar"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                },
                {
                    label: "Rawatib Maghrib",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["rawatib_maghrib"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                },
                {
                    label: "Rawatib Isya",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["rawatib_isya"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                }],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        // End of Grafik Sholat Rawatib

        // Start of Grafik Sholat Sunnah
        var ctx4 = document.getElementById("Chart4").getContext("2d");
        var myChart4 = new Chart(ctx4, {
            type: "line",
            data: {
                labels: [
                    @foreach ($datamutabaah as $value)
                            "{{$value["tanggal"]}}",
                    @endforeach
                ],
                datasets: [{
                    label: "Dhuha",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["dhuha"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                },
                {
                    label: "Tahajud",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["tahajud"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                },
                {
                    label: "Witir",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["witir"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                },
                {
                    label: "Tarawih",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["tarawih"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                },
                {
                    label: "Lainnya",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["sholat_sunnah_lainnya"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                }],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        // End of Grafik Sholat Sunnah

        // Start of Grafik Shaum
        var ctx5 = document.getElementById("Chart5").getContext("2d");
        var myChart5 = new Chart(ctx5, {
            type: "line",
            data: {
                labels: [
                    @foreach ($datamutabaah as $value)
                            "{{$value["tanggal"]}}",
                    @endforeach
                ],
                datasets: [{
                    label: "Senin/Kamis",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["shaum_senin_kamis"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                },
                {
                    label: "Dawud",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["shaum_dawud"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                },
                {
                    label: "Ramadhan",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["shaum_ramadhan"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                },
                {
                    label: "shaum_lainnya",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["shaum_lainnya"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                }],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        // End of Grafik Shaum

        // Start of Grafik Quran
        var ctx6 = document.getElementById("Chart6").getContext("2d");
        var myChart6 = new Chart(ctx6, {
            type: "line",
            data: {
                labels: [
                    @foreach ($datamutabaah as $value)
                            "{{$value["tanggal"]}}",
                    @endforeach
                ],
                datasets: [{
                    label: "Tadabbur",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["tadabbur_ayat"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                },
                {
                    label: "Jumlah Lembar",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["tilawah_quran"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                }],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        // End of Grafik Quran

        // Start of Grafik Infaq dan Shodaqoh
        var ctx7 = document.getElementById("Chart7").getContext("2d");
        var myChart7 = new Chart(ctx7, {
            type: "line",
            data: {
                labels: [
                    @foreach ($datamutabaah as $value)
                            "{{$value["tanggal"]}}",
                    @endforeach
                ],
                datasets: [{
                    label: "Infaq atau Shodaqoh",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["infaq_shadaqah"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                }],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        // End of Grafik Infaq dan Shodaqoh

        // Start of Grafik Dzikir
        var ctx8 = document.getElementById("Chart8").getContext("2d");
        var myChart8 = new Chart(ctx8, {
            type: "line",
            data: {
                labels: [
                    @foreach ($datamutabaah as $value)
                            "{{$value["tanggal"]}}",
                    @endforeach
                ],
                datasets: [{
                    label: "Al-Matsurat",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["al_matsurat"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                },
                {
                    label: "Lainnya",
                    data: [
                            @foreach ($datamutabaah as $value)
                            "{{$value["dzikir_lainnya"]}}",
                            @endforeach 
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                }],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Start of Grafik Nilai Total
        var ctx9 = document.getElementById("Chart9").getContext("2d");
        var myChart9 = new Chart(ctx9, {
            type: "line",
            data: {
                labels: [
                    @foreach ($datamutabaah as $value)
                            "{{$value["tanggal"]}}",
                    @endforeach
                ],
                datasets: [{
                    label: "Nilai Total",
                    data: [
                            @foreach ($datamutabaah as $item)
                                @php
                                    $valueSholatWajib = (($item["sholat_subuh"] + $item["sholat_dzuhur"] + $item["sholat_ashar"] + $item["sholat_maghrib"] + $item["sholat_isya"]) / 5) * 0.32;

                                    $valueSholatRawatib = (($item["rawatib_subuh"] + $item["rawatib_dzuhur"] + $item["rawatib_ashar"] + $item["rawatib_maghrib"] + $item["rawatib_isya"]) / 5) * 0.16;

                                    $valueSholatSunnah = ($item["dhuha"] + $item["tahajud"] + $item["witir"] + $item["tarawih"] + $item["sholat_sunnah_lainnya"]);
                                    
                                    $valueShaum = ($item["shaum_senin_kamis"] + $item["shaum_dawud"] + $item["shaum_ramadhan"] + $item["shaum_lainnya"]) ;

                                    if ($valueShaum > 100) {
                                        $valueShaum = 100 * 0.04;
                                    }else {
                                        $valueShaum = 4;
                                    };

                                    $valueQuran = ($item["tilawah_quran"] + $item["tadabbur_ayat"]) ;

                                    $valueDzikir = ($item["al_matsurat"] + $item["dzikir_lainnya"]) ;

                                    $nilaiTotal = $valueSholatWajib + $valueSholatRawatib + $valueSholatSunnah + $valueShaum + $valueQuran + $valueDzikir
                                @endphp 
                                    "{{$nilaiTotal}}",
                            @endforeach
                    ],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(255, 159, 64, 0.2)"
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)",
                        "rgba(54, 162, 235, 1)",
                        "rgba(255, 206, 86, 1)",
                        "rgba(75, 192, 192, 1)",
                        "rgba(153, 102, 255, 1)",
                        "rgba(255, 159, 64, 1)"
                    ],
                    borderWidth: 1
                }],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        // End of Grafik Nilai Total
</script>';

        $options = new Options();
        $options->set('isJavascriptEnabled', TRUE);
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();

    }
}
