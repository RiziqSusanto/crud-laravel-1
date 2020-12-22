@extends('layout.main')

@section('title', 'Detail Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Detail Mahasiswa</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$mahasiswa->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$mahasiswa->nis}}</h6>
                    <p class="card-text">{{$mahasiswa->email}}</p>
                    <p class="card-text">{{$mahasiswa->jurusan->nama_jurusan}}</p>
                    <a href="/mahasiswas" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection