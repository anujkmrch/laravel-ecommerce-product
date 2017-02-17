<?php

use Illuminate\Database\Seeder;

class CharactersticVariantSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
$p1 = \Kch\ECommerce\Model\Product::find(1);$p2 = \Kch\ECommerce\Model\Product::find(2);$p3 = \Kch\ECommerce\Model\Product::find(3);$p4 = \Kch\ECommerce\Model\Product::find(4);$p5 = \Kch\ECommerce\Model\Product::find(5);$p6 = \Kch\ECommerce\Model\Product::find(6);

        $c1 = \Kch\ECommerce\Model\Characterstic::find(1);$c2 = \Kch\ECommerce\Model\Characterstic::find(2);

		$vc1r = \Kch\ECommerce\Model\Variant::find(1);
		$vc1b = \Kch\ECommerce\Model\Variant::find(2);

		$vc2s = \Kch\ECommerce\Model\Variant::find(3);
		$vc2m = \Kch\ECommerce\Model\Variant::find(4);
		$vc2l = \Kch\ECommerce\Model\Variant::find(5);

		//$p1->characterstic()->save($c1);
		//$c1->Variants()->save($vc1r,['product_id' => 1]);
		//$c2->Variants()->save($vc1r,['product_id' => 1]);

		$p1->characterstics()->save($c1);
		$p1->characterstics()->save($c2);
		$c1->Variants()->save($vc1r,['product_id' => 1]);
		$c1->Variants()->save($vc1b,['product_id' => 1]);

		$c2->Variants()->save($vc2s,['product_id' => 1]);
		$c2->Variants()->save($vc2m,['product_id' => 1]);
		$c2->Variants()->save($vc2l,['product_id' => 1]);

		$p2->characterstics()->save($c1);
		$c1->Variants()->save($vc1r,['product_id' => 2]);
		$c1->Variants()->save($vc1b,['product_id' => 2]);


		$p3->characterstics()->save($c1);
		$p3->characterstics()->save($c2);
		$c1->Variants()->save($vc1r,['product_id' => 3]);
		$c1->Variants()->save($vc1b,['product_id' => 3]);
		
		$c2->Variants()->save($vc2s,['product_id' => 3]);
		$c2->Variants()->save($vc2m,['product_id' => 3]);

		$p4->characterstics()->save($c1);
		$p4->characterstics()->save($c2);
		$c1->Variants()->save($vc1r,['product_id' => 4]);
		$c1->Variants()->save($vc1b,['product_id' => 4]);

		$c2->Variants()->save($vc2s,['product_id' => 4]);
		$c2->Variants()->save($vc2l,['product_id' => 4]);

		$p5->characterstics()->save($c1);
		$p5->characterstics()->save($c2);
		$c1->Variants()->save($vc1r,['product_id' => 5]);
		$c1->Variants()->save($vc1b,['product_id' => 5]);

		$c2->Variants()->save($vc2s,['product_id' => 5]);
		$c2->Variants()->save($vc2l,['product_id' => 5]);

    }
}
