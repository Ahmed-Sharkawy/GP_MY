<?php

namespace App\Http\Controllers\Web;

use App\Models\Cart;
use App\Models\Plan;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Web\OrderRequest;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalController extends Controller
{
    public function paypal(OrderRequest $request)
    {
        $cartPlanId = Cart::pluck('plan_id');
        $plans      = Plan::whereIn('id', $cartPlanId)->get();
        session()->put('requestData', $request->all());
        session()->put('plans', $plans);

        $data = [];
        $data['items']               = $plans;
        $data['invoice_id']          = Str::random(30);
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url']          = route('home.paypal.success');
        $data['cancel_url']          = route('home.paypal.cancel');

        $total = 0;
        foreach ($plans as $plan) {
            $total += $plan->price;
        }

        $data['total'] = $total;
        $provider = new ExpressCheckout;
        $response = $provider->setExpressCheckout($data);
        return redirect($response['paypal_link']);
    }

    public function success(Request $request)
    {
        $requestData = session('requestData');
        $plans       = session('plans');

        $order = Order::create([
            'user_id'    => auth()->id(),
            'firstName'  => $requestData['firstName'],
            'lastName'   => $requestData['lastName'],
            'email'      => $requestData['email'],
            'phone'      => $requestData['phone'],
            'address'    => $requestData['address'],
            'address2'   => $requestData['address2'],
            'country'    => $requestData['country'],
            'state'      => $requestData['state'],
            'zip'        => $requestData['zip'],
            'payment_id' => $request->token,
        ]);

        foreach ($plans as $plan) {
            OrderItem::create([
                'order_id' => $order->id,
                'plan_id'  => $plan->id
            ]);
        }

        // $provider = new ExpressCheckout;
        // $response = $provider->getExpressCheckoutDetails($request->token);

        Cart::where('user_id', auth()->id())->delete();
        session()->forget('requestData');
        session()->forget('plans');

        flash()->translate('ar')->addSuccess('تمت عملية الدفع بنجاح');
        return redirect()->route('home.programs');
    }

    public function cancel(Request $request)
    {
        // dd($request->all());
        // $provider = new ExpressCheckout;
        // $response = $provider->getExpressCheckoutDetails($request->token);
        flash()->translate('ar')->addError('لقد فشات عملية الدفع حاول مرة اخري');
        return redirect()->route('home.checkout');
    }
}
