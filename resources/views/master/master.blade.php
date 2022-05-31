<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <title>@yield('title','وب پکس | طراحی سایت | سایت آماده | سایت فروشگاهی | سایت نوبت دهی پزشکی | پنل  WebPax | sms')</title>
    <meta name="keywords" content="@yield('meta_keywords','وب پکس,webpax,طراحی سایت,سایت آماده,سایت فروشگاهی,سایت آماده فروشگاهی,سئو(SEO),سایت پزشکی,پنل اس ام اس,سرویس پیامک,پنل sms,وبپکس')">
    <meta name="description" content="@yield('meta_description','در این سایت خدمات طراحی سایت ، سایت آماده فروشگاهی و پزشکی ، سئو (SEO) ، سرویس پیامک ، پنل پیامک و کلیه خدمات مربوط برای تجارت الکترونیک ارائه میگردد .')">
    <link rel="canonical" href="{{url()->current()}}"/>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YRYNWHL5MN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-YRYNWHL5MN');
    </script>

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="{{asset('img/webpax.ico')}}" rel="shortcut icon" >
    <link rel="stylesheet" href="{{asset('css/normalize.css')}} ">
    <link rel="stylesheet" href="{{asset('css/all.css')}} ">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}} ">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}} ">
    <link rel="stylesheet" href="{{asset('css/AllFonts.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">



</head>

<body>


<div class="container">

    @include('master/header')
    <section >
            @yield('content')

    </section>

</div>

@include('master/footer')


<script src="{{asset('js/app.js')}}"></script>
@include('sweet::alert')
<script >

    menu = $('.menu');
    menu.hide();
    $('#menu-icon').click(function () {
        menu.toggle(500);
    });

    logo = $('#site-logo');
    logo.click(function () {
        window.location.href = '/';
    })

</script>

    @yield('script')


</body>

</html>
