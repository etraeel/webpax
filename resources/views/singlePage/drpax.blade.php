@extends('master.master_color')

@section('title' , 'وب پکس | سایت نوبت دهی پزشکی | سایت پزشکی | DrPax | دکتر پکس | WebPax')
@section('meta_keywords','سایت پزشکی آماده,سایت نوبت دهی پزشکی,سایت پزشکی,DrPax,دکتر پکس')
@section('meta_description', 'سایت آماده پزشکی برای پزشکان عزیز که به راحتی میتوانند از امکانات کامل و حرفه ای آن استفاده کنند .')

@section('content')

   <div class="questions">
       <div class="head">
           <h1>سایت پزشکی نوبت دهی DrPax</h1>
       </div>

       <div class="body">

           <div class="product_section" style="background: none">
               <span class="product_description">سایت پزشکی بسیار پیشرفته با پنل مدیریت حرفه ای برای نوبت دهی آنلاین و ویزیت آنلاین</span>
               <div class="product_details">

                   <div class="plan">
                       <div class="plan-title">
                           <h2 class="h3">سایت نوبت دهی آنلاین</h2>
                           <span>DrPax</span>
                       </div>
                       <div class="plan-price-title">
                           <div class="price_per_year">سالیانه</div>
                           <span class="plan-price "><span class="translate">{{number_format($product->price->price) ?? 0}}</span><span>تومان</span></span>
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
                       <form action="{{route('cart.add')}}" method="post" id="{{$product->price->id}}">
                           <input type="hidden" name="priceId" value="{{$product->price->id ?? 0}}">
                           @csrf
                       </form>
                       <a class="sbtn" href="#" {{$product->inventory() > 0 ? '' : 'disable'}} onclick="document.getElementById('{{$product->price->id}}').submit()">سفارش</a>
                   </div>

               </div>

               <div class="productImages">

                   <div class="head">
                       <h1>گالری تصاویر</h1>
                   </div>
                   @foreach($product->gallery as $image)
                       <a target="_blank" href="{{asset($image->image)}}">
                            <img src="{{$image->image}}" alt="{{$image->alt}}">
                       </a>
                   @endforeach
               </div>
           </div>

       </div>

   </div>

@endsection
@section('script')

    <script>

    </script>
@endsection

