@extends('frontend.layout.main')

@section('main')
    <div class="container">
        <div class="py-5 text-center">
            <h2>Checkout form</h2>
        </div>

        <div class="row">

            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge badge-secondary badge-pill">3</span>
                    <span class="text-center">محتويات السلة</span>
                </h4>
                <ul class="list-group mb-3">
                    @foreach ($carts as $cart)
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">{{ $cart->plan->name }}</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">${{ $cart->plan->price }}</span>
                        </li>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between">
                        <span>المجموع الاجمالي (USD)</span>
                        <strong>${{ $total }}</strong>
                    </li>
                </ul>

                {{-- Copone --}}
                {{-- <form class="card p-2">
                    <div class="input-group">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary buttonredeem">Redeem</button>
                        </div>
                        <input type="text" class="form-control promocode" placeholder="Promo code">
                    </div>
                </form> --}}
            </div>


            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>

                <form action="{{ route('home.paypal') }}" method="POST" class="needs-validation" novalidate>

                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">الاسم الاول</label>
                            <input type="text" name="firstName"
                                class="form-control firstName @error('firstName') is-invalid @enderror" id="firstName"
                                placeholder="" value="" required>
                            @error('firstName')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">الاسم الثاني</label>
                            <input type="text" name="lastName"
                                class="form-control @error('lastName') is-invalid @enderror lastName" id="lastName"
                                placeholder="" value="" required>
                            @error('firstName')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email">البريد الالكتروني</label>
                            <input type="email" name="email" class="form-control email @error('email') is-invalid @enderror " id="email"
                                placeholder="you@example.com">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="phone">رقم الهاتف</label>
                            <input type="number" name="phone" class="form-control phone @error('phone') is-invalid @enderror " id="phone" placeholder="123456284"
                                required>
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="address">العنوان</label>
                            <input type="text" name="address" class="form-control address @error('address') is-invalid @enderror " id="address" placeholder="1234 Main St"
                                required>
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="address2">العنوان الثاني</label>
                            <input type="text" name="address2" class="form-control address2 @error('address2') is-invalid @enderror " id="address2" placeholder="1234 Main St"
                                required>
                            @error('address2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">الدولة</label>
                            <input type="text" name="country" class="form-control country @error('country') is-invalid @enderror " id="country" placeholder="1234 Main St"
                                required>
                            @error('country')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="state">الولاية</label>
                            <input type="text" name="state" class="form-control state @error('state') is-invalid @enderror " id="state" placeholder="1234 Main St"
                                required>
                            @error('state')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" name="zip" class="form-control zip @error('zip') is-invalid @enderror " id="zip" placeholder="" required>
                            @error('zip')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <hr class="mb-4">

                    <h4 class="mb-3">Payment</h4>

                    <div class="my-3">
                        <div class="payment">
                            <img width="150px" src="{{ asset('paypal.png') }}" alt="" srcset="">
                            {{-- <a href="{{ route('home.checkout') }}" class="paypal"><img src="{{ asset('stripe.png') }}"
                                    alt="" srcset=""></a> --}}
                        </div>
                        {{-- <div class="custom-control custom-radio">
                            <label class="custom-control-label" for="paypal">PayPal</label>
                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input"
                                required>
                        </div> --}}
                    </div>

                    {{-- <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Name on card</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required>
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit card number</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" required>
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Expiration</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                            <div class="invalid-feedback">
                                Expiration date required
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                    </div> --}}
                    <hr class="mb-4">
                    <button type="submit" class="btn btn-primary btn-lg mb-4 btn-block">تاكيد الطلب</button>
                </form>
            </div>


        </div>
    </div>
@endsection

@push('css')
    <style>
        .promocode {
            border-radius: 15px !important;
            border-top-right-radius: 0 !important;
            border-bottom-right-radius: 0 !important;
        }

        .buttonredeem {
            height: 44px;
            border-radius: 10px !important;
            border-top-left-radius: 0 !important;
            border-bottom-left-radius: 0 !important;
        }

        .card {
            margin-right: 40px;
        }

        .lastName,
        .firstName,
        .address,
        .phone,
        .email,
        .address2,
        .country,
        .state,
        .zip {
            height: 44px;
        }
    </style>
@endpush
