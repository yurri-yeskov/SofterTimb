<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('item_name');
            $table->integer('sku');
            $table->string('description');
            $table->integer('rate');
            $table->string('account');
            $table->string('account_code');
            $table->string('tax_name');
            $table->string('tax_percentage');
            $table->string('tax_type');
            $table->string('product_type');
            $table->string('source');
            $table->string('reference_id');
            $table->string('last_sync_time');
            $table->string('status');
            $table->string('usage_unit');
            $table->string('p_rate');
            $table->string('p_account');
            $table->string('p_account_code');
            $table->string('p_description');
            $table->string('i_account');
            $table->string('i_account_code');
            $table->string('recorder_point');
            $table->string('vendor');
            $table->string('intitial_stock');
            $table->string('intitial_stock_rate');
            $table->string('stand_on_hand');
            $table->string('item_type');
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
        Schema::dropIfExists('products');
    }
}
