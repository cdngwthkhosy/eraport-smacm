<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Weekly Report</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body style="background-color: white">
    <div class="container" id="jadi">
        
                {{-- <form action="/unduh-rapor/file" id="make_pdf" method="POST">
                    @csrf
                    @foreach ($datasiswa as $item)
                        <input type="hidden" name="namasiswa" value="{{$item['nama']}}"> --}}
                        {{-- <input type="hidden" name="hidden_html" id="hidden_html" value="{{$item['hidden_html']}}"> --}}
                    {{-- @endforeach
                    <button type="submit" name="create_pdf" id="create_pdf" class="btn btn-success"><i class="bi bi-file-earmark-arrow-down"></i> Download File</button>
                </form> --}}
{{-- 
                <script type="text/javascript">
                    $(document).ready(function(){
                        $('#create_pdf').click(function(){
                            $('#hidden_html').val($('#jadi').html());
                            $('#make_pdf').submit();
                        });
                    });
                </script> --}}
    <div class="row mt-5 mx-auto">
        <div class="col-lg-12">
                    <div class="invoice-title">
                        <div class="mb-4">
                            <img src="/assets/images/SMA.png" alt="logo" height="50"/>
                        </div>
                        <div class="text-center">
                            <h6><b>Student Weekly Report</b></h6>
                            <h6><b>SMA Islam Cendekia Muda</b></h6>
                        </div>
                        <div class="text-muted">
                            <h6 class="mb-1">
                                <b>Nama :</b>   @foreach ($datasiswa as $item)
                                                    {{$item['nama']}}
                                                @endforeach
                            </h6>
                            {{-- <h6 class="mb-1">
                                <b>Kelompok :</b>   @foreach ($datasiswa as $item)
                                                    {{$item['nama']}}
                                                    @endforeach
                            </h6> --}}
                        </div>
                    </div>
    
                    <hr class="my-4">
                    
                    <div class="py-2">
                        <h5 class="font-size-15">Laporan Murabbi</h5>
    
                        <div class="table-responsive">
                            <table class="table table-nowrap table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th>Ibadah yang Masih Harus Diperbaiki</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h5 class="font-size-15 mb-1">
                                                @foreach ($datasiswa as $item)
                                                    @foreach ($item['ibadah_yang_masih_harus_diperbaiki'] as $val)
                                                    <ul>
                                                        <li>{{$val}}</li>
                                                    </ul>
                                                    @endforeach
                                                @endforeach
                                            </h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
    
                        <div class="table-responsive">
                            <table class="table table-nowrap table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th>Interaksi Dengan Orangtua (Birrul Walidain) yang Masih Harus Diperbaiki</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h5 class="font-size-15 mb-1">
                                                @foreach ($datasiswa as $item)
                                                    @foreach ($item['birrul_walidain'] as $val)
                                                    <ul>
                                                        <li>{{$val}}</li>
                                                    </ul>
                                                    @endforeach
                                                @endforeach
                                            </h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
    
                        <div class="table-responsive">
                            <table class="table table-nowrap table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th>Tugas/UH/Ujian/Keterampilan yang Masih Belum Terpenuhi di Mata Pelajaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h5 class="font-size-15 mb-1">
                                                @foreach ($datasiswa as $item)
                                                    @foreach ($item['tanggung_jawab_terhadap_matapelajaran'] as $val)
                                                    <ul>
                                                        <li>{{$val}}</li>
                                                    </ul>
                                                    @endforeach
                                                @endforeach
                                            </h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
    
                        <div class="page-break"></div>
    
                        {{-- Start of Grafik Mutabaah --}}
                        <div class="row mb-5 mx-auto">
                            <div class="col-xl-4">
                                {{-- <div id="Sarah_chart_div" style="width: 100%; min-height: 300px;"></div> --}}
                                <p><b> Grafik Menjaga dan Menyempurnakan Wudhu </b></p>
                                <div>
                                    <canvas id="Chart"></canvas>
                                    {{-- <img alt="" id="contoh"> --}}
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-xl-4">
                                {{-- <div id="Anthony_chart_div" style="width: 100%; min-height: 300px;"> --}}
                                <p><b> Grafik Sholat Wajib </b></p>
                                <div>
                                    <canvas id="Chart2"></canvas>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-xl-4">
                                {{-- <div id="Sarah_chart_div" style="width: 100%; min-height: 300px;"></div> --}}
                                <p><b> Grafik Sholat Rawatib </b></p>
                                <div>
                                    <canvas id="Chart3"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="page-break"></div>

                        <div class="row mb-5 mx-auto">
                            <!-- end col -->
                            <div class="col-xl-4">
                                {{-- <div id="Anthony_chart_div" style="width: 100%; min-height: 300px;"> --}}
                                <p><b> Grafik Sholat Sunnah </b></p>
                                <div>
                                    <canvas id="Chart4"></canvas>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-xl-4">
                                {{-- <div id="Sarah_chart_div" style="width: 100%; min-height: 300px;"></div> --}}
                                <p><b> Grafik Shaum </b></p>
                                <div>
                                    <canvas id="Chart5"></canvas>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-xl-4">
                                {{-- <div id="Anthony_chart_div" style="width: 100%; min-height: 300px;"> --}}
                                <p><b> Grafik Quran </b></p>
                                <div>
                                    <canvas id="Chart6"></canvas>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <div class="row mb-5 mx-auto">
                        </div>

                        <div class="page-break"></div>

                        <div class="row mb-5 mx-auto">
                            <div class="col-xl-4">
                                {{-- <div id="Sarah_chart_div" style="width: 100%; min-height: 300px;"></div> --}}
                                <p><b> Grafik Infaq dan Shodaqoh </b></p>
                                <div>
                                    <canvas id="Chart7"></canvas>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-xl-4">
                                {{-- <div id="Anthony_chart_div" style="width: 100%; min-height: 300px;"> --}}
                                <p><b> Grafik Dzikir </b></p>
                                <div>
                                    <canvas id="Chart8"></canvas>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-xl-4">
                                <p><b> Grafik Nilai Total </b></p>
                                <div>
                                    <canvas id="Chart9"></canvas>
                                    {{-- <img src="" id="nilai-total"> --}}
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
    </div>
</div>
    
    
    <script type="text/javascript">

            

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
            // var img1 = myChart.toBase64Image();
            // document.getElementById('contoh').src(img1);
            // console.log(img1);
            // var chartjsToImage = require("chartjs-to-image")
            // const myChart15 = new ChartJsImage();
            //     myChart15.setConfig({
            //     type: 'bar',
            //     data: { labels: ['Hello world', 'Foo bar'], datasets: [{ label: 'Foo', data: [1, 2] }] },
            //     });
            // const dataUrl = await myChart.toDataUrl();
            // console.log(myChart15.getUrl());
    
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

            </script>
            <script>
                window.addEventListener("load", window.print());
            </script>

    <!-- JAVASCRIPT -->
	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="/assets/libs/jquery/jquery.min.js"></script>
	<script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="/assets/libs/metismenu/metisMenu.min.js"></script>
	<script src="/assets/libs/simplebar/simplebar.min.js"></script>
	<script src="/assets/libs/node-waves/waves.min.js"></script>
	<script src="/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
	<!-- App js -->
	<script src="/assets/js/app.js"></script>
</body>
</html>
    
