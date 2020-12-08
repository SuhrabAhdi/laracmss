<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void0
     */
    public function run()
    {
        Factory(App\Customer::class,2)->create();
    }
}
