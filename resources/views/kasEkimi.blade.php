@extends('layouts.app')
@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Kaş Ekimi</h2>
                <ol>
                    <li><a href="index.html">Ana Sayfa</a></li>
                    <li>Kaş Ekimi</li>
                </ol>
            </div>

        </div>
    </section>

    <section class="inner-page">
        <div class="container">
            <img class="sol" src="{{ asset("front/images/sacekimi.jpg") }}" alt="">
            <h2>Kaş Ekimi</h2>
            <p>
                Bakışlarınıza anlam katmanın en kalıcı yolu kaş ekimidir. Kadın ve erkek farketmeksizin bir hastalık,kaza ya da kozmetiksel olarak istediğiniz görüntüye kavuşmanızı sağlar.</p>
        </div>
    </section>
@endsection
