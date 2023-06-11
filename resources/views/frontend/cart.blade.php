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
                            <a href="{{ route('home.checkout') }}" class="btn btn-success @if (! count($carts)) disabled @endif">اذهب للدفع</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
