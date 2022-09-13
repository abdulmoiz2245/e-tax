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
}
