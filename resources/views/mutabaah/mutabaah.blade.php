@extends('layouts.main')

@section('body')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Form Isian</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Form Isian</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                
                <form action="/mutabaah" method="POST">
                    @csrf
                    @if (session()->has('berhasilInputMutabaah'))
                        <div class="mb-3 row">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('berhasilInputMutabaah') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        </div>
                    @endif
                    <div class="mb-3 row">
                        <label for="tanggal" class="col-md-2 col-form-label">Tanggal</label>
                        <div class="col-md-10">
                            <input class="form-control" type="date" id="tanggal" name="tanggal" required>
                        </div>
                    </div>

                    {{-- Start of Isian Sholat Wajib --}}
                    <div class="mb3 row">
                        <label> <b>Sholat Wajib</b> </label>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-form-label col-md-2"> Sholat Subuh </label>
                        <div class="col-md-10">
                            <select class="form-select" name="sholatwajibsubuh" required>
                                <option>Select</option>
                                <option value="100">Jamaah/Munfarid awal waktu di masjid</option>
                                <option value="86">Jamaah awal waktu tidak di masjid</option>
                                <option value="72">Jamaah di masjid tidak awal waktu</option>
                                <option value="58">Jamaah tidak awal waktu tidak di masjid</option>
                                <option value="44">Munfarid awal waktu tidak di masjid</option>
                                <option value="30">Munfarid tidak awal waktu di masjidd</option>
                                <option value="16">Munfarid tidak awal waktu tidak di masjid</option>
                                <option value="0">Tidak Sholat</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-form-label col-md-2"> Sholat Dzuhur </label>
                        <div class="col-md-10">
                            <select class="form-select" name="sholatwajibdzuhur" required>
                                <option>Select</option>
                                <option value="100">Jamaah/Munfarid awal waktu di masjid</option>
                                <option value="86">Jamaah awal waktu tidak di masjid</option>
                                <option value="72">Jamaah di masjid tidak awal waktu</option>
                                <option value="58">Jamaah tidak awal waktu tidak di masjid</option>
                                <option value="44">Munfarid awal waktu tidak di masjid</option>
                                <option value="30">Munfarid tidak awal waktu di masjidd</option>
                                <option value="16">Munfarid tidak awal waktu tidak di masjid</option>
                                <option value="0">Tidak Sholat</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-form-label col-md-2"> Sholat Ashar </label>
                        <div class="col-md-10">
                            <select class="form-select" name="sholatwajibashar" required>
                                <option>Select</option>
                                <option value="100">Jamaah/Munfarid awal waktu di masjid</option>
                                <option value="86">Jamaah awal waktu tidak di masjid</option>
                                <option value="72">Jamaah di masjid tidak awal waktu</option>
                                <option value="58">Jamaah tidak awal waktu tidak di masjid</option>
                                <option value="44">Munfarid awal waktu tidak di masjid</option>
                                <option value="30">Munfarid tidak awal waktu di masjidd</option>
                                <option value="16">Munfarid tidak awal waktu tidak di masjid</option>
                                <option value="0">Tidak Sholat</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-form-label col-md-2"> Sholat Maghrib </label>
                        <div class="col-md-10">
                            <select class="form-select" name="sholatwajibmaghrib" required>
                                <option>Select</option>
                                <option value="100">Jamaah/Munfarid awal waktu di masjid</option>
                                <option value="86">Jamaah awal waktu tidak di masjid</option>
                                <option value="72">Jamaah di masjid tidak awal waktu</option>
                                <option value="58">Jamaah tidak awal waktu tidak di masjid</option>
                                <option value="44">Munfarid awal waktu tidak di masjid</option>
                                <option value="30">Munfarid tidak awal waktu di masjidd</option>
                                <option value="16">Munfarid tidak awal waktu tidak di masjid</option>
                                <option value="0">Tidak Sholat</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-form-label col-md-2"> Sholat Isya </label>
                        <div class="col-md-10">
                            <select class="form-select" name="sholatwajibisya" required>
                                <option>Select</option>
                                <option value="100">Jamaah/Munfarid awal waktu di masjid</option>
                                <option value="86">Jamaah awal waktu tidak di masjid</option>
                                <option value="72">Jamaah di masjid tidak awal waktu</option>
                                <option value="58">Jamaah tidak awal waktu tidak di masjid</option>
                                <option value="44">Munfarid awal waktu tidak di masjid</option>
                                <option value="30">Munfarid tidak awal waktu di masjidd</option>
                                <option value="16">Munfarid tidak awal waktu tidak di masjid</option>
                                <option value="0">Tidak Sholat</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label> <b> Menjaga dan Menyempurnakan Wudhu </b> </label>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" id="checkwudhu1" name="wudhu" value="8">
                                <label for="checkwudhu1">Ya</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" id="checkwudhu2" name="wudhu" value="0">
                                <label for="checkwudhu2">Tidak</label>
                            </div>
                        </div>
                    </div>
                    
                    {{-- End of Isian Sholat Wajib --}}


                    {{-- Start of Sholat Rawatib --}}
                    <div class="row">
                        <label> <b> Sholat Rawatib </b> </label>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-form-label col-md-2"> Subuh </label>
                        <div class="col-md-10">
                            <select class="form-select" name="subuh" required>
                                <option>Select</option>
                                <option value="100">Qobliyah</option>
                                <option value="40">Qobliyah dan Ba'diyah</option>
                                <option value="70">Ba'diyah</option>
                                <option value="0">Tidak Sholat</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-form-label col-md-2"> Dzuhur </label>
                        <div class="col-md-10">
                            <select class="form-select" name="dzuhur" required>
                                <option>Select</option>
                                <option value="60">Qobliyah</option>
                                <option value="100">Qobliyah dan Ba'diyah</option>
                                <option value="40">Ba'diyah</option>
                                <option value="0">Tidak Sholat</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-form-label col-md-2"> Ashar </label>
                        <div class="col-md-10">
                            <select class="form-select" name="ashar" required>
                                <option>Select</option>
                                <option value="30">Qobliyah</option>
                                <option value="60">Qobliyah dan Ba'diyah</option>
                                <option value="30">Ba'diyah</option>
                                <option value="0">Tidak Sholat</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-form-label col-md-2"> Maghrib </label>
                        <div class="col-md-10">
                            <select class="form-select" name="maghrib" required>
                                <option>Select</option>
                                <option value="20">Qobliyah</option>
                                <option value="120">Qobliyah dan Ba'diyah</option>
                                <option value="80">Ba'diyah</option>
                                <option value="0">Tidak Sholat</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-form-label col-md-2"> Isya </label>
                        <div class="col-md-10">
                            <select class="form-select" name="isya" required>
                                <option>Select</option>
                                <option value="20">Qobliyah</option>
                                <option value="120">Qobliyah dan Ba'diyah</option>
                                <option value="80">Ba'diyah</option>
                                <option value="0">Tidak Sholat</option>
                            </select>
                        </div>
                    </div>
                    {{-- End of Sholat Rawatib --}}

                    {{-- Start of Sholat Sunnah Lainnya --}}
                    <div class="row">
                        <label> <b> Sholat Sunnah Lainnya </b> </label>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <label>  Dhuha </label>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="dhuha" id="dhuha1" value="4">
                                <label class="form-check-label" for="dhuha1"> Ya </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="dhuha" id="dhuha2" value="0">
                                <label class="form-check-label" for="dhuha2"> Tidak </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md">
                            <label>  Tahajud </label>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="tahajud" id="tahajud1" value="4">
                                <label class="form-check-label" for="tahajud1"> Ya </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="tahajud" id="tahajud2" value="0">
                                <label class="form-check-label" for="tahajud2"> Tidak </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md">
                            <label>  Witir </label>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="witir" id="witir1" value="4">
                                <label class="form-check-label" for="witir1"> Ya </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="witir" id="witir2" value="0">
                                <label class="form-check-label" for="witir2"> Tidak </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md">
                            <label>  Tarawih </label>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="tarawih" id="tarawih1" value="4">
                                <label class="form-check-label" for="tarawih1"> Ya </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="tarawih" id="tarawih2" value="0">
                                <label class="form-check-label" for="tarawih2"> Tidak </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md">
                            <label>Sholat Sunnah lainnya</label>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="sholatsunnahlainnya" id="sholatsunnahlainnya1" value="4">
                                <label class="form-check-label" for="sholatsunnahlainnya1"> Ya </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="sholatsunnahlainnya" id="sholatsunnahlainnya2" value="0">
                                <label class="form-check-label" for="sholatsunnahlainnya2"> Tidak </label>
                            </div>
                        </div>
                    </div>
                    
                    {{-- End of Sholat Sunnah Lainnya --}}

                    {{-- Start of Shaum --}}

                    <div class="row">
                        <label> <b> Shaum </b> </label>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <label>  Senin/Kamis </label>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="seninkamis" id="seninkamis1" value="100">
                                <label class="form-check-label" for="seninkamis1"> Ya </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="seninkamis" id="seninkamis2" value="0">
                                <label class="form-check-label" for="seninkamis2"> Tidak </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md">
                            <label>  Dawud </label>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="dawud" id="dawud1" value="100">
                                <label class="form-check-label" for="dawud1"> Ya </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="dawud" id="dawud2" value="0">
                                <label class="form-check-label" for="dawud2"> Tidak </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md">
                            <label>  Ramadhan </label>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="ramadhan" id="ramadhan1" value="100">
                                <label class="form-check-label" for="ramadhan1"> Ya </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="ramadhan" id="ramadhan2" value="0">
                                <label class="form-check-label" for="ramadhan2"> Tidak </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md">
                            <label>  Lainnya (Ayyamul Bidh, dll) </label>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="lainnya" id="lainnya1" value="100">
                                <label class="form-check-label" for="lainnya1"> Ya </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="lainnya" id="lainnya2" value="0">
                                <label class="form-check-label" for="lainnya2"> Tidak </label>
                            </div>
                        </div>
                    </div>

                    {{-- End of Shaum --}}

                    {{-- Start of Quran --}}

                    <div class="row">
                        <label> <b> Quran </b> </label>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <label>  Jumlah Tilawah Al-Quran </label>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="tilawah" value="2">
                                <label class="form-check-label"> 1 Halaman </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="tilawah" value="3.6">
                                <label class="form-check-label"> 1 Lembar </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="tilawah" value="5.2">
                                <label class="form-check-label"> 2 Lembar </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="tilawah" value="6.8">
                                <label class="form-check-label"> 3 Lembar </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="tilawah" value="8.4">
                                <label class="form-check-label"> 4 Lembar </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="tilawah" value="10">
                                <label class="form-check-label"> >= 5 Lembar </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <label>  Apakah kamu melakukan tadabbur ayat ? </label>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="tadabbur" value="10">
                                <label class="form-check-label"> Ya </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="tadabbur" value="0">
                                <label class="form-check-label"> Tidak </label>
                            </div>
                        </div>
                    </div>    
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="col-form-label"> Juz terakhir yang dibaca </label>
                                <input class="form-control" type="number" name="juzterakhir" min="1" max="30">
                            </div>
                        </div>
                    </div>
                    
                    {{-- End of Quran --}}

                    {{-- Start of Amalan Lainnya --}}

                    <div class="row">
                        <label> <b> Amal Lainnya </b> </label>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <label>  Infaq atau Shodaqoh </label>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="infaq" value="4">
                                <label class="form-check-label"> Ya </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="infaq" value="0">
                                <label class="form-check-label"> Tidak </label>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md">
                            <label>  Al-matsurat </label>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="almatsurat" value="3">
                                <label class="form-check-label"> Ya </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="almatsurat" value="0">
                                <label class="form-check-label"> Tidak </label>
                            </div>
                        </div>
                    </div>    
                    <div class="row mb-3">
                        <div class="col-md">
                            <label>  Lainnya </label>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="dzikirlainnya" value="1">
                                <label class="form-check-label"> Ya </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="dzikirlainnya" value="0">
                                <label class="form-check-label"> Tidak </label>
                            </div>
                        </div>
                    </div>    

                    {{-- End of Amalan Lainnya --}}

                    {{-- Start of Birrul Walidain --}}

                    <div class="row">
                        <label> <b> Birrul Walidain </b> </label>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <label>  Doing Jamaah prayer with parent </label>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="jamaahprayer" value="Ya">
                                <label class="form-check-label"> Yes </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="jamaahprayer" value="Tidak">
                                <label class="form-check-label"> No </label>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md">
                            <label>  Reciting and Understanding Quran </label>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="recitingquran" value="Ya">
                                <label class="form-check-label"> Yes </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="recitingquran" value="Tidak">
                                <label class="form-check-label"> No </label>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md">
                            <label> Having small talk with parent </label>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="smalltalk" value="Ya">
                                <label class="form-check-label"> Yes </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="smalltalk" value="Tidak">
                                <label class="form-check-label"> No </label>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md">
                            <label> Welcoming parent warmly </label>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="welcoming" value="Ya">
                                <label class="form-check-label"> Yes </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="welcoming" value="Tidak">
                                <label class="form-check-label"> No </label>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md">
                            <label> Offering help to do chores </label>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="offerhelp" value="Ya">
                                <label class="form-check-label"> Yes </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="offerhelp" value="Tidak">
                                <label class="form-check-label"> No </label>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md">
                            <label> Having dinner together with family </label>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="havedinner" value="Ya">
                                <label class="form-check-label"> Yes </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="havedinner" value="Tidak">
                                <label class="form-check-label"> No </label>
                            </div>
                        </div>
                    </div>    
                    <div class="row mb-3">
                        <div class="col-md">
                            <label> Giving personal service </label>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="personalservice" value="Ya">
                                <label class="form-check-label"> Yes </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="radio" name="personalservice" value="Tidak">
                                <label class="form-check-label"> No </label>
                            </div>
                        </div>
                    </div>    

                    {{-- End of Birrul Walidain --}}

                    <div class="mb-3 row mx-auto">
                        <div class="col-md-5">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
            </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->

@endsection