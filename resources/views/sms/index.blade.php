@extends('master/master')

@section('title' , 'وب پکس | پنل پیامک | پنل sms | پنل اس ام اس ارزان | پیامک رایگان | WebPax')
@section('meta_keywords','پنل پیامک,پنل sms,پنل اس ام اس,پنل اس ام اس ارزان,پیامک رایگان,سرویس پیامک,پیامک ارزان,پنل پیامک رایگان')
@section('meta_description', 'با استفاده از سرویس پیامک ما از پنل های حرفه ای و قدرتمند پیامکی (sms) استفاده کنید.')

@section('content')

    <div class="sms">
        <div class="head" style="justify-content: space-between !important;">
            <h1>سرویس پیامک</h1>
            <a target="_blank" class="btnn btnn-red" style="z-index: 10" href="http://smspax.ir">ورود به پنل پیامک</a>
        </div>

        <div class="body">

            <div class="smsSections">
                <div class="priceSection">

                    <div class="plan">
                        <div class="plan-title">
                            <h2 class="h3">پایه</h2>
                            <span>STANDARD</span>
                        </div>

                        <div class="plan-price-title">
                            <div>
                                <div class="price_per_year">مادام العمر</div>
                                <div class="price_per_year translate" style="color: #ef2b2b;font-weight: 500;padding: 10px">500
                                    پیامک رایگان
                                </div>
                            </div>
                            @php
                                $product = \App\Product::where('name' , 'smsPanelStandard')->first();
                            @endphp
                            <span class="plan-price "><span class="translate">{{number_format($product->price->off_price)}}</span><span>تومان</span></span>
                        </div>
                        <ul class="plan-detail">
                            <li><h2>ارسال ساده</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>ارسال گروهی</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>ایجاد و افزودن گروه بندی از طریق اکسل</h2><span><i
                                        class="fa fa-check text-success"></i></span></li>
                            <li><h2>ارسال زمان بندی</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>دریافت ، ارسال منطقه ای</h2><span><i class="fa fa-check text-success"></i></span>
                            </li>
                            <li><h2>ارسال از روی نقشه</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>ارسال صنفی</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>خط اختصاصی رایگان</h2><span class="translate">1 عدد </span></li>
                            <li><h2>امکان خرید خط اختصاصی اضافه</h2><span><i
                                        class="fa fa-check text-success"></i></span></li>
                            <li><h2>پشتیبانی از وب سرویس</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>ارسال پیام بین المللی</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>کنترل از راه دور</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>پشتیبانی</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>ارسال پیام صوتی</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>ماژول مسابقه و نظر سنجی</h2><span><i class="fas fa-times text-danger"></i></span>
                            </li>
                            <li><h2>ماژول پاسخگویی هوشمند</h2><span><i class="fas fa-times text-danger"></i></span></li>
                            <li><h2>ماژول سر رسید</h2><span><i class="fas fa-times text-danger"></i></span></li>
                            <li><h2>ماژول استعلام</h2><span><i class="fas fa-times text-danger"></i></span></li>
                            <li><h2>ماژول کاربر و سطح دسترسی</h2><span><i class="fas fa-times text-danger"></i></span>
                            </li>
                            <li><h2>ماژول ایمیل کاتالوگ</h2><span><i class="fas fa-times text-danger"></i></span></li>

                        </ul>

                        <form action="{{route('cart.add')}}" method="post" id="{{$product->id}}">
                            <input type="hidden" name="priceId" value="{{$product->price->id}}">
                            @csrf
                        </form>
                        <a class="sbtn" href="#"
                           {{$product->inventory() > 0 ? '' : 'disable'}} onclick="document.getElementById('{{$product->id}}').submit()">افزودن به سبد خرید</a>

                    </div>
                    <div class="plan">
                        <div class="plan-title">
                            <h2 class="h3">سفارشی</h2>
                            <span>ENTERPRISE</span>
                        </div>
                        <div class="plan-price-title">
                            <div>
                                <div class="price_per_year">مادام العمر</div>
                                <div class="price_per_year" style="color: #ef2b2b;font-weight: 500;padding: 10px">امکان
                                    خرید ماژول مجزا
                                </div>
                            </div>
                            @php
                                $product = \App\Product::where('name' , 'smsPanelEnterprise')->first();
                            @endphp
                            <span class="plan-price "><span class="translate">{{number_format($product->price->off_price)}}</span><span>تومان</span></span>
                        </div>
                        <ul class="plan-detail">
                            <li><h2>ارسال ساده</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>ارسال گروهی</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>ایجاد و افزودن گروه بندی از طریق اکسل</h2><span><i
                                        class="fa fa-check text-success"></i></span></li>
                            <li><h2>ارسال زمان بندی</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>دریافت ، ارسال منطقه ای</h2><span><i class="fa fa-check text-success"></i></span>
                            </li>
                            <li><h2>ارسال از روی نقشه</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>ارسال صنفی</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>خط اختصاصی رایگان</h2><span class="translate">1 عدد</span></li>
                            <li><h2>امکان خرید خط اختصاصی اضافه</h2><span><i
                                        class="fa fa-check text-success"></i></span></li>
                            <li><h2>پشتیبانی از وب سرویس</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>ارسال پیام بین المللی</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>کنترل از راه دور</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>پشتیبانی</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>ارسال پیام صوتی</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>ماژول مسابقه و نظر سنجی</h2><span class="translate">قابل خرید (25.000 تومان)</span>
                            </li>
                            <li><h2>ماژول پاسخگویی هوشمند</h2><span class="translate">قابل خرید (25.000 تومان)</span></li>
                            <li><h2>ماژول سر رسید</h2><span class="translate">قابل خرید (75.000 تومان)</span></li>
                            <li><h2>ماژول استعلام</h2><span class="translate">قابل خرید (50.000 تومان)</span></li>
                            <li><h2>ماژول کاربر و سطح دسترسی</h2><span class="translate">قابل خرید (100.000 تومان)</span>
                            </li>
                            <li><h2>ماژول ایمیل کاتالوگ</h2><span class="translate">قابل خرید (100.000 تومان)</span></li>


                        </ul>

                        <form action="{{route('cart.add')}}" method="post" id="{{$product->id}}">
                            <input type="hidden" name="priceId" value="{{$product->price->id}}">
                            @csrf
                        </form>
                        <a class="sbtn" href="#"
                           {{$product->inventory() > 0 ? '' : 'disable'}} onclick="document.getElementById('{{$product->id}}').submit()">افزودن به سبد خرید</a>
                    </div>
                    <div class="plan">
                        <div class="plan-title">
                            <h2 class="h3">پیشرفته</h2>
                            <span>PRO</span>
                        </div>
                        <div class="plan-price-title">
                            <div>
                                <div class="price_per_year">مادام العمر</div>
                                <div class="price_per_year translate" style="color: #ef2b2b;font-weight: 500;padding: 10px">3000
                                    پیامک رایگان
                                </div>
                            </div>
                            @php
                                $product = \App\Product::where('name' , 'smsPanelPro')->first();
                            @endphp
                            <span class="plan-price "><span class="translate">{{number_format($product->price->off_price)}}</span><span>تومان</span></span>
                        </div>
                        <ul class="plan-detail">
                            <li><h2>ارسال ساده</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>ارسال گروهی</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>ایجاد و افزودن گروه بندی از طریق اکسل</h2><span><i
                                        class="fa fa-check text-success"></i></span></li>
                            <li><h2>ارسال زمان بندی</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>دریافت ، ارسال منطقه ای</h2><span><i class="fa fa-check text-success"></i></span>
                            </li>
                            <li><h2>ارسال از روی نقشه</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>ارسال صنفی</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>خط اختصاصی رایگان</h2><span class="translate">3 عدد</span></li>
                            <li><h2>امکان خرید خط اختصاصی اضافه</h2><span><i
                                        class="fa fa-check text-success"></i></span></li>
                            <li><h2>پشتیبانی از وب سرویس</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>ارسال پیام بین المللی</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>کنترل از راه دور</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>پشتیبانی</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>ارسال پیام صوتی</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>ماژول مسابقه و نظر سنجی</h2><span><i class="fa fa-check text-success"></i></span>
                            </li>
                            <li><h2>ماژول پاسخگویی هوشمند</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>ماژول سر رسید</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>ماژول استعلام</h2><span><i class="fa fa-check text-success"></i></span></li>
                            <li><h2>ماژول کاربر و سطح دسترسی</h2><span><i class="fa fa-check text-success"></i></span>
                            </li>
                            <li><h2>ماژول ایمیل کاتالوگ</h2><span><i class="fa fa-check text-success"></i></span></li>


                        </ul>

                        <form action="{{route('cart.add')}}" method="post" id="{{$product->id}}">
                            <input type="hidden" name="priceId" value="{{$product->price->id}}">
                            @csrf
                        </form>
                        <a class="sbtn" href="#"
                           {{$product->inventory() > 0 ? '' : 'disable'}} onclick="document.getElementById('{{$product->id}}').submit()">افزودن به سبد خرید</a>
                    </div>

                </div>
                <div class="important">
                    <div class="importantTitle">
                        <span>نکات مهم و قابل توجه</span>
                    </div>
                    <div class="importantBody">
                        <span>هزینه سامانه تنها یکبار از مشتری دریافت می گردد.</span>
                        <span>هریک از ماژول های تخصصی به همراه نسخه پایه به صورت جداگانه قابل خریداری می باشند.</span>
                    </div>
                </div>
                <div class="lines">
                    <div class="linesTitle">
                        <span>تعرفه خطوط</span>
                    </div>
                    <div class="linesBody">
                        <ul>
                            <li>
                                <a class="linesTab translate active" onclick="openTab(event , 'tab1')">شماره 3000</a>
                            </li>
                            <li>
                                <a class="linesTab translate" onclick="openTab(event , 'tab2')">شماره 2000</a>
                            </li>
                            <li>
                                <a class="linesTab translate" onclick="openTab(event , 'tab3')">شماره 1000</a>
                            </li>
                            <li>
                                <a class="linesTab translate" onclick="openTab(event , 'tab4')">شماره 5000</a>
                            </li>
                            <li>
                                <a class="linesTab translate" onclick="openTab(event , 'tab5')">شماره 021</a>
                            </li>
                        </ul>
                        <div class="licenseBodyItems">
                            <div class="licenseBodyItem" style="display: block;" id="tab1">

                                <div class="licenseBodyItemRow">

                                    <div class="rowTitle"><strong class="translate">پیش شماره 3000 مگفا</strong></div>
                                    <div class="rowBody">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th scope="col">نوع شماره</th>
                                                <th scope="col">هزینه</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="translate">شماره 14 رقمی غیر انتخابی</td>
                                                <td class="translate">110,000 ریال</td>
                                            </tr>
                                            <tr>
                                                <td class="translate">شماره 14 رقمی انتخابی</td>
                                                <td class="translate">250,000 ریال</td>
                                            </tr>
                                            <tr>
                                                <td class="translate">شماره 12 رقمی</td>
                                                <td class="translate">1,000,000 ریال</td>
                                            </tr>
                                            <tr>
                                                <td class="translate">شماره 10 رقمی</td>
                                                <td class="translate">1,200,000 ریال</td>
                                            </tr>
                                            <tr>
                                                <td class="translate">شماره 9 رقمی ایوان</td>
                                                <td class="translate">3,000,000 ریال</td>

                                            </tr>
                                            <tr>
                                                <td class="translate">شماره 9 رقمی</td>
                                                <td class="translate">پس از استعلام از مخابرات</td>

                                            </tr>
                                            <tr>
                                                <td class="translate">شماره 8 رقمی (باتوجه به شماره انتخابی)</td>
                                                <td class="translate">پس از استعلام از مخابرات</td>

                                            </tr>
                                            <tr>
                                                <td class="translate">شماره های کمتر از 8 رقم</td>
                                                <td class="translate">پس از استعلام از مخابرات</td>

                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                            <div class="licenseBodyItem" id="tab2">

                                <div class="licenseBodyItemRow">

                                    <div class="rowTitle">
                                        <strong class="translate"> پیش شماره 2000 آتیه</strong>
                                    </div>
                                    <div class="rowBody">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th scope="col">نوع شماره</th>
                                                <th scope="col">هزینه</th>
                                                <th scope="col">قیمت رند</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="translate">شماره 12 رقمی</td>
                                                <td class="translate">1,500,000 ریال</td>
                                                <td class="translate">پس از استعلام</td>

                                            </tr>
                                            <tr>
                                                <td class="translate">شماره 11 رقمی</td>
                                                <td class="translate">2,000,000 ریال</td>
                                                <td class="translate">پس از استعلام</td>

                                            </tr>
                                            <tr>
                                                <td class="translate">شماره 10 رقمی</td>
                                                <td class="translate">3,500,000 ریال</td>
                                                <td class="translate">پس از استعلام</td>

                                            </tr>
                                            <tr>
                                                <td class="translate">شماره 9 رقمی</td>
                                                <td class="translate">5,000,000 ریال</td>
                                                <td class="translate">پس از استعلام</td>

                                            </tr>
                                            <tr>
                                                <td class="translate">شماره 8 رقمی</td>
                                                <td class="translate">12,000,000 ریال</td>
                                                <td class="translate">پس از استعلام</td>

                                            </tr>
                                            <tr>
                                                <td class="translate">شماره7 رقمی</td>
                                                <td class="translate">18,000,000 ریال</td>
                                                <td class="translate">پس از استعلام</td>

                                            </tr>
                                            <tr>
                                                <td class="translate">شماره 6 رقمی</td>
                                                <td class="translate">125,000,000 ریال</td>
                                                <td class="translate">پس از استعلام</td>

                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <div class="licenseBodyItem" id="tab3">

                                <div class="licenseBodyItemRow">

                                    <div class="rowTitle">
                                        <strong class="translate"> پیش شماره 1000 رهیاب</strong>

                                    </div>
                                    <div class="rowBody">

                                        <table>
                                            <thead>
                                            <tr>
                                                <th scope="col">نوع شماره</th>
                                                <th scope="col">هزینه (غیر رند)</th>
                                                <th scope="col"> هزینه (رند)</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="translate">شماره 14 رقمی</td>
                                                <td class="translate">350,000 ریال</td>
                                                <td class="translate">700,000 ریال</td>

                                            </tr>
                                            <tr>
                                                <td class="translate">شماره 13 رقمی</td>
                                                <td class="translate">500,000 ریال</td>
                                                <td class="translate">1,000,000 ریال</td>

                                            </tr>
                                            <tr>
                                                <td class="translate">شماره 12 رقمی</td>
                                                <td class="translate">1,250,000 ریال</td>
                                                <td class="translate">2,500,000 ریال</td>

                                            </tr>
                                            <tr>
                                                <td class="translate">شماره 11 رقمی</td>
                                                <td class="translate">1,750,000 ریال</td>
                                                <td class="translate">3,500,000 ریال</td>

                                            </tr>
                                            <tr>
                                                <td class="translate">شماره 10 رقمی</td>
                                                <td class="translate">2,500,000 ریال</td>
                                                <td class="translate">8,000,000 ریال</td>

                                            </tr>
                                            <tr>
                                                <td class="translate">شماره 9 رقمی</td>
                                                <td class="translate">6,000,000 ریال</td>
                                                <td class="translate">12,000,000 ریال</td>

                                            </tr>
                                            <tr>
                                                <td class="translate">شماره 8 رقمی</td>
                                                <td class="translate">20,000,000 ریال</td>
                                                <td class="translate">50,000,000 ریال</td>

                                            </tr>
                                            <tr>
                                                <td class="translate">شماره 7 رقمی</td>
                                                <td class="translate">پس از استعلام از مخابرات</td>
                                                <td class="translate">پس از استعلام از مخابرات</td>

                                            </tr>
                                            <tr>
                                                <td class="translate">شماره 6 رقمی</td>
                                                <td class="translate">پس از استعلام از مخابرات</td>
                                                <td class="translate">پس از استعلام از مخابرات</td>

                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <div class="licenseBodyItem" id="tab4">

                                <div class="licenseBodyItemRow">

                                    <div class="rowTitle">
                                        <strong class="translate">پیش شماره 5000 ارمغان </strong>
                                    </div>
                                    <div class="rowBody">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th scope="col">نوع شماره</th>
                                                <th scope="col">هزینه</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="translate">شماره 14 رقمی</td>
                                                <td class="translate">200,000 ریال</td>
                                            </tr>

                                            <tr>
                                                <td class="translate">سایر شماره ها</td>
                                                <td class="translate">پس از استعلام از مخابرات</td>

                                            </tr>
                                            <tr>
                                                <td colspan="2" class="text-right">
                                                    پیش شماره 5000 دارای قابلیت منحصر به فرد ارسال پیامک بر اساس سن و
                                                    جنسیت گیرندگان است. در این قابلیت شما با انتخاب شهر، سن و جنسیت
                                                    مخاطبان می توانید پیامک های خود را به جامعه مخاطبان مورد نظر خود
                                                    بفرستید.
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <div class="licenseBodyItem" id="tab5">

                                <div class="licenseBodyItemRow">

                                    <div class="rowTitle">
                                        <strong class="translate">
                                            پیش شماره 021 مخابرات تهران
                                        </strong>


                                    </div>

                                    <div class="rowBody">

                                        <table>
                                            <thead>
                                            <tr>
                                                <th scope="col">نوع شماره</th>
                                                <th scope="col">قیمت (ریال)</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="translate">شماره های 8 رقمی استان تهران و البرز</td>
                                                <td class="translate">100,000</td>
                                            </tr>
                                            <tr>
                                                <td class="translate">شماره های 5 رقمی</td>
                                                <td class="translate">رایگان</td>
                                            </tr>
                                            <tr>
                                                <td class="translate">شماره های 4 رقمی</td>
                                                <td class="translate">رایگان</td>
                                            </tr>
                                            <tr>
                                                <td class="translate">شماره های 3 رقمی</td>
                                                <td class="translate">4.500,000</td>
                                            </tr>

                                            </tbody>
                                        </table>

                                        <h6>
                                            شماره های اختصاصی غیر متناظر با تلفن ثابت
                                        </h6>

                                        <table class="table table-bordered table-striped  text-center vertical-midle">
                                            <thead class="thead-dark">
                                            <tr>
                                                <th scope="col" class="text-center">
                                                    #
                                                </th>
                                                <th scope="col" class="text-center">
                                                    ساختار شماره اختصاصی
                                                    غیر متناظر
                                                </th>
                                                <th scope="col" class="text-center translate">
                                                    تعداد رقم بعد از 021000
                                                </th>
                                                <th scope="col" colspan="2" class="text-center">بازه قیمت (ریال)</th>
                                                <th scope="col" class="text-center">
                                                    توضیحات
                                                </th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="translate">1</td>
                                                <td class="translate">021000XX</td>
                                                <td class="translate">2</td>
                                                <td class="translate">30 میلیون</td>
                                                <td class="translate">45 میلیون</td>
                                                <td class="translate"></td>
                                            </tr>

                                            <tr>
                                                <td class="translate">2</td>
                                                <td class="translate">021000XXX</td>
                                                <td class="translate">3</td>
                                                <td class="translate">15 میلیون</td>
                                                <td class="translate">30 میلیون</td>
                                                <td class="translate"></td>
                                            </tr>

                                            <tr>
                                                <td class="translate">3</td>
                                                <td class="translate">021000XXXX</td>
                                                <td class="translate">4</td>
                                                <td class="translate">3,000,000</td>
                                                <td class="translate">6,000,000</td>
                                                <td class="translate"></td>
                                            </tr>
                                            <tr>
                                                <td class="translate">4</td>
                                                <td class="translate">021000XXXXX</td>
                                                <td class="translate">5</td>
                                                <td class="translate">2,000,000</td>
                                                <td class="translate">5,000,000</td>
                                                <td class="translate"></td>
                                            </tr>
                                            <tr>
                                                <td class="translate">5</td>
                                                <td class="translate">021000XXXXXX</td>
                                                <td class="translate">6</td>
                                                <td class="translate">1,500,000</td>
                                                <td class="translate">2,000,000</td>
                                                <td class="translate"></td>
                                            </tr>
                                            <tr>
                                                <td class="translate">6</td>
                                                <td class="translate">021000XXXXXXX</td>
                                                <td class="translate">7</td>
                                                <td class="translate">1,000,000</td>
                                                <td class="translate">1,500,000</td>
                                                <td class="translate">
                                                    در صورتی که این شماره عینا شماره تلفن کاربران شهرستانی باشد، این
                                                    هزینه 700.000 ریال می باشد.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="translate">7</td>
                                                <td class="translate">021000XXXXXXXX</td>
                                                <td class="translate">8</td>
                                                <td class="translate">900,000</td>
                                                <td class="translate"></td>
                                                <td class="translate"></td>
                                            </tr>
                                            <tr>
                                                <td class="translate">8</td>
                                                <td class="translate">021000XXXXXXXXX</td>
                                                <td class="translate">9</td>
                                                <td class="translate">700,000</td>
                                                <td class="translate"></td>
                                                <td class="translate"></td>
                                            </tr>
                                            <tr>
                                                <td class="translate">9</td>
                                                <td class="translate">021000XXXXXXXXXX</td>
                                                <td class="translate">10</td>
                                                <td class="translate">600,000</td>
                                                <td class="translate"></td>
                                                <td class="translate"></td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
                <div class="important">
                    <div class="importantTitle">
                        <span> توجه</span>
                    </div>
                    <div class="importantBody">
                        <span class="translate">1 - در صورتی که شما قصد خرید شماره ای با تعداد ارقام کوتاه تری را دارید هزینه شماره به مبلغ سامانه افزوده می گردد.</span>
                        <span class="translate">2 - هزینه شماره ها (به جز 2000 که سالیانه شامل 60% آبومان می باشد) تنها یکبار دریافت می گردد.</span>
                    </div>
                </div>
                <div class="betterLine">
                    <div class="betterLineTitle">
                        <span>کدام پیش شماره را انتخاب کنم</span>
                        <span>هر کدام از پیش شماره ها توسط مخابرات به یک پیمانکار (اپراتور) واگذار شده است و با توجه به سیاست های اپراتور تفاوتهایی در ارائه خدمات توسط آنها وجود دارد. در جدول ذیل برخی تفاوتهای این پیش شماره ها با یکدیگر مقایسه شده است:</span>
                    </div>
                    <div class="betterLineBody">
                        <div class="betterLineRow">
                            <div class="rowFirst">
                                <div class="price-value-header">
                                    <ul>
                                        <li class="bg-green">معیار/پیش شماره</li>
                                        <li>ارسال به شماره های فیلتر شده</li>
                                        <li class="bg-gray">کیفیت ارسال از نظر تحویل به گیرنده</li>
                                        <li>تعرفه ارسال پیامک به انواع شماره (همراه اول، ایرانسل و ...)</li>
                                        <li class="bg-gray">سرعت ارسال پیامک</li>
                                        <li>گزارش تحویل به گیرنده</li>
                                        <li class="bg-gray">هزینه ارسال پیامک</li>
                                        <li class="">انتخاب خط با شماره دلخواه</li>
                                        <li class="bg-gray">هزینه خط اختصاصی</li>
                                        <li>بازگشت هزینه پیامک نرسیده به مخابرات</li>
                                        <li class="bg-gray ">سایر مزایا</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="betterLineRowItem">
                                <div class="price-value">
                                    <ul>
                                        <li class="bg-green">خط ثابت</li>
                                        <li><span class="value-hidden-lg">ارسال به شماره های فیلتر شده</span><span
                                                class="value-close"></span></li>
                                        <li class="bg-gray"><span class="value-hidden-lg">کیفیت ارسال از نظر تحویل به گیرنده</span>
                                            <span class="value-text">خوب</span></li>
                                        <li><span class="value-hidden-lg">تعرفه ارسال پیامک به انواع شماره (همراه اول، ایرانسل و ...)</span><span
                                                class="value-text">یکسان</span></li>
                                        <li class="bg-gray"><span class="value-hidden-lg">سرعت ارسال پیامک</span><span
                                                class="value-text">عالی</span></li>
                                        <li><span class="value-hidden-lg">گزارش تحویل به گیرنده</span><span
                                                class="value-check"></span></li>
                                        <li class="bg-gray"><span class="value-hidden-lg">هزینه ارسال پیامک</span><span
                                                class="value-text">پایین</span></li>
                                        <li class=""><span class="value-hidden-lg">انتخاب خط با شماره دلخواه</span><span
                                                class="value-check"></span></li>
                                        <li class="bg-gray"><span class="value-hidden-lg">هزینه خط اختصاصی</span><span
                                                class="value-text">مناسب</span></li>
                                        <li><span
                                                class="value-hidden-lg">بازگشت هزینه پیامک نرسیده به مخابرات </span><span
                                                class="value-check"></span></li>
                                        <li class="bg-gray li-mh-112"><span
                                                class="value-hidden-lg">سایر مزایا</span><span class="value-text">ارسال و دریافت از طریق پیامک روی خط ثابت	</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="betterLineRowItem">
                                <div class="price-value">
                                    <ul>
                                        <li class="bg-green translate">1000</li>
                                        <li><span class="value-hidden-lg">ارسال به شماره های فیلتر شده</span><span
                                                class="value-close"></span></li>
                                        <li class="bg-gray"><span class="value-hidden-lg">کیفیت ارسال از نظر تحویل به گیرنده</span>
                                            <span class="value-text">بسیار خوب</span></li>
                                        <li><span class="value-hidden-lg">تعرفه ارسال پیامک به انواع شماره (همراه اول، ایرانسل و ...)</span><span
                                                class="value-text">یکسان</span></li>
                                        <li class="bg-gray"><span class="value-hidden-lg">سرعت ارسال پیامک</span><span
                                                class="value-text">عالی</span></li>
                                        <li><span class="value-hidden-lg">گزارش تحویل به گیرنده</span><span
                                                class="value-check"></span></li>
                                        <li class="bg-gray"><span class="value-hidden-lg">هزینه ارسال پیامک</span><span
                                                class="value-text">مناسب</span></li>
                                        <li class=""><span class="value-hidden-lg">انتخاب خط با شماره دلخواه</span><span
                                                class="value-check"></span></li>
                                        <li class="bg-gray"><span class="value-hidden-lg">هزینه خط اختصاصی</span><span
                                                class="value-text">مناسب</span></li>
                                        <li><span
                                                class="value-hidden-lg">بازگشت هزینه پیامک نرسیده به مخابرات </span><span
                                                class="value-check"></span></li>
                                        <li class="bg-gray li-mh-112"><span
                                                class="value-hidden-lg">سایر مزایا</span><span class="value-text">امکان انتخاب شماره در بازه گسترده</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="betterLineRowItem">
                                <div class="price-value">
                                    <ul>
                                        <li class="bg-green translate">2000</li>
                                        <li><span class="value-hidden-lg">ارسال به شماره های فیلتر شده</span><span
                                                class="value-close"></span></li>
                                        <li class="bg-gray"><span class="value-hidden-lg">کیفیت ارسال از نظر تحویل به گیرنده</span>
                                            <span class="value-text">خوب</span></li>
                                        <li><span class="value-hidden-lg">تعرفه ارسال پیامک به انواع شماره (همراه اول، ایرانسل و ...)</span><span
                                                class="value-text">غیر یکسان</span></li>
                                        <li class="bg-gray"><span class="value-hidden-lg">سرعت ارسال پیامک</span><span
                                                class="value-text">عالی</span></li>
                                        <li><span class="value-hidden-lg">گزارش تحویل به گیرنده</span><span
                                                class="value-check"></span></li>
                                        <li class="bg-gray"><span class="value-hidden-lg">هزینه ارسال پیامک</span><span
                                                class="value-text">بالا</span></li>
                                        <li class=""><span class="value-hidden-lg">انتخاب خط با شماره دلخواه</span><span
                                                class="value-check"></span></li>
                                        <li class="bg-gray"><span class="value-hidden-lg">هزینه خط اختصاصی</span><span
                                                class="value-text">بالا</span></li>
                                        <li><span
                                                class="value-hidden-lg">بازگشت هزینه پیامک نرسیده به مخابرات </span><span
                                                class="value-check"></span></li>
                                        <li class="bg-gray li-mh-112"><span
                                                class="value-hidden-lg">سایر مزایا</span><span class="value-text">برگشت هزینه نرسیده به گوشی در حالت Deliver Base</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="betterLineRowItem">
                                <div class="price-value">
                                    <ul>
                                        <li class="bg-green translate">3000</li>
                                        <li><span class="value-hidden-lg">ارسال به شماره های فیلتر شده</span><span
                                                class="value-close"></span></li>
                                        <li class="bg-gray"><span class="value-hidden-lg">کیفیت ارسال از نظر تحویل به گیرنده</span>
                                            <span class="value-text">بسیارخوب</span></li>
                                        <li><span class="value-hidden-lg">تعرفه ارسال پیامک به انواع شماره (همراه اول، ایرانسل و ...)</span><span
                                                class="value-text">یکسان</span></li>
                                        <li class="bg-gray"><span class="value-hidden-lg">سرعت ارسال پیامک</span><span
                                                class="value-text">عالی</span></li>
                                        <li><span class="value-hidden-lg">گزارش تحویل به گیرنده</span><span
                                                class="value-check"></span></li>
                                        <li class="bg-gray"><span class="value-hidden-lg">هزینه ارسال پیامک</span><span
                                                class="value-text">مناسب</span></li>
                                        <li class=""><span class="value-hidden-lg">انتخاب خط با شماره دلخواه</span><span
                                                class="value-text">محدود</span></li>
                                        <li class="bg-gray"><span class="value-hidden-lg">هزینه خط اختصاصی</span><span
                                                class="value-text">مناسب</span></li>
                                        <li><span
                                                class="value-hidden-lg">بازگشت هزینه پیامک نرسیده به مخابرات </span><span
                                                class="value-check"></span></li>
                                        <li class="bg-gray li-mh-112"><span
                                                class="value-hidden-lg">سایر مزایا</span><span class="value-text">بزرگترین اپراتور ارسال پیامک در کشور</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="betterLineRowItem">
                                <div class="price-value">
                                    <ul>
                                        <li class="bg-green translate">5000</li>
                                        <li><span class="value-hidden-lg">ارسال به شماره های فیلتر شده</span><span
                                                class="value-close"></span></li>
                                        <li class="bg-gray"><span class="value-hidden-lg">کیفیت ارسال از نظر تحویل به گیرنده</span>
                                            <span class="value-text">خوب</span></li>
                                        <li><span class="value-hidden-lg">تعرفه ارسال پیامک به انواع شماره (همراه اول، ایرانسل و ...)</span><span
                                                class="value-text">یکسان</span></li>
                                        <li class="bg-gray"><span class="value-hidden-lg">سرعت ارسال پیامک</span><span
                                                class="value-text">عالی</span></li>
                                        <li><span class="value-hidden-lg">گزارش تحویل به گیرنده</span><span
                                                class="value-check"></span></li>
                                        <li class="bg-gray"><span class="value-hidden-lg">هزینه ارسال پیامک</span><span
                                                class="value-text">پایین</span></li>
                                        <li class=""><span class="value-hidden-lg">انتخاب خط با شماره دلخواه</span><span
                                                class="value-text">محدود</span></li>
                                        <li class="bg-gray"><span class="value-hidden-lg">هزینه خط اختصاصی</span><span
                                                class="value-text">پایین</span></li>
                                        <li><span
                                                class="value-hidden-lg">بازگشت هزینه پیامک نرسیده به مخابرات </span><span
                                                class="value-check"></span></li>
                                        <li class="bg-gray li-mh-112"><span
                                                class="value-hidden-lg">سایر مزایا</span><span class="value-text">امکان ارسال به بانک تفکیک جنسیتی و سنی</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="important">
                    <div class="importantTitle">
                        <span> نکات تکمیلی</span>
                    </div>
                    <div class="importantBody">
                        <span class="translate">شماره های فیلتر شده شماره هایی هستند که صاحبان آنها عدم دریافت پیامک های تبلیغاتی و اطلاع رسانی را درخواست کرده اند.</span>
                        <span class="translate">در صورت ارائه تعهدنامه توسط خریدار مبنی بر عدم ارسال پیام به شماره های فیلتر شده(Black List) می توان به این شماره ها نیز پیامک ارسال کرد.</span>
                        <span class="translate">محدودیتی در زمان استفاده از شارژ خریداری شده وجود ندارد.</span>
                        <span class="translate">هزینه ارسال هر پیامک با پیش شماره 2000، به روش Delivered Base محاسبه می گردد:</span>
                        <span class="translate">پیش شماره 2000 Delivered Base (بر مبنای دریافت) : در این حالت مبنای دریافت هزینه، پیامک هایی است که به کاربران رسیده است و هزینه ارسال به شماره های فیلتر شده (Black List) و نرسیده به گوشی به حساب کاربر برگشت داده می شود (این سرویس تنها با پیش شماره 2000 عرضه می گردد).</span>
                        <span class="translate">هزینه دریافت پیام کوتاه تا حد ارسال رایگان می باشد.</span>
                    </div>
                </div>
                <div class="important">
                    <div class="importantTitle">
                        <span>مراحل ثبت نام</span>
                    </div>
                    <div class="importantBody">
                        <span class="translate">1 - واریز وجه سامانه با توجه به جداول فوق (وجه سامانه می تواند به حساب واریز گردد یا بصورت آنلاین پرداخت شود.)</span>
                        <span class="translate">2 - تماس با واحد فروش شرکت از طریق تلفن ویا ایمیل و اعلام شماره فیش در این مرحله شماره شما رزرو شده و فرم ثبت نام برای شما از طریق ایمیل یا فکس ارسال می گردد.</span>
                        <span class="translate">3 - تکمیل فرم ثبت نام و ارسال مدارک (اشخاص حقوقی: کپی روزنامه رسمی شرکت، اشخاص حقیقی: کپی کارت ملی و شناسنامه) مدارک فوق می تواند پست، ایمیل و یا فکس گردد.</span>
                        <span class="translate">* - پس از دریافت مدارک فوق همکاران ما سامانه شما را فعال کرده و اطلاعات لازم را برای شما ایمیل و فکس می کنند. کلیه مراحل فوق می تواند در یک روز کاری صورت پذیرد.</span>
                    </div>
                </div>
            </div>

        </div>

        @section('script')
            <script>
                function openTab(evt, tabName) {
                    // Declare all variables
                    var i, licenseBodyItem, linesTab;

                    // Get all elements with class="licenseBodyItem" and hide them
                    licenseBodyItem = document.getElementsByClassName("licenseBodyItem");
                    for (i = 0; i < licenseBodyItem.length; i++) {
                        licenseBodyItem[i].style.display = "none";
                    }

                    // Get all elements with class="linesTab" and remove the class "active"
                    linesTab = document.getElementsByClassName("linesTab");
                    for (i = 0; i < linesTab.length; i++) {
                        linesTab[i].className = linesTab[i].className.replace(" active", "");
                    }

                    // Show the current tab, and add an "active" class to the button that opened the tab
                    document.getElementById(tabName).style.display = "block";
                    evt.currentTarget.className += " active";
                }
            </script>
        @endsection

    </div>

@endsection

