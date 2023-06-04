<?php

namespace App\Http\Controllers\Web;

use App\Models\Plan;
use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Contact;
use App\Models\Trip;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function hotel()
    {
        $hotels = Hotel::get();
        return view('frontend.hotel', compact('hotels'));
    }

    public function plan(Hotel $hotel)
    {
        $data = $hotel->load('plans:id,name,days,price,mycosis,lunch,dinner,plantable_id');
        return view('frontend.plan', compact('hotel'));
    }

    public function tripPlan(Trip $trip)
    {
        $data = $trip->load('plans:id,name,days,price,mycosis,lunch,dinner,plantable_id');
        return view('frontend.plan', compact('data'));
    }

    public function cart()
    {
        $carts = Cart::where('user_id', auth()->id())->with('user', 'plan')->get();
        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart->plan->price;
        }

        return view('frontend.cart', compact('carts', 'total'));
    }

    public function cartSave(Request $request, Plan $plan)
    {
        Cart::create([
            'user_id' => auth()->id(),
            'plan_id' => $plan->id,
        ]);

        return redirect()->route('home.cart');
    }

    public function cartDelete(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('home.cart');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function contactStore(Request $request)
    {
        Contact::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'message' => $request->message,
            'phone'   => $request->phone,
        ]);

        return redirect()->back();
    }

    public function checkout()
    {
        $carts = Cart::where('user_id', auth()->id())->with('user', 'plan')->get();

        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart->plan->price;
        }
        return view('frontend.checkout', compact('carts', 'total'));
    }

    public function program()
    {
        $trips = Trip::with('plans')->get();
        return view('frontend.program', compact('trips'));
    }
}
