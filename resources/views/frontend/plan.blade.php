@extends('frontend.layout.main')
@section('main')
    <!-- Start Pricing -->
    <div class="pricing" id="pricing" style="direction: rtl;">
        <div class="dots dots-up"></div>
        <div class="dots dots-down"></div>
        <h2 class="main-title" id="details">تفاصيل الرحلة</h2>
        <div class="container">
            @foreach ($hotel->plans as $plan)
                <div class="box">
                    <div class="title">الاساسية</div>
                    <img src="{{ asset('frontend/img/hosting-basic.png') }}" alt="">
                    <div class="price">
                        <span class="amount" id="pricee2">${{ $plan->price }}</span>
                        <span class="time" id="per2">{{ $plan->days }}</span>
                    </div>
                    <ul>
                        <li id="tit2">
                            {{ $plan->name }} <span><i class="fa-solid fa-check"></i></span>
                        </li>
                        <li>
                            {{ $plan->days }} <span><i class="fa-solid fa-check"></i></span>
                        </li>
                        <li>فطار
                            @if ($plan->mycosis)
                                <span><i class="fa-solid fa-check"></i></span>
                            @else
                                <span style="color: red"><i class="fa-solid fa-xmark"></i></span>
                            @endif
                        </li>
                        <li>غداء
                            @if ($plan->lunch)
                                <span><i class="fa-solid fa-check"></i></span>
                            @else
                                <span style="color: red"><i class="fa-solid fa-xmark"></i></span>
                            @endif
                        </li>
                        <li>عشاء
                            @if ($plan->dinner)
                                <span><i class="fa-solid fa-check"></i></span>
                            @else
                                <span style="color: red"><i class="fa-solid fa-xmark"></i></span>
                            @endif
                        </li>
                    </ul>
                    <div class="flex">
                        <a href="{{ route('home.cart.save', $plan->id) }}">اضافة الي السلة</a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!-- End Pricing -->
@endsection
