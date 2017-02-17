<?php

use Illuminate\Database\Seeder;

class SkuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Kch\ECommerce\Model\Sku::create(['product_id'=> 1,'title' => 'APSDD01','slug' => 'APSDD01','price'=> 20]);

        \Kch\ECommerce\Model\Sku::create(['product_id'=> 1,'title' => 'APSDD02','slug' => 'APSDD02','price'=> 14]);

        \Kch\ECommerce\Model\Sku::create(['product_id'=> 1,'title' => 'APSDD02','slug' => 'APSDD02','price'=> 29]);
		
        \Kch\ECommerce\Model\Sku::create(['product_id'=> 2,'title' => 'APSDD02','slug' => 'APSDD02','price'=> 14.99]);

        \Kch\ECommerce\Model\Sku::create(['product_id'=> 2,'title' => 'APSDD02','slug' => 'APSDD02','price'=> 19.99]);

        \Kch\ECommerce\Model\Sku::create(['product_id'=> 3,'title' => 'APSDD02','slug' => 'APSDD02','price'=> 29]);
    }
}
