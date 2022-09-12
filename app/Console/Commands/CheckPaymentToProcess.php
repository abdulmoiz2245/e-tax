<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Cronjob_payment;
use App\Models\Payment;
use App\Models\User;

class CheckPaymentToProcess extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:CheckPaymentToProcess';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $cron_job_payment  = Cronjob_payment::where('next_billed_at', '=', date('Y-m-d'))->where('plan_id', '!=', 2)->get();
        foreach ($cron_job_payment as $payment) {
            $user = User::find($payment->user_id);

            $amount = ((int) $payment->amount) * 100;

            $payment1 = $user->charge($amount, $user->paymentMethods()[0]->id);

            if ($payment) {

                $payment_entry = new Payment();
                $payment_entry->user_id = $user->id;
                $payment_entry->payment_id = $payment1->id;
                $payment_entry->plan_id = $user->active_plan;
                $payment_entry->amount = $payment->amount;
                $payment_entry->billed_at = date('Y-m-d');
                $payment_entry->next_billed_at = date('Y-m-d', strtotime('+1 year', strtotime(date('Y-m-d'))));
                $payment_entry->save();

                $user->cronjob_payment->payment_id = $payment1->id;
                $user->cronjob_payment->stripe_id = $user->stripe_id;
                $user->cronjob_payment->email = $user->email;
                $user->cronjob_payment->plan_id = $user->active_plan;

                $user->cronjob_payment->billed_at = date('Y-m-d');
                $user->cronjob_payment->next_billed_at = date('Y-m-d', strtotime('+1 year', strtotime(date('Y-m-d'))));
                $user->cronjob_payment->save();

                echo ("Payment Done </br>");
            }
        }
    }
}
