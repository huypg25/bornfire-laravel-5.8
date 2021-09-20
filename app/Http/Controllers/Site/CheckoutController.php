<?php

namespace App\Http\Controllers\Site;
use Cart;
use Illuminate\Http\Request;
use App\Contracts\OrderContract;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    protected $orderRepository;

    public function __construct(OrderContract $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function getCheckout()
    {
        return view('site.pages.checkout');
    }

    public function placeOrder(Request $request)
    {
        // Before storing the order we should implement the
        // request validation which I leave it to you
        $order = $this->orderRepository->storeOrderDetails($request->all());
//dd($order->user->email);
        $data=[
            'title'=>'sdaasdad',
            'content'=>'dasdasdasd',
            'email'=>$order->user->email
        ];
//dd($data["email"]);
        $user = $order->user;

        Mail::send('site.pages.success', ['user' => $user], function ($m) use ($user) {
//            $m->from('hello@app.com', 'Your Application');
            $m->to($user->email)->subject('Your Reminder!');
        });

        Cart::clear();
        return view('site.pages.success');

    }
}
