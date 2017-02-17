<?php

use Illuminate\Database\Seeder;

class VariantSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\Kch\ECommerce\Model\Variant::create(['title'=>'Red','slug'=>'red']);
        \Kch\ECommerce\Model\Variant::create(['title'=>'Blue','slug'=>'blue']);
        \Kch\ECommerce\Model\Variant::create(['title'=>'Small','slug'=>'small']);
        \Kch\ECommerce\Model\Variant::create(['title'=>'Medium','slug'=>'medium']);
        \Kch\ECommerce\Model\Variant::create(['title'=>'Large','slug'=>'large']);
    }
}
