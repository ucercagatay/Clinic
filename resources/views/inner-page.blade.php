@extends('layouts.app')
@section('content')
<section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Saç Ekimi</h2>
            <ol>
                <li><a href="index.html">Ana Sayfa</a></li>
                <li>Saç Ekimi</li>
            </ol>
        </div>

    </div>
</section>

<section class="inner-page">
    <div class="container">
        <img class="sol" src="{{ asset("front/images/sacekimi.jpg") }}" alt="">
        <h2>Saç Ekimi</h2>
        <p>
            Saç ekimi tedavisi, saçları dökülmüş, seyrelmiş, yanmış v.b. sıkıntılar yaşayan kişilerde, bu bölgelerde yeniden saç çıkışını sağlamak için yapılan cerrahi bir uygulamadır.
        </p>
        <p>Saç ekimi tedavisi, saçları dökülmüş, seyrelmiş, yanmış, doğuştan saçın bir bölümünde kök bulunmayan v.b. sıkıntılar yaşayan kişilerde, bu bölgelerde yeniden saç çıkışını sağlamak için yapılan cerrahi bir uygulamadır.</p>
        <p>Bu operasyonlarda öncelikle kişinin saç analizi yapılır. Uygulama yapılacak sorunlu bölge tespit edilir.Daha sonra saçsız bölgeye ekilecek olan saç köklerinin alınacağı bölge olan donör alan belirlenir.</p>
        <p>Donör alandan toplanan saç kökleri özel solüsyonlara dizilerek burada bir süre bekletilir. Sonrasında uygulama yapılacak bölgeye, ekilecek saç kökleri için doğru açı, yön ve sıklıkta boş kanallar açılır. Son olarak daha önce toplanmış saç kökleri boş kanallara tek tek ekilir.</p>
        <p>Saç ekimi uygulamasından sonra ekilen saç kökleri ortalama bir ay içinde dökülür. Döküldükten ortalama üç ay sonra saçlar yeniden uzamaya başlar. Tüm saç köklerinin uzaması ve yeni dokuya tam olarak adapte olması ortalama 8-12 ay arasında bir süreçte tamamlanır.</p>
        <p>Saç ekimi klinik ortamda steril olarak uzman bir doktor tarafından yürütülmesi gereken ve titizlik gerektiren bir operasyondur.</p>
        <p>Saç ekiminin tam olarak başarıya ulaşabilmesi için başlangıcından itibaren tüm süreçlerde uzmanların uyarılarına harfiyen uymalı, yıkama işlemleri uzmanların söylediği şekilde yapılmalı ve sert darbelerden mutlaka uzak durulmalıdır.</p>
        <p>Hastane ortamında son teknoloji ekipman ve uzman ekibimizle tedavi öncesi ve sonrası tüm aşamalarda mutlak müşteri memnuniyeti ve kurumsal kalite ilkelerimizden ödün vermeden çalışmalarımıza devam etmekteyiz.</p>
        <img class="sag" src="{{ asset("front/images/sacekimi2.jpg") }}"alt="">
        <br>
        <h2>Saç Dökülmesine Nedenleri</h2>
        <p>Saç dökülmesinin nedenleri kişiden kişiye değişiklik göstermektedir. Saç dökülmesinin en belirgin ve önemli noktalardan biri de genetik saç dökülmesi olarak bilinir. Stres, sağlıksız yaşam tarzı, ani kilo kayıpları ve sağlıksız diyetler ile hamilelik, hormonlarla alakalı değişimler, ciddi sağlık sorunları gibi nedenler de saç dökülmesinin sebepleri arasında sayılabilir.</p>
        <br>
        <h2>Saç Ekimi Kimlere Uygulanmalı?</h2>
        <p>Saç ekimi de diğer tüm estetik uygulamalar gibi herkese uygulanmaya ve birçok kritere sahip olan bir işlemdir. Aşağıda yer alan kişiler saç ekiminin uygulanabilir olduğunu gösteren kişilerdir.</p>
        <ul>
            <li>Saçları genetik ve hormonlarla alakalı sebeplerden dökülme yaşayan kişiler,</li>
            <li>Daha önce saç ektirme işlemi yaptırmış ama memnun kalmayan, seyrek ya da yeteri kadar yoğun olmayan kişiler,</li>
            <li>Mevcut saçın yoğunluğundan rahatsız olan ve birçok tedavi yöntemi denemiş ama memnun kalmayan kişiler,</li>
            <li>Bakım ve terapilere zaman ayıramayan ve kestirme bir yol isteyenler,</li>
            <li>Yanık ya da yaradan dolayı saçlı deride sıkıntı yaşayan kişiler,</li>
            <li>Farklı hastalıklar sebebi ile saçlarında dökülme ya da seyrelme yaşayan kişiler,</li>
            <li>Hamile olmayan kişiler,</li>
            <li>Kalp ve kronik rahatsızlığı olmayan kişiler</li>
        </ul>
        <p>Yukarıda belirtilen maddelere uygunluk gösteren kişiler doktor kontrolünde kan tahlilleri sonucu herhangi bir probleme rastlanmazsa saç ekimi gerçekleştirebilecek kişilerdir. Aşağıda sıralanan maddeler ise saç ekimi yaptırması uygun olmayan kişilerdir.</p>
        <img class="sol" src="{{ asset("front/images/sacekimi3.jpg") }}"alt="">

        <ul>
            <li>Kronik rahatsızlıkları olan kalp, tansiyon, böbrek, karaciğer yetmezliği olan kişiler,</li>
            <li>Kanser türevleri hastalıkları olanlar,</li>
            <li>Panik atak olan kişiler,</li>
            <li>Hamileler,</li>
            <li>Donör noktasında saç kalmayan ve tamamen kel olan kişiler,</li>
            <li>HIV pozitif ya da Hepatit C pozitif bireyler,</li>
            <li>Doğuştan gelen bir saçsızlık problemi olan kişiler,</li>
            <li>Tansiyon, diyabet ve şeker gibi rahatsızlıklarının değerleri normal olmayan kişiler,</li>
            <li>Kan testinde hemofili belirtileri olan kişiler</li>
        </ul>
    </div>
</section>
@endsection
