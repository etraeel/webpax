@extends('master/master')

@section('title' , 'وب پکس | طراحی سایت | سایت آماده | سایت فروشگاهی | سایت نوبت دهی پزشکی | پنل  WebPax | sms')
@section('meta_keywords','وب پکس,webpax,طراحی سایت,سایت آماده,سایت فروشگاهی,سایت آماده فروشگاهی,سئو,seo,سایت پزشکی,پنل اس ام اس,سرویس پیامک,پنل sms')
@section('meta_description', 'در این سایت خدمات طراحی سایت ، سایت آماده فروشگاهی و پزشکی ، سئو (SEO) ، سرویس پیامک ، پنل پیامک و کلیه خدمات مربوط برای تجارت الکترونیک ارائه میگردد .')

@section('content')

<div class="articles_section">
    <div class="articles_header">
        <h1>مقالات</h1>
    </div>
    <div class="articles_body ">
        <ul class="article_list owl-carousel">
            @foreach($articles as $article)
                <li class="box">

                    <div class="image_box">
                        <img src="{{$article->image}}" alt="">
                    </div>
                    <div class="body_box">
                        <a href="{{route('article.show' ,  $article)}}"><h2 class="box_title translate">{{$article->title}}</h2></a>
                        <p class="box_text">{!! $article->description !!}</p>
                        <div class="box_keys">
                            <span >{{$article->key_words}}</span>
                        </div>
                        <div class="box_footer">
                            <span class="like translate">{{count($article->likes()->get())}}</span>
                            <i class="likeheart fal fa-heart"></i>

                            <span class="counter translate" style="margin-right: 15px">{{$article->counter}}</span>
                            <i class="fad fa-eye"></i>

                        </div>
                    </div>

                </li>
            @endforeach


        </ul>


    </div>


</div>
<div class="product_section">
    <span class="product_title">فروشگاه پیشرفته</span>
    <span class="product_description">این فروشگاه نسخه پیشرفته یک وب سایت فروشگاهی می باشد که تلاش شده است تا تمامی نیاز های غالب کسب و کار ها در نظر گرفته شود</span>
    <div class="product_images">
    <img src="{{asset("img/product_images/monitorKalaPax.png")}}" alt="">
</div>
    <div class="product_details">

            <div class="plan">
                @php
                    $kalapax = \App\Product::where('name' , 'KalaPax')->first();
                @endphp
                <div class="plan-title">
                    <h2 class="h3">فروشگاه پیشرفته</h2>
                    <span>KalaPAx</span>
                </div>
                <div class="plan-price-title">
                    <div class="price_per_year">سالیانه</div>
                    <span class="plan-price "><span class="translate">{{number_format($kalapax->price->price) ?? 0}}</span><span>تومان</span></span>
                </div>
                <ul class="plan-detail">
                    <li><h2>فضای هاست</h2><span>نامحدود</span></li>
                    <li><h2>ترافیک ماهانه</h2><span>نامحدود</span></li>
                    <li><h2>پنل SMS رایگان</h2><span><i class="fa fa-check text-success"></i></span></li>
                    <li><h2>دامنه هدیه ir</h2><span><i class="fa fa-check text-success"></i></span></li>
                    <li><h2>فعالسازی SSL</h2><span><i class="fa fa-check text-success"></i></span></li>
                    <li><h2>سرور ایران</h2><span><i class="fa fa-check text-success"></i></span></li>
                    <li><h2>پشتیبان گیری</h2><span>روزانه</span></li>
                    <li><h2>رسپانسیو</h2><span>سازگار با تمام صفحه های نمایش</span></li>
                    <li><h2>تعریف محصول با ویژگی</h2><span>نامحدود</span></li>
                    <li><h2>گالری تصویر محصول</h2><span><i class="fa fa-check text-success"></i></span></li>
                    <li><h2>دسته بندی محصولات</h2><span>نامحدود</span></li>
                    <li><h2>مقایسه محصولات</h2><span><i class="fa fa-check text-success"></i></span></li>
                    <li><h2>جست و جوی پیشرفته محصولات</h2><span><i class="fa fa-check text-success"></i></span></li>
                    <li><h2>بخش مقالات</h2><span><i class="fa fa-check text-success"></i></span></li>
                    <li><h2>بخش بنر ها</h2><span><i class="fa fa-check text-success"></i></span></li>
                    <li><h2>بخش همیشه تخفیف</h2><span><i class="fa fa-check text-success"></i></span></li>
                    <li><h2>سبد خرید</h2><span><i class="fa fa-check text-success"></i></span></li>
                    <li><h2>اتصال به درگاه بانکی</h2><span> پی پینگ <i class="fa fa-check text-success"></i></span></li>
                    <li><h2>کد تخفیف پیشرفته</h2><span><i class="fa fa-check text-success"></i></span></li>
                    <li><h2>امکان تعریف چند قیمت برای محصول</h2><span><i class="fa fa-check text-success"></i></span></li>
                    <li><h2>پنل مدیریت اختصاصی</h2><span><i class="fa fa-check text-success"></i></span></li>
                    <li><h2>امکان تعریف کارمند</h2><span>نامحدود</span></li>
                    <li><h2>تعریف سطوح دسترسی برای کارمندان</h2><span><i class="fa fa-check text-success"></i></span></li>
                    <li><h2>ارسال پیامک خرید</h2><span><i class="fa fa-check text-success"></i></span></li>
                    <li><h2>ارسال ایمیل خرید</h2><span><i class="fa fa-check text-success"></i></span></li>
                    <li><h2>امکان ثبت نظر مشتری</h2><span><i class="fa fa-check text-success"></i></span></li>
                    <li><h2>پروفایل کاربری پیشرفته</h2><span><i class="fa fa-check text-success"></i></span></li>
                    <li><h2>تعریف چند آدرس برای مشتری</h2><span><i class="fa fa-check text-success"></i></span></li>
                    <li><h2>سرویس پیام داخلی</h2><span><i class="fa fa-check text-success"></i></span></li>

                </ul>
                <a  class="sbtn sbtn-green" href="{{route('kalaPax')}}">جزئیات بیشتر</a>
                <form action="{{route('cart.add')}}" method="post" id="{{$kalapax->price->id}}">
                    <input type="hidden" name="priceId" value="{{$kalapax->price->id ?? 0}}">
                    @csrf
                </form>
                <a class="sbtn" href="#" {{$kalapax->inventory() > 0 ? '' : 'disable'}} onclick="document.getElementById('{{$kalapax->price->id}}').submit()">افزودن به سبد خرید</a>
            </div>

    </div>
</div>
<div class="product_section" style="background: #eeeeee;">
    <span class="product_title">دکتر پکس</span>
    <span class="product_description">سایت پزشکی بسیار پیشرفته با پنل مدیریت حرفه ای برای نوبت دهی آنلاین و ویزیت آنلاین</span>
    <div class="product_images">
        <img src="{{asset("img/product_images/monitorDrPax.png")}}" alt="">
    </div>
    <div class="product_details">

        <div class="plan">
            @php
                $drpax = \App\Product::where('name' , 'DrPax')->first();
            @endphp
            <div class="plan-title">
                <h2 class="h3">سایت نوبت دهی آنلاین</h2>
                <span>DrPax</span>
            </div>
            <div class="plan-price-title">
                <div class="price_per_year">سالیانه</div>
                <span class="plan-price "><span class="translate">{{number_format($drpax->price->price) ?? 0}}</span><span>تومان</span></span>
            </div>
            <ul class="plan-detail">
                <li><h2>فضای هاست</h2><span>نامحدود</span></li>
                <li><h2>ترافیک ماهانه</h2><span>نامحدود</span></li>
                <li><h2>پنل SMS رایگان</h2><span><i class="fa fa-check text-success"></i></span></li>
                <li><h2>دامنه هدیه ir</h2><span><i class="fa fa-check text-success"></i></span></li>
                <li><h2>فعالسازی SSL</h2><span><i class="fa fa-check text-success"></i></span></li>
                <li><h2>سرور ایران</h2><span><i class="fa fa-check text-success"></i></span></li>
                <li><h2>پشتیبان گیری</h2><span>روزانه</span></li>
                <li><h2>رسپانسیو</h2><span>سازگار با تمام صفحه های نمایش</span></li>
                <li><h2>تعداد کاربر</h2><span>نامحدود</span></li>
                <li><h2>تعداد پزشک</h2><span>نامحدود</span></li>
                <li><h2>قسمت بلاگ و مقالات</h2><span><i class="fa fa-check text-success"></i></span></li>
                <li><h2>نوبت دهی آنلاین</h2><span><i class="fa fa-check text-success"></i></span></li>
                <li><h2>قابلیت تعریف دپارتمان</h2><span><i class="fa fa-check text-success"></i></span></li>
                <li><h2>اتصال به درگاه بانکی</h2><span> پی پینگ <i class="fa fa-check text-success"></i></span></li>
                <li><h2>پنل مدیریت اختصاصی</h2><span><i class="fa fa-check text-success"></i></span></li>
                <li><h2>احراز هویت پیامکی</h2><span><i class="fa fa-check text-success"></i></span></li>
                <li><h2>امکان ثبت نظر</h2><span><i class="fa fa-check text-success"></i></span></li>
                <li><h2>پروفایل بیمار</h2><span><i class="fa fa-check text-success"></i></span></li>
                <li><h2>پروفایل پزشک</h2><span><i class="fa fa-check text-success"></i></span></li>
                <li><h2>چت روم</h2><span><i class="fa fa-check text-success"></i></span></li>

            </ul>
            <a  class="sbtn sbtn-green" href="{{route('drPax')}}">جزئیات بیشتر</a>
            <form action="{{route('cart.add')}}" method="post" id="{{$drpax->price->id}}">
                <input type="hidden" name="priceId" value="{{$drpax->price->id ?? 0}}">
                @csrf
            </form>
            <a class="sbtn" href="#" {{$drpax->inventory() > 0 ? '' : 'disable'}} onclick="document.getElementById('{{$drpax->price->id}}').submit()">افزودن به سبد خرید</a>
        </div>

    </div>
</div>


@endsection
@section('script')
    <script src="js/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop:true,
                margin:15,
                rtl : true,
                padding : 10,
                autoplay : true,
                autoplayTimeout:3000,
                autoplayHoverPause:true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                    },
                    600:{
                        items:1,

                    },
                    780:{
                        items:2,
                    },
                    950:{
                        items:3,
                    },
                    1180:{
                        items:4,
                    }
                }
            });


        });


        var arabicNumbers = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $('.translate').text(function(i, v) {
            var chars = v.split('');
            for (var i = 0; i < chars.length; i++) {
                if (/\d/.test(chars[i])) {
                    chars[i] = arabicNumbers[chars[i]];
                }
            }
            return chars.join('');
        })

    </script>


@endsection
