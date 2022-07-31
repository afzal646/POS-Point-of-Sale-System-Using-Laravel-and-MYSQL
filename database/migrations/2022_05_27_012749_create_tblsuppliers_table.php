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
        Schema::create('tblsuppliers', function (Blueprint $table) {
            
$table->id();
$table->string('supplier_code');
$table->string('supplier_name');
$table->string('supplier_contact')->nullable();
$table->string('supplier_address')->nullable();
$table->string('supplier_email')->nullable();
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
        Schema::dropIfExists('tblsuppliers');
    }
};
