@extends('layout.main')

@section('title', 'Form Tambah Jurusan')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Tambah Jurusan</h1>
            <form method="post" action="/jurusans">
            @csrf
                <div class="form-group">
                    <label for="id">ID Jurusan</label>
                    <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" placeholder="Masukkan ID" name="id" value="{{old('id')}}">
                    @error('id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_jurusan">Nama Jurusan</label>
                    <input type="text" class="form-control @error('nama_jurusan') is-invalid @enderror" id="nama_jurusan" placeholder="Masukkan Nama Jurusan" name="nama_jurusan" value="{{old('nama_jurusan')}}">
                    @error('nama_jurusan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
@endsection