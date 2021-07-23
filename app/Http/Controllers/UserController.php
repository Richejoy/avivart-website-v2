<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\ProductUser;
use App\Models\Ad;
use App\Models\AdUser;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use MercurySeries\Flashy\Flashy;
use App\Models\Civility;
use App\Models\Country;
use App\Models\Payment;

class UserController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
        $user = $request->user();

        $nbPayments = Payment::whereHas('order', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->count();

    	return view('users.index', compact('nbPayments'));
    }

    public function show(Request $request, User $user)
    {
        $user = $request->user();

        return view('users.show', compact('user'));
    }

    public function edit(Request $request, User $user)
    {
        $civilities = Civility::all()->sortBy('id')->pluck(null, 'id');
        $countries = Country::all()->sortBy('id')->pluck(null, 'id');

        $user = $request->user();

        if ($request->isMethod('POST')) {

            switch ($request->form) {
                case 'password':
                    
                    $this->validate($request, [
                        'password_old' => ['required'],
                        'password' => ['required', 'min:9', 'confirmed'],
                    ]);

                    if (Hash::check($request->password_old, $user->password)) {
                        $user->update([
                            'password' => Hash::make($request->password),
                        ]);

                        Flashy::success('Mises à jour éffectuées avec succès');
                    } else {
                        Flashy::error('Ancien mot de passe incorrecte');
                    }

                    break;

                case 'username':
                    
                    $this->validate($request, [
                        'username' => ['required', 'min:8', 'max:15', 'unique:users'],
                    ]);

                    $user->update($request->all());

                    Flashy::success('Mises à jour éffectuées avec succès');

                    break;

                case 'email':
                    
                    $this->validate($request, [
                        'email' => ['required', 'min:6', 'max:40', 'unique:users']
                    ]);

                    $user->update($request->all());

                    Flashy::success('Mises à jour éffectuées avec succès');

                    break;

                case 'phone':
                    
                    $this->validate($request, [
                        'phone' => ['required', 'min:8', 'max:40', 'unique:users'],
                    ]);

                    $user->update($request->all());

                    Flashy::success('Mises à jour éffectuées avec succès');

                    break;

                case 'avatar':

                    $this->validate($request, [
                        'image' => 'required|mimes:jpeg,png,jpg,gif|max:10000',
                    ]);

                    Flashy::success('Mises à jour éffectuées avec succès');

                    break;

                case 'identity':
                    
                    $this->validate($request, [
                        'country_id' => ['required'],
                        'civility_id' => ['required'],
                        'first_name' => ['required', 'min:2', 'max:25'],
                        'last_name' => ['required', 'min:2', 'max:25'],
                    ]);

                    $user->update($request->all());

                    Flashy::success('Mises à jour éffectuées avec succès');
                    
                    break;
                    
                default:

                    break;
            }

            return back();
        }

        return view('users.edit', compact('user', 'civilities', 'countries'));
    }

    public function addProduct(Request $request, Product $product)
    {
        $user = $request->user();

        if (!ProductUser::where(['product_id' => $product->id, 'user_id' => $user->id])->first()) {
            ProductUser::create([
                'product_id' => $product->id,
                'user_id' => $user->id
            ]);
        }

        session()->put('userFavoriteProducts', ProductUser::where(['user_id' => $user->id])->count());

        return back();
    }

    public function addAd(Request $request, Ad $ad)
    {
        $user = $request->user();

        if (!AdUser::where(['ad_id' => $ad->id, 'user_id' => $user->id])->first()) {
            AdUser::create([
                'ad_id' => $ad->id,
                'user_id' => $user->id
            ]);
        }

        session()->put('userFavoriteAds', AdUser::where(['user_id' => $user->id])->count());

        return back();
    }

    public function orders(Request $request)
    {
        $user = $request->user();

        $orders = Order::where('user_id', $user->id)->get();

        return view('users.orders', compact('user', 'orders'));
    }

    public function favoriteProducts(Request $request)
    {
        $user = $request->user();

        $productsUsers = ProductUser::where('user_id', $user->id)->get();

        return view('users.favorite_products', compact('user', 'productsUsers'));
    }

    public function ads(Request $request)
    {
        $user = $request->user();

        $ads = Ad::where('user_id', $user->id)->get();

        return view('users.ads', compact('user', 'ads'));
    }

    public function favoriteAds(Request $request)
    {
        $user = $request->user();

        $adsUsers = AdUser::where('user_id', $user->id)->get();

        return view('users.favorite_ads', compact('user', 'adsUsers'));
    }

    public function transactions(Request $request)
    {
        $user = $request->user();

        $transactions = Transaction::where('user_id', $user->id)->get();

        return view('users.transactions', compact('user', 'transactions'));
    }

    public function payments(Request $request)
    {
        $user = $request->user();

        $payments = Payment::whereHas('order', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->get();

        return view('users.payments', compact('user', 'payments'));
    }
}
