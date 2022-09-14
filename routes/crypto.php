<?php

use App\Http\Controllers\CryptoPagesController;


Route::middleware('auth')->group(function () {


    Route::group(['prefix'=>'crypto','as'=>'crypto.'], function(){
        Route::get('dashboard',[CryptoPagesController::class, 'index'])->name('dashboard');
        Route::get('tax-reports',[CryptoPagesController::class, 'taxReports'])->name('tax-reports');
        Route::get('free-plan',[CryptoPagesController::class, 'freePlan'])->name('free-plan');
        Route::get('checkout-type',[CryptoPagesController::class, 'checkoutType'])->name('checkout-type');
        Route::get('payment-with-card',[CryptoPagesController::class, 'paymentWithCard'])->name('payment-with-card');
    });

  
});
