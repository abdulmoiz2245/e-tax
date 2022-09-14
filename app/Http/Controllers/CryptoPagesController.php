<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CryptoPagesController extends Controller
{
    public function index()
    {
     
        $_SESSION['app'] = 'crypto';
                
        return view('pages.crypto.dashboard');
    }

    public function taxReports(){
        return view('pages.crypto.tax_reports.index');
    }

    public function freePlan(){
        return view('pages.crypto.free_plan.index');
    }

    public function checkoutType(){
        return view('pages.crypto.checkout_type.index');
    }

    public function paymentWithCard(){
        return view('pages.crypto.payment_with_card.index');
    }
}
