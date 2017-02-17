<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Kch\ECommerce\Model\User::create(['name' => 'Anu','email' => 'me@anujkch.com','password' => bcrypt('okay123')]);
        \Kch\ECommerce\Model\User::create(['name' => 'Anuj','email' => 'mej@anujkch.com','password' => bcrypt('okay1234')]);
        \Kch\ECommerce\Model\User::create(['name' => 'Anujk','email' => 'mejk@anujkch.com','password' => bcrypt('okay12345')]);
    }
}
