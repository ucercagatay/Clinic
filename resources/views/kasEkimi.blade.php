@extends('layouts.app')
@section('content')
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Kaş Ekimi</h2>
                <ol>
                    <li><a href="index.html">Ana Sayfa</a></li>
                    <li>Kaş Ekimi</li>
                </ol>
            </div>

        </div>
    </section>

    <section class="inner-page">
        <div class="container">
            <img class="sol" src="{{ asset("front/images/inner-page/kasEkimi1.jpg") }}" alt="">
            <h2>Kaş Ekimi</h2>
            <p>Kaş ekimi özellikle kadınların çok tercih ettiği tedavi yöntemlerinden bir tanesidir.
                Kadınların düzenli ve sürekli kaşlarını aldıkları için kaşlarında küsme denilen bir hadise gerçekleşir.
                Kaşlar, gençlik yıllarındaki kalınlığı ve hacmi kaybeder.
                Kaş ekimi ile kaşların eski hacmine ve kalınlığına ulaşmak mümkündür.
                Kaşlar, geçirilen travmalar, yanıklar ve kazalar nedeniyle de kaybedilebilirler.
                Bu hasta gruplarında da kaş ekimi başarılı ile uygulanır.</p>
            <h2>Kaş ekimi nasıl gerçekleştirilir?</h2>
            <img class="sag" src="{{ asset("front/images/inner-page/kasEkimi2.png") }}" alt="">
            <p>Kaş ekimi operasyonu FUE saç ekimi mantığı ile gerçekleştirilir.
                Lokal anestezi altında gerçekleştirilen işlem 3-4 saat kadar sürer.
                Kaş ekiminde ense bölgesinden alınan kökler kullanılır.
                Bu köklerin nakil edilecek bölgeye belirli bir açı ve belli bir yönde yerleştirilmesi gerekir.
                Saç kökleri ciltten 45 derece açı ile çıkar. Kaşlar ise çok farklıdır. Ciltten yaklaşık 10-15 derecelik bir açı ile çıkarlar.
                Kaşın iç bölgesinde yukarıya doğru, ortaya geldikçe yere paralel ve kaşın dış kısmında ise hafifçe aşağıya yönelmiş bir şekle sahiptirler. Bu nedenle ekim sırasında kanal açarken çok dikkatli olunmalıdır.
                Aksi halde, kaş yanlış ekildiğinde farklı şekilde çıkabilir, ters yönde ya da aşağıya doğru çıkabilir.
                Bu nedenle kaş ekimi kesinlikle uzman bir doktor tarafından gerçekleştirilmesi gereken bir işlemdir.</p>
            <h2>Kaş ekimi sonrasında kaşlar ne zaman çıkar?</h2>
            <p>Ekim sonrası 3 ay sonra çıkmaya başlar.
                Yaklaşık 7-8 aylık bir süreç sonunda kaşlar son şeklini alır.
                Şunu da unutmamak gerekir ki kaşlar ekildikten sonra tıpkı saçlar gibi 15 gün sonra dökülmeye başlar.
                3 ay kadar dökülme süreci devam eder. 3. aydan sonra kaşların dökülmesi söz konusu değildir.</p>
        </div>
    </section>
@endsection
