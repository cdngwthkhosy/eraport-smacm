@extends('layouts.main')

@section('body')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Unduh Laporan</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Unduh Laporan</li>
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
                <form action="{{ route('unduhrapor') }}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <p>Pilih Nama</p>
                        </div>
                        <div class="col-md-5">
                            <select class="form-select" name="namasiswa" required>
                                <option>Pilih Nama</option>
                                @foreach ($datasiswa as $siswa)
                                    <option value="{{$siswa['name']}}">{{$siswa['name']}}
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label class="form-label">Date Range</label>
                        </div>
                        <div class="col-md-5">
                                <input type="date" class="form-control" name="start" placeholder="Start Date" aria-describedby="startdateHelp">
                                <div id="startdateHelp" class="form-text">Tanggal Awal</div>
                        </div>
                        <div class="col-md-5">
                                <input type="date" class="form-control" name="end" placeholder="End Date" aria-describedby="enddateHelp">
                                <div id="enddateHelp" class="form-text">Tanggal Akhir</div>
                        </div>
                    </div>
                    </div>
                    <div class="row mb-3 mx-auto">
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- end row -->

@endsection