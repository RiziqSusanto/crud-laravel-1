@extends('layout.main')

@section('title', 'Tabel Jurusan')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Tabel Jurusan</h1>
            <a href="/jurusans/create" class="btn btn-primary my-3">Tambah Data</a>

            @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Jurusan</th>
                        <th scope="col">Nama Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($jurusan as $jrs)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$jrs->id}}</td>
                        <td>{{$jrs->nama_jurusan}}</td>
                        <td>
                            <a href="/jurusans/{{$jrs->id}}/edit" class="btn btn-warning">Edit</a>
                            <form action="/jurusans/{{$jrs->id}}" method="post" class="d-inline">
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