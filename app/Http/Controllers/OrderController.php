<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	return view('orders.index');
    }

    public function show(Request $request, Order $order)
    {
        $user = $request->user();

        return view('orders.show', compact('order'));
    }
}
