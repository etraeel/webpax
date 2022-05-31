@extends('.master/master_color')


@section('title' , 'وب پکس | Verify | تایید ایمیل | وبپکس | WebPax')
@section('meta_keywords','تایید ایمیل,Verify')
@section('meta_description', 'در این قسمت ایمیل خود را تایید کنید .')

@section('content')
    <div class="verify_email">
        <span>لطفا بر روی ارسال ایمیل فعال سازی کلیک کنید </span>
        @if (session('resent'))
            <div style="color: #2db061" role="alert">
                {{ __('لینک فعال سازی با موفقیت برای ایمیل شما ارسال شد !') }}
            </div>
        @endif

        {{ __('لطفا بر روی ارسال لینک فعال سازی کلیک کنید ،') }}
        {{ __('سپس ایمیل خود را چک کنید !') }}

        @recaptcha
        @error('g-recaptcha-response')
        <span>{{ $message }}</span>
        @enderror
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btnn btn-link p-0 m-0 align-baseline">ارسال ایمیل فعال سازی</button>
        </form>

    </div>
@endsection
