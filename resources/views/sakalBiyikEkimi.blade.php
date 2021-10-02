@extends('layouts.app')
@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Sakal-Bıyık Ekimi</h2>
                <ol>
                    <li><a href="index.html">Ana Sayfa</a></li>
                    <li>Sakal-Bıyık Ekimi</li>
                </ol>
            </div>

        </div>
    </section>

    <section class="inner-page">
        <div class="container">
            <img class="sol" src="{{ asset("front/images/inner-page/sakalBiyik1.jpg") }}" alt="">
            <h2>Sakal-Bıyık Ekimi</h2>
            <p>Erkeklerin en önemli aksesuarlarından biri de sakal ve bıyıktır.
                Genellikle hormonal bozukluğa bağlı olarak ya da yanma, yaralanma ve kimyasala maruz kalma gibi durumlar sonucu sakal ve bıyık istenilen sıklıkta çıkmayabilir. </p>
            <p>Bu durum kişilerde öz güven eksikliğine ve sosyal anlamda sıkıntılara neden olabilir.
                Saç ve bıyık çıkmayan kişilerde en etkin çözüm, sakal ve bıyık ekimidir.</p>
            <br><br><br><br><br>
            <img class="sag" src="{{ asset("front/images/inner-page/sakalBiyik2.png") }}" alt="">
            <h2>FUT Yöntemiyle Sakal Bıyık Ekimi</h2>
            <p>FUT yöntemi aslında artık kullanılmayan bir yöntemdir.
                Kıl kökü ameliyatı olarak tanımlanabilen yöntemin birçok dezavantajı vardır.
                Köklerin ameliyatla alınması alım yerlerinde iz kalmasına neden olur.
                Kıl kökleri sakal ve bıyık bölgelerine aynı açıyla dikilir ve bu da kılların dik çıkmasına neden olur.
                Kıl köklerinde oluşan yaralar geç iyileşir.
                Sakal ve bıyıklar gruplar halinde çıkar. En önemlisi de kişinin ensesinde uyuşukluk hissi, ağrı ve gerginlik yaşanır.</p>
            <h2>FUE Tekniğiyle Sakal Bıyık Ekimi</h2>
            <p>FUE yöntemiyle sakal bıyık ekimi son yıllarda en sık kullanılan yöntemdir.
                Kıl kökleri esnenen ya da yüzün elmacık kemikleri ve boyun bölgesinden tek tek alınır.
                Sakal ve bıyığın doğal çıkış açısına göre ekilir.
                Cilt kesilmeden kıl kökleri alınır ve ekilir, dolaysıyla yara izi ve ağrı olmaz.
                Sakal ve bıyık grup halinde değil tek tek çıkar. Ayrıca yara oluşmadığı için de enfeksiyon riski de azalır.</p>
        </div>
    </section>
@endsection
