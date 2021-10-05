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
                
                <form action="/fillform" method="POST">
                    @csrf
                    @if (session()->has('berhasilInput'))
                        <div class="mb-3 row">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('berhasilInput') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        </div>
                    @endif
                    <div class="mb-3 row">
                    <label for="DataSiswa" class="col-md-2 col-form-label">Nama Siswa</label>
                        <div class="col-md-10">
                            <select name="datasiswa" id="DataSiswa" class="form-control select2">
                                <option>Select</option>
                                @foreach ($name as $item)
                                    <option value="{{$item['name']}}">{{$item['name']}}
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tanggal" class="col-md-2 col-form-label">Tanggal</label>
                        <div class="col-md-10">
                            <input class="form-control @error('tanggal') is-invalid @enderror" type="date" id="tanggal" name="tanggal">
                        </div>
                        @error('tanggal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    {{-- Start of Isian Ibadah yang masih harus diperbaiki --}}
                    <div class="row">
                        <label> <b> Ibadah yang masih harus diperbaiki </b> </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('ibadah') is-invalid @enderror" type="checkbox" id="check11" name="ibadah[]" value="Siswa tidak mengisi mutabaah">
                        <label class="form-check-label" for="check11">
                            Siswa tidak mengisi mutabaah
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('ibadah') is-invalid @enderror" type="checkbox" id="check12" name="ibadah[]" value="Sholat wajib berjamaah">
                        <label class="form-check-label" for="check12">
                            Sholat wajib berjamaah
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('ibadah') is-invalid @enderror" type="checkbox" id="check13" name="ibadah[]" value="Sholat rawatib Qabliyah dan Ba'diyah">
                        <label class="form-check-label" for="check13">
                            Sholat rawatib Qabliyah dan Ba'diyah
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('ibadah') is-invalid @enderror" type="checkbox" id="check14" name="ibadah[]" value="Sholat dhuha">
                        <label class="form-check-label" for="check14">
                            Sholat dhuha
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('ibadah') is-invalid @enderror" type="checkbox" id="check15" name="ibadah[]" value="Sholat tahajud atau witir">
                        <label class="form-check-label" for="check15">
                            Sholat tahajud atau witir
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('ibadah') is-invalid @enderror" type="checkbox" id="check16" name="ibadah[]" value="Tilawah Al-Quran">
                        <label class="form-check-label" for="check16">
                            Tilawah Al-Quran
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('ibadah') is-invalid @enderror" type="checkbox" id="check17" name="ibadah[]" value="Tadabbur Al-Quran">
                        <label class="form-check-label" for="check17">
                            Tadabbur Al-Quran
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('ibadah') is-invalid @enderror" type="checkbox" id="check18" name="ibadah[]" value="Infaq atau Shadaqah">
                        <label class="form-check-label" for="check18">
                            Infaq atau Shadaqah
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('ibadah') is-invalid @enderror" type="checkbox" id="check19" name="ibadah[]" value="Al-Matsurat">
                        <label class="form-check-label" for="check19">
                            Al-Matsurat
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input @error('ibadah') is-invalid @enderror" type="checkbox" id="check20" name="ibadah[]" value="Tidak Ada">
                        <label class="form-check-label" for="check20">
                            <b>Tidak Ada</b>
                        </label>
                    </div>
                    {{-- End of Isian Ibadah yang masih harus diperbaiki --}}

                    {{-- Start of Birrul Walidain --}}
                    <div class="row">
                        <label> <b> Interaksi dengan orangtua atau Birrul Walidain yang masih harus diperbaiki </b> </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('birrulwalidain') is-invalid @enderror" type="checkbox" id="check21" name="birrulwalidain[]" value="Sholat berjamaah bersama orang tua">
                        <label class="form-check-label" for="check21">
                            Sholat berjamaah bersama orang tua
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('birrulwalidain') is-invalid @enderror" type="checkbox" id="check22" name="birrulwalidain[]" value="Tadabbur Al-Quran bersama orang tu">
                        <label class="form-check-label" for="check22">
                            Tadabbur Al-Quran bersama orang tua
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('birrulwalidain') is-invalid @enderror" type="checkbox" id="check23" name="birrulwalidain[]" value="Berkomunikasi atau bertukar-pikiran dengan orang tua">
                        <label class="form-check-label" for="check23">
                            Berkomunikasi atau bertukar-pikiran dengan orang tua
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('birrulwalidain') is-invalid @enderror" type="checkbox" id="check24" name="birrulwalidain[]" value="Menyambut kedatangan dan kepergian orang tua dengan santun">
                        <label class="form-check-label" for="check24">
                            Menyambut kedatangan dan kepergian orang tua dengan santun
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('birrulwalidain') is-invalid @enderror" type="checkbox" id="check25" name="birrulwalidain[]" value="Membantu menyelesaikan pekerjaan-pekerjaan rutin rumah">
                        <label class="form-check-label" for="check25">
                            Membantu menyelesaikan pekerjaan-pekerjaan rutin rumah
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('birrulwalidain') is-invalid @enderror" type="checkbox" id="check26" name="birrulwalidain[]" value="Makan bersama dengan orang tua">
                        <label class="form-check-label" for="check26">
                            Makan bersama dengan orang tua
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('birrulwalidain') is-invalid @enderror" type="checkbox" id="check27" name="birrulwalidain[]" value="Melayani keperluan dan keinginan yang baik dari orang tua">
                        <label class="form-check-label" for="check27">
                            Melayani keperluan dan keinginan yang baik dari orang tua
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input @error('birrulwalidain') is-invalid @enderror" type="checkbox" id="check28" name="birrulwalidain[]" value="Tidak Ada">
                        <label class="form-check-label" for="check28">
                            <b>Tidak Ada</b>
                        </label>
                    </div>
                    {{-- End of Birrul Walidain --}}

                    {{-- Start of Tanggung jawab terhadap pelajaran --}}
                    <div class="row">
                        <label> <b> Tugas/UH/Ujian/Keterampilan dan Kewajiban Lain Yang Masih Belum Terpenuhi di Mata Pelajaran </b> </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('pelajaran') is-invalid @enderror" type="checkbox" id="check31" name="pelajaran[]" value="Bahasa Indonesia">
                        <label class="form-check-label" for="check31">
                            Bahasa Indonesia
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('pelajaran') is-invalid @enderror" type="checkbox" id="check32" name="pelajaran[]" value="PAIBP (Pendidikan Agama Islam dan Budi Pekerti)">
                        <label class="form-check-label" for="check32">
                            PAIBP (Pendidikan Agama Islam dan Budi Pekerti)
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('pelajaran') is-invalid @enderror" type="checkbox" id="check33" name="pelajaran[]" value="PPKN (Pendidikan Pancasila dan Kewarganegaraan)">
                        <label class="form-check-label" for="check33">
                            PPKN (Pendidikan Pancasila dan Kewarganegaraan)
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('pelajaran') is-invalid @enderror" type="checkbox" id="check34" name="pelajaran[]" value="Bahasa Inggris">
                        <label class="form-check-label" for="check34">
                            Bahasa Inggris
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('pelajaran') is-invalid @enderror" type="checkbox" id="check35" name="pelajaran[]" value="Matematika">
                        <label class="form-check-label" for="check35">
                            Matematika
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('pelajaran') is-invalid @enderror" type="checkbox" id="check36" name="pelajaran[]" value="Sejarah Indonesia">
                        <label class="form-check-label" for="check36">
                            Sejarah Indonesia
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('pelajaran') is-invalid @enderror" type="checkbox" id="check37" name="pelajaran[]" value="Seni Budaya">
                        <label class="form-check-label" for="check37">
                            Seni Budaya
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('pelajaran') is-invalid @enderror" type="checkbox" id="check38" name="pelajaran[]" value="PJOK (Pendidikan Jasmani, Olah Raga dan Kesehatan)">
                        <label class="form-check-label" for="check38">
                            PJOK (Pendidikan Jasmani, Olah Raga dan Kesehatan)
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('pelajaran') is-invalid @enderror" type="checkbox" id="check39" name="pelajaran[]" value="Prakarya dan Kewirausahaan">
                        <label class="form-check-label" for="check39">
                            Prakarya dan Kewirausahaan
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('pelajaran') is-invalid @enderror" type="checkbox" id="check40" name="pelajaran[]" value="Bahasa Sunda">
                        <label class="form-check-label" for="check40">
                            Bahasa Sunda
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('pelajaran') is-invalid @enderror" type="checkbox" id="check41" name="pelajaran[]" value="Matematika Peminatan">
                        <label class="form-check-label" for="check41">
                            Matematika Peminatan
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('pelajaran') is-invalid @enderror" type="checkbox" id="check42" name="pelajaran[]" value="Biologi">
                        <label class="form-check-label" for="check42">
                            Biologi
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('pelajaran') is-invalid @enderror" type="checkbox" id="check43" name="pelajaran[]" value="Fisika">
                        <label class="form-check-label" for="check43">
                            Fisika
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('pelajaran') is-invalid @enderror" type="checkbox" id="check44" name="pelajaran[]" value="Kimia">
                        <label class="form-check-label" for="check44">
                            Kimia
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('pelajaran') is-invalid @enderror" type="checkbox" id="check45" name="pelajaran[]" value="Geografi">
                        <label class="form-check-label" for="check45">
                            Geografi
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('pelajaran') is-invalid @enderror" type="checkbox" id="check46" name="pelajaran[]" value="Sejarah Peminatan">
                        <label class="form-check-label" for="check46">
                            Sejarah Peminatan
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('pelajaran') is-invalid @enderror" type="checkbox" id="check47" name="pelajaran[]" value="Sosiologi">
                        <label class="form-check-label" for="check47">
                            Sosiologi
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('pelajaran') is-invalid @enderror" type="checkbox" id="check48" name="pelajaran[]" value="Ekonomi">
                        <label class="form-check-label" for="check48">
                            Ekonomi
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('pelajaran') is-invalid @enderror" type="checkbox" id="check49" name="pelajaran[]" value="Bahasa Arab">
                        <label class="form-check-label" for="check49">
                            Bahasa Arab
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input @error('pelajaran') is-invalid @enderror" type="checkbox" id="check50" name="pelajaran[]" value="IELTS Bahasa Inggris">
                        <label class="form-check-label" for="check50">
                            IELTS Bahasa Inggris
                        </label>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input @error('pelajaran') is-invalid @enderror" type="checkbox" id="check51" name="pelajaran[]" value="Tidak Ada">
                        <label class="form-check-label" for="check51">
                            <b>Tidak Ada</b>
                        </label>
                    </div>
                    {{-- End of Tanggung jawab terhadap pelajaran --}}

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