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
            <div class="card-header">
                <div class="row">
                    <form action="{{route('daftar-siswa')}}">
                        <div class="col-md-3s">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="search_name"
                                    placeholder="Cari nama siswa....">
                                <button class="btn btn-sm btn-primary" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                    <form action="{{route('daftar-siswa')}}">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="number" class="form-control" name="search_angkatan"
                                        placeholder="Cari berdasarkan angkatan....">
                                    <button class="btn btn-sm btn-primary" type="submit">Cari</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body">
                @if (session()->has('updated'))
                <div class="alert alert-primary" role="alert">
                    {{session('updated')}}
                </div>
                @elseif (session()->has('search_name_none'))
                <div class="alert alert-danger" role="alert">
                    {{session('search_name_none')}}
                </div>
                @elseif (session()->has('user_deleted'))
                <div class="alert alert-danger" role="alert">
                    {{session('user_deleted')}}
                </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
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
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->angkatan}}</td>
                            <td>{{$user->role}}</td>
                            <td>
                                <a class="btn btn-sm btn-primary m-1" href="{{route('daftar-siswa.edit', [$user->id])}}"
                                    role="button">Ubah</a>
                                <a class="btn btn-sm btn-danger m-1" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" href="{{route('daftar-siswa.delete', [$user->id])}}" role="button">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            {{-- <div class="card-footer">
                @if (request()->search_name)
                    {{ $users->links() }}
                @endif
            </div> --}}
        </div>
    </div>
</div>

<!-- end row -->

@endsection