<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="{{asset('https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/adminpanel/css/styles.css')}}" rel="stylesheet" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('admin/adminpanel/css/admin.css') }}">
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js')}}" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100 ">

    <div class="min-h-screen bg-gray-100 body-white">
        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div id="head-buttons">
                <ul class="ul-flex">
                    <li style="margin-right: 10px">
                        <a class="btn btn-secondary" target="_blank" href="{{ url('/') }}"><i class="fas fa-eye mr-2"></i> Siteyi Gör</a>
                    </li>
                    <li >
                        <a href="{{route('admin.adminOut')}}" class="btn btn-danger" ><i class="fas fa-sign-out-alt mr-2"></i>Çıkış</a>
                    </li>
                </ul>
            </div>
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Bulunduğu alan
                </h2>
            </div>
        </header>
        <!-- Page Content -->
        <div class="py-6">
            <div class="max-w-7xl mx-auto">
                Bulunduğu alan
            </div>
        </div>
    </div>

    @stack('modals')
    @isset($js)
        {{ $js }}
    @endif
    @livewireScripts
</div>
<div id="sidebar">
    <ul class="sidebar-head">
        <a><li><img id="logo-img"  src="{{ asset('admin/adminpanel/admin-images/logo.png') }}"><h2>Dijital Fırat</h2> </li></a>
    </ul>
    <ul>
        <a href="/admin"><li><i class="fas fa-home fa-2x"></i> <a href="/admin">Ana sayfa</a>  </li></a>
        <a href="/admin/icons"><li><i class="fas fa-atom fa-2x"></i> <a href="/admin/icons">Alan 1</a> </li></a>
        <a href="/admin/roles"><li><i class="fas fa-user-tag fa-2x"></i> <a href="/admin/roles">Alan 2</a>  </li></a>
        <a href="/admin/users"><li><i class="fas fa-user fa-2x"></i> <a href="/admin/users">Alan 3</a> </li></a>
    </ul>
</div>
</body>
</html>
