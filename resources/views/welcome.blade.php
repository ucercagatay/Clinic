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
                <li class="dropdown"><a class="nav-link scrollto" href="#events">Saç Tedavileri</a>
                    <ul>
                        <i class="fas fa-triangle"></i>
                        <li><a href="">Saç Lazeri</a></li>
                        <li><a href="">..Tedavi</a></li>
                        <li><a href="">..Tedavi</a></li>
                        <li><a href="">..Tedavi</a></li>
                    </ul></li>
                <li class="dropdown"><a href="#"><span>Saç Ekimi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <i class="fas fa-triangle"></i>
                        <li><a href="">Safir FUE Saç Ekimi</a></li>
                        <li><a href="">FUE Saç Ekimi</a></li>
                        <li><a href="">DHI Saç Ekimi</a></li>
                        <li><a href="">Tıraşsız Saç Ekimi</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="nav-link scrollto" href="#">Kaş-Sakal Ekimi</a>
                    <ul>
                        <i class="fas fa-triangle"></i>
                        <li><a href="">Kaş EKimi</a></li>
                        <li><a href="">Sakal-Bıyık Ekimi</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#">Burun-Göz Estetiği</a></li>
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
                            <img src="{{ asset('front/images/slider1.png') }}" class="img-fluid" alt="">
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
                            <img src="{{ asset('front/images/slider2.jpg') }}" class="img-fluid" alt="">
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
                            <img src="{{ asset('front/images/slider3.jpg') }}" class="img-fluid" alt="">
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
<section id="chefs" class="doctors">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Doktorlar</h2>
            <p>Doktorlarımız</p>
        </div>

        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{asset("./front/images/biz.jpg")}}" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Erkan Şanlı</h4>
                            <span>Doctor</span>
                        </div>
                        <div class="social">
                            <a href=""><i class="fab fa-twitter-square"></i></a>
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{asset("./front/images/biz.jpg")}}" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Erkan Şanlı</h4>
                            <span>Doctor</span>
                        </div>
                        <div class="social">
                            <a href=""><i class="fab fa-twitter-square"></i></a>
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                    <img src="{{asset("./front/images/biz.jpg")}}" class="img-fluid" alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>Erkan Şanlı</h4>
                            <span>Doctor</span>
                        </div>
                        <div class="social">
                            <a href=""><i class="fab fa-twitter-square"></i></a>
                            <a href=""><i class="fab fa-facebook"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Doctors Section -->
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
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>

                    <div class="open-hours">
                        <i class="fal fa-clock"></i>
                        <h4>Açık Saatler:</h4>
                        <p>
                            Monday-Saturday:<br>
                            11:00 AM - 2300 PM
                        </p>
                    </div>

                    <div class="email">
                        <i class="fal fa-envelope"></i>
                        <h4>Email:</h4>
                        <p>Mail:</p>
                    </div>

                    <div class="phone">
                        <i class="fal fa-mobile"></i>
                        <h4>Telefon:</h4>
                        <p>+1 5589 55488 55s</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="İsim" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Soyisim" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="tel" class="form-control" name="email" id="email" placeholder="Telefon" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail adresiniz" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Lütfen Seçiniz</option>
                            <option value="1">Saç Ekimi Ve Tedavileri</option>
                            <option value="2">Burun Estetiği</option>
                            <option value="3">Sakal Bıyık Ekimi</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="8" placeholder="Mesaj" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Yükleniyor</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Mesajınız bize ulaştı. Teşekkür ederiz!</div>
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
                    <p>Yeni haberlerden ve kampanyalardan haberdar olmak için bültenimize abone olabilirsiniz.</p>
                    <form  method="post" action="{{route('mainpage.post')}}">
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
            Designed by <a href="https://www.linkedin.com/in/yusuf-çağlar-aksoy-81b4b6207/">YUSUF ÇAĞLAR AKSOY</a>
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
</html>
