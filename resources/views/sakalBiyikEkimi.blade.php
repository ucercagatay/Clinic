@extends('layouts.app')
@section('content')
    @foreach ($contents as $content)
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Sakal-Bıyık Ekimi</h2>
                <ol>
                    <li><a href="{{Route('mainpage.anasayfa')}}">Ana Sayfa</a></li>
                    <li>Sakal-Bıyık Ekimi</li>
                </ol>
            </div>

        </div>
    </section>

    <section class="inner-page">
        <div class="container">
            <img class="sol" src="{{ asset("front/images/inner-page/sakalBiyik1.jpg") }}" alt="">
            <h2>{{$content->title}}</h2>
            <p>{{$content->icerik1}}</p>
            <p>{{$content->icerik2}}</p>
            <br><br><br><br><br>
            <img class="sag" src="{{ asset("front/images/inner-page/sakalBiyik2.png") }}" alt="">
            <h2>{{$content->icerik3}}</h2>
            <p>{{$content->icerik4}}</p>
            <h2>{{$content->icerik5}}</h2>
            <p>{{$content->icerik6}}</p>
        </div>
    </section>
    @endforeach
@endsection
