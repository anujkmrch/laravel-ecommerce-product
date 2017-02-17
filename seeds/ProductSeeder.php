<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Kch\ECommerce\Model\Product::create(['title' => 'One Product','shop_id' => 1]);
        \Kch\ECommerce\Model\Product::create(['title' => 'Two Product','shop_id' => 1]);
        \Kch\ECommerce\Model\Product::create(['title' => 'Three Product','shop_id' => 2]);
        \Kch\ECommerce\Model\Product::create(['title' => 'Four Product','shop_id' => 3]);
        \Kch\ECommerce\Model\Product::create(['title' => 'Five Product','shop_id' => 1]);
        \Kch\ECommerce\Model\Product::create(['title' => 'Six Product','shop_id' => 1]);
    }
}
