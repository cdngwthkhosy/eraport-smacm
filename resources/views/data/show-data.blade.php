@extends('layouts.main')

@section('body')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Detail Nilai Siswa</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">
                        @foreach ($datamutabaah as $items)
                                {{$items['nama']}}
                        @endforeach
                    </li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                {{-- Tabel Nilai Siswa - Birrul Walidain--}}
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active"> <b> Birrul Walidain </b> </li>
                    </ol>
                </div>
                <table class="table table-success table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Doing Jamaah Prayer with Parent</th>
                        <th scope="col">Reciting and Understanding Quran with Parent</th>
                        <th scope="col">Having Small Talk with Parent</th>
                        <th scope="col">Welcoming Parent Warmly</th>
                        <th scope="col">Offering Help to do Chores</th>
                        <th scope="col">Having Dinner Together with Family</th>
                        <th scope="col">Giving Personal Service</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['tanggal']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['jamaah_prayer']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['reciting_understanding_quran_parent']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['small_talk_parent']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['welcoming_parent']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['offering_help_parent']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['having_dinner_parent']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['personal_service_parent']}}
                            @endforeach
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  {{-- Akhir dari Tabel Nilai Siswa - Birrul Walidain --}}

                  {{-- Tabel Nilai Siswa - Sholat Wajib--}}
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active"> <b> Sholat Wajib </b> </li>
                    </ol>
                </div>
                <table class="table table-info table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Sholat Subuh</th>
                        <th scope="col">Sholat Dzuhur</th>
                        <th scope="col">Sholat Ashar</th>
                        <th scope="col">Sholat Maghrib</th>
                        <th scope="col">Sholat Isya</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['tanggal']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['sholat_subuh']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['sholat_dzuhur']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['sholat_ashar']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['sholat_maghrib']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['sholat_isya']}}
                            @endforeach
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  {{-- Akhir dari Tabel Nilai Siswa - Sholat Wajib --}}

                  {{-- Tabel Nilai Siswa - Sholat Rawatib--}}
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active"> <b> Sholat Rawatib </b> </li>
                    </ol>
                </div>
                <table class="table table-primary table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Sholat Rawatib Subuh</th>
                        <th scope="col">Sholat Rawatib Dzuhur</th>
                        <th scope="col">Sholat Rawatib Ashar</th>
                        <th scope="col">Sholat Rawatib Maghrib</th>
                        <th scope="col">Sholat Rawatib Isya</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['tanggal']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['rawatib_subuh']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['rawatib_dzuhur']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['rawatib_ashar']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['rawatib_maghrib']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['rawatib_isya']}}
                            @endforeach
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  {{-- Akhir dari Tabel Nilai Siswa - Sholat Rawatib --}}

                  {{-- Tabel Nilai Siswa - Sholat Sunnah--}}
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active"> <b> Sholat Sunnah </b> </li>
                    </ol>
                </div>
                <table class="table table-warning table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Dhuha</th>
                        <th scope="col">Tahajud</th>
                        <th scope="col">Witir</th>
                        <th scope="col">Tarawih</th>
                        <th scope="col">Lainnya</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['tanggal']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['dhuha']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['tahajud']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['witir']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['tarawih']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['sholat_sunnah_lainnya']}}
                            @endforeach
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  {{-- Akhir dari Tabel Nilai Siswa - Sholat Sunnah --}}

                   {{-- Tabel Nilai Siswa - Shaum--}}
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active"> <b> Shaum </b> </li>
                    </ol>
                </div>
                <table class="table table-secondary table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Senin Kamis</th>
                        <th scope="col">Dawud</th>
                        <th scope="col">Ramadhan</th>
                        <th scope="col">Lainnya</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['tanggal']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['shaum_senin_kamis']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['shaum_dawud']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['shaum_ramadhan']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['shaum_lainnya']}}
                            @endforeach
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  {{-- Akhir dari Tabel Nilai Siswa - Shaum --}}

                  {{-- Tabel Nilai Siswa - Amalan Lainnya--}}
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active"> <b> Amalan Lainnya </b> </li>
                    </ol>
                </div>
                <table class="table table-dark table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Tilawah Quran</th>
                        <th scope="col">Tadabbur Ayat</th>
                        <th scope="col">Infaq atau Shodaqoh</th>
                        <th scope="col">Al-Matsurat</th>
                        <th scope="col">Dzikir Lainnya</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['tanggal']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['tilawah_quran']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['tadabbur_ayat']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['infaq_shadaqah']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['al_matsurat']}}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($datamutabaah as $items)
                                {{$items['dzikir_lainnya']}}
                            @endforeach
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  {{-- Akhir dari Tabel Nilai Siswa - Amalan Lainnya --}}
            </div>
        </div>
    </div>
</div>

<!-- end row -->

@endsection