<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand">TEST</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
            <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
            <a class="nav-link {{  request()->is('mahasiswas') ? 'active' : '' }}" href="{{ url('/mahasiswas') }}">Mahasiswa</a>
            <a class="nav-link {{  request()->is('students') ? 'active' : '' }}" href="{{ url('/students') }}">Students</a>
            <a class="nav-link {{  request()->is('jurusans') ? 'active' : '' }}" href="{{ url('/jurusans') }}">Jurusan</a>
            </div>
        </div>
    </div>
    </nav>
    @yield('container')
</body>
</html>