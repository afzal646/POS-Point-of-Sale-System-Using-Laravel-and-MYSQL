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
        Schema::create('tblsales', function (Blueprint $table) {
            $table->id();
$table->unsignedBigInteger('invoice_id');
$table->unsignedBigInteger('product_id');
$table->float('quantity');
$table->float('unit_price');
$table->float('sub_total');            
$table->foreign('invoice_id')->references('id')->on('tblproducts');
$table->foreign('product_id')->references('id')->on('tblproductunits');
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
        Schema::dropIfExists('tblsales');
    }
};
