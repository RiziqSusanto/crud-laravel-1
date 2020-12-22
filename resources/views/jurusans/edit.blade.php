@extends('layout.main')

@section('title', 'Form Edit Jurusan')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Edit Jurusan</h1>
            <form method="post" action="/jurusans/{{$jurusan->id}}">
            @method('put')
            @csrf
                <!-- <div class="form-group">
                    <label for="id">ID Jurusan</label>
                    <input type="text" class="form-control" id="id" placeholder="Masukkan ID" name="id" value="{{$jurusan->id}}" disabled>
                </div> -->
                <div class="form-group">
                    <label for="nama_jurusan">Nama Jurusan</label>
                    <input type="text" class="form-control @error('nama_jurusan') is-invalid @enderror" id="nama_jurusan" placeholder="Masukkan Nama Jurusan" name="nama_jurusan" value="{{$jurusan->nama_jurusan}}">
                    @error('nama_jurusan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
                <a href="/jurusans" class="card-link">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection