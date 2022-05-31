@extends('master.master_color')

@section('title' , 'وب پکس | سایت فروشگاهی پیشرفته | سایت فروشگاهی | KalaPax | سایت آماده | کالا پکس | WebPax')
@section('meta_keywords','سایت فروشگاهی پیشرفته,سایت فروشگاهی,سایت آماده فروشگاهی,فروشگاه آنلاین,KalaPax,سایت آماده,کالا پکس')
@section('meta_description', 'کالا پکس یک سایت فروشگاهی با امکانات پیشرفته و کامل است که تمامی نیاز های شما را برآورده میسازد .')

@section('content')

   <div class="questions">
       <div class="head">
           <h1>فروشگاه KalaPax</h1>
       </div>

       <div class="body">

           <div class="product_section" style="background: none">
               <span class="product_description">این فروشگاه نسخه پیشرفته یک وب سایت فروشگاهی می باشد که تلاش شده است تا تمامی نیاز های غالب کسب و کار ها در نظر گرفته شود</span>
               <div class="product_details">

                   <div class="plan">
                       <div class="plan-title">
                           <h2 class="h3">فروشگاه پیشرفته</h2>
                           <span>KalaPAx</span>
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

