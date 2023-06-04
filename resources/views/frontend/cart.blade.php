@extends('frontend.layout.main')

@section('main')
    <div class="salla" id="salla">
        <h2 class="main-title"> سلة المشتريات</h2>

        <div class="container">
            <div id="deleteAll"></div>
            <table class="mb-4">
                <thead>
                    <tr>
                        <th>نوع الحجز</th>
                        <th>العنوان</th>
                        <th>السعر</th>
                        <th>المدة</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    @foreach ($carts as $cart)
                        <tr>
                            <td>
                                @if ($cart->plan->plantable_type == 'App\Models\Trip')
                                    رحله
                                @elseif ($cart->plan->plantable_type == 'App\Models\Trip')
                                    فندق
                                @endif
                            </td>
                            <td>{{ $cart->plan->plantable->location }}</td>
                            <td>{{ $cart->plan->price }} $</td>
                            <td>{{ $cart->plan->days }}</td>
                            <td><a href="{{ route('home.cart.delete', $cart->id) }}" class="btn btn-danger">حذف</a></td>
                        </tr>
                    @endforeach
                    <tr>
                        <td>
                            <a href="{{ route('home.checkout') }}" class="btn btn-success">اذهب للدفع</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="test">
                <div class="total">
                    <p>المجموع</p>
                    <p> {{ $total }} $</p>
                </div>
                <p style="text-align: center">ادفع عن طريق احدى بوابات الدفع في الاسفل</p>
                <div class="payment">
                    <a href="{{ route('home.checkout') }}" class="paypal"><img src="{{ asset('paypal.png') }}"
                            alt="" srcset=""></a>
                    <a href="{{ route('home.checkout') }}" class="paypal"><img src="{{ asset('stripe.png') }}"
                            alt="" srcset=""></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .test {
            width: 500px;
            /* background-color: aliceblue; */
            border-radius: 15px;
            margin: 0 auto;
            padding: 15px
        }

        .payment {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px 10px 0 10px;
        }

        .total {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0 50px;
        }

        .paypal {
            width: 200px;
            height: 38px;
            text-align: center;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            background-size: 100% 100%;
            border-radius: 15px
        }

        .paypal>img {
            width: 88px;
        }
    </style>
@endpush
