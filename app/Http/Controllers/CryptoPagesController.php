<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;


class CryptoPagesController extends Controller
{
    public function index()
    {
     
        $_SESSION['app'] = 'crypto';
                
        return view('pages.crypto.dashboard');
    }

    public function wallet(){
        return view('pages.crypto.wallet.wallet');
    }

    public function addWallet(){
        return view('pages.crypto.wallet.add_wallet');
    }

    public function walletCoin(){
        return view('pages.crypto.wallet.wallet_coin');
        
    }

    public function walletCoinImport(){
        return view('pages.crypto.wallet.wallet_import');

    }

    public function transaction(){
        return view('pages.crypto.transaction.transaction');

    }

    public function addTransaction(){
        return view('pages.crypto.transaction.add_transaction');

    }


    public function market(){
        return view('pages.crypto.market.market');

    }

    public function account(){

        $user = Auth::user();
        return view('pages.crypto.account.account' , ['user' => $user]);

    }

    public function setting(){

        $user = Auth::user();
        return view('pages.crypto.setting.setting' , ['user' => $user]);

    }
}
