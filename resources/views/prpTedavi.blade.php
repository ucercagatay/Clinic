@extends('layouts.app')
@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>PRP Tedavisi</h2>
                <ol>
                    <li><a href="index.html">Ana Sayfa</a></li>
                    <li>PRP Tedavisi</li>
                </ol>
            </div>

        </div>
    </section>

    <section class="inner-page">
        <div class="container">
            <img class="sol" src="{{ asset("front/images/inner-page/prp1.jpg") }}" alt="">
            <h2>PRP Tedavisi</h2>
            <p>PRP; (Platelet rich plasma)  kişinin vücudundan küçük bir miktar kan alındıktan sonra kanın özel bir işlem ile plazmasının ayrıştırılarak,
                vücuda enjeksiyon yoluyla geri verilmesi işlemidir. Elde edilen plazma, “platelet” denilen hücrelerden oldukça zengindir.
                Vücuttaki temel görevi kanın pıhtılaşmasını sağlamak olan plateletler, içerdikleri büyüme faktörleri sayesinde yara iyileşmesinde önemli role sahiptir.
            </p>
            <p>PRP; (Platelet rich plasma)  kişinin vücudundan küçük bir miktar kan alındıktan sonra kanın özel bir işlem ile plazmasının ayrıştırılarak,
                vücuda enjeksiyon yoluyla geri verilmesi işlemidir. Elde edilen plazma, “platelet” denilen hücrelerden oldukça zengindir.
            </p>

            <p>PRP tedavisi ile kişinin kendi kanıyla vücudundaki bazı hastalıkları iyileştirmek ve cilt gençleştirmek mümkündür.
                İlaç yerine kişinin kendi kanının kullanıldığı PRP tedavisinde özellikle çevresel ve genetik faktörlerle birlikte yavaşlayan hücre yenilenmesinin önüne geçilir.
                PRP; saç dökülmesinden, cilt gençleştirmeye, ağrı tedavisinden, ortopedik pek çok hastalığın tedavisinde kullanılır.
                PRP işlemi uzman doktorlar tarafından uygulanması gereken bir tedavi yöntemidir.
            </p>
            <img class="sag" src="{{ asset("front/images/inner-page/prp2.jpg") }}" alt="">
            <li>Öncelikle hastadan alınan kan steril şartlarda özel bir tüpün içine konulur.</li>
            <li>Sonrasında kan içinde jel bulunan tüpe yerleştirilir.</li>
            <li>Santrifüje konulan tüpteki kanın içindeki maddeler 5-8 dakika içinde ayrıştırılır.</li>
            <li>Kanın trombositlerden ve büyüme faktörlerinden zengin plazma kısmı ayrıştırılmış olur.</li>
            <li>Elde edilen karışım enjeksiyon yöntemi ile ilgili alana uygulanır.</li>
            <p></p>
            <p>PRP 2-4 hafta aralıklarla ortalama 3-4 seans, kişinin ihtiyacına göre mezoterapi ile kombine edilerek uygulanır.
                PRP kürü tamamlandıktan sonra yılda 1-2 kez enjeksiyonlarla işlemin devamı sağlanabilir.
            </p>
        </div>
    </section>
@endsection
