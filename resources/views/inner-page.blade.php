@extends('layouts.app')
@section('content')
    @foreach($contents1 as $content1)
        @foreach($contents2 as $content2)
            @foreach($contents3 as $content3)
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Saç Ekimi</h2>
            <ol>
                <li><a href="{{Route('mainpage.anasayfa')}}">Ana Sayfa</a></li>
                <li>Saç Ekimi</li>
            </ol>
        </div>

    </div>
</section>

<section class="inner-page">
    <div class="container">
        <img class="sol" src="{{ asset("front/images/hairph1.jpg") }}" alt="">
        <h2>{{$content1->title}}</h2>
       <p>{{$content1->icerik1}}
       </p>
        <p>{{$content1->icerik2}} </p>
        <p>{{$content1->icerik3}}</p>
        <p>{{$content1->icerik4}}</p>
         <p>{{$content1->icerik5}}</p>
        <p>{{$content1->icerik6}}</p>
        <p>{{$content1->icerik7}}</p>
        <p>{{$content1->icerik8}}</p>
        <img class="sag" src="{{ asset("front/images/sacekimi.jpg") }}"alt="">
        <br>
        <h2>Saç Dökülmesine Nedenleri</h2>
        <p>Saç dökülmesinin nedenleri kişiden kişiye değişiklik göstermektedir. Saç dökülmesinin en belirgin ve önemli noktalardan biri de genetik saç dökülmesi olarak bilinir. Stres, sağlıksız yaşam tarzı, ani kilo kayıpları ve sağlıksız diyetler ile hamilelik, hormonlarla alakalı değişimler, ciddi sağlık sorunları gibi nedenler de saç dökülmesinin sebepleri arasında sayılabilir.</p>
        <br>
        <h2>{{$content2->title}}</h2>
        <p>{{$content2->icerik1}}</p>
        <ul>
           <li>{{$content2->icerik2}}</li>
            <li>{{$content2->icerik3}}</li>
            <li>{{$content2->icerik4}}</li>
            <li>{{$content2->icerik5}}</li>
            <li>{{$content2->icerik6}}</li>
            <li>{{$content2->icerik7}}</li>
            <li>{{$content2->icerik8}}</li>
            <li>{{$content2->icerik9}}</li>
        </ul>
<p> {{$content3->title}}</p>
        <img class="sol" src="{{ asset("front/images/hairph2.jpg") }}"alt="">

        <ul>
           <li>{{$content3->icerik1}}</li>
            <li>{{$content3->icerik2}}</li>
            <li>{{$content3->icerik3}}</li>
            <li>{{$content3->icerik4}}</li>
            <li>{{$content3->icerik5}}</li>
            <li>{{$content3->icerik6}}</li>
            <li>{{$content3->icerik7}}</li>
            <li>{{$content3->icerik8}}</li>
            <li>{{$content3->icerik9}}</li>
        </ul>
    </div>
</section>
    @endforeach
    @endforeach
    @endforeach
@endsection
