@component('profile.layouts.content')

    @slot('profileTitle')
        <span>سفارشات شما</span>
    @endslot

    <div class="order_items">
        @foreach($orders as $order)
            <div class="order_item">

                <div class="header">
                    <span>شماره سفارش : <span class="translate">{{$order->id}}/</span></span>
                    <span>تاریخ : <span class="translate">{{jdate($order->updated_at)->format('%A, %d %B %y')}}/</span></span>
                    @if($order->status == 'unpaid')
                        <span>وضعیت : <span style="color: #fa5c5c">پرداخت نشده/</span></span>
                    @elseif($order->status == 'paid')
                        <span>وضعیت : <span style="color: #39d67d">پرداخت شده/</span></span>
                    @elseif($order->status == 'preparation')
                        <span>وضعیت : <span style="color: #ff9900">درحال آماده سازی/</span></span>
                    @elseif($order->status == 'posted')
                        <span>وضعیت : <span style="color: #2b64d4">ارسال شده/</span></span>
                    @elseif($order->status == 'received')
                        <span>وضعیت : <span style="color: #39d67d">دریافت شده/</span></span>
                    @elseif($order->status == 'canceled')
                        <span>وضعیت : <span style="color: #e70309">لغو شده/</span></span>
                    @endif
                    <span>مبلغ : <span>{{e2f($order->price)}} تومان</span></span>
                    <div style="display: inline-block" class="btnn btn_description">جزئیات</div>
                </div>
                <div class="description" >
                    @foreach($order->prices as $price)
                        <div class="description_item">
                            <img src="{{asset($price->product->image)}}" alt="{{$price->product->name}}">
                            <div>
                                <div>
                                    <span >نام محصول :</span>
                                    <span id="product_name">{{$price->product->name}}</span>
                                </div>
                                <div>
                                    <span >مشخصات محصول :</span>
                                    <span id="product_name">{{$price->product->description}}</span>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        @endforeach
            {{ $orders->links() }}
    </div>

@section('script')
    <script>
        $('.description').fadeOut(0);
        $('.btn_description').on('click', function () {
            $(this).parents('.order_item').children('.description').fadeToggle(500);
        });
    </script>
@endsection
@endcomponent


