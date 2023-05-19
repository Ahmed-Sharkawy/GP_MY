@extends('frontend.layout.main')
@section('main')
    <!-- Start Pricing -->
    <div class="pricing" id="pricing" style="direction: rtl;">
        <div class="dots dots-up"></div>
        <div class="dots dots-down"></div>
        <h2 class="main-title" id="details">تفاصيل الرحلة</h2>
        <div class="container">

            <div class="box popular">
                <div class="label">الاكثر شراء</div>
                <div class="title">المتقدمة</div>
                <img src="{{ asset('frontend/img/hosting-advanced.png') }}" alt="">

                <div class="price">
                    <span class="amount" id="pricee1">$20</span>
                    <span class="time" id="per1">ثلاث ايام</span>
                </div>

                <ul>
                    <li id="tit1"> رحلة الي الاقصر </li>
                    <li>ليلتان </li>
                    <li> الاساسية</li>
                    <li>الاساسية</li>
                    <li>الاساسية</li>
                </ul>

                <div class="flex">
                    <a href="book.html">شراء</a>
                    <a id="buy1">اضافة الي السلة</a>
                </div>
            </div>

            <div class="box">
                <div class="title">الاساسية</div>
                <img src="{{ asset('frontend/img/hosting-basic.png') }}" alt="">
                <div class="price">
                    <span class="amount" id="pricee2">$16</span>
                    <span class="time" id="per2">ثلاث ايام</span>
                </div>
                <ul>
                    <li id="tit2"> رحلة الي الاهرامات </li>
                    <li> اربع ليالي</li>
                    <li> الاساسية</li>
                    <li>الاساسية</li>
                    <li>الاساسية</li>
                </ul>
                <div class="flex">
                    <a href="book.html">شراء</a>
                    <a id="buy2">اضافة الي السلة</a>
                </div>
            </div>

            <div class="box">
                <div class="title">الاساسية</div>
                <img src="{{ asset('frontend/img/hosting-basic.png') }}" alt="">
                <div class="price">
                    <span class="amount" id="pricee3">$11</span>
                    <span class="time" id="per3">ثلاث ايام</span>
                </div>

                <ul>
                    <li id="tit3"> رحلة سياحية</li>
                    <li>ثلاث ليالي</li>
                    <li> الاساسية</li>
                    <li>الاساسية</li>
                    <li>الاساسية</li>
                </ul>

                <div class="flex">
                    <a href="book.html">شراء</a>
                    <a id="buy3">اضافة الي السلة</a>
                </div>
            </div>

            <div class="box">
                <div class="title">الاساسية</div>
                <img src="{{ asset('frontend/img/hosting-basic.png') }}" alt="">
                <div class="price">
                    <span class="amount" id="pricee4">$13</span>
                    <span class="time" id="per4">ثلاث ايام</span>
                </div>
                <ul>
                    <li id="tit4"> رحلة الي اسوان</li>
                    <li>ثلاث ليالي</li>
                    <li> الاساسية</li>
                    <li>الاساسية</li>
                    <li>الاساسية</li>
                </ul>
                <div class="flex">
                    <a href="book.html">شراء</a>
                    <a id="buy4">اضافة الي السلة</a>
                </div>
            </div>

            <div class="box">
                <div class="title">الاساسية</div>
                <img src="{{ asset('frontend/img/hosting-basic.png') }}" alt="">
                <div class="price">
                    <span class="amount" id="pricee5">$18</span>
                    <span class="time" id="per5">ثلاث ايام</span>
                </div>

                <ul>
                    <li id="tit5"> رحلة سوهاج</li>
                    <li>ثلاث ليالي</li>
                    <li> الاساسية</li>
                    <li>الاساسية</li>
                    <li>الاساسية</li>
                </ul>

                <div class="flex">
                    <a href="book.html">شراء</a>
                    <a id="buy5">اضافة الي السلة</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing -->
@endsection
