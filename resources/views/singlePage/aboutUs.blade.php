@extends('master.master_color')

@section('title' , 'وب پکس | درباره ما | WebPax')
@section('meta_keywords','درباره ما,about us')
@section('meta_description', 'ما به کاربران خود کمک میکنیم تا در تجارت الکترونیک موفقت تر عمل کنند و سایت با کیفیت تری را مدیریت کنند .')

@section('content')

   <div class="questions">
       <div class="head">
           <h1>درباره ما</h1>
       </div>

       <div class="body">
           <span>{!!  $aboutUs_text->value !!}</span>
       </div>

   </div>

@endsection
@section('script')

    <script>

    </script>
@endsection

