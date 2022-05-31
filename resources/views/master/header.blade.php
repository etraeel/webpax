
<header>
    <div class="header__1">

        <ul class="m1280">
            <li>
                @if(count(\Cart::all()) > 0 )
                    <a class="mini_basket" href="{{route('cart.index')}}" >
                        <i style="color: #39d67d" class="fal fa-shopping-basket"></i>
                        <span class="translate" >{{count(\Cart::all())}}</span>
                    </a>
                @else
                    <a class="mini_basket" href="{{route('cart.index')}}" >
                        <i class="fal fa-shopping-basket"></i>
                        <span class="translate">{{count(\Cart::all())}}</span>
                    </a>
                @endif

            </li>

            <li>
                <div class="user_login" >

                    @if(auth()->check())
                        <img src="{{auth()->user()->pic_logo != null ? asset(auth()->user()->pic_logo) : asset('/img/avatar.png')}}" alt="">
                        {{--                <i class="far fa-user"></i>--}}
                        <a  href="{{route('profile.index')}}"><span>  پنل کاربری  {{ auth()->user()->name }}</span></a>
                        /
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button><span>خروج</span></button>
                        </form>

                    @else
                        <i class="far fa-user"></i>
                        <a href="{{route('login')}}"><span>ورود</span></a>
                        /
                        <a href="{{route('register')}}"><span style="color: #e8505b">عضویت</span></a>
                    @endif

                </div>

{{--                @if(auth()->check())--}}
{{--                    @if(auth()->user()->is_supper_user)--}}
{{--                        <div class="btnn btnn-red"><a href="{{route('admin.admin')}}">پنل مدیریت</a></div>--}}
{{--                    @endif--}}
{{--                @endif--}}

{{--                @if(\Illuminate\Support\Facades\Auth::check())--}}
{{--                    <form method="POST" action="{{ route('logout') }}">--}}
{{--                        @csrf--}}
{{--                      <button class="btnn">خروج</button>--}}
{{--                    </form>--}}
{{--                @else()--}}
{{--                    <a href="{{ route('register') }}" name="signin">عضویت</a>--}}
{{--                    <i class="fas fa-user-unlock"></i>--}}
{{--                    <a href="{{ route('login') }}">ورود</a>--}}
{{--                @endif--}}


            </li>
            <li style="display: none">
                <a href="{{route('contactUs')}}">ارتباط با ما</a>
{{--                <a href="">کانال تلگرام</a>--}}

            </li>

        </ul>


    </div>
    <img id="site-logo" style="width: 140px !important;padding: 5px" src="{{asset('img/logo.png')}}" alt="">
    <div class="header__2">
        <i id="menu-icon" class="fad fa-bars"></i>
        <div class="menu" hidden>
            <ul>
                <li>
                    <form id="search_header_2" action="{{route('search')}}" method="post">
                        @csrf
                        <input type="text" name="key" placeholder="دنبال چی میگردی؟">
                        <i @click="document.getElementById('search_header_2').submit()" class="far fa-search"></i>
                    </form>
                </li>
                <li><a href="{{route('home')}}">صفحه اصلی </a></li>
                <li><a href="{{route('kalaPax')}}">وب سایت فروشگاهی</a></li>
                <li><a href="{{route('drPax')}}">وب سایت پزشکی</a></li>
                <li><a href="https://tegrahost.com/aff.php?aff=481">خرید هاست</a></li>
                <li><a href="{{route('sms')}}">سرویس پیامک</a></li>
                <li><a href="{{route('articles')}}">مقالات</a></li>
                @auth()
                    <li><a href="{{route('profile.index')}}">پروفایل</a></li>
                @endauth
                @guest()
                    <li><a href="{{route('login')}}">ورود / عضویت</a></li>
                @endguest
                <li><a href="#">کانال تلگرام</a></li>
{{--                <li><a href="{{route('aboutUs')}}">درباره ما</a></li>--}}
                <li><a href="{{route('contactUs')}}">ارتباط با ما</a></li>
            </ul>
        </div>

    </div>
    <div class="header__3" style="display: none">
        <ul>
            <li><a href="{{route('home')}}">صفحه اصلی </a></li>
            <li><a href="{{route('kalaPax')}}">وب سایت فروشگاهی</a></li>
            <li><a href="{{route('drPax')}}">وب سایت پزشکی</a></li>
            <li><a href="https://tegrahost.com/aff.php?aff=481">خرید هاست</a></li>
            <li><a href="{{route('sms')}}">سرویس پیامک</a></li>
            <li><a href="{{route('articles')}}">مقالات</a></li>
        </ul>
    </div>
    <div class="header__4" style="display: none">
        <form id="search_header_" action="{{route('search')}}" method="post">
            @csrf
            <input type="text" name="key" placeholder="دنبال چی میگردی؟">
            <i @click="document.getElementById('search_header_4').submit()" class="far fa-search"></i>
        </form>
    </div>

    @if(\Illuminate\Support\Facades\Route::current()->getName() == null or \Illuminate\Support\Facades\Route::current()->getName() == 'home')

        <div class="header__5">
            <div class="introduction">
                <span>در دنیایی که اینترنت تمامی نیازهای ما را برطرف میکند، طراحی صفحات وب و ارائه خدمات متنوع از طریق آن به بالاترین درجه اهمیت خود رسیده است. کسب‌و‌کارهایی که در فضای وب فعالیت مناسبی ندارند محکوم به شکست هستند و طراحی وبسایت احتمالا مهم‌ترین بخش پیشرفت یک کسب‌و‌کار در فضای آنلاین را نشان می‌دهد. مجموعه ما با بهره‌گیری از حرفه‌ای‌ترین برنامه‌نویسان ایران، سعی در ارائه خلاقانه‌ترین طراحی صفحات وب برای شما را دارد. ارائه سرویس‌ها و خدمات آنلاین از طریق وب و پشتیبانی مداوم، تضمین کننده تعهد ما برای رسیدن به کیفیت مورد نظر شماست.</span>
            </div>
        </div>

    @endif

</header>
