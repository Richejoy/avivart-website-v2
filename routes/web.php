<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ComputerScienceController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\AgribusinessController;
use App\Http\Controllers\ImmovableController;
use App\Http\Controllers\CosmeticController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\CronController;
use App\Http\Controllers\ProductRayController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ConversionController;
use App\Http\Controllers\ProductUserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/cache/clear', function() {
	Artisan::call('cache:clear');
	Artisan::call('view:clear');
	return "Cache is cleared";
});

Route::prefix('/')->name('page.')->group(function() {
	Route::get('/', [PageController::class, 'index'])->name('index');
	Route::get('/about', [PageController::class, 'about'])->name('about');
	Route::get('/terms', [PageController::class, 'terms'])->name('terms');
	Route::get('/conditions', [PageController::class, 'conditions'])->name('conditions');
	Route::get('/faq', [PageController::class, 'faq'])->name('faq');
	Route::get('/sitemap', [PageController::class, 'sitemap'])->name('sitemap');

	Route::middleware(['logged'])->group(function () {
		Route::match(['GET', 'POST'], '/login', [PageController::class, 'login'])->name('login');
		Route::match(['GET', 'POST'], '/register', [PageController::class, 'register'])->name('register');
		Route::match(['GET', 'POST'], '/confirmed', [PageController::class, 'confirmed'])->name('confirmed');
		Route::match(['GET', 'POST'], '/password/forgot', [PageController::class, 'passwordForgot'])->name('password_forgot');
		Route::match(['GET', 'POST'], '/password/reset/{email}/{token}', [PageController::class, 'passwordReset'])->name('password_reset');

		Route::get('/activated/{email}/{token}', [PageController::class, 'activated'])->name('activated');
		Route::get('/removed/account/{email}/{token}', [PageController::class, 'removedAccount'])->name('removed_account');
		Route::get('/enabled/tfa/{email}/{token}', [PageController::class, 'enabledTFA'])->name('enabled_tfa');
	});

	Route::match(['GET', 'POST'], '/donate', [PageController::class, 'donate'])->name('donate');

	Route::get('/logout', [PageController::class, 'logout'])->name('logout');

	Route::get('/splashscreen', [PageController::class, 'splashscreen'])->name('splashscreen');
});

Route::prefix('/boutique')->name('store.')->middleware(['store'])->group(function() {
	Route::get('/', [StoreController::class, 'index'])->name('index');
	Route::get('/{product}/afficher', [StoreController::class, 'show'])->name('show');
	Route::get('/recherche', [StoreController::class, 'search'])->name('search');
	Route::get('/aliments/bio', [StoreController::class, 'organicFoods'])->name('organic_foods');
	Route::get('/aliments/manufactures', [StoreController::class, 'manufacturedFoods'])->name('manufactured_foods');
	Route::get('/product/home/appliance', [StoreController::class, 'homeAppliance'])->name('home_appliance');
	Route::get('/product/high/tech', [StoreController::class, 'highTech'])->name('high_tech');
	Route::get('/other/products', [StoreController::class, 'otherProducts'])->name('other_products');
});

Route::prefix('/immobilier')->name('immovable.')->group(function() {
	Route::get('/', [ImmovableController::class, 'index'])->name('index');
});

Route::prefix('/annonce')->name('ad.')->group(function() {
	Route::get('/', [AdController::class, 'index'])->name('index');
});

Route::prefix('/agrobusiness')->name('agribusiness.')->group(function() {
	Route::get('/', [AgribusinessController::class, 'index'])->name('index');
});

Route::prefix('/informatique')->name('informatics.')->group(function() {
	Route::get('/', [ComputerScienceController::class, 'index'])->name('index');
	Route::get('/solutions', [ComputerScienceController::class, 'solutions'])->name('solutions');
	Route::get('/networks', [ComputerScienceController::class, 'networks'])->name('networks');
	Route::get('/databases', [ComputerScienceController::class, 'databases'])->name('databases');
	Route::get('/services', [ComputerScienceController::class, 'services'])->name('services');
	Route::get('/partners', [ComputerScienceController::class, 'partners'])->name('partners');
	Route::get('/formations', [ComputerScienceController::class, 'formations'])->name('formations');
});

Route::prefix('/cosmetique')->name('cosmetic.')->group(function() {
	Route::get('/', [CosmeticController::class, 'index'])->name('index');
});

Route::resource('/product_user', ProductUserController::class)->middleware(['auth']);
Route::resource('/order', OrderController::class)->middleware(['auth']);
Route::resource('/transaction', TransactionController::class)->middleware(['auth']);

Route::prefix('/order')->name('order.')->middleware(['auth'])->group(function () {
	Route::get('/checkout/{order}', [OrderController::class, 'checkout'])->name('checkout');
	Route::get('/pdf/{order}', [OrderController::class, 'pdf'])->name('pdf');
});

Route::prefix('/utilisateur')->name('user.')->middleware(['auth'])->group(function() {
	Route::get('/commandes', [UserController::class, 'orders'])->name('orders');
	Route::get('/produits/favorite', [UserController::class, 'favoriteProducts'])->name('favorite_products');
	Route::get('/transactions', [UserController::class, 'transactions'])->name('transactions');
	Route::get('/payments', [UserController::class, 'payments'])->name('payments');
	Route::get('/{product}/add', [UserController::class, 'add'])->name('add');

	Route::get('/', [UserController::class, 'index'])->name('index');
	Route::match(['GET', 'POST'], '/{user}/afficher', [UserController::class, 'show'])->name('show');
	Route::match(['GET', 'POST'], '/{user}/editer', [UserController::class, 'edit'])->name('edit');
});

Route::prefix('/panier')->name('cart.')->group(function() {
	Route::get('/', [CartController::class, 'index'])->name('index');
	Route::get('/{product}/ajouter', [CartController::class, 'add'])->name('add');
	Route::get('/{row}/supprimer', [CartController::class, 'remove'])->name('remove');
	Route::get('/{row}/modifier', [CartController::class, 'update'])->name('update');
	Route::get('/vider', [CartController::class, 'truncate'])->name('truncate');
	Route::post('/appliquer/coupon', [CartController::class, 'applyCoupon'])->name('apply_coupon');
	Route::get('/supprimer/coupon', [CartController::class, 'removeCoupon'])->name('remove_coupon');
	Route::match(['GET', 'POST'], '/payement', [CartController::class, 'checkout'])->name('checkout');
});

Route::prefix('/contact')->name('contact.')->group(function () {
	Route::get('/', [ContactController::class, 'index'])->name('index');
	Route::post('/store', [ContactController::class, 'store'])->name('store');
});

Route::prefix('/newsletter')->name('newsletter.')->group(function () {
	Route::get('/', [NewsletterController::class, 'index'])->name('index');
	Route::post('/store', [NewsletterController::class, 'store'])->name('store');
	Route::get('/unsubscribe/{email}/{token}', [NewsletterController::class, 'unsubscribe'])->name('unsubscribe');
});

Route::prefix('/payement')->name('payment.')->group(function () {
	Route::post('/callback/url', [PaymentController::class, 'callbackURL'])->name('callback_url');
	Route::get('/return/url', [PaymentController::class, 'returnURL'])->name('return_url');
	Route::get('/cancel/url', [PaymentController::class, 'cancelURL'])->name('cancel_url');
});


/** */
Route::prefix('parametres')->name('settings.')->middleware(['auth'])->group(function () {
	Route::get('/', [SettingsController::class, 'index'])->name('index');
	Route::get('/suppression/compte', [SettingsController::class, 'removingAccount'])->name('removing_account');
	Route::get('/activation/tfa', [SettingsController::class, 'enablingTFA'])->name('enabling_tfa');
});
/** */

Route::prefix('/cron')->name('cron.')->group(function () {
	Route::get('/dbbackup', [CronController::class, 'dbbackup'])->name('dbbackup');
});

Route::prefix('/product/ray')->name('productRay.')->group(function() {
	Route::get('/', [ProductRayController::class, 'index'])->name('index');
	Route::get('/show/{productRay}', [ProductRayController::class, 'show'])->name('show');
});

Route::prefix('/product/category')->name('productCategory.')->group(function() {
	Route::get('/', [ProductCategoryController::class, 'index'])->name('index');
	Route::get('/show/{productCategory}', [ProductCategoryController::class, 'show'])->name('show');
});

Route::prefix('/product/type')->name('productType.')->group(function() {
	Route::get('/', [ProductTypeController::class, 'index'])->name('index');
	Route::get('/show/{productType}', [ProductTypeController::class, 'show'])->name('show');
});

Route::prefix('/conversion')->name('conversion.')->group(function() {
	Route::get('/', [ConversionController::class, 'index'])->name('index');
	Route::get('/show/{conversion}', [ConversionController::class, 'show'])->name('show');
});

Route::prefix('/service')->name('service.')->group(function() {
	Route::get('/', [ServiceController::class, 'index'])->name('index');
});