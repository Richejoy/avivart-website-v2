(function () {

    var laroute = (function () {

        var routes = {

            absolute: true,
            rootUrl: 'https://localhost/avivart/website/v2',
            routes : [{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/open","name":"debugbar.openhandler","action":"Barryvdh\Debugbar\Controllers\OpenHandlerController@handle"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/clockwork\/{id}","name":"debugbar.clockwork","action":"Barryvdh\Debugbar\Controllers\OpenHandlerController@clockwork"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/telescope\/{id}","name":"debugbar.telescope","action":"Barryvdh\Debugbar\Controllers\TelescopeController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/assets\/stylesheets","name":"debugbar.assets.css","action":"Barryvdh\Debugbar\Controllers\AssetController@css"},{"host":null,"methods":["GET","HEAD"],"uri":"_debugbar\/assets\/javascript","name":"debugbar.assets.js","action":"Barryvdh\Debugbar\Controllers\AssetController@js"},{"host":null,"methods":["DELETE"],"uri":"_debugbar\/cache\/{key}\/{tags?}","name":"debugbar.cache.delete","action":"Barryvdh\Debugbar\Controllers\CacheController@delete"},{"host":null,"methods":["POST"],"uri":"livewire\/message\/{name}","name":"livewire.message","action":"Livewire\Controllers\HttpConnectionHandler"},{"host":null,"methods":["POST"],"uri":"livewire\/upload-file","name":"livewire.upload-file","action":"Livewire\Controllers\FileUploadHandler@handle"},{"host":null,"methods":["GET","HEAD"],"uri":"livewire\/preview-file\/{filename}","name":"livewire.preview-file","action":"Livewire\Controllers\FilePreviewHandler@handle"},{"host":null,"methods":["GET","HEAD"],"uri":"livewire\/livewire.js","name":null,"action":"Livewire\Controllers\LivewireJavaScriptAssets@source"},{"host":null,"methods":["GET","HEAD"],"uri":"livewire\/livewire.js.map","name":null,"action":"Livewire\Controllers\LivewireJavaScriptAssets@maps"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/user","name":null,"action":"Closure"},{"host":null,"methods":["GET","HEAD"],"uri":"cache\/clear","name":null,"action":"Closure"},{"host":null,"methods":["GET","HEAD"],"uri":"\/","name":"page.index","action":"App\Http\Controllers\PageController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"about","name":"page.about","action":"App\Http\Controllers\PageController@about"},{"host":null,"methods":["GET","HEAD"],"uri":"terms","name":"page.terms","action":"App\Http\Controllers\PageController@terms"},{"host":null,"methods":["GET","HEAD"],"uri":"conditions","name":"page.conditions","action":"App\Http\Controllers\PageController@conditions"},{"host":null,"methods":["GET","HEAD"],"uri":"faq","name":"page.faq","action":"App\Http\Controllers\PageController@faq"},{"host":null,"methods":["GET","HEAD"],"uri":"sitemap","name":"page.sitemap","action":"App\Http\Controllers\PageController@sitemap"},{"host":null,"methods":["GET","HEAD"],"uri":"galleries","name":"page.galleries","action":"App\Http\Controllers\PageController@galleries"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"login","name":"page.login","action":"App\Http\Controllers\PageController@login"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"register","name":"page.register","action":"App\Http\Controllers\PageController@register"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"confirmed","name":"page.confirmed","action":"App\Http\Controllers\PageController@confirmed"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"password\/forgot","name":"page.password_forgot","action":"App\Http\Controllers\PageController@passwordForgot"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"password\/reset\/{email}\/{token}","name":"page.password_reset","action":"App\Http\Controllers\PageController@passwordReset"},{"host":null,"methods":["GET","HEAD"],"uri":"activated\/{email}\/{token}","name":"page.activated","action":"App\Http\Controllers\PageController@activated"},{"host":null,"methods":["GET","HEAD"],"uri":"removed\/account\/{email}\/{token}","name":"page.removed_account","action":"App\Http\Controllers\PageController@removedAccount"},{"host":null,"methods":["GET","HEAD"],"uri":"enabled\/tfa\/{email}\/{token}","name":"page.enabled_tfa","action":"App\Http\Controllers\PageController@enabledTFA"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"donate","name":"page.donate","action":"App\Http\Controllers\PageController@donate"},{"host":null,"methods":["GET","HEAD"],"uri":"logout","name":"page.logout","action":"App\Http\Controllers\PageController@logout"},{"host":null,"methods":["GET","HEAD"],"uri":"splashscreen","name":"page.splashscreen","action":"App\Http\Controllers\PageController@splashscreen"},{"host":null,"methods":["GET","HEAD"],"uri":"store","name":"store.index","action":"App\Http\Controllers\StoreController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"store\/{product}\/show","name":"store.show","action":"App\Http\Controllers\StoreController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"store\/search","name":"store.search","action":"App\Http\Controllers\StoreController@search"},{"host":null,"methods":["GET","HEAD"],"uri":"store\/guide","name":"store.guide","action":"App\Http\Controllers\StoreController@guide"},{"host":null,"methods":["GET","HEAD"],"uri":"store\/organic\/foods","name":"store.organic_foods","action":"App\Http\Controllers\StoreController@organicFoods"},{"host":null,"methods":["GET","HEAD"],"uri":"store\/manufactured\/foods","name":"store.manufactured_foods","action":"App\Http\Controllers\StoreController@manufacturedFoods"},{"host":null,"methods":["GET","HEAD"],"uri":"store\/home\/appliance","name":"store.home_appliance","action":"App\Http\Controllers\StoreController@homeAppliance"},{"host":null,"methods":["GET","HEAD"],"uri":"store\/high\/tech","name":"store.high_tech","action":"App\Http\Controllers\StoreController@highTech"},{"host":null,"methods":["GET","HEAD"],"uri":"store\/other\/products","name":"store.other_products","action":"App\Http\Controllers\StoreController@otherProducts"},{"host":null,"methods":["GET","HEAD"],"uri":"immovable","name":"immovable.index","action":"App\Http\Controllers\ImmovableController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"ad","name":"ad.index","action":"App\Http\Controllers\AdController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"ad\/{ad}\/show","name":"ad.show","action":"App\Http\Controllers\AdController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"ad\/create","name":"ad.create","action":"App\Http\Controllers\AdController@create"},{"host":null,"methods":["POST"],"uri":"ad\/store","name":"ad.store","action":"App\Http\Controllers\AdController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"ad\/{ad}\/edit","name":"ad.edit","action":"App\Http\Controllers\AdController@edit"},{"host":null,"methods":["PUT"],"uri":"ad\/{ad}\/update","name":"ad.update","action":"App\Http\Controllers\AdController@update"},{"host":null,"methods":["DELETE"],"uri":"ad\/{ad}\/destroy","name":"ad.destroy","action":"App\Http\Controllers\AdController@destroy"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"ad\/{ad}\/booster","name":"ad.booster","action":"App\Http\Controllers\AdController@booster"},{"host":null,"methods":["GET","HEAD"],"uri":"ad\/search","name":"ad.search","action":"App\Http\Controllers\AdController@search"},{"host":null,"methods":["GET","HEAD"],"uri":"ad\/guide","name":"ad.guide","action":"App\Http\Controllers\AdController@guide"},{"host":null,"methods":["GET","HEAD"],"uri":"ad\/automobile","name":"ad.automobile","action":"App\Http\Controllers\AdController@automobile"},{"host":null,"methods":["GET","HEAD"],"uri":"ad\/cosmetic","name":"ad.cosmetic","action":"App\Http\Controllers\AdController@cosmetic"},{"host":null,"methods":["GET","HEAD"],"uri":"ad\/immovable","name":"ad.immovable","action":"App\Http\Controllers\AdController@immovable"},{"host":null,"methods":["GET","HEAD"],"uri":"ad\/agribusiness","name":"ad.agribusiness","action":"App\Http\Controllers\AdController@agribusiness"},{"host":null,"methods":["GET","HEAD"],"uri":"ad\/other\/ads","name":"ad.other_ads","action":"App\Http\Controllers\AdController@otherAds"},{"host":null,"methods":["GET","HEAD"],"uri":"agribusiness","name":"agribusiness.index","action":"App\Http\Controllers\AgribusinessController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"informatics","name":"informatics.index","action":"App\Http\Controllers\ComputerScienceController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"informatics\/solutions","name":"informatics.solutions","action":"App\Http\Controllers\ComputerScienceController@solutions"},{"host":null,"methods":["GET","HEAD"],"uri":"informatics\/networks","name":"informatics.networks","action":"App\Http\Controllers\ComputerScienceController@networks"},{"host":null,"methods":["GET","HEAD"],"uri":"informatics\/databases","name":"informatics.databases","action":"App\Http\Controllers\ComputerScienceController@databases"},{"host":null,"methods":["GET","HEAD"],"uri":"informatics\/services","name":"informatics.services","action":"App\Http\Controllers\ComputerScienceController@services"},{"host":null,"methods":["GET","HEAD"],"uri":"informatics\/partners","name":"informatics.partners","action":"App\Http\Controllers\ComputerScienceController@partners"},{"host":null,"methods":["GET","HEAD"],"uri":"informatics\/formations","name":"informatics.formations","action":"App\Http\Controllers\ComputerScienceController@formations"},{"host":null,"methods":["GET","HEAD"],"uri":"cosmetic","name":"cosmetic.index","action":"App\Http\Controllers\CosmeticController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"cosmetic\/{article}\/show","name":"cosmetic.show","action":"App\Http\Controllers\CosmeticController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"cosmetic\/search","name":"cosmetic.search","action":"App\Http\Controllers\CosmeticController@search"},{"host":null,"methods":["GET","HEAD"],"uri":"cosmetic\/guide","name":"cosmetic.guide","action":"App\Http\Controllers\CosmeticController@guide"},{"host":null,"methods":["GET","HEAD"],"uri":"cosmetic\/soap","name":"cosmetic.soap","action":"App\Http\Controllers\CosmeticController@soap"},{"host":null,"methods":["GET","HEAD"],"uri":"cosmetic\/milk","name":"cosmetic.milk","action":"App\Http\Controllers\CosmeticController@milk"},{"host":null,"methods":["GET","HEAD"],"uri":"cosmetic\/scrub","name":"cosmetic.scrub","action":"App\Http\Controllers\CosmeticController@scrub"},{"host":null,"methods":["GET","HEAD"],"uri":"cosmetic\/mask","name":"cosmetic.mask","action":"App\Http\Controllers\CosmeticController@mask"},{"host":null,"methods":["GET","HEAD"],"uri":"cosmetic\/perfume","name":"cosmetic.perfume","action":"App\Http\Controllers\CosmeticController@perfume"},{"host":null,"methods":["GET","HEAD"],"uri":"product_user","name":"product_user.index","action":"App\Http\Controllers\ProductUserController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"product_user\/create","name":"product_user.create","action":"App\Http\Controllers\ProductUserController@create"},{"host":null,"methods":["POST"],"uri":"product_user","name":"product_user.store","action":"App\Http\Controllers\ProductUserController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"product_user\/{product_user}","name":"product_user.show","action":"App\Http\Controllers\ProductUserController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"product_user\/{product_user}\/edit","name":"product_user.edit","action":"App\Http\Controllers\ProductUserController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"product_user\/{product_user}","name":"product_user.update","action":"App\Http\Controllers\ProductUserController@update"},{"host":null,"methods":["DELETE"],"uri":"product_user\/{product_user}","name":"product_user.destroy","action":"App\Http\Controllers\ProductUserController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"article_user","name":"article_user.index","action":"App\Http\Controllers\ArticleUserController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"article_user\/create","name":"article_user.create","action":"App\Http\Controllers\ArticleUserController@create"},{"host":null,"methods":["POST"],"uri":"article_user","name":"article_user.store","action":"App\Http\Controllers\ArticleUserController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"article_user\/{article_user}","name":"article_user.show","action":"App\Http\Controllers\ArticleUserController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"article_user\/{article_user}\/edit","name":"article_user.edit","action":"App\Http\Controllers\ArticleUserController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"article_user\/{article_user}","name":"article_user.update","action":"App\Http\Controllers\ArticleUserController@update"},{"host":null,"methods":["DELETE"],"uri":"article_user\/{article_user}","name":"article_user.destroy","action":"App\Http\Controllers\ArticleUserController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"ad_user","name":"ad_user.index","action":"App\Http\Controllers\AdUserController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"ad_user\/create","name":"ad_user.create","action":"App\Http\Controllers\AdUserController@create"},{"host":null,"methods":["POST"],"uri":"ad_user","name":"ad_user.store","action":"App\Http\Controllers\AdUserController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"ad_user\/{ad_user}","name":"ad_user.show","action":"App\Http\Controllers\AdUserController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"ad_user\/{ad_user}\/edit","name":"ad_user.edit","action":"App\Http\Controllers\AdUserController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"ad_user\/{ad_user}","name":"ad_user.update","action":"App\Http\Controllers\AdUserController@update"},{"host":null,"methods":["DELETE"],"uri":"ad_user\/{ad_user}","name":"ad_user.destroy","action":"App\Http\Controllers\AdUserController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"order","name":"order.index","action":"App\Http\Controllers\OrderController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"order\/create","name":"order.create","action":"App\Http\Controllers\OrderController@create"},{"host":null,"methods":["POST"],"uri":"order","name":"order.store","action":"App\Http\Controllers\OrderController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"order\/{order}","name":"order.show","action":"App\Http\Controllers\OrderController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"order\/{order}\/edit","name":"order.edit","action":"App\Http\Controllers\OrderController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"order\/{order}","name":"order.update","action":"App\Http\Controllers\OrderController@update"},{"host":null,"methods":["DELETE"],"uri":"order\/{order}","name":"order.destroy","action":"App\Http\Controllers\OrderController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"transaction","name":"transaction.index","action":"App\Http\Controllers\TransactionController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"transaction\/create","name":"transaction.create","action":"App\Http\Controllers\TransactionController@create"},{"host":null,"methods":["POST"],"uri":"transaction","name":"transaction.store","action":"App\Http\Controllers\TransactionController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"transaction\/{transaction}","name":"transaction.show","action":"App\Http\Controllers\TransactionController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"transaction\/{transaction}\/edit","name":"transaction.edit","action":"App\Http\Controllers\TransactionController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"transaction\/{transaction}","name":"transaction.update","action":"App\Http\Controllers\TransactionController@update"},{"host":null,"methods":["DELETE"],"uri":"transaction\/{transaction}","name":"transaction.destroy","action":"App\Http\Controllers\TransactionController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"order\/{order}\/checkout","name":"order.checkout","action":"App\Http\Controllers\OrderController@checkout"},{"host":null,"methods":["GET","HEAD"],"uri":"order\/{order}\/pdf","name":"order.pdf","action":"App\Http\Controllers\OrderController@pdf"},{"host":null,"methods":["GET","HEAD"],"uri":"user\/orders","name":"user.orders","action":"App\Http\Controllers\UserController@orders"},{"host":null,"methods":["GET","HEAD"],"uri":"user\/ads","name":"user.ads","action":"App\Http\Controllers\UserController@ads"},{"host":null,"methods":["GET","HEAD"],"uri":"user\/articles","name":"user.articles","action":"App\Http\Controllers\UserController@articles"},{"host":null,"methods":["GET","HEAD"],"uri":"user\/favorite\/products","name":"user.favorite_products","action":"App\Http\Controllers\UserController@favoriteProducts"},{"host":null,"methods":["GET","HEAD"],"uri":"user\/favorite\/articles","name":"user.favorite_articles","action":"App\Http\Controllers\UserController@favoriteArticles"},{"host":null,"methods":["GET","HEAD"],"uri":"user\/favorite\/ads","name":"user.favorite_ads","action":"App\Http\Controllers\UserController@favoriteAds"},{"host":null,"methods":["GET","HEAD"],"uri":"user\/product\/{product}\/add","name":"user.add","action":"App\Http\Controllers\UserController@addProduct"},{"host":null,"methods":["GET","HEAD"],"uri":"user\/ad\/{ad}\/add","name":"user.add_ad","action":"App\Http\Controllers\UserController@addAd"},{"host":null,"methods":["GET","HEAD"],"uri":"user\/article\/{article}\/add","name":"user.add_article","action":"App\Http\Controllers\UserController@addArticle"},{"host":null,"methods":["GET","HEAD"],"uri":"user\/transactions","name":"user.transactions","action":"App\Http\Controllers\UserController@transactions"},{"host":null,"methods":["GET","HEAD"],"uri":"user\/payments","name":"user.payments","action":"App\Http\Controllers\UserController@payments"},{"host":null,"methods":["GET","HEAD"],"uri":"user","name":"user.index","action":"App\Http\Controllers\UserController@index"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"user\/{user}\/show","name":"user.show","action":"App\Http\Controllers\UserController@show"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"user\/{user}\/edit","name":"user.edit","action":"App\Http\Controllers\UserController@edit"},{"host":null,"methods":["GET","HEAD"],"uri":"cart","name":"cart.index","action":"App\Http\Controllers\CartController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"cart\/{product}\/add","name":"cart.add","action":"App\Http\Controllers\CartController@add"},{"host":null,"methods":["GET","HEAD"],"uri":"cart\/{row}\/remove","name":"cart.remove","action":"App\Http\Controllers\CartController@remove"},{"host":null,"methods":["GET","HEAD"],"uri":"cart\/{row}\/update","name":"cart.update","action":"App\Http\Controllers\CartController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"cart\/truncate","name":"cart.truncate","action":"App\Http\Controllers\CartController@truncate"},{"host":null,"methods":["POST"],"uri":"cart\/apply\/coupon","name":"cart.apply_coupon","action":"App\Http\Controllers\CartController@applyCoupon"},{"host":null,"methods":["GET","HEAD"],"uri":"cart\/remove\/coupon","name":"cart.remove_coupon","action":"App\Http\Controllers\CartController@removeCoupon"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"cart\/checkout","name":"cart.checkout","action":"App\Http\Controllers\CartController@checkout"},{"host":null,"methods":["GET","HEAD"],"uri":"basket","name":"basket.index","action":"App\Http\Controllers\BasketController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"basket\/{article}\/add","name":"basket.add","action":"App\Http\Controllers\BasketController@add"},{"host":null,"methods":["GET","HEAD"],"uri":"basket\/{row}\/remove","name":"basket.remove","action":"App\Http\Controllers\BasketController@remove"},{"host":null,"methods":["GET","HEAD"],"uri":"basket\/{row}\/update","name":"basket.update","action":"App\Http\Controllers\BasketController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"basket\/truncate","name":"basket.truncate","action":"App\Http\Controllers\BasketController@truncate"},{"host":null,"methods":["POST"],"uri":"basket\/apply\/coupon","name":"basket.apply_coupon","action":"App\Http\Controllers\BasketController@applyCoupon"},{"host":null,"methods":["GET","HEAD"],"uri":"basket\/remove\/coupon","name":"basket.remove_coupon","action":"App\Http\Controllers\BasketController@removeCoupon"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"basket\/checkout","name":"basket.checkout","action":"App\Http\Controllers\BasketController@checkout"},{"host":null,"methods":["GET","HEAD"],"uri":"contact","name":"contact.index","action":"App\Http\Controllers\ContactController@index"},{"host":null,"methods":["POST"],"uri":"contact\/store","name":"contact.store","action":"App\Http\Controllers\ContactController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"newsletter","name":"newsletter.index","action":"App\Http\Controllers\NewsletterController@index"},{"host":null,"methods":["POST"],"uri":"newsletter\/store","name":"newsletter.store","action":"App\Http\Controllers\NewsletterController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"newsletter\/unsubscribe\/{email}\/{token}","name":"newsletter.unsubscribe","action":"App\Http\Controllers\NewsletterController@unsubscribe"},{"host":null,"methods":["POST"],"uri":"payement\/callback\/url","name":"payment.callback_url","action":"App\Http\Controllers\PaymentController@callbackURL"},{"host":null,"methods":["GET","HEAD"],"uri":"payement\/return\/url","name":"payment.return_url","action":"App\Http\Controllers\PaymentController@returnURL"},{"host":null,"methods":["GET","HEAD"],"uri":"payement\/cancel\/url","name":"payment.cancel_url","action":"App\Http\Controllers\PaymentController@cancelURL"},{"host":null,"methods":["GET","HEAD"],"uri":"settings","name":"settings.index","action":"App\Http\Controllers\SettingsController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"settings\/removing\/account","name":"settings.removing_account","action":"App\Http\Controllers\SettingsController@removingAccount"},{"host":null,"methods":["GET","HEAD"],"uri":"settings\/enabling\/tfa","name":"settings.enabling_tfa","action":"App\Http\Controllers\SettingsController@enablingTFA"},{"host":null,"methods":["GET","HEAD"],"uri":"cron\/dbbackup","name":"cron.dbbackup","action":"App\Http\Controllers\CronController@dbbackup"},{"host":null,"methods":["GET","HEAD"],"uri":"product\/ray","name":"productRay.index","action":"App\Http\Controllers\ProductRayController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"product\/ray\/{productRay}\/show","name":"productRay.show","action":"App\Http\Controllers\ProductRayController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"product\/category","name":"productCategory.index","action":"App\Http\Controllers\ProductCategoryController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"product\/category\/{productCategory}\/show","name":"productCategory.show","action":"App\Http\Controllers\ProductCategoryController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"product\/type","name":"productType.index","action":"App\Http\Controllers\ProductTypeController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"product\/type\/{productType}\/show","name":"productType.show","action":"App\Http\Controllers\ProductTypeController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"product\/image\/{product}","name":"productImage.index","action":"App\Http\Controllers\ProductImageController@index"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"product\/image\/create\/{product}","name":"productImage.create","action":"App\Http\Controllers\ProductImageController@create"},{"host":null,"methods":["GET","HEAD"],"uri":"product\/image\/{productImage}\/show","name":"productImage.show","action":"App\Http\Controllers\ProductImageController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"article\/ray","name":"articleRay.index","action":"App\Http\Controllers\ArticleRayController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"article\/ray\/{articleRay}\/show","name":"articleRay.show","action":"App\Http\Controllers\ArticleRayController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"article\/category","name":"articleCategory.index","action":"App\Http\Controllers\ArticleCategoryController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"article\/category\/{articleCategory}\/show","name":"articleCategory.show","action":"App\Http\Controllers\ArticleCategoryController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"article\/type","name":"articleType.index","action":"App\Http\Controllers\ArticleTypeController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"article\/type\/{articleType}\/show","name":"articleType.show","action":"App\Http\Controllers\ArticleTypeController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"article\/image\/{article}","name":"articleImage.index","action":"App\Http\Controllers\ArticleImageController@index"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"article\/image\/create\/{article}","name":"articleImage.create","action":"App\Http\Controllers\ArticleImageController@create"},{"host":null,"methods":["GET","HEAD"],"uri":"article\/image\/{articleImage}\/show","name":"articleImage.show","action":"App\Http\Controllers\ArticleImageController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"ad\/ray","name":"adRay.index","action":"App\Http\Controllers\AdRayController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"ad\/ray\/{adRay}\/show","name":"adRay.show","action":"App\Http\Controllers\AdRayController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"ad\/category","name":"adCategory.index","action":"App\Http\Controllers\AdCategoryController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"ad\/category\/{adCategory}\/show","name":"adCategory.show","action":"App\Http\Controllers\AdCategoryController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"ad\/type","name":"adType.index","action":"App\Http\Controllers\AdTypeController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"ad\/type\/{adType}\/show","name":"adType.show","action":"App\Http\Controllers\AdTypeController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"ad\/image\/{ad}","name":"adImage.index","action":"App\Http\Controllers\AdImageController@index"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"ad\/image\/create\/{ad}","name":"adImage.create","action":"App\Http\Controllers\AdImageController@create"},{"host":null,"methods":["GET","HEAD"],"uri":"ad\/image\/{adImage}\/show","name":"adImage.show","action":"App\Http\Controllers\AdImageController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"conversion","name":"conversion.index","action":"App\Http\Controllers\ConversionController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"conversion\/{conversion}\/show","name":"conversion.show","action":"App\Http\Controllers\ConversionController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"service","name":"service.index","action":"App\Http\Controllers\ServiceController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"image\/{image}\/show","name":"image.show","action":"App\Http\Controllers\ImageController@show"},{"host":null,"methods":["GET","POST","HEAD"],"uri":"image\/{image}\/edit","name":"image.edit","action":"App\Http\Controllers\ImageController@edit"}],
            prefix: '',

            route : function (name, parameters, route) {
                route = route || this.getByName(name);

                if ( ! route ) {
                    return undefined;
                }

                return this.toRoute(route, parameters);
            },

            url: function (url, parameters) {
                parameters = parameters || [];

                var uri = url + '/' + parameters.join('/');

                return this.getCorrectUrl(uri);
            },

            toRoute : function (route, parameters) {
                var uri = this.replaceNamedParameters(route.uri, parameters);
                var qs  = this.getRouteQueryString(parameters);

                if (this.absolute && this.isOtherHost(route)){
                    return "//" + route.host + "/" + uri + qs;
                }

                return this.getCorrectUrl(uri + qs);
            },

            isOtherHost: function (route){
                return route.host && route.host != window.location.hostname;
            },

            replaceNamedParameters : function (uri, parameters) {
                uri = uri.replace(/\{(.*?)\??\}/g, function(match, key) {
                    if (parameters.hasOwnProperty(key)) {
                        var value = parameters[key];
                        delete parameters[key];
                        return value;
                    } else {
                        return match;
                    }
                });

                // Strip out any optional parameters that were not given
                uri = uri.replace(/\/\{.*?\?\}/g, '');

                return uri;
            },

            getRouteQueryString : function (parameters) {
                var qs = [];
                for (var key in parameters) {
                    if (parameters.hasOwnProperty(key)) {
                        qs.push(key + '=' + parameters[key]);
                    }
                }

                if (qs.length < 1) {
                    return '';
                }

                return '?' + qs.join('&');
            },

            getByName : function (name) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].name === name) {
                        return this.routes[key];
                    }
                }
            },

            getByAction : function(action) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].action === action) {
                        return this.routes[key];
                    }
                }
            },

            getCorrectUrl: function (uri) {
                var url = this.prefix + '/' + uri.replace(/^\/?/, '');

                if ( ! this.absolute) {
                    return url;
                }

                return this.rootUrl.replace('/\/?$/', '') + url;
            }
        };

        var getLinkAttributes = function(attributes) {
            if ( ! attributes) {
                return '';
            }

            var attrs = [];
            for (var key in attributes) {
                if (attributes.hasOwnProperty(key)) {
                    attrs.push(key + '="' + attributes[key] + '"');
                }
            }

            return attrs.join(' ');
        };

        var getHtmlLink = function (url, title, attributes) {
            title      = title || url;
            attributes = getLinkAttributes(attributes);

            return '<a href="' + url + '" ' + attributes + '>' + title + '</a>';
        };

        return {
            // Generate a url for a given controller action.
            // laroute.action('HomeController@getIndex', [params = {}])
            action : function (name, parameters) {
                parameters = parameters || {};

                return routes.route(name, parameters, routes.getByAction(name));
            },

            // Generate a url for a given named route.
            // laroute.route('routeName', [params = {}])
            route : function (route, parameters) {
                parameters = parameters || {};

                return routes.route(route, parameters);
            },

            // Generate a fully qualified URL to the given path.
            // laroute.route('url', [params = {}])
            url : function (route, parameters) {
                parameters = parameters || {};

                return routes.url(route, parameters);
            },

            // Generate a html link to the given url.
            // laroute.link_to('foo/bar', [title = url], [attributes = {}])
            link_to : function (url, title, attributes) {
                url = this.url(url);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given route.
            // laroute.link_to_route('route.name', [title=url], [parameters = {}], [attributes = {}])
            link_to_route : function (route, title, parameters, attributes) {
                var url = this.route(route, parameters);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given controller action.
            // laroute.link_to_action('HomeController@getIndex', [title=url], [parameters = {}], [attributes = {}])
            link_to_action : function(action, title, parameters, attributes) {
                var url = this.action(action, parameters);

                return getHtmlLink(url, title, attributes);
            }

        };

    }).call(this);

    /**
     * Expose the class either via AMD, CommonJS or the global object
     */
    if (typeof define === 'function' && define.amd) {
        define(function () {
            return laroute;
        });
    }
    else if (typeof module === 'object' && module.exports){
        module.exports = laroute;
    }
    else {
        window.laroute = laroute;
    }

}).call(this);

