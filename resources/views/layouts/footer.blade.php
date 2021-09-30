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
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="far fa-arrow-up"></i></a>
<script src="{{ asset('front/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('front/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('front/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('front/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('front/Script/script.js') }}"></script>
</html>
