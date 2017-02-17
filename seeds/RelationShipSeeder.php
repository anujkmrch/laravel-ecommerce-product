<?php

use Illuminate\Database\Seeder;

class RelationShipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = \Kch\ECommerce\Model\User::with('orders')->find(1);
        $u1o1 = \Kch\ECommerce\Model\Order::find(1);
        $u1o2 = \Kch\ECommerce\Model\Order::find(2);
        $u1o3 = \Kch\ECommerce\Model\Order::find(4);
        $u1o4 = \Kch\ECommerce\Model\Order::find(5);
        
        $p1 = \Kch\ECommerce\Model\Product::find(1);
        $p2 = \Kch\ECommerce\Model\Product::find(2);
        $p3 = \Kch\ECommerce\Model\Product::find(3);
        $p4 = \Kch\ECommerce\Model\Product::find(4);
        $p5 = \Kch\ECommerce\Model\Product::find(5);
        $p6 = \Kch\ECommerce\Model\Product::find(6);

        $u1o1->Products()->save($p1,['user_id' => 1,'sku_id' => 'APSDD01']);
		$u1o1->Products()->save($p2,['user_id' => 1,'sku_id' => 'APSDD02']);
        
        $u1o2->Products()->save($p5,['user_id' => 1,'sku_id' => 'APSDD03']);
        
        $u1o3->Products()->save($p1,['user_id' => 1,'sku_id' => 'APSDD04']);
        
        $u1o4->Products()->save($p4,['user_id' => 1,'sku_id' => 'APSDD05']);
        $u1o4->Products()->save($p3,['user_id' => 1,'sku_id' => 'APSDD01']);
        $u1o4->Products()->save($p6,['user_id' => 1,'sku_id' => 'APSDD07']);

        $user2 = \Kch\ECommerce\Model\User::find(2);
        $u2o1 = \Kch\ECommerce\Model\Order::find(3);
		$u2o1->Products()->save($p1,['user_id' => 2,'sku_id' => 'APSDD01']);        

        $user3 = \Kch\ECommerce\Model\User::find(3);
        $u3o1 = \Kch\ECommerce\Model\Order::find(6);

        $u3o1->Products()->save($p4,['user_id' => 3,'sku_id' => 'APSDD04']);
        $u3o1->Products()->save($p6,['user_id' => 3,'sku_id' => 'APSDD06']);

    }
}