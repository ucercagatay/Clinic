<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Erkan Şanlı Saç Ekim ve Estetik Merkezi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{asset('front/vendor/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{asset('front/vendor/aos/aos.css') }}">
    <link rel="stylesheet" href="{{asset('front/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('front/vendor//bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{asset('front/vendor/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{asset('front/vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{asset('front/vendor/swiper/swiper-bundle.min.css') }}">

    <link rel="icon" href="{{ asset('front/images/eshc.ico') }}"  sizes="16x16">
    <link rel="stylesheet" href="{{asset('front/css/styles.css') }}">
    <?php
    $iphone = stristr(@$_SERVER['HTTP_USER_AGENT'],"iPhone");
    $android = stristr(@$_SERVER['HTTP_USER_AGENT'],"Android");
    $webos = stristr(@$_SERVER['HTTP_USER_AGENT'],"webOS");
    $bberry = stristr(@$_SERVER['HTTP_USER_AGENT'],"BlackBerry");
    $ipod = stristr(@$_SERVER['HTTP_USER_AGENT'],"iPod");
    if ($iphone || $android || $webos || $ipod || $bberry == true)
    {
    ?>

    <div style="width:300px;position:fixed;bottom: 360px;left: 10px;z-index:99999;font-size:12px;">
        <a class="wp-button">
            <img class="wp-button" style=" cursor:pointer; width:40px; position: fixed; bottom: 10px; left: 10px;}" src="https://demobul.net/images/whatsapp.png" alt="whatsapp">
        </a>
    </div>
    <?php }else{?>

    <div style="width:300px;position:fixed;bottom: 446px;left: 10px;z-index:99999;font-size:12px;">
        <div class="wp-pop-up" id="wp-web">
            <i class="fal fa-times" style="position: absolute; right: 15px; top:15px;    opacity: 0.5; font-size: 15px; cursor: pointer"></i>
            <div class="wp-header">

                <div class="header-logo">
                    <img class="header-logo-img" src="{{ asset('front/images/Logo1.png') }}" alt="">
                </div>
                <h3 class="header-h3">Erkan Şanlı Hair Clinic</h3>
            </div>
            <div class="wp-inner">
                <img class="wp-inner-img" src="{{ asset('front/images/indir.png') }}" alt="">
                <div class="wp-inner-chat">
                    <h3 class="wp-inner-chat-inner">Erkan Şanlı Hair Clinic</h3>
                    <p class="wp-inner-chat-inner">Merhaba👋 <br><br>
                        Saç Ekimi ve diğer hizmetlerimiz hakkında anında bize ulaşmak bilgi almak ve diğer istekleriniz için bize whatsapp hattımızdan mesaj atabilirsiniz.</p>
                    <h4 class="wp-inner-chat-inner" id='digital-clock'>15:30</h4>
                </div>
            </div>
            <div class="wp-footer">
                <a href="https://api.whatsapp.com/send?phone=905073359570" target="_blank">
                    <div class="wp-footer-inner" href="https://api.whatsapp.com/send?phone=905073359570">
                        <i class="fab fa-whatsapp" id="wp-footer-logo"></i>
                        <h4 class="wp-footer-inner-h4">Sohbete Başla</h4>
                    </div>
                </a>
            </div>
        </div>
        <a class="wp-button"  >
            <img class="wp-button" style="cursor:pointer; width:50px; position: fixed; bottom: 10px; left: 10px;}" src="https://demobul.net/images/whatsapp.png" alt="whatsapp">
        </a>
    </div>
    <?php } ?>
</head>
<body >
@include('layouts.wp')

<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

        <div class="contact-info d-flex align-items-center">
            <i class="fal fa-mobile d-flex align-items-center"><span>+90 (507) 335 95 70</span></i>
            <i class="fal fa-envelope d-flex align-items-center ms-4"><span> erkansanlihairclinic@outlook.com</span></i>
        </div>

        <div class="social-links d-none d-md-flex align-items-center">
            <a href="https://www.facebook.com/erkansanlihairclinic/" class="facebook"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/erkansanlisacekimi/" class="instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCzYU83_3Rp4aPO9f_0ZiCHw" class="google-plus"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>
<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

        <a href="{{Route('mainpage.anasayfa')}}"><img class="logo"  src="{{ asset('front/images/Logo1.png') }}" alt=""></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="{{route('mainpage.anasayfa')}}">Ana Sayfa</a></li>
                <li><a class="nav-link scrollto" href="#about">Hakkımızda</a></li>
                <li class="dropdown"><a class="nav-link scrollto" href="#events">Saç Tedavileri</a>
                    <ul>
                        <i class="fas fa-triangle"></i>
                        <li><a href="{{Route('page.hairlaser')}}">Saç Lazeri</a></li>
                        <li><a href="{{Route('page.mezoterapi')}}">Mezoterapi</a></li>
                        <li><a href="{{Route('page.prptedavi')}}">PRP Tedavisi</a></li>
                    </ul></li>
                <li class="dropdown"><a href="#"><span>Saç Ekimi</span></a>
                    <ul>
                        <i class="fas fa-triangle"></i>
                        <li><a href="{{Route('page.hairpage')}}">Safir FUE Saç Ekimi</a></li>
                        <li><a href="{{Route('page.hairpage')}}">FUE Saç Ekimi</a></li>
                        <li><a href="{{Route('page.hairpage')}}">DHI Saç Ekimi</a></li>
                        <li><a href="{{Route('page.hairpage')}}">Tıraşsız Saç Ekimi</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="nav-link scrollto" href="#">Kaş-Sakal Ekimi</a>
                    <ul>
                        <i class="fas fa-triangle"></i>
                        <li><a href="{{Route('page.eyebrowpage')}}">Kaş EKimi</a></li>
                        <li><a href="{{Route('page.beardmustache')}}">Sakal-Bıyık Ekimi</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="{{Route('page.esteticpage')}}">Burun-Göz Estetiği</a></li>
            </ul>
            <i class="fas fa-bars mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <a href="#contact" class="book-a-table-btn scrollto d-none d-lg-flex">İletişime Geçin</a>

    </div>
</header><!-- End Header -->
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-8">
                <h1>Erkan Şanlı <span>Hair Cilinic</span></h1>
                <h2>Best Hair Transplant Clinic in TURKEY!</h2>

                <div class="btns">
                    <a href="#contact" class="btn-menu animated fadeInUp scrollto">Bize Ulaşın</a>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
                <a href="https://www.youtube.com/watch?v=h435WGg_hDc" class="glightbox play-btn"></a>
            </div>

        </div>
    </div>
</section><!-- End Hero -->
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                <div class="about-img">
                    <img src="{{ asset('front/images/biz.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <div class="section-title">
                    <p>Hakkımızda</p>
                </div>
                <p class="fst-italic">
                    Erkan Şanlı saç ekimi ve tüm estetik branşlarda tüm dünyada hizmet vermektedir. Kuruluşu 2002
                    yılında merkez İstanbul olarak Diyarbakır-Fas-Irak/Musul -Irak/Erbil-Kuveyt-Bahreyn olarak 7 Şubemiz ile hizmet vermekteyiz..
                </p>
            </div>
        </div>

    </div>
</section><!-- End About Section -->
<div id="photos">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Galeri</h2>
            <p>Saç Ekimi Öncesi/Sonrası</p>
        </div>
    </div>
    <section>
        <div class="photo">
            <picture>
                <img src="{{ asset('front/images/galery1.jpg') }}" alt="">
            </picture>
        </div>
        <div class="photo">
            <picture>
                <img src="{{ asset('front/images/galery2.jpg') }}" alt="">

            </picture>
        </div>
        <div class="photo">
            <picture>
                <img src="{{ asset('front/images/galery3.jpg') }}" alt="">

            </picture>
        </div>
        <div class="photo">
            <picture>
                <img src="{{ asset('front/images/galery4.jpg') }}" alt="">

            </picture>
        </div>
        <div class="photo">
            <picture>
                <img src="{{ asset('front/images/galery5.jpg') }}" alt="">

            </picture>
        </div>
        <div class="photo">
            <picture>
                <img src="{{ asset('front/images/galery6.jpg') }}" alt="">
            </picture>
        </div>
        <div class="photo">
            <picture>
                <img src="{{ asset('front/images/galery7.jpg') }}" alt="" >
            </picture>
        </div>
        <div class="photo">
            <picture>
                <img src="{{ asset('front/images/galery8.jpg') }}" alt="" >
            </picture>
        </div>
        <div class="photo">
            <picture>
                <img src="{{ asset('front/images/galery9.jpg') }}" alt="">
            </picture>
        </div>
        <div class="photo">
            <picture>
                <img src="{{ asset('front/images/galery10.jpg') }}" alt="">
            </picture>
        </div>
        <div class="photo">
            <picture>
                <img src="{{ asset('front/images/galery11.jpg') }}" alt="" >
            </picture>
        </div>
        <div class="photo">
            <picture>
                <img src="{{ asset('front/images/galery12.jpg') }}" alt="" >
            </picture>
        </div>
    </section>
    <button id="prev3"><img src="{{ asset('front/images/left.png') }}" alt="" height="50px"></button>
    <button id="next3"><img src="{{ asset('front/images/right.png') }}" alt="" height="50px"></button>
</div>
<!-- ======= Events Section ======= -->
<section id="events" class="events">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Hizmetler</h2>
            <p>Klinik Hizmetleri</p>
        </div>

        <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

                <div class="swiper-slide" id="slide1">
                    <div class="row event-item">
                        <div class="col-lg-6">
                            <img src="{{ asset('front/images/sacEkimi11.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3>SAÇ EKİMİ</h3>
                            <p class="fst-italic">
                                Saç ekimi tedavisi, saçları dökülmüş, seyrelmiş, yanmış v.b. sıkıntılar yaşayan kişilerde, bu bölgelerde yeniden saç çıkışını sağlamak için yapılan cerrahi bir uygulamadır.
                            </p>
                            <p>
                                Saç ekimi tedavisi, saçları dökülmüş, seyrelmiş, yanmış, doğuştan saçın bir bölümünde kök bulunmayan v.b. sıkıntılar yaşayan kişilerde, bu bölgelerde yeniden saç çıkışını sağlamak için yapılan cerrahi bir uygulamadır.
                            </p>
                            <a href="{{route('page.hairpage')}}" class="book-a-table-btn">Daha Fazla <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide" id="slide2">
                    <div class="row event-item">
                        <div class="col-lg-6">
                            <img src="{{ asset('front/images/inner-page/kasEkimi1.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3>KAŞ EKİMİ</h3>
                            <p class="fst-italic">
                                Bakışlarınıza anlam katmanın en kalıcı yolu kaş ekimidir. Kadın ve erkek farketmeksizin bir hastalık,kaza ya da kozmetiksel olarak istediğiniz görüntüye kavuşmanızı sağlar.</p>
                            <a href="#" class="book-a-table-btn">Daha Fazla <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide" id="slide3">
                    <div class="row event-item">
                        <div class="col-lg-6">
                            <img src="{{ asset('front/images/inner-page/sakalBiyik1.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <h3>SAKAL EKİMİ</h3>
                            <p class="fst-italic">
                                Sakal ve bıyıklarınız yüzünüze uygun olarak tasarlanır. Sakal Ekimi son teknoloji Choi Kalem tekniği ile gerçekleşir ve doğal görünümlü sakal ve bıyığa sahip olursunuz.</p>
                            <a href="#" class="book-a-table-btn">Daha Fazla <i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                <span class="swiper-pagination-bullet" style="background-color: white" id="slide1-btn" tabindex="0" role="button" aria-label="Go to slide 1"></span>
                <span class="swiper-pagination-bullet" id="slide2-btn" tabindex="0" role="button" aria-label="Go to slide 2"></span>
                <span class="swiper-pagination-bullet" id="slide3-btn" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
        </div>

    </div>
</section><!-- End Events Section -->
<!-- ======= Doctors Section ======= -->
{{--<section id="chefs" class="doctors">--}}
{{--    <div class="container" data-aos="fade-up">--}}

{{--        <div class="section-title">--}}
{{--            <h2>Doktorlar</h2>--}}
{{--            <p>Doktorlarımız</p>--}}
{{--        </div>--}}

{{--        <div class="row">--}}

{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="member" data-aos="zoom-in" data-aos-delay="100">--}}
{{--                    <img src="{{asset("./front/images/biz.jpg")}}" class="img-fluid" alt="">--}}
{{--                    <div class="member-info">--}}
{{--                        <div class="member-info-content">--}}
{{--                            <h4>Erkan Şanlı</h4>--}}
{{--                            <span>Doctor</span>--}}
{{--                        </div>--}}
{{--                        <div class="social">--}}
{{--                            <a href=""><i class="fab fa-twitter-square"></i></a>--}}
{{--                            <a href=""><i class="fab fa-facebook"></i></a>--}}
{{--                            <a href=""><i class="fab fa-instagram"></i></a>--}}
{{--                            <a href=""><i class="fab fa-youtube"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="member" data-aos="zoom-in" data-aos-delay="200">--}}
{{--                    <img src="{{asset("./front/images/biz.jpg")}}" class="img-fluid" alt="">--}}
{{--                    <div class="member-info">--}}
{{--                        <div class="member-info-content">--}}
{{--                            <h4>Erkan Şanlı</h4>--}}
{{--                            <span>Doctor</span>--}}
{{--                        </div>--}}
{{--                        <div class="social">--}}
{{--                            <a href=""><i class="fab fa-twitter-square"></i></a>--}}
{{--                            <a href=""><i class="fab fa-facebook"></i></a>--}}
{{--                            <a href=""><i class="fab fa-instagram"></i></a>--}}
{{--                            <a href=""><i class="fab fa-youtube"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="member" data-aos="zoom-in" data-aos-delay="300">--}}
{{--                    <img src="{{asset("./front/images/biz.jpg")}}" class="img-fluid" alt="">--}}
{{--                    <div class="member-info">--}}
{{--                        <div class="member-info-content">--}}
{{--                            <h4>Erkan Şanlı</h4>--}}
{{--                            <span>Doctor</span>--}}
{{--                        </div>--}}
{{--                        <div class="social">--}}
{{--                            <a href=""><i class="fab fa-twitter-square"></i></a>--}}
{{--                            <a href=""><i class="fab fa-facebook"></i></a>--}}
{{--                            <a href=""><i class="fab fa-instagram"></i></a>--}}
{{--                            <a href=""><i class="fab fa-youtube"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}
{{--</section><!-- End Doctors Section -->--}}
<section id="numbers">
    <div class="container">
        <div class="numbers-inner">
            <div class="col-3" data-aos="zoom-in" data-aos-delay="100">
                <i class="fas fa-globe-americas fa-4x"></i>
                <h4>Dünyada Biz</h4>
                <h3>7 Ülke</h3>
                <p>Merkez İstanbul -
                    Fas -
                    Diyarbakır -
                    Kuwait -
                    Bahreyn -
                    Irak/musul -
                    Irak/Erbi</p>
            </div>
            <div class="col-3" data-aos="zoom-in" data-aos-delay="200">
                <i class="fas fa-user-md fa-4x"></i>
                <h4>Doktor Sayısı</h4>
                <h3>12</h3>
            </div>
            <div class="col-3" data-aos="zoom-in" data-aos-delay="300">
                <i class="far fa-stethoscope fa-4x"></i>
                <h4>Operasyon Sayısı</h4>
                <h3>50000+</h3>
            </div>
            <div class="col-3" data-aos="zoom-in" data-aos-delay="400">
                <i class="fas fa-business-time fa-4x"></i>
                <h4>Deneyim</h4>
                <h3>19 Yıl</h3>
            </div>
        </div>
    </div>
</section>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>İletişim</h2>
            <p>Bizimle İletişime Geçin</p>
        </div>
    </div>

    <div class="container" data-aos="fade-up">

        <div class="row mt-5">

            <div class="col-lg-4">
                <div class="info">
                    <div class="address">
                        <i class="fal fa-map-marker-alt"></i>
                        <h4>Konum:</h4>
                        <p>Cevizlik Mh. Ebuzziya Cd. No:63 Bakırköy Istanbul, Turkey</p>
                    </div>

                    <div class="open-hours">
                        <i class="fal fa-clock"></i>
                        <h4>Açık Saatler:</h4>
                        <p>
                           Pazartesi-Cumartesi:<br>
                            10:00  - 18:00
                        </p>
                    </div>

                    <div class="email">
                        <i class="fal fa-envelope"></i>
                        <h4>Email:</h4>
                        <p>erkansanlihairclinic@outlook.com</p>
                    </div>

                    <div class="phone">
                        <i class="fal fa-mobile"></i>
                        <h4>Telefon:</h4>
                        <p>+90 (507) 335 95 70</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form  method="post" name="form1"  action="{{route('mainpage.erkansanli.post')}}" role="form" class="php-email-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="İsim" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="text" name="surname" class="form-control" id="surname" placeholder="Soyisim" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="tel" class="form-control" name="phoneNumber" id="email" placeholder="Telefon" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail adresiniz" required>
                        </div>
                    </div>
                    <div  class="form-group mt-3">
                        <select name="option" class="form-select" aria-label="Default select example">
                            <option selected>Lütfen Seçiniz</option>
                            <option value="1">Saç Ekimi Ve Tedavileri</option>
                            <option value="2">Burun Estetiği</option>
                            <option value="3">Sakal Bıyık Ekimi</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="8" placeholder="Mesaj" required></textarea>
                    </div>
                    <div  class="my-3">
                        <div class="loading">Yükleniyor</div>
                        <div  class="error-message">
                            @foreach($errors->all() as $error)

                                <li>{{$error}}</li>
                            @endforeach
                        </div>
                        <div  class="sent-message">Mesajınız bize ulaştı. Teşekkür ederiz!</div>
                    </div>
                    <div class="text-center"><button type="submit">Mesajı Gönder</button></div>
                </form>

            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
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
                            <strong>Adres:</strong>Cevizlik Mh. Ebuzziya Cd. No:63 <br>
                            Bakırköy Istanbul, Turkey<br><br>
                            <strong>Telefon:</strong> +90 (507) 335 95 70<br>
                            <strong>Email:</strong> erkansanlihairclinic@outlook.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="https://www.facebook.com/erkansanlihairclinic/" class="facebook"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/erkansanlisacekimi/" class="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCzYU83_3Rp4aPO9f_0ZiCHw" class="google-plus"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Kısa Linkler</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{Route('mainpage.anasayfa')}}">Ana sayfa</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#about">Hakkımzıda</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{Route('page.beardmustache')}}">Sakal Ekimi</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{Route('page.eyebrowpage')}}">Kaş Ekimi</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{Route('page.hairlaser')}}">Saç Lazeri</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Saç Ekimi Ve Tedavileri</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{Route('page.hairpage')}}">Safir FUE Saç Ekimi</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{Route('page.hairpage')}}">FUE Saç Ekimi</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{Route('page.hairpage')}}">DHI Saç Ekimi</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{Route('page.hairpage')}}">Tıraşsız Saç Ekimi</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Bültenimiz</h4>
                    <p>Yeni haberlerden ve kampanyalardan haberdar olmak için bültenimize abone olabilirsiniz.</p>
                    <!--YUSUF ERROR DİVİ BURDA-->
                <!---->
                    <form  name="form2" method="post" action="{{route('mainpage.anasayfa.post')}}">
                        @csrf
                        <input type="email" name="email">
                        <input type="submit" value="Abone Ol">
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
            Designed by <a href="https://www.linkedin.com/in/yusuf-çağlar-aksoy-81b4b6207/">YUSUF ÇAĞLAR AKSOY</a> Developed by <a href="https://www.linkedin.com/in/%C3%A7a%C4%9Fatay-ucer-1a7b45196/">HAKTAN ÇAĞATAY ÜÇER</a>
        </div>
    </div>
</footer><!-- End Footer -->
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="far fa-arrow-up"></i></a>


<script src="{{ asset('front/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('front/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('front/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('front/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('front/Script/script.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function(){
    if('{{session('success')}}'=='1'){
        Swal.fire({
            title: 'Kayıt',
            text: 'Abonelik talebiniz başarıyla alınmıştır.',
            icon: 'success',
            button: 'tamam',
        })
    }
    else if('{{$errors->subscribe->first('email')}}'){
        Swal.fire({
            title: 'Hata',
            text:'Aynı mail adresi iki defa kayıt olamaz',
            icon:'error',
            button:'tamam',
        })
    }
    else if('{{session('success')}}'=='2'){
        Swal.fire({
            title:'Mesaj',
            text:'Mesajınız bize ulaşmıştır.',
            icon:'success',
            button:'okay',
        })
    }
})
</script>
<script>
    $(document).click(function(event){
        console.log($(event.target).attr('class'))
        if($("#wp-web").css('display')==='block' && $(event.target) !== $("#wp-web")){
            if($(event.target).attr('class') === "wp-header" ){
                $("#wp-web").css('display' , 'block');
            }
            else if($(event.target).attr('class') === "header-logo" ){
                $("#wp-web").css('display' , 'block');
            }
            else if($(event.target).attr('class') === "header-logo-img" ){
                $("#wp-web").css('display' , 'block');
            }
            else if($(event.target).attr('class') === "header-h3" ){
                $("#wp-web").css('display' , 'block');
            }
            else if($(event.target).attr('class') === "wp-inner" ){
                $("#wp-web").css('display' , 'block');
            }
            else if($(event.target).attr('class') === "wp-inner-img" ){
                $("#wp-web").css('display' , 'block');
            }
            else if($(event.target).attr('class') === "wp-inner-chat" ){
                $("#wp-web").css('display' , 'block');
            }
            else if($(event.target).attr('class') === "wp-inner-chat-inner" ){
                $("#wp-web").css('display' , 'block');
            }
            else if($(event.target).attr('class') === "wp-footer" ){
                $("#wp-web").css('display' , 'block');
            }
            else if($(event.target).attr('class') === "wp-footer-inner" ){
                $("#wp-web").css('display' , 'block');
            }
            else if($(event.target).attr('class') === "fab fa-whatsapp" ){
                $("#wp-web").css('display' , 'block');
            }
            else if($(event.target).attr('class') === "wp-footer-inner-h4" ){
                $("#wp-web").css('display' , 'block');
            }
            else{
                $("#wp-web").css('display' , 'none');
            }
        }
        else if($("#wp-web").css('display')==='none' && ($(event.target).attr('class')==="select" || $(event.target).attr('class')==="wp-button")) {
            $("#wp-web").css('display' , 'block');
        }
    });

</script>
<script type="text/javascript">
    function getDateTime() {
        var now     = new Date();
        var year    = now.getFullYear();
        var month   = now.getMonth()+1;
        var day     = now.getDate();
        var hour    = now.getHours();
        var minute  = now.getMinutes();
        var second  = now.getSeconds();

        if(hour.toString().length == 1) {
            hour = '0'+hour;
        }
        if(minute.toString().length == 1) {
            minute = '0'+minute;
        }

        var dateTime =hour+':'+minute;
        return dateTime;
    }

    // example usage: realtime clock
    setInterval(function(){
        currentTime = getDateTime();
        document.getElementById("digital-clock").innerHTML = currentTime;
    }, 1000);
</script>
<div class='time-frame'>
    <div ></div>
</div>
</html>
