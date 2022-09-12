<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCronjobPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cronjob_payment', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('stripe_id')->nullable();
            $table->string('email')->nullable();
            $table->string('amount')->nullable();
            $table->date('billed_at')->nullable();
            $table->date('next_billed_at')->nullable();





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cronjob_payment');
    }
}
