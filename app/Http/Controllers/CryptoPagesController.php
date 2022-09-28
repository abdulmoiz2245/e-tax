<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\Models\User;
use App\Models\UserWalletInfo;
use Exception;
use Illuminate\Support\Facades\URL;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

class CryptoPagesController extends Controller
{
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

        // $_SESSION['app'] = 'crypto';

        return view('pages.crypto.dashboard');
    }

    public function wallet()
    {
        return view('pages.crypto.wallet.wallet');
    }

    public function addWallet()
    {
        return view('pages.crypto.wallet.add_wallet');
    }

    public function store(Request $request)
    {
        try {
            $endpoint = "https://api.coinbase.com/v2/user";
            $client = new \GuzzleHttp\Client();
            $client_id = '49f62c9a02ae7ad3f03bd698055206dd656a4f98c8e85c51365394fa8561aa62';
            //$redirect_uri = 'http://localhost:8000/crypto/wallet-coin';

            // header('Location: https://www.coinbase.com/oauth/authorize?response_type=code&client_id=49f62c9a02ae7ad3f03bd698055206dd656a4f98c8e85c51365394fa8561aa62');
            // $guzzle = new \GuzzleHttp\Client(['base_uri' => 'https://www.coinbase.com/oauth/authorize?response_type=code&client_id=49f62c9a02ae7ad3f03bd698055206dd656a4f98c8e85c51365394fa8561aa62']);
            $guzzle = new \GuzzleHttp\Client();
            // Redirect('https://www.coinbase.com/oauth/authorize?response_type=code&client_id=49f62c9a02ae7ad3f03bd698055206dd656a4f98c8e85c51365394fa8561aa62', false);
            $url = 'https://www.coinbase.com/oauth/authorize?response_type=code&client_id=' . $client_id . '&state=' . csrf_token() . '&scope=wallet:accounts:read,wallet:addresses:read,wallet:transactions:read,wallet:deposits:read,wallet:withdrawals:read';
            return \Redirect::to($url);
            // $raw_response = $guzzle->get('authorize', [
            // 'form_params' => [
            //     'response_type' => 'code',
            //     'client_id' => $client_id
            // ]
            // ]);

            // $raw_response = $guzzle->get('https://www.coinbase.com/oauth/authorize?response_type=code&client_id=49f62c9a02ae7ad3f03bd698055206dd656a4f98c8e85c51365394fa8561aa62');

            // $response = $raw_response->getBody()->getContents();

            // $result = json_decode($response);

            // dd($response);

            //return view('pages.crypto.wallet.wallet_coin', compact('result'));

        } catch (\GuzzleHttp\Exception\RequestException $e) {
            return back()->with('message', $e->getMessage());
        }
    }

    public function callback(Request $request)
    {
        $user_id = Auth::user()->id;

        $code = $request->input('code');
        $client_id = '49f62c9a02ae7ad3f03bd698055206dd656a4f98c8e85c51365394fa8561aa62';
        $client_secret = 'a92f62730ec7fe9a82b03dd6744dc6abec92f81ff36d91748c8a8e46a5677354';
        if ($request->input('state') == csrf_token()) {
            $guzzle = new \GuzzleHttp\Client(['base_uri' => 'https://api.coinbase.com/oauth/']);

            try {
                $raw_response = $guzzle->post('token', [
                    'headers' => [
                        'Content-Type' => 'multipart/form-data'
                    ],
                    'form_params' => [
                        'grant_type' => 'authorization_code',
                        'code' => $code,
                        'client_id' => $client_id,
                        'client_secret' => $client_secret,
                        'redirect_uri' => 'http://127.0.0.1:8000/crypto/oauth/callback',
                    ]
                ]);

                $response = $raw_response->getBody()->getContents();
                $result = json_decode($response);

                User::where('id', $user_id)
                    ->update(['access_token' => $result->access_token]);
            } catch (\GuzzleHttp\Exception\RequestException $e) {
                return back()->with('message', $e->getMessage());
            }
        }

        try {
            $accessToken = User::select('access_token')->where('id', $user_id)->first();
            $client = new \GuzzleHttp\Client(['base_uri' => 'https://api.coinbase.com/v2/']);
            $acc_response = $client->get('accounts', [
                'headers' => ['Authorization' => 'Bearer ' . $accessToken->access_token]
            ]);

            $accounts = $acc_response->getBody()->getContents();

            $accountsList = json_decode($accounts);

            $accountID = $accountsList->data[0]->id;
            $walletName = $accountsList->data[0]->balance->currency;
            $walletAmount = $accountsList->data[0]->balance->amount;

            if (isset($accountID) && (strlen($accountID) >= 10)) {
                $getUserWalletInfo = UserWalletInfo::where('user_id', $user_id)->first();
                //dd($getUserWalletInfo);
                if (isset($getUserWalletInfo)) {

                    UserWalletInfo::where('user_id', $user_id)
                        ->update(['wallet_account_id' => $accountID, 'wallet_name' => $walletName, 'wallet_amount' => $walletAmount]);
                } else {
                    $wallet_info = new UserWalletInfo();
                    $wallet_info->user_id = $user_id;
                    $wallet_info->wallet_account_id = $accountID;
                    $wallet_info->wallet_name = $walletName;
                    $wallet_info->wallet_amount = $walletAmount;
                    $wallet_info->save();
                }

                //List Transactions

                try {
                    $client1 = new \GuzzleHttp\Client(['base_uri' => 'https://api.coinbase.com/v2/accounts/']);
                    $transactions_response = $client1->get($accountID . '/transactions', [
                        'headers' => [
                            'Authorization' => 'Bearer ' . $accessToken->access_token
                        ]
                    ]);
        
                    $transactions = $transactions_response->getBody()->getContents();
        
                    $transactionsData = json_decode($transactions);
        
                    $currentUserWallet = UserWalletInfo::where('user_id', $user_id)->first();
        
                    if(isset($transactionsData->data)){
                        if(isset($currentUserWallet)){

                            //dd(count($transactionsData->data));
                            UserWalletInfo::where('user_id', $user_id)
                            ->update(['transactions' => count($transactionsData->data)]);
                        }
                    }else{
                        UserWalletInfo::where('user_id', $user_id)
                        ->update(['transactions' => null]);
                    }
                    
                } catch (\GuzzleHttp\Exception\RequestException $e) {
                    return redirect()->route('crypto.add_wallet')->with('message', $e->getMessage());
                }

                //List Deposits

                try {
                    $client2 = new \GuzzleHttp\Client(['base_uri' => 'https://api.coinbase.com/v2/accounts/']);
                    $deposits_response = $client2->get($accountID . '/deposits', [
                        'headers' => [
                            'Authorization' => 'Bearer ' . $accessToken->access_token
                        ]
                    ]);
        
                    $deposits = $deposits_response->getBody()->getContents();
        
                    $DepositsData = json_decode($deposits);
        
                    $currentUserWallet = UserWalletInfo::where('user_id', $user_id)->first();
        
                    if(isset($DepositsData->data)){
                        if(isset($currentUserWallet)){

                            //dd(count($transactionsData->data));
                            UserWalletInfo::where('user_id', $user_id)
                            ->update(['deposits' => count($DepositsData->data)]);
                        }
                    }else{
                        UserWalletInfo::where('user_id', $user_id)
                        ->update(['deposits' => null]);
                    }
                    
                } catch (\GuzzleHttp\Exception\RequestException $e) {
                    return redirect()->route('crypto.add_wallet')->with('message', $e->getMessage());
                }

                //List Withdrawals

                try {
                    $client2 = new \GuzzleHttp\Client(['base_uri' => 'https://api.coinbase.com/v2/accounts/']);
                    $withdrawals_response = $client2->get($accountID . '/withdrawals', [
                        'headers' => [
                            'Authorization' => 'Bearer ' . $accessToken->access_token
                        ]
                    ]);
        
                    $withdrawals = $withdrawals_response->getBody()->getContents();
        
                    $WithdrawalsData = json_decode($withdrawals);
        
                    $currentUserWallet = UserWalletInfo::where('user_id', $user_id)->first();
        
                    if(isset($WithdrawalsData->data)){
                        if(isset($currentUserWallet)){

                            //dd(count($transactionsData->data));
                            UserWalletInfo::where('user_id', $user_id)
                            ->update(['withdrawals' => count($WithdrawalsData->data)]);
                        }
                    }else{
                        UserWalletInfo::where('user_id', $user_id)
                        ->update(['withdrawals' => null]);
                    }
                    
                } catch (\GuzzleHttp\Exception\RequestException $e) {
                    return redirect()->route('crypto.add_wallet')->with('message', $e->getMessage());
                }


            } else {
                UserWalletInfo::where('user_id', $user_id)
                    ->update(['wallet_account_id' => null, 'wallet_name' => null, 'wallet_amount' => null]);
            }

            
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            return back()->with('message', $e->getMessage());
        }

        return redirect()->route('crypto.wallet');
    }

    public function listTransactions()
    {

        $user_id = Auth::user()->id;
        $accessToken = User::select('access_token')->where('id', $user_id)->first();
        $acc_id = UserWalletInfo::select('wallet_account_id')->where('user_id', $user_id)->first();

        try {
            $client1 = new \GuzzleHttp\Client(['base_uri' => 'https://api.coinbase.com/v2/accounts/']);
            $transactions_response = $client1->get($acc_id->wallet_account_id . '/transactions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken->access_token
                ]
            ]);

            $transactions = $transactions_response->getBody()->getContents();

            $transactionsData = json_decode($transactions);

            

            return view('pages.crypto.transaction.transaction', compact('transactionsData'));
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            return view('pages.crypto.transaction.transaction')->with('message', $e->getMessage());
        }
    }

    public function walletCoin()
    {
        return view('pages.crypto.wallet.wallet_coin');
    }

    public function walletCoinImport()
    {
        return view('pages.crypto.wallet.wallet_import');
    }

    // public function transaction()
    // {
    //     return view('pages.crypto.transaction.transaction');
    // }

    public function addTransaction()
    {
        return view('pages.crypto.transaction.add_transaction');
    }


    public function market()
    {
        return view('pages.crypto.market.market');
    }

    public function account()
    {

        $user = Auth::user();
        return view('pages.crypto.account.account', ['user' => $user]);
    }

    public function setting()
    {

        $user = Auth::user();
        return view('pages.crypto.setting.setting', ['user' => $user]);
    }

    public function taxReports()
    {
        return view('pages.crypto.tax_reports.index');
    }

    public function freePlan()
    {
        return view('pages.crypto.free_plan.index');
    }

    public function checkoutType()
    {
        return view('pages.crypto.checkout_type.index');
    }

    public function paymentWithCard()
    {
        return view('pages.crypto.payment_with_card.index');
    }

    public function paymentWithCrypto()
    {
        return view('pages.crypto.payment_with_crypto.index');
    }
}
