@extends('layouts.app')
@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>PRP Tedavisi</h2>
                <ol>
                    <li><a href="index.html">Ana Sayfa</a></li>
                    <li>PRP Tedavisi</li>
                </ol>
            </div>

        </div>
    </section>

    <section class="inner-page">
        <div class="container">
            <img class="sol" src="{{ asset("front/images/sacekimi.jpg") }}" alt="">
            <h2>PRP Tedavisi</h2>
            <p>
                Saçların güçlendirilmesinde,
                Saç dökülmelerinin durdurulmasında,
                Kırılma ve kopmaların azaltılmasında,
                Cilt altındaki güçsüz ve zayıf saç tellerinin kuvvetlenerek cilt yüzeyine çıkmasını sağlamada,
                Saçların daha parlak ve gür olmasında etkilidir.
            </p>
        </div>
    </section>
@endsection
