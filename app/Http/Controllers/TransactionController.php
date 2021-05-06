<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	return view('transactions.index');
    }

    public function show(Request $request, Transaction $transaction)
    {
        $user = $request->user();

        return view('transactions.show', compact('transaction'));
    }
}
