@extends('master/master')

@section('title' , 'وب پکس | مقالات | بلاگ | پایگاه دانش | نکات مهم طراحی سایت | WebPax')
@section('meta_keywords','مقالات,پایگاه دانش,بلاگ,نکات مهم طراحی سایت,ویژگی های یک سایت خوب,سئو(SEO)')
@section('meta_description', 'در قسمت مقالات میتوانید مطالب بسیار مفید جهت طراحی سایت ، ویژگی های یک سایت خوب و کلیه نکات مرتبط با یک سایت را بررسی کنید .')

@section('content')

    <div class="articles">
        <div class="head">
            <h1>مقالات</h1>
        </div>

        <div class="body">
            <ul class="article_list">
                @foreach($articles as $article)
                    <li class="box">

                        <div class="image_box">
                            <img src="{{$article->image}}" alt="">
                        </div>
                        <div class="body_box">
                            <a href="{{route('article.show' , $article)}}"><h2 class="box_title translate">{{$article->title}}</h2></a>
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
@endsection
