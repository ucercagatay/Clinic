@extends('layouts.app')
@section('content')
    @foreach($contents as $content)
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Kaş Ekimi</h2>
                <ol>
                    <li><a href="{{Route('mainpage.anasayfa')}}">Ana Sayfa</a></li>
                    <li>Kaş Ekimi</li>
                </ol>
            </div>

        </div>
    </section>

    <section class="inner-page">
        <div class="container">
            <img class="sol" src="{{ asset("front/images/inner-page/kasEkimi1.jpg") }}" alt="">
            <h2>{{$content->title}}</h2>
            <p>{{$content->icerik1}}</p>
            <h2>{{$content->icerik2}}</h2>
            <img class="sag" src="{{ asset("front/images/inner-page/kasEkimi2.png") }}" alt="">
            <p>{{$content->icerik3}}</p>
            <h2>{{$content->icerik4}}</h2>
            <p>{{$content->icerik5}}</p>
        </div>
    </section>
    @endforeach
@endsection
