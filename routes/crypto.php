<?php

use App\Http\Controllers\CryptoPagesController;


Route::middleware('auth')->group(function () {


    Route::group(['prefix'=>'crypto','as'=>'crypto.'], function(){
        Route::get('dashboard',[CryptoPagesController::class, 'index'])->name('dashboard');
    });

  
});
