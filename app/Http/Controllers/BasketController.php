<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\PaymentMode;
use App\Models\ArticleOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use \Cart;

class BasketController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	$cartContent = Cart::instance('cosmetic')->content();

        return view('baskets.index', compact('cartContent'));
    }

    public function checkout(Request $request)
    {
    	$paymentModes = PaymentMode::all()->sortBy('id')->pluck(null, 'id');

        $cartContent = Cart::instance('cosmetic')->content();

        if ($request->isMethod('POST') && (Cart::instance('cosmetic')->count() > 0)) {

            if (!auth()->check()) {
                return back()->withDanger("Vous devez vous connecté pour continuer");
            }

            $this->validate($request, [
                'delivery_date' => ['bail', 'required', 'date', 'after_or_equal:today'],
                'delivery_address' => ['bail', 'required', 'min:3'],
                'payment_mode_id' => ['bail', 'required'],
            ]);

            $user = $request->user();

            try {

                DB::beginTransaction();

                /**/
                $callbackURL = route('payment.callback_url');
                $returnURL = route('payment.return_url');
                $cancelURL = route('payment.cancel_url');

                $paygateURL = self::PAYGATE_URL;
                $token = self::PAYGATE_TOKEN;
                $identifier = mb_substr(uniqid(date('YmdHis') . $user->id ), 0, 25);
                $amount = session()->has('discountCoupon') ? str_replace(',', '', Cart::instance('cosmetic')->subtotal()) * session('discountCoupon')->rate : Cart::instance('cosmetic')->total();
                $amount = str_replace(',', '', $amount);    //very important
                /**/

                $order = Order::create(
                    array_merge(
                        $request->except('_token'),
                        [
                            'amount' => $amount,
                            'user_id' => $user->id,
                            'coupon_id' => session()->has('discountCoupon') ? session('discountCoupon')->id : null,
                        ]
                    )
                );

                foreach ($cartContent as $row) {
                    ArticleOrder::create([
                        'order_id' => $order->id,
                        'article_id' => $row->id,
                        'quantity' => $row->qty,
                    ]);
                }

                DB::commit();

                session()->put('order_id', $order->id);

                $queryString = [
                    "amount={$amount}",
                    "token={$token}",
                    "description=Commande d'articles",
                    "identifier={$identifier}",
                    "url={$returnURL}",
                ];

                Cart::instance('cosmetic')->destroy();

                return redirect($paygateURL . implode('&', $queryString));
            } catch (\Exception $ex) {
                DB::rollback();
            }

            return back();
        }

        return view('baskets.checkout', compact('cartContent', 'paymentModes'));
    }

    public function add(Request $request, Article $article)
    {
    	//
        $quantity = 1;

        if ($request->has('quantity') && ($request->query('quantity') > 0)) {
            $quantity = $request->query('quantity');
        }

        Cart::instance('cosmetic')->add($article, $quantity, array());

        flashy()->success("Article ajouté au panier");

        return back();
    }

    public function remove(Request $request, string $row)
    {
    	Cart::instance('cosmetic')->remove($row);

        flashy()->info("Article supprimé du panier");

        return back();
    }

    public function update(Request $request, string $row)
    {
    	if ($request->has('quantity') && ($request->query('quantity') > 0)) {
            Cart::instance('cosmetic')->update($row, $request->query('quantity'));

            flashy()->info("Article mise à jour dans le panier");
        }

        return back();
    }

    public function truncate(Request $request)
    {
    	Cart::instance('cosmetic')->destroy();

        flashy()->error("Panier vidé");

        return back();
    }

    public function applyCoupon(Request $request)
    {
    	if ($request->isMethod('POST')) {
            if ($coupon = Coupon::whereCode($request->code)->first()) {
                session()->put('discountCoupon', $coupon);

                flashy()->primaryDark("Le coupon a été appliqué");
            }
        }

        return back();
    }

    public function removeCoupon(Request $request)
    {
    	session()->forget('discountCoupon');

        flashy()->mutedDark("Coupon de remise supprimé");

        return back();
    }
}
