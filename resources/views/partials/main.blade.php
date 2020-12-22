<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand">BNSP</a>
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <a class="nav-link {{ request()->is('testing/murid') ? 'active' : '' }}" href="{{url('/testing/murid')}}">Murid</a>
                    <a class="nav-link" href="">Mahasiswa</a>
                    <a class="nav-link" href="">Mahasiswa</a>
                </div>
            </div>
        </div>
    </nav>
    @yield('container')
</body>
</html>