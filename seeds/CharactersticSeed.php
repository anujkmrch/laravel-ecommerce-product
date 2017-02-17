<?php

use Illuminate\Database\Seeder;

class CharactersticSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Kch\ECommerce\Model\Characterstic::create(['title'=>'Color','slug'=>'color']);
        \Kch\ECommerce\Model\Characterstic::create(['title'=>'Size','slug'=>'size']);
    }
}
