@extends('layouts.app')
@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Mezoterapi</h2>
                <ol>
                    <li><a href="index.html">Ana Sayfa</a></li>
                    <li>Mezoterapi</li>
                </ol>
            </div>

        </div>
    </section>

    <section class="inner-page">
        <div class="container">
            <img class="sol" src="{{ asset("front/images/inner-page/mezoterapi1.jpg") }}" alt="">
            <h2>Mezoterapi</h2>
            <p>Mezoterapi dünya genelinde cilt yenileme, anti-aging, bölgesel zayıflama, selülit, çatlaklar, lekeler, yara izleri, saç tedavisi, akut ve kronik ağrı, spor yaralanmaları,
                çeşitli deri hastalıklarının tedavisinde kullanılır. Mezoterapi cilt altındaki kolajen ve elastin gibi yapıları uyararak etkisini gösterir.</p>
            <p>Bu şekilde o bölgedeki kan dolaşımı, lenfatik dolaşım ve immün cevap düzenlenir.Mezoterapi;
                vitaminlerin, minerallerin, aminoasitlerin, enzimlerin tek başlarına ya da genellikle karışım halinde derinin orta tabakasına mikroenjeksiyon ile uygulanması tekniğidir.</p>
            <img class="sag" src="{{ asset("front/images/inner-page/mezoterapi2.jpg") }}" alt="">
            <p>Enjekte edilecek maddeler kişiye ve kişinin isteklerine uygun olarak seçilir.
                Mezoterapide küçük miktardaki ilaçlar mikroenjeksiyon yöntemi ile direkt problemli bölgeye verilir.
                Bu şekilde sistemik bir etki oluşturmaksızın problem çözülür ve tedaviden maksimum fayda sağlanır.</p>
        </div>
    </section>
@endsection
