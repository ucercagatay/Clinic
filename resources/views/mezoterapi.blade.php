@extends('layouts.app')
@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Mezoterapi</h2>
                <ol>
                    <li><a href="index.html">Ana Sayfa</a></li>
                    <li>Mezoterapi</li>
                </ol>
            </div>

        </div>
    </section>

    <section class="inner-page">
        <div class="container">
            <img class="sol" src="{{ asset("front/images/sacekimi.jpg") }}" alt="">
            <h2>Mezoterapi</h2>
            <p>
                Saç mezoterapisi, saçlarda ki dökülmeyi durdurmak, saça doğal canlılığını tekrar kazandırmak amacıyla uygun ilaçların saçlı derinin altına küçük iğneler yardımıyla enjekte edilmesi yöntemidir.
            </p>
        </div>
    </section>
@endsection
