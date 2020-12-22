@extends('layout.main')

@section('title', 'Form Tambah Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Tambah Mahasiswa</h1>
            <form method="post" action="/mahasiswas">
            @csrf
                <div class="form-group">
                    <label for="nis">NIS</label>
                    <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" placeholder="Masukkan NIS" name="nis" value="{{old('nis')}}">
                    @error('nis')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama Mahasiswa" name="nama" value="{{old('nama')}}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{old('email')}}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="id_jurusan">jurusan</label>
                    <select name="id_jurusan" class="form-control">
                        <Option>--- Jurusan ----</Option>
                        @foreach($jurusan as $jrs)
                        <Option value="{{$jrs->id}}">{{$jrs->nama_jurusan}}</Option>
                        @endforeach
                    </select>
                    @error('nama')
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