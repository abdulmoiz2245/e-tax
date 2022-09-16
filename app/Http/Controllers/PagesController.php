<?php

namespace App\Http\Controllers;

use Session;
use Auth;

use Illuminate\Support\Facades\URL;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function __construct()
    {
        // $currentURL = URL::current();

        // if (str_contains($currentURL, 'crypto')) { 
        //     $_SESSION['app'] = 'crypto';
        // }elseif(str_contains($currentURL, 'index')){

        // }else{
        //     $_SESSION['app'] = 'e-tax';
        // }
        // var_dump($_SESSION['app'] );
    }
    public function index()
    {
        // Get view file location from menu config
        $view = theme()->getOption('page', 'view');
        // Check if the page view file exist
        if (view()->exists('pages.' . $view)) {
            return view('pages.' . $view);
        }

        // Get the default inner page
        // unset($_SESSION['app']);
        return view('inner');
    }

    public function form_in_progress()
    {
        // Get view file location from menu config
        // Check if the page view file exist
        return view('pages.fillings.form_in_progress');
    }


    public function cart()
    {
        // Get view file location from menu config
        // Check if the page view file exist
        return view('pages.fillings.cart');
    }


    public function payer()
    {
        // Get view file location from menu config
        // Check if the page view file exist
        return view('pages.payer.payer');
    }

    public function field_forms()
    {
        // Get view file location from menu config
        // Check if the page view file exist
        return view('pages.fillings.field_forms');
    }

    public function form_import()
    {
        // Get view file location from menu config
        // Check if the page view file exist
        return view('pages.form_import');
    }

    public function start_filling()
    {
        // Get view file location from menu config
        // Check if the page view file exist
        return view('pages.fillings.start_filling');
    }

    public function billing_invoice()
    {
        // Get view file location from menu config
        // Check if the page view file exist
        $user = Auth::user();
        return view('pages.billing_invoice', ['user' => $user]);
    }



    public function billing_information()
    {
        // Get view file location from menu config
        // Check if the page view file exist
        $user = Auth::user();

        return view('pages.billing_info.create', ['user' => $user]);
    }

    public function edit_billing_information()
    {
        // Get view file location from menu config
        // Check if the page view file exist

        $user = Auth::user();
        return view('pages.billing_info.update', ['user' => $user]);
    }

    public function view_billing_information()
    {
        // Get view file location from menu config
        // Check if the page view file exist

        $user = Auth::user();
        return view('pages.billing_info.view', ['user' => $user]);
    }

    public function add_payer()
    {
        return view('pages.payer.add_payer');
    }

    public function form_2021_form_1099_mics()
    {
        return view('pages.forms.form_2021_form_1099_mics');
    }

    public function form_2021_form_1098()
    {
        return view('pages.forms.form_2021_form_1098 ');
    }

    public function form_2021_form_1098_t()
    {
        return view('pages.forms.form_2021_form_1098_t ');
    }

    public function form_2021_form_1099_nec()
    {
        return view('pages.forms.form_2021_form_1099_nec');
    }

    public function form_2021_form_w_2()
    {
        return view('pages.forms.form_2021_form_w_2');
    }

    public function form_2021_form_1099_b()
    {
        return view('pages.forms.form_2021_form_1099_b');
    }

    public function form_2021_form_1099_c()
    {
        return view('pages.forms.form_2021_form_1099_c');
    }

    public function form_2021_form_1099_int()
    {
        return view('pages.forms.form_2021_form_1099_int');
    }

    public function form_2021_form_1099_r()
    {
        return view('pages.forms.form_2021_form_1099_r');
    }

    public function form_2021_form_1099_div()
    {
        return view('pages.forms.form_2021_form_1099_div');
    }

    public function form_2021_form_1099_s()
    {
        return view('pages.forms.form_2021_form_1099_s');
    }

    public function form_2021_form_1042_s()
    {
        return view('pages.forms.form_2021_form_1042_s');
    }

    public function form_2021_form_1094_c()
    {
        return view('pages.forms.form_2021_form_1094_c');
    }

    public function account()
    {
        $user = Auth::user();
        return view('pages.account', ['user' => $user]);
    }

    public function account_learnmore()
    {
        $user = Auth::user();

        return view('pages.account.learn_more', ['user' => $user]);
    }

    public function checkout($id)
    {
        $user = Auth::user();
        if ($user->hasPaymentMethod()) {
            return view('pages.account.checkout', ['plan_id' => $id, 'user' => $user]);
        }
        return redirect()->route('billing_invoice')->with(['message' => 'Please Add billing Info and Payment Method First']);
    }

    public function account_verify()
    {

        return view('pages.account.verify');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function total_summary()
    {
        return view('pages.report.report_summary');
    }

    public function report_summary()
    {
        return view('pages.report.summary');
    }

    public function lets_help()
    {
        return view('auth.lets_help');
    }

    public function dashboard()
    {

        // $_SESSION['app'] = 'e-tax';

        return view('pages.dashboard');
    }
}
