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
                        <li><i class="bx bx-chevron-right"></i> <a href="{{Route('mainpage.anasayfa')}}#about">Hakkımzıda</a></li>
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
                    <div class="my-3">

                        <div class="error-message">
                            @foreach($errors->all() as $error)

                                <li>{{$error}}</li>


                            @endforeach
                        </div>
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
            Designed by <a href="https://www.linkedin.com/in/yusuf-çağlar-aksoy-81b4b6207/" style="border-right: 1px solid white; padding-right:10px; margin-right: 8px">YUSUF ÇAĞLAR AKSOY</a> Developed by <a href="https://www.linkedin.com/in/%C3%A7a%C4%9Fatay-ucer-1a7b45196/">HAKTAN ÇAĞATAY ÜÇER</a>

        </div>
    </div>
</footer><!-- End Footer -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="far fa-arrow-up"></i></a>
<script src="{{ asset('front/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('front/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('front/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('front/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('front/Script/script.js') }}"></script>
</html>
