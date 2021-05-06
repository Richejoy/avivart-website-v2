<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    /** Callback URL */
    public function callbackURL(Request $request)
    {
        $response = ['status' => 'Unknown error'];

        if ($request->isMethod('POST')) {

            $data = json_encode($request->all());   //object
            $operation = json_decode($data, true);  //array

            file_put_contents(public_path('payments.json'), $data);

            if (session('order_id') || $request->query('order_id')) {

                try {

                    DB::beginTransaction();

                    $order = Order::find(session('order_id') || $request->query('order_id'));

                    $payment = Payment::where('order_id', $order->id)->first();

                    if (!$payment) {
                        $payment = Payment::create(
                            array_merge(
                                $operation,
                                [
                                    'order_id' => $order->id,
                                ]
                            )
                        );
                    }

                    $payment->order->update([
                        'paid' => true,
                    ]);

                    DB::commit();

                    $response = ['status' => 'Success'];
                } catch (\Exception $ex) {
                    DB::rollBack();

                    $response = ['status' => 'Database error'];
                }
            } else {
                $response = ['status' => 'Required params'];
            }
        }

        return response()->json($response);
    }

    /** Return URL */
    public function returnURL(Request $request)
    {
        return view('payments.return_url');
    }

    /** Cancel URL */
    public function cancelURL(Request $request)
    {
        return view('payments.cancel_url');
    }
}
