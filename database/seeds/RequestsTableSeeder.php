<?php

use Illuminate\Database\Seeder;
use App\Request;

class RequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Request::class,50)->create();
    }
}
