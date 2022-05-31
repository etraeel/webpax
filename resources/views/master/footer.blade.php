<footer>
    <div class="footer_1">
        <div class="right">
            <ul>
                <li><a href="{{route('home')}}">صفحه اصلی</a></li>
                <li><a href="{{route('kalaPax')}}">وب سایت فروشگاهی</a></li>
                <li><a href="{{route('drPax')}}">وب سایت پزشکی</a></li>
                <li><a href="https://tegrahost.com/aff.php?aff=481">میزبانی وب</a></li>
                <li><a href="{{route('sms')}}">سامانه پیامک</a></li>
                <li><a href="{{route('articles')}}">مقالات</a></li>
            </ul>
        </div>
        <div class="center">
            <img src="{{asset('img/ele.png')}}" alt="">
        </div>
        <div class="left">
            <span>آیا مایل به دریافت خبر نامه هستید؟</span>
            <form id="addJournal" action="{{route('addJournal')}}" method="post">
                @csrf
                <input type="text" name="body" placeholder="لطفا ایمیل یا موبایل خود را وارد کنید . .">
                <span onclick="document.getElementById('addJournal').submit()" >ارسال</span>
            </form>
{{--            <img src="{{('/img/qrcode1.png')}}" alt="">--}}
            <a style="justify-content: center;display: flex;" referrerpolicy="origin" target="_blank" href="https://trustseal.enamad.ir/?id=220362&amp;Code=iCAXYh8fBOptY8B0z6lm">
                <img referrerpolicy="origin" src="https://Trustseal.eNamad.ir/logo.aspx?id=220362&amp;Code=iCAXYh8fBOptY8B0z6lm" alt="" style="cursor:pointer" id="iCAXYh8fBOptY8B0z6lm">
            </a>
            <div class="home_footer_social">
                <span> ما را در شبکه‌های اجتماعی دنبال کنید:</span>
                <div>
                    <a href=""> <i class="fab fa-linkedin"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-telegram-plane"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>

                </div>
            </div>
        </div>
    </div>
    <div class="footer_2">
        <span>استفاده از مطالب سایت فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است. کلیه حقوق این سایت متعلق به وب پکس می‌ باشد. </span>

    </div>
</footer>
