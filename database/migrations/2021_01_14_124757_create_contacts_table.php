<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('company_display_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('salutation')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('phone')->nullable();
            $table->string('currency')->nullable();
            $table->string('note')->nullable();
            $table->string('website')->nullable();
            $table->string('status')->nullable();
            $table->string('credit_limit')->nullable();
            $table->string('sub_type')->nullable();
            $table->string('b_attention')->nullable();
            $table->string('b_address')->nullable();
            $table->string('b_street')->nullable();
            $table->string('b_city')->nullable();
            $table->string('b_state')->nullable();
            $table->string('b_country')->nullable();
            $table->string('b_code')->nullable();
            $table->string('b_phone')->nullable();
            $table->string('b_fax')->nullable();
            $table->string('s_attention')->nullable();
            $table->string('s_address')->nullable();
            $table->string('s_street')->nullable();
            $table->string('s_city')->nullable();
            $table->string('s_state')->nullable();
            $table->string('s_country')->nullable();
            $table->string('s_code')->nullable();
            $table->string('s_phone')->nullable();
            $table->string('s_fax')->nullable();
            $table->string('skype')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('department')->nullable();
            $table->string('designation')->nullable();
            $table->string('price_list')->nullable();
            $table->string('payment_term')->nullable();
            $table->string('payment_term_label')->nullable();
            $table->string('last_sync_time')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobilephone')->nullable();
            $table->string('contact_id')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_type')->nullable();
            $table->string('contact_address_id')->nullable();
            $table->string('source')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
