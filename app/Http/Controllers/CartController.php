<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\PaymentMode;
use App\Models\ProductOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use \Cart;

class CartController extends Controller
{
    public function __construct()
	{
		parent::__construct();
	}

    public function index(Request $request)
    {
    	$cartContent = Cart::content();

        return view('carts.index', compact('cartContent'));
    }

    public function checkout(Request $request)
    {
    	$paymentModes = PaymentMode::all()->sortBy('id')->pluck(null, 'id');

        $cartContent = Cart::content();

        if ($request->isMethod('POST') && (Cart::count() > 0)) {

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
                $amount = session()->has('discountCoupon') ? str_replace(',', '', Cart::subtotal()) * session('discountCoupon')->rate : Cart::total();
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
                    ProductOrder::create([
                        'order_id' => $order->id,
                        'product_id' => $row->id,
                        'quantity' => $row->qty,
                    ]);
                }

                DB::commit();

                session()->put('order_id', $order->id);

                $queryString = [
                    "amount={$amount}",
                    "token={$token}",
                    "description=Commande de produits",
                    "identifier={$identifier}",
                    "url={$returnURL}",
                ];

                Cart::destroy();

                return redirect($paygateURL . implode('&', $queryString));
            } catch (\Exception $ex) {
                DB::rollback();
            }

            return back();
        }

        return view('carts.checkout', compact('cartContent', 'paymentModes'));
    }

    public function add(Request $request, Product $product)
    {
    	//
        $quantity = 1;

        if ($request->has('quantity') && ($request->query('quantity') > 0)) {
            $quantity = $request->query('quantity');
        }

        Cart::add($product, $quantity, array());

        flashy()->success("Produit ajouté au panier");

        return back();
    }

    public function remove(Request $request, string $row)
    {
    	Cart::remove($row);

        flashy()->info("Produit supprimé du panier");

        return back();
    }

    public function update(Request $request, string $row)
    {
    	if ($request->has('quantity') && ($request->query('quantity') > 0)) {
            Cart::update($row, $request->query('quantity'));

            flashy()->info("Produit mise à jour dans le panier");
        }

        return back();
    }

    public function truncate(Request $request)
    {
    	Cart::destroy();

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
