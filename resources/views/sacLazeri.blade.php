@extends('layouts.app')
@section('content')
    @foreach($contents as $content)
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Saç Lazeri</h2>
                <ol>
                    <li><a href="{{Route('mainpage.anasayfa')}}">Ana Sayfa</a></li>
                    <li>Saç Lazeri</li>
                </ol>
            </div>

        </div>
    </section>

    <section class="inner-page">
        <div class="container">
            <img class="sol" src="{{ asset("front/images/inner-page/sac-lazeri.jpg") }}" alt="">
            <h2>{{$content->title}}</h2>
          <div id="text">
              <p>{{$content->icerik1}}</p>
              <p>{{$content->icerik2}}</p>
              <p>{{$content->icerik3}}</p>
              <p>{{$content->icerik4}}</p>
              <p>{{$content->icerik5}}</p>
              <p>{{$content->icerik6}}</p>
              <p>{{$content->icerik7}}</p>
          </div>
        </div>
    </section>
        @endforeach
@endsection
