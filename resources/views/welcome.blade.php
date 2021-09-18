<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Erkan Şanlı Saç Ekim ve Estetik Merkezi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="{{asset('front/css/styles.css') }}">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    </head>
    <body >
    <div class="header1">
        <div class="container">
            <i class="fab fa-instagram-square fa-2x"></i>
            <i class="fab fa-twitter-square fa-2x"></i>
            <i class="fab fa-youtube-square fa-2x"></i>
            <i class="fab fa-facebook-square fa-2x"></i>
        </div>

    </div>
    <div class="navbar">
        <div class="container">
            <div id="logo">
                <img src="{{ asset('admin/adminpanel/admin-images/logo.png') }}"alt="">
            </div>
            <ul>
                <li>Başlık 1</li>
                <li>Başlık 2</li>
                <li>Başlık 3</li>
                <li>Başlık 4</li>
                <li>Başlık 5</li>
                <li>Başlık 6</li>
                <li>Başlık 7</li>
            </ul>
        </div>

    </div>

    </body>
</html>
