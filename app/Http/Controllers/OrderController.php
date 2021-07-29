<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use BarryvdhDomPDF as PDF;

class OrderController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
        $user = $request->user();

        $orders = Order::where('user_id', $user->id)->get();

    	return view('orders.index', compact('user', 'orders'));
    }

    public function show(Request $request, Order $order)
    {
        $user = $request->user();

        if ($user->id != $order->user_id) {
            return back();
        }

        return view('orders.show', compact('user', 'order'));
    }

    public function pdf(Request $request, Order $order)
    {
        $user = $request->user();

        if ($user->id != $order->user_id) {
            return back();
        }

        $pdf = PDF::loadView('orders.pdf.order', compact('user', 'order'));

        return $pdf->stream('order.pdf');
    }

    public function checkout(Request $request, Order $order)
    {
        $user = $request->user();

        if ($user->id != $order->user_id) {
            return back();
        }

        /**/
        $callbackURL = route('payment.callback_url');
        $returnURL = route('payment.return_url');
        $cancelURL = route('payment.cancel_url');

        $paygateURL = self::PAYGATE_URL;
        $token = self::PAYGATE_TOKEN;
        $identifier = mb_substr(uniqid(date('YmdHis') . $user->id ), 0, 25);
        $amount = str_replace(',', '', $order->amount);    //very important
        /**/

        session()->put('order_id', $order->id);

        $queryString = [
            "amount={$amount}",
            "token={$token}",
            "description=Commande de produits",
            "identifier={$identifier}",
            "url={$returnURL}",
        ];

        return redirect($paygateURL . implode('&', $queryString));
    }
}
