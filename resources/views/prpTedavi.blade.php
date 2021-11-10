@extends('layouts.app')
@section('content')
    @foreach($contents as $content)
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>PRP Tedavisi</h2>
                <ol>
                    <li><a href="{{Route('mainpage.anasayfa')}}">Ana Sayfa</a></li>
                    <li>PRP Tedavisi</li>
                </ol>
            </div>

        </div>
    </section>

    <section class="inner-page">
        <div class="container">
            <img class="sol" src="{{ asset("front/images/inner-page/prp1.jpg") }}" alt="">
            <h2>{{$content->title}}</h2>
            <p>{{$content->icerik1}}
            </p>


            <p>{{$content->icerik2}}
            </p>
            <img class="sag" src="{{ asset("front/images/inner-page/prp2.jpg") }}" alt="">
            <li>{{$content->icerik3}}</li>
            <li>{{$content->icerik4}}</li>
            <li>{{$content->icerik5}}</li>
            <li>{{$content->icerik6}}</li>
            <li>{{$content->icerik7}}</li>
            <p></p>
            <p>{{$content->icerik8}}
            </p>
        </div>
    </section>
    @endforeach
@endsection
