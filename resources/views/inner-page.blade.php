<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Erkan Şanlı Saç Ekim ve Estetik Merkezi</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="icon" href="{{ asset('front/images/eshc.ico') }}"  sizes="16x16">

    <link rel="stylesheet" href="{{asset('front/vendor/glightbox/css/glightbox.css') }}">
    <link rel="stylesheet" href="{{asset('front/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{asset('front/css/styles.css') }}">
</head>
<body >
<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

        <div class="contact-info d-flex align-items-center">
            <i class="fal fa-mobile d-flex align-items-center"><span>+1 5589 55488 55</span></i>
            <i class="fal fa-envelope d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i>
        </div>

        <div class="languages d-none d-md-flex align-items-center">
            <ul>
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-youtube"></i></a></li>
                <li><a href=""><i class="fab fa-twitter-square"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

        <a href="#"><img class="logo"  src="{{ asset('front/images/Logo1.png') }}" alt=""></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Ana Sayfa</a></li>
                <li><a class="nav-link scrollto" href="#about">Hakkımızda</a></li>
                <li><a class="nav-link scrollto" href="#events">Saç Ekimi ve Tedavileri</a></li>
                <li class="dropdown"><a href="#"><span>Saç Ekimi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <i class="fas fa-triangle"></i>
                        <li><a href="">Safir FUE Saç Ekimi</a></li>
                        <li><a href="">FUE Saç Ekimi</a></li>
                        <li><a href="">DHI Saç Ekimi</a></li>
                        <li><a href="">Tıraşsız Saç Ekimi</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#">Sakal – Bıyık Ekimi</a></li>
                <li><a class="nav-link scrollto" href="#">Kaş Ekimi</a></li>
                <li><a class="nav-link scrollto" href="#">Saç Tedavileri</a></li>
                <li><a class="nav-link scrollto" href="#">Saç Lazeri</a></li>
            </ul>
            <i class="fas fa-bars mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <a href="#contact" class="book-a-table-btn scrollto d-none d-lg-flex">İletişime Geçin</a>

    </div>
</header><!-- End Header -->
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
</body>
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>Erkan Şanlı Hair Cilinic</h3>
                        <p>
                            A108 Adam Street <br>
                            NY 535022, USA<br><br>
                            <strong>Telefon:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="fab fa-twitter-square"></i></a>
                            <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Kısa Linkler</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Ana sayfa</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Hakkımzıda</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Sakal Ekimi</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Kaş Ekimi</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Saç Lazeri</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Saç Ekimi Ve Tedavileri</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Safir FUE Saç Ekimi</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">FUE Saç Ekimi</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">DHI Saç Ekimi</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Tıraşsız Saç Ekimi</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Bültenimiz</h4>
                    <p>Yeni haberlerden ve kampanyalardan haberdar olmak için bültenimize abona olabilirsiniz.</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Abone Ol">
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy;<strong><span>AKSOYUÇER</span></strong>. Tüm Hakları Saklıdır.
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
            Designed by <a href="https://www.linkedin.com/in/yusuf-çağlar-aksoy-81b4b6207/">YUSUF ÇAĞLAR AKSOY</a>
        </div>
    </div>
</footer><!-- End Footer -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="far fa-arrow-up"></i></a>

<script src="{{ asset('front/Script/script.js') }}"></script>
<script src="{{ asset('front/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('front/vendor/glightbox/js/glightbox.js') }}"></script>
</html>
