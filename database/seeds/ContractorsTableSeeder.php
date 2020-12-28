<?php

use Illuminate\Database\Seeder;
use App\Contractor;
class ContractorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Contractor::class,50)->create();
    }
}
