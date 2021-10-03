@extends('layouts.app')
@section('content')
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
            <h2>Saç Lazeri</h2>
            <p>Lazerli saç tedavisi (saç lazeri)incelmiş saçları kalınlaştırmak, saç dökülmesini durdurmak ve yeni saç gelişimine yardımcı olmak amacıyla uygulanan bir tedavi yöntemidir.</p>
            <p>Lazer uygulaması, genellikle istenmeyen tüylerin kalıcı olarak yok edilmesiyle ilişkilendirilse de lazer saç terapisi tıbbi bir tedavi yöntemi olarak her geçen gün daha popüler hale geliyor. </p>
            <p>Saç lazeri, kırmızı ışık tedavisi veya soğuk lazer tedavisi isimleriyle de bilinen prosedür, düşük seviyedeki lazer fotonlarının kafa derisine uygulanmasını içeriyor. </p>
            <p>Böylelikle, dökülen saçların yeniden çıkması ve cansız saç tellerinin güç kazanması hedefleniyor.</p>
            <p>Yastığınızda veya duşunuzun su giderinde dökülen saçlarınızı görüyorsanız bu durum canınızı sıkıyor olabilir.</p>
            <p>Güzel haber, her gün 100’e yakın saç telinizin dökülmesi normaldir.Ancak, yaşadığınız saç kayıplarının yerine yenisi çıkmıyorsa işte sıkıntı burada başlar. </p>
            <p>Kelliğe varan saç dökülmelerinin birincil nedenleri ilerleyen yaş ve genetik faktörler olsa da hormonal sorunlar, yetersiz beslenmeye bağlı vitamin-mineral eksiklikleri, stres,
                seboreik dermatit gibi kafa derisindeki cilt rahatsızlıkları ve kemoterapi tedavilerinin yan etkileri gibi pek çok sorun,
                ciddi saç kayıplarına yol açabilir.</p>
        </div>
    </section>
@endsection
