<?php

use App\Http\Controllers\Account\SettingsController;
use App\Http\Controllers\Auth\SocialiteLoginController;
use App\Http\Controllers\Documentation\ReferencesController;
use App\Http\Controllers\Logs\AuditLogsController;
use App\Http\Controllers\Logs\SystemLogsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PaymentController;

use Illuminate\Support\Facades\Route;

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



Route::get('/lets-help', [PagesController::class, 'lets_help'])
->name('lets-help');

Route::get('migrate', function () {

    \Artisan::call('migrate');

    dd("Data Migrated");

});

$menu = theme()->getMenu();
array_walk($menu, function ($val) {
    if (isset($val['path'])) {
        $route = Route::get($val['path'], [PagesController::class, 'index']);

        // Exclude documentation from auth middleware
        if (!Str::contains($val['path'], 'documentation')) {
            $route->middleware('auth');
        }
    }
});

// Documentations pages
Route::prefix('documentation')->group(function () {
    Route::get('getting-started/references', [ReferencesController::class, 'index']);
    Route::get('getting-started/changelog', [PagesController::class, 'index']);
});

Route::middleware('auth')->group(function () {

    //form_in_progress
    Route::get('/', function () {
        return redirect('index');
    });


    Route::get('/index',[PagesController::class, 'index']);

    Route::get('fillings/form-in-progress', [PagesController::class, 'form_in_progress'])->name('form_in_progress');
    Route::get('fillings/field-forms', [PagesController::class, 'field_forms'])->name('field_forms');
    Route::get('fillings/start-filling', [PagesController::class, 'start_filling'])->name('start_filling');
    Route::get('fillings/start-filling/form/2021-form-1098', [PagesController::class, 'form_2021_form_1098'])->name('form_2021_form_1098');



    Route::get('fillings/start-filling/form/2021-form-1098-t', [PagesController::class, 'form_2021_form_1098_t'])->name('form_2021_form_1098_t');
    Route::get('fillings/start-filling/form/2021-form-1099-mics', [PagesController::class, 'form_2021_form_1099_mics'])->name('form_2021_form_1099_mics');
    Route::get('fillings/start-filling/form/2021-form-1099-nec', [PagesController::class, 'form_2021_form_1099_nec'])->name('form_2021_form_1099_nec');
    Route::get('fillings/start-filling/form/2021-form-w-2', [PagesController::class, 'form_2021_form_w_2'])->name('form_2021_form_w_2');
    Route::get('fillings/start-filling/form/2021-form-1099-b', [PagesController::class, 'form_2021_form_1099_b'])->name('form_2021_form_1099_b');
    Route::get('fillings/start-filling/form/2021-form-1099-c', [PagesController::class, 'form_2021_form_1099_c'])->name('form_2021_form_1099_c');
    Route::get('fillings/start-filling/form/2021-form-1099-int', [PagesController::class, 'form_2021_form_1099_int'])->name('form_2021_form_1099_int');
    Route::get('fillings/start-filling/form/2021-form-1099-r', [PagesController::class, 'form_2021_form_1099_r'])->name('form_2021_form_1099_r');
    Route::get('fillings/start-filling/form/2021-form-1099-div', [PagesController::class, 'form_2021_form_1099_div'])->name('form_2021_form_1099_div');
    Route::get('fillings/start-filling/form/2021-form-1099-s', [PagesController::class, 'form_2021_form_1099_s'])->name('form_2021_form_1099_s');
    Route::get('fillings/start-filling/form/2021-form-1042-s', [PagesController::class, 'form_2021_form_1042_s'])->name('form_2021_form_1042_s');


    Route::get('fillings/start-filling/form/2021-form-1094-C', [PagesController::class, 'form_2021_form_1094_c'])->name('form_2021_form_1094_c');
    Route::get('fillings/start-filling/form/2021-form-w-2C', [PagesController::class, 'form_2021_form_w_2c'])->name('form_2021_form_w_2c');
    Route::get('fillings/start-filling/form/2021-form-1095-B', [PagesController::class, 'form_2021_form_1095_b'])->name('form_2021_form_1095_b');

    Route::get('contact', [PagesController::class, 'contact'])->name('contact');

    Route::get('dashboard', [PagesController::class, 'dashboard'])->name('dashboard');

    Route::post('create-customer-payment-method', [PaymentController::class, 'create_customer_payment_method'])->name('create_customer_payment_method');
    Route::post('update-customer-payment-method', [PaymentController::class, 'update_customer_payment_method'])->name('update_customer_payment_method');


    Route::get('send-mail', function () {
   
        $details = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp',
            'code' => '34324'
        ];
       
       $respose =  \Mail::to('seday75692@oncebar.com')->send(new \App\Mail\VarificationMail($details));
       
        dd(\Mail::to('testemail224590@gmail.com')->send(new \App\Mail\VarificationMail($details)));
    });

    Route::post('emial-varification-code-sent',[PaymentController::class, 'emial_varification'])->name('emial_varification_code_sent');

    Route::post('create-payment',[PaymentController::class, 'create_payment'])->name('create_payment');


    
    Route::get('fillings/cart', [PagesController::class, 'cart'])->name('cart');

    Route::get('billing/billing-invoice', [PagesController::class, 'billing_invoice'])->name('billing_invoice');
    Route::get('billing/billing-information', [PagesController::class, 'billing_information'])->name('billing_information');
    Route::get('billing/checkout/{plan_id?}', [PagesController::class, 'checkout'])->name('checkout');

    Route::get('billing/billing-information/edit', [PagesController::class, 'edit_billing_information'])->name('edit_billing_information');
    Route::get('billing/billing-information/view', [PagesController::class, 'view_billing_information'])->name('view_billing_information');


    Route::get('payer', [PagesController::class, 'payer'])->name('payer');

    Route::get('form-import', [PagesController::class, 'form_import'])->name('form_import');

    Route::get('report/summary', [PagesController::class, 'report_summary'])->name('report_summary');

    Route::get('report/total-report', [PagesController::class, 'total_summary'])->name('total_summary');



    Route::get('/payer/add-payer', [PagesController::class, 'add_payer'])->name('add_payer');

    // Account pages
    Route::prefix('account')->group(function () {
        Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
        Route::post('update', [SettingsController::class, 'accountUpdate'])->name('settings.accountUpdate');

        Route::get('verify', [PagesController::class, 'account_verify'])->name('account_verify');

        Route::get('account', [PagesController::class, 'account'])->name('account');

        Route::get('team-member/learnmore', [PagesController::class, 'account_learnmore'])->name('account_learnmore');


        Route::put('settings', [SettingsController::class, 'update'])->name('settings.update');
        Route::put('settings/email', [SettingsController::class, 'changeEmail'])->name('settings.changeEmail');
        Route::put('settings/password', [SettingsController::class, 'changePassword'])->name('settings.changePassword');
    });

    

    // Logs pages
    Route::prefix('log')->name('log.')->group(function () {
        Route::resource('system', SystemLogsController::class)->only(['index', 'destroy']);
        Route::resource('audit', AuditLogsController::class)->only(['index', 'destroy']);
    });
});


/**
 * Socialite login using Google service
 * https://laravel.com/docs/8.x/socialite
 */
Route::get('/auth/redirect/{provider}', [SocialiteLoginController::class, 'redirect']);

require __DIR__.'/auth.php';
