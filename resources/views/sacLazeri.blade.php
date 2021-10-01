@extends('layouts.app')
@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Saç Lazeri</h2>
                <ol>
                    <li><a href="index.html">Ana Sayfa</a></li>
                    <li>Saç Lazeri</li>
                </ol>
            </div>

        </div>
    </section>

    <section class="inner-page">
        <div class="container">
            <img class="sol" src="{{ asset("front/images/sacekimi.jpg") }}" alt="">
            <h2>Saç Lazeri</h2>
            <p>
                Lazerli saç tedavisi (saç lazeri)incelmiş saçları kalınlaştırmak, saç dökülmesini durdurmak ve yeni saç gelişimine yardımcı olmak amacıyla uygulanan bir tedavi yöntemidir.Saç lazeri uygulaması rahat ve konforlu bir yöntemdir.
            </p>
        </div>
    </section>
@endsection
