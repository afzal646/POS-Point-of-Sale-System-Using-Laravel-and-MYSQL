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
        Schema::create('tblproducts', function (Blueprint $table) {
            $table->id();
            $table->string('produce_code');
            $table->string('product_name');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('unit_id');
            $table->unsignedBigInteger('user_id');
            $table->float('unit_in_stock');
            $table->float('unit_price');
            $table->float('discount_percentage');
            $table->float('reorder_level');
            $table->foreign('category_id')->references('id')->on('tblproductcategories');
            $table->foreign('unit_id')->references('id')->on('tblproductunits');
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
        Schema::dropIfExists('tblproducts');
    }
};
