<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        // Get view file location from menu config
        $view = theme()->getOption('page', 'view');
        // Check if the page view file exist
        if (view()->exists('pages.'.$view)) {
            return view('pages.'.$view);
        }

        // Get the default inner page
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
            return view('pages.billing_invoice');

    }

    public function billing_information()
    {
        // Get view file location from menu config
        // Check if the page view file exist
            return view('pages.billing_information');

    }

    public function add_payer(){
        return view('pages.payer.add_payer');
    }

    public function form_2021_form_1099_mics(){
        return view('pages.forms.form_2021_form_1099_mics');

    }

    public function form_2021_form_1098 (){
        return view('pages.forms.form_2021_form_1098 ');

    }

    public function form_2021_form_1098_t (){
        return view('pages.forms.form_2021_form_1098_t ');

    }

    public function form_2021_form_1099_nec(){
        return view('pages.forms.form_2021_form_1099_nec');

    }

    public function form_2021_form_w_2(){
        return view('pages.forms.form_2021_form_w_2');

    }

    public function form_2021_form_1099_b(){
        return view('pages.forms.form_2021_form_1099_b');

    }

    public function form_2021_form_1099_int(){
        return view('pages.forms.form_2021_form_1099_int');

    }

    public function form_2021_form_1099_r(){
        return view('pages.forms.form_2021_form_1099_r');

    }

    public function form_2021_form_1099_div(){
        return view('pages.forms.form_2021_form_1099_div');

    }

    public function form_2021_form_1099_s(){
        return view('pages.forms.form_2021_form_1099_s');

    }

    public function form_2021_form_1042_s(){
        return view('pages.forms.form_2021_form_1042_s');

    }


}
