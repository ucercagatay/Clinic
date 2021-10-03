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
                <h4 class="wp-inner-chat-inner" id='digital-clock'></h4>
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
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
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
