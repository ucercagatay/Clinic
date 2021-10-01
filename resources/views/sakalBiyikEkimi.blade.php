@extends('layouts.app')
@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Sakal-Bıyık Ekimi</h2>
                <ol>
                    <li><a href="index.html">Ana Sayfa</a></li>
                    <li>Sakal-Bıyık Ekimi</li>
                </ol>
            </div>

        </div>
    </section>

    <section class="inner-page">
        <div class="container">
            <img class="sol" src="{{ asset("front/images/sacekimi.jpg") }}" alt="">
            <h2>Sakal-Bıyık Ekimi</h2>
            <p>
                Sakal ve bıyıklarınız yüzünüze uygun olarak tasarlanır. Sakal Ekimi son teknoloji Choi Kalem tekniği ile gerçekleşir ve doğal görünümlü sakal ve bıyığa sahip olursunuz.</p>
        </div>
    </section>
@endsection
