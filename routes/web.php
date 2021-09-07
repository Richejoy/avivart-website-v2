<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ComputerScienceController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\AgribusinessController;
use App\Http\Controllers\ImmovableController;
use App\Http\Controllers\CosmeticController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\CronController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ConversionController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ImageController;

use App\Http\Controllers\OrderController;

use App\Http\Controllers\CartController;
use App\Http\Controllers\BasketController;

use App\Http\Controllers\ProductRayController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\ProductUserController;
use App\Http\Controllers\ProductImageController;

use App\Http\Controllers\ArticleRayController;
use App\Http\Controllers\ArticleCategoryController;
use App\Http\Controllers\ArticleTypeController;
use App\Http\Controllers\ArticleUserController;
use App\Http\Controllers\ArticleImageController;

use App\Http\Controllers\AdRayController;
use App\Http\Controllers\AdCategoryController;
use App\Http\Controllers\AdTypeController;
use App\Http\Controllers\AdUserController;
use App\Http\Controllers\AdImageController;
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

Route::get('/clear', function() {
	Artisan::call('config:clear');
	Artisan::call('route:clear');
	Artisan::call('cache:clear');
	Artisan::call('view:clear');
	return "Route, Cache and View are cleared";
});

Route::prefix('/')->name('page.')->group(function() {
	Route::get('/', [PageController::class, 'index'])->name('index');
	Route::get('/about', [PageController::class, 'about'])->name('about');
	Route::get('/terms', [PageController::class, 'terms'])->name('terms');
	Route::get('/conditions', [PageController::class, 'conditions'])->name('conditions');
	Route::get('/faq', [PageController::class, 'faq'])->name('faq');
	Route::get('/sitemap', [PageController::class, 'sitemap'])->name('sitemap');
	Route::get('/galleries', [PageController::class, 'galleries'])->name('galleries');

	Route::middleware(['guest'])->group(function () {
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

Route::prefix('/store')->name('store.')->group(function() {
	Route::get('/', [StoreController::class, 'index'])->name('index');
	Route::get('/{product}/show', [StoreController::class, 'show'])->name('show');
	Route::get('/search', [StoreController::class, 'search'])->name('search');
	Route::get('/guide', [StoreController::class, 'guide'])->name('guide');
	Route::get('/organic/foods', [StoreController::class, 'organicFoods'])->name('organic_foods');
	Route::get('/manufactured/foods', [StoreController::class, 'manufacturedFoods'])->name('manufactured_foods');
	Route::get('/home/appliance', [StoreController::class, 'homeAppliance'])->name('home_appliance');
	Route::get('/high/tech', [StoreController::class, 'highTech'])->name('high_tech');
	Route::get('/other/products', [StoreController::class, 'otherProducts'])->name('other_products');
});

Route::prefix('/immovable')->name('immovable.')->group(function() {
	Route::get('/', [ImmovableController::class, 'index'])->name('index');
});

Route::prefix('/ad')->name('ad.')->group(function() {
	Route::get('/', [AdController::class, 'index'])->name('index');
	Route::get('/{ad}/show', [AdController::class, 'show'])->name('show');

	Route::middleware(['auth'])->group(function() {
		Route::get('/create', [AdController::class, 'create'])->name('create');
		Route::post('/store', [AdController::class, 'store'])->name('store');
		Route::get('/{ad}/edit', [AdController::class, 'edit'])->name('edit');
		Route::put('/{ad}/update', [AdController::class, 'update'])->name('update');
		Route::delete('/{ad}/destroy', [AdController::class, 'destroy'])->name('destroy');
		Route::match(['GET', 'POST'], '/{ad}/booster', [AdController::class, 'booster'])->name('booster');
	});

	Route::get('/search', [AdController::class, 'search'])->name('search');
	Route::get('/guide', [AdController::class, 'guide'])->name('guide');
	Route::get('/automobile', [AdController::class, 'automobile'])->name('automobile');
	Route::get('/cosmetic', [AdController::class, 'cosmetic'])->name('cosmetic');
	Route::get('/immovable', [AdController::class, 'immovable'])->name('immovable');
	Route::get('/agribusiness', [AdController::class, 'agribusiness'])->name('agribusiness');
	Route::get('/other/ads', [AdController::class, 'otherAds'])->name('other_ads');
});

Route::prefix('/agribusiness')->name('agribusiness.')->group(function() {
	Route::get('/', [AgribusinessController::class, 'index'])->name('index');
});

Route::prefix('/informatics')->name('informatics.')->group(function() {
	Route::get('/', [ComputerScienceController::class, 'index'])->name('index');
	Route::get('/solutions', [ComputerScienceController::class, 'solutions'])->name('solutions');
	Route::get('/networks', [ComputerScienceController::class, 'networks'])->name('networks');
	Route::get('/databases', [ComputerScienceController::class, 'databases'])->name('databases');
	Route::get('/services', [ComputerScienceController::class, 'services'])->name('services');
	Route::get('/partners', [ComputerScienceController::class, 'partners'])->name('partners');
	Route::get('/formations', [ComputerScienceController::class, 'formations'])->name('formations');
});

Route::prefix('/cosmetic')->name('cosmetic.')->group(function() {
	Route::get('/', [CosmeticController::class, 'index'])->name('index');
	Route::get('/{article}/show', [CosmeticController::class, 'show'])->name('show');
	Route::get('/search', [CosmeticController::class, 'search'])->name('search');
	Route::get('/guide', [CosmeticController::class, 'guide'])->name('guide');

	Route::get('/soap', [CosmeticController::class, 'soap'])->name('soap');
	Route::get('/milk', [CosmeticController::class, 'milk'])->name('milk');
	Route::get('/scrub', [CosmeticController::class, 'scrub'])->name('scrub');
	Route::get('/mask', [CosmeticController::class, 'mask'])->name('mask');
	Route::get('/perfume', [CosmeticController::class, 'perfume'])->name('perfume');
});

Route::resource('/product_user', ProductUserController::class)->middleware(['auth']);
Route::resource('/article_user', ArticleUserController::class)->middleware(['auth']);
Route::resource('/ad_user', AdUserController::class)->middleware(['auth']);
Route::resource('/order', OrderController::class)->middleware(['auth']);
Route::resource('/transaction', TransactionController::class)->middleware(['auth']);

Route::prefix('/order')->name('order.')->middleware(['auth'])->group(function () {
	Route::get('/{order}/checkout', [OrderController::class, 'checkout'])->name('checkout');
	Route::get('/{order}/pdf', [OrderController::class, 'pdf'])->name('pdf');
});

Route::prefix('/user')->name('user.')->middleware(['auth'])->group(function() {
	Route::get('/orders', [UserController::class, 'orders'])->name('orders');
	Route::get('/ads', [UserController::class, 'ads'])->name('ads');
	Route::get('/articles', [UserController::class, 'articles'])->name('articles');

	Route::get('/favorite/products', [UserController::class, 'favoriteProducts'])->name('favorite_products');
	Route::get('/favorite/articles', [UserController::class, 'favoriteArticles'])->name('favorite_articles');
	Route::get('/favorite/ads', [UserController::class, 'favoriteAds'])->name('favorite_ads');

	Route::get('product/{product}/add', [UserController::class, 'addProduct'])->name('add');
	Route::get('ad/{ad}/add', [UserController::class, 'addAd'])->name('add_ad');
	Route::get('article/{article}/add', [UserController::class, 'addArticle'])->name('add_article');

	Route::get('/transactions', [UserController::class, 'transactions'])->name('transactions');
	Route::get('/payments', [UserController::class, 'payments'])->name('payments');

	Route::get('/', [UserController::class, 'index'])->name('index');
	Route::match(['GET', 'POST'], '/{user}/show', [UserController::class, 'show'])->name('show');
	Route::match(['GET', 'POST'], '/{user}/edit', [UserController::class, 'edit'])->name('edit');
});

Route::prefix('/cart')->name('cart.')->group(function() {
	Route::get('/', [CartController::class, 'index'])->name('index');
	Route::get('/{product}/add', [CartController::class, 'add'])->name('add');
	Route::get('/{row}/remove', [CartController::class, 'remove'])->name('remove');
	Route::get('/{row}/update', [CartController::class, 'update'])->name('update');
	Route::get('/truncate', [CartController::class, 'truncate'])->name('truncate');
	Route::post('/apply/coupon', [CartController::class, 'applyCoupon'])->name('apply_coupon');
	Route::get('/remove/coupon', [CartController::class, 'removeCoupon'])->name('remove_coupon');
	Route::match(['GET', 'POST'], '/checkout', [CartController::class, 'checkout'])->name('checkout');
});

Route::prefix('/basket')->name('basket.')->group(function() {
	Route::get('/', [BasketController::class, 'index'])->name('index');
	Route::get('/{article}/add', [BasketController::class, 'add'])->name('add');
	Route::get('/{row}/remove', [BasketController::class, 'remove'])->name('remove');
	Route::get('/{row}/update', [BasketController::class, 'update'])->name('update');
	Route::get('/truncate', [BasketController::class, 'truncate'])->name('truncate');
	Route::post('/apply/coupon', [BasketController::class, 'applyCoupon'])->name('apply_coupon');
	Route::get('/remove/coupon', [BasketController::class, 'removeCoupon'])->name('remove_coupon');
	Route::match(['GET', 'POST'], '/checkout', [BasketController::class, 'checkout'])->name('checkout');
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
Route::prefix('settings')->name('settings.')->middleware(['auth'])->group(function () {
	Route::get('/', [SettingsController::class, 'index'])->name('index');
	Route::get('/removing/account', [SettingsController::class, 'removingAccount'])->name('removing_account');
	Route::get('/enabling/tfa', [SettingsController::class, 'enablingTFA'])->name('enabling_tfa');
});
/** */

Route::prefix('/cron')->name('cron.')->group(function () {
	Route::get('/dbbackup', [CronController::class, 'dbbackup'])->name('dbbackup');
});

Route::prefix('/product/ray')->name('productRay.')->group(function() {
	Route::get('/', [ProductRayController::class, 'index'])->name('index');
	Route::get('/{productRay}/show', [ProductRayController::class, 'show'])->name('show');
});

Route::prefix('/product/category')->name('productCategory.')->group(function() {
	Route::get('/', [ProductCategoryController::class, 'index'])->name('index');
	Route::get('/{productCategory}/show', [ProductCategoryController::class, 'show'])->name('show');
});

Route::prefix('/product/type')->name('productType.')->group(function() {
	Route::get('/', [ProductTypeController::class, 'index'])->name('index');
	Route::get('/{productType}/show', [ProductTypeController::class, 'show'])->name('show');
});

Route::prefix('/product/image')->name('productImage.')->group(function() {
	Route::get('/{product}', [ProductImageController::class, 'index'])->name('index');
	Route::match(['GET', 'POST'],'/create/{product}', [ProductImageController::class, 'create'])->name('create');
	
	Route::get('/{productImage}/show', [ProductImageController::class, 'show'])->name('show');
});

Route::prefix('/article/ray')->name('articleRay.')->group(function() {
	Route::get('/', [ArticleRayController::class, 'index'])->name('index');
	Route::get('/{articleRay}/show', [ArticleRayController::class, 'show'])->name('show');
});

Route::prefix('/article/category')->name('articleCategory.')->group(function() {
	Route::get('/', [ArticleCategoryController::class, 'index'])->name('index');
	Route::get('/{articleCategory}/show', [ArticleCategoryController::class, 'show'])->name('show');
});

Route::prefix('/article/type')->name('articleType.')->group(function() {
	Route::get('/', [ArticleTypeController::class, 'index'])->name('index');
	Route::get('/{articleType}/show', [ArticleTypeController::class, 'show'])->name('show');
});

Route::prefix('/article/image')->name('articleImage.')->group(function() {
	Route::get('/{article}', [ArticleImageController::class, 'index'])->name('index');
	Route::match(['GET', 'POST'],'/create/{article}', [ArticleImageController::class, 'create'])->name('create');
	
	Route::get('/{articleImage}/show', [ArticleImageController::class, 'show'])->name('show');
});

Route::prefix('/ad/ray')->name('adRay.')->group(function() {
	Route::get('/', [AdRayController::class, 'index'])->name('index');
	Route::get('/{adRay}/show', [AdRayController::class, 'show'])->name('show');
});

Route::prefix('/ad/category')->name('adCategory.')->group(function() {
	Route::get('/', [AdCategoryController::class, 'index'])->name('index');
	Route::get('/{adCategory}/show', [AdCategoryController::class, 'show'])->name('show');
});

Route::prefix('/ad/type')->name('adType.')->group(function() {
	Route::get('/', [AdTypeController::class, 'index'])->name('index');
	Route::get('/{adType}/show', [AdTypeController::class, 'show'])->name('show');
});

Route::prefix('/ad/image')->name('adImage.')->group(function() {
	Route::get('/{ad}', [AdImageController::class, 'index'])->name('index');
	Route::match(['GET', 'POST'],'/create/{ad}', [AdImageController::class, 'create'])->name('create');
	
	Route::get('/{adImage}/show', [AdImageController::class, 'show'])->name('show');
});

Route::prefix('/conversion')->name('conversion.')->group(function() {
	Route::get('/', [ConversionController::class, 'index'])->name('index');
	Route::get('/{conversion}/show', [ConversionController::class, 'show'])->name('show');
});

Route::prefix('/service')->name('service.')->group(function() {
	Route::get('/', [ServiceController::class, 'index'])->name('index');
});

Route::prefix('/image')->name('image.')->middleware(['auth'])->group(function() {
	Route::get('/{image}/show', [ImageController::class, 'show'])->name('show');
	Route::match(['GET', 'POST'],'/{image}/edit', [ImageController::class, 'edit'])->name('edit');
});