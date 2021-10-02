@extends('layouts.app')
@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Göz-Burun Estetiği</h2>
                <ol>
                    <li><a href="index.html">Ana Sayfa</a></li>
                    <li>Göz-Burun Estetiği</li>
                </ol>
            </div>

        </div>
    </section>

    <section class="inner-page">
        <div class="container">
            <img class="sol" src="{{ asset("front/images/inner-page/göz.jpg") }}" alt="">
            <h2>Göz Estetiği</h2>
            <p>
                Erkan Şanlı Hair Clinicte  başta ( Akıllı mercek ameliyatı ), Katarakt, Miyop, Glokom ( Göz Tansiyonu), Oküloplasti ( Göz Estetiği ), Çocuk Göz Hastalıkları, ve astigmat gibi göz hastalıkları, lasik göz ameliyatları ile tedavileri yapılmaktadır</p>
            <br>
            <img class="sag" src="{{ asset("front/images/inner-page/burun.png") }}" alt="">
            <h2>Burun Estetiği</h2>
            <p>Burun estetiği, ya da diğer adıyla rinoplasti burun şeklini değiştirmek amacıyla yapılan cerrahi operasyonlara verilen isimdir.
                Burun estetiği yaptırmanın nedenleri arasında bir yaralanmadaki deformitelerin onarılması, veya doğum kusurunun düzeltilmesi için burnun fiziksel görünümünü değiştirmek ya da bazı solunum güçlüklerinin iyileştirerek, nefes almayı kolaylaştırmak bulunmaktadır.
            </p>
            <p>
                Bazı vakalarda hem solunum güçlükleri hem de fiziksel görünüm rinoplasti seçeneğinin tercih edilmesinin arkasındaki nedenler arasında yer alabilir.</p>

</div>
    </section>
@endsection
