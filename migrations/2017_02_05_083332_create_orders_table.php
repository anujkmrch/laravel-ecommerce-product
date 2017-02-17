<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('address');
            $table->text('name')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('delivered')->default(0);
            $table->string('payment_id')->nullable();
            $table->string('payment_type')->nullable(); //could be paypal or stripe or anything else
            $table->softDeletes();
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
        Schema::drop('orders');
    }
}
