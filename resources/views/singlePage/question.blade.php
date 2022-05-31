@extends('master.master_color')

@section('title' , 'وب پکس | سوالات متداول | WebPax')
@section('meta_keywords','سوالات متداول')
@section('meta_description', 'در این قسمت پاسخ سوالات خود را پیدا کنید.')

@section('content')

   <div class="questions">
       <div class="head">
           <h1>سوالات متداول</h1>
       </div>

       <div class="body">
           <span>{!!  $questions_text->value !!}</span>
       </div>

   </div>

@endsection
@section('script')

    <script>

    </script>
@endsection

