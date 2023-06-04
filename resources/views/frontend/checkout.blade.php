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
                    <span class="text-center">Your cart</span>
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

                <form class="card p-2">
                    <div class="input-group">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary buttonredeem">Redeem</button>
                        </div>
                        <input type="text" class="form-control promocode" placeholder="Promo code">
                    </div>
                </form>
            </div>


            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>

                <form class="needs-validation" novalidate>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control firstName" id="firstName" placeholder=""
                                value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control lastName" id="lastName" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control email" id="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Please enter a valid email address for shipping updates.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="address">Phone</label>
                            <input type="text" class="form-control address" id="address" placeholder="1234 Main St"
                                required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control address" id="address" placeholder="1234 Main St"
                                required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="address">Address 2</label>
                            <input type="text" class="form-control address2" id="address2" placeholder="1234 Main St"
                                required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <input type="text" class="form-control country" id="country" placeholder="1234 Main St"
                                required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <input type="text" class="form-control state" id="state" placeholder="1234 Main St"
                                required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control zip" id="zip" placeholder="" required>
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
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
                    <a href="{{ route('home.paypal') }}" class="btn btn-primary btn-lg mb-4 btn-block">تاكيد الطلب</a>
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
        .email,
        .address2,
        .country,
        .state,
        .zip {
            height: 44px;
        }
    </style>
@endpush
