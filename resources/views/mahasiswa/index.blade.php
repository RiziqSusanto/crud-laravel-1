@extends('layout.main')

@section('title', 'Tabel Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Tabel Mahasiswa</h1>
            <a href="/mahasiswas/create" class="btn btn-primary my-3">Tambah Data</a>

            @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($mahasiswa as $mhs)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$mhs->nama}}</td>
                        <td>{{$mhs->nis}}</td>
                        <td>{{$mhs->email}}</td>
                        <td>{{$mhs->jurusan->nama_jurusan}}</td>
                        <td>
                            <a href="/mahasiswas/{{$mhs->nis}}/edit" class="btn btn-warning">Edit</a>
                            <a href="/mahasiswas/{{$mhs->nis}}" class="btn btn-info">Detail</a>
                            <form action="/mahasiswas/{{$mhs->nis}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection