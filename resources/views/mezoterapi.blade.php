@extends('layouts.app')
@section('content')
    @foreach($contents as $content)
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Mezoterapi</h2>
                <ol>
                    <li><a href="{{Route('mainpage.anasayfa')}}">Ana Sayfa</a></li>
                    <li>Mezoterapi</li>
                </ol>
            </div>

        </div>
    </section>

    <section class="inner-page">
        <div class="container">
            <img class="sol" src="{{ asset("front/images/inner-page/mezoterapi1.jpg") }}" alt="">
            <h2>{{$content->title}}</h2>
           <p>{{$content->icerik1}}</p>
            <p>{{$content->icerik2}}</p>
            <img class="sag" src="{{ asset("front/images/inner-page/mezoterapi2.jpg") }}" alt="">
            <p>{{$content->icerik3}}</p>
        </div>
    </section>
            @endforeach
@endsection
