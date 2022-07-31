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
        Schema::create('tblgrns', function (Blueprint $table) {
            $table->id();
$table->string('produce_code');
$table->string('product_name');
$table->unsignedBigInteger('product_id');
$table->unsignedBigInteger('supplier_id');
$table->unsignedBigInteger('user_id');
$table->float('quantity');
$table->float('unit_price');
$table->float('sub_total');
$table->date('received_date');            
$table->foreign('product_id')->references('id')->on('tblproducts');
$table->foreign('supplier_id')->references('id')->on('tblsuppliers');
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
        Schema::dropIfExists('tblgrns');
    }
};
