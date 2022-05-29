@extends('layouts.main')

@section('body')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Daftar Siswa</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @if (session()->has('updated'))
                <div class="alert alert-primary" role="alert">
                    {{session('updated')}}
                </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">username</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Angkatan</th>
                            <th scope="col">Role</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($users as $user)
                    <tbody>
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->angkatan}}</td>
                            <td>{{$user->role}}</td>
                            <td>
                                <a class="btn btn-sm btn-primary m-1" href="{{route('daftar-siswa.edit', [$user->id])}}"
                                    role="button">Ubah</a>
                                <a class="btn btn-sm btn-danger m-1" href="#" role="button">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

<!-- end row -->

@endsection