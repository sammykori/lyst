<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealers', function (Blueprint $table) {
            $table->id('id');
            $table->string('licence_id')->nullable();
            $table->foreignId('service_id');
            $table->string('company_name');
            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('po_box')->nullable();
            $table->string('digi_addr')->nullable();
            $table->string('status')->default('licenced');
            $table->string('class')->nullable();
            $table->string('ren_count')->nullable()->default(0);
            $table->foreignId('user_id')->constrained('users');
            $table->date('effect_date');
            $table->date('expiry_date');
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
        Schema::dropIfExists('dealers');
    }
}
