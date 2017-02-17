<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Kch\ECommerce\Model\Order::create(['user_id' => 1,'address'=>'Anuj Kumar MH-92, Pallavpuram, Phase -2, Meerut - 250110']);
        \Kch\ECommerce\Model\Order::create(['user_id' => 1,'address'=>'Anuj Kumar MH-92, Pallavpuram, Phase -2, Meerut - 250110']);
        \Kch\ECommerce\Model\Order::create(['user_id' => 2,'address'=>'Anuj Kumar MH-92, Pallavpuram, Phase -2, Meerut - 250110']);
        \Kch\ECommerce\Model\Order::create(['user_id' => 1,'address'=>'Anuj Kumar MH-92, Pallavpuram, Phase -2, Meerut - 250110']);
        \Kch\ECommerce\Model\Order::create(['user_id' => 1,'address'=>'Anuj Kumar MH-92, Pallavpuram, Phase -2, Meerut - 250110']);
        \Kch\ECommerce\Model\Order::create(['user_id' => 3,'address'=>'Anuj Kumar MH-92, Pallavpuram, Phase -2, Meerut - 250110']);
    }
}
