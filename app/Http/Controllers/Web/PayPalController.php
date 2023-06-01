<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\AdaptivePayments;

class PayPalController extends Controller
{
    public function paypal(Request $request)
    {
        dd($request);
        $data = [];
        $data['items'] = [
            [
                'name'  => 'Product 1',
                'price' => 10,
                'desc'  => 'Description for product 1',
                'qty'   => 1
            ],
            [
                'name'  => 'Product 2',
                'price' => 20,
                'desc'  => 'Description for product 2',
                'qty'   => 2
            ]
        ];

        $data['invoice_id']          = 1;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url']          = route('home.paypal.success');
        $data['cancel_url']          = route('home.paypal.cancel');

        $total = 0;
        foreach ($data['items'] as $item) {
            $total += $item['price'] * $item['qty'];
        }

        $data['total'] = $total;

        $provider = new ExpressCheckout;
        $response = $provider->setExpressCheckout($data);
        return redirect($response['paypal_link']);
    }

    public function success(Request $request)
    {
        // dd($request->all());
        $provider = new ExpressCheckout;
        $response = $provider->getExpressCheckoutDetails($request->token);
        return $response;
    }

    public function cancel(Request $request)
    {
        // dd($request->all());
        $provider = new ExpressCheckout;
        $response = $provider->getExpressCheckoutDetails($request->token);
        return $response;
    }
}
