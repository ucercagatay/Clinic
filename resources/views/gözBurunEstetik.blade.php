@extends('layouts.app')
@section('content')
    @foreach($contents as $content)
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Göz-Burun Estetiği</h2>
                <ol>
                    <li><a href="{{Route('mainpage.anasayfa')}}">Ana Sayfa</a></li>
                    <li>Göz-Burun Estetiği</li>
                </ol>
            </div>

        </div>
    </section>

    <section class="inner-page">
        <div class="container">
            <img class="sol" src="{{ asset("front/images/inner-page/burun.png") }}" alt="">
            <h2>{{$content->title}}</h2>
           <p>{{$content->icerik1}}</p>
            <p>{{$content->icerik2}}</p>
            <br><br><br><br><br><br><br>
            <img class="sag" src="{{ asset("front/images/inner-page/göz.jpg") }}" alt="">
            <h2>{{$content->icerik3}}</h2>
            <p>{{$content->icerik4}}
            </p>

</div>
    </section>
    @endforeach
@endsection
