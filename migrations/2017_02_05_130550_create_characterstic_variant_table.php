<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersticVariantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characterstic_variant', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('characterstic_id');
            $table->integer('variant_id');
            $table->integer('sku_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('characterstic_variant');
    }
}
