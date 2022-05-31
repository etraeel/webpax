@extends('master/master')

@section('title' , 'وب پکس | پنل کاربری | WebPax')
@section('meta_keywords','پنل کاربری,اطلاعات شخصی,سفارش ها')
@section('meta_description', 'در پنل کاربری خود میتوانید تمامی اطلاعات مربوط به سفارش ها و پرداخت ها را مدیریت کنید .')

@yield('head')
@section('content')

<div class="profile">

    <aside>
        @include('profile.layouts.sidebar')
    </aside>
    <div class="profile_content">

           {{$slot ?? ''}}

    </div>

</div>

@endsection

@yield('script')
