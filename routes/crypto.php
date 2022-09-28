<?php

use App\Http\Controllers\CryptoPagesController;
use App\Http\Controllers\Crypto\PaymentController;
use Illuminate\Http\Request;

Route::middleware('auth')->group(function () {


    Route::group(['prefix'=>'crypto','as'=>'crypto.'], function(){
        Route::get('dashboard',[CryptoPagesController::class, 'index'])->name('dashboard');

        Route::get('wallet',[CryptoPagesController::class, 'wallet'])->name('wallet');

        Route::get('add-wallet',[CryptoPagesController::class, 'addWallet'])->name('add_wallet');
        Route::post('add-wallet/store',[CryptoPagesController::class, 'store'])->name('add-wallet.store');


        Route::get('wallet-coin',[CryptoPagesController::class, 'walletCoin'])->name('wallet_coin');
        Route::get('wallet-import',[CryptoPagesController::class, 'walletCoinImport'])->name('wallet_coin_import');

        Route::group(['prefix'=>'transaction','as'=>'transaction.'], function(){
            Route::get('transaction',[CryptoPagesController::class, 'listTransactions'])->name('transaction');
            Route::get('add',[CryptoPagesController::class, 'addTransaction'])->name('add');

        });

        Route::get('market',[CryptoPagesController::class, 'market'])->name('market');

        Route::get('account',[CryptoPagesController::class, 'account'])->name('account');
        Route::get('setting',[CryptoPagesController::class, 'setting'])->name('setting');

        Route::get('tax-reports',[CryptoPagesController::class, 'taxReports'])->name('tax-reports');
        Route::get('free-plan',[CryptoPagesController::class, 'freePlan'])->name('free-plan');
        Route::get('checkout-type',[CryptoPagesController::class, 'checkoutType'])->name('checkout-type');
        Route::get('payment-with-card',[CryptoPagesController::class, 'paymentWithCard'])->name('payment-with-card');
        Route::get('payment-with-crypto',[CryptoPagesController::class, 'paymentWithCrypto'])->name('payment-with-crypto');

        Route::post('create-payment-with-card-method',[PaymentController::class, 'create_payment_with_card_method'])->name('create-payment-with-card-method');
        Route::get('/oauth/callback', [CryptoPagesController::class, 'callback'])->name('callback');
        Route::get('/list-transactions', [CryptoPagesController::class, 'listTransactions'])->name('list_transactions');
    });

  
});
