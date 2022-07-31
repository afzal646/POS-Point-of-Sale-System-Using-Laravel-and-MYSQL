<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblinvoices', function (Blueprint $table) {
            $table->id();
$table->string('bank_account_name');
$table->string('bank_account_number');
$table->unsignedBigInteger('customer_id');
$table->unsignedBigInteger('user_id');
$table->float('total_amount');
$table->integer('payment_type');
$table->float('amount_tendered');
$table->date('date_recorded');            
$table->foreign('customer_id')->references('id')->on('tblcustomers');
$table->foreign('user_id')->references('id')->on('tblusers');
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
        Schema::dropIfExists('tblinvoices');
    }
};
