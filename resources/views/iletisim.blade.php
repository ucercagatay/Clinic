<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact V5</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('iletisim/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('iletisim/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('iletisim/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('iletisim/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('iletisim/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('iletisim/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('iletisim/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('iletisim/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('iletisim/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('iletisim/vendor/noui/nouislider.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('iletisim/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('iletisim/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>


<div class="container-contact100">
    <div class="wrap-contact100">
        <form method="post" action="{{route('contact')}}" class="contact100-form validate-form">
            @csrf
				<span class="contact100-form-title">
					Contact Us
				</span>
            <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Name">
                <span class="label-input100">İsminiz/Name *</span>
                <input class="input100" type="text" name="name" placeholder="Enter Your Name ">
            </div>

            <div class="wrap-input100 bg1 rs1-wrap-input100">
                <span class="label-input100">Soyisminiz/Surname</span>
                <input class="input100" type="text" name="surname" placeholder="Enter your Surname">
            </div>


            <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
                <span class="label-input100">Email *</span>
                <input class="input100" type="email" name="email" placeholder="Enter Your Email ">
            </div>

            <div class="wrap-input100 bg1 rs1-wrap-input100">
                <span class="label-input100">Telefon Numaranız/Phone Number</span>
                <input class="input100" pattern="\d*" type="text" name="phoneNumber" placeholder="Enter Number Phone">
            </div>

            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Bilgi Almak İstediğiniz Konu *</span>
                <div>
                    <select class="js-select2" name="option">
                        <option disabled>Lütfen seçiniz</option>
                        <option>Saç Ekimi ve Tedavileri</option>
                        <option>Burun Estetiği</option>
                        <option>Sakal ve Bıyık Ekimi</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>

            <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
                <span class="label-input100">Eklemek istediğiniz bir şey varsa</span>
                <textarea class="input100" name="message" placeholder="Your message here..."></textarea>
            </div>

            <div class="container-contact100-form-btn">
                <button type="submit" class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
                </button>
            </div>
        </form>
    </div>
</div>
<!--===============================================================================================-->
<script src="{{asset('iletisim/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('iletisim/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('iletisim/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('iletisim/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('iletisim/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('iletisim/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('iletisim/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('iletisim/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('iletisim/vendor/noui/nouislider.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('iletisim/js/main.js')}}"></script>
</body>
</html>


