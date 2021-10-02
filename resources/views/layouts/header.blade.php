<body >
<!-- ======= Top Bar ======= -->
<div id="inner-topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

        <div class="contact-info d-flex align-items-center">
            <i class="fal fa-mobile d-flex align-items-center"><span>+1 5589 55488 55</span></i>
            <i class="fal fa-envelope d-flex align-items-center ms-4"><span> Mon-Sat: 11AM - 23PM</span></i>
        </div>

        <div class="social-links d-none d-md-flex align-items-center">
            <a href="https://www.facebook.com/erkansanlihairclinic/" class="facebook"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/erkansanlisacekimi/" class="instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCzYU83_3Rp4aPO9f_0ZiCHw" class="google-plus"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>
<header id="innerHeader" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

        <a href="#"><img class="logo"  src="{{ asset('front/images/Logo1.png') }}" alt=""></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="inner-navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="{{route('mainpage.anasayfa')}}">Ana Sayfa</a></li>
                <li><a class="nav-link scrollto" href="{{Route('mainpage.anasayfa')}}#about">Hakkımızda</a></li>
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

