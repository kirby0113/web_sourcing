<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Request;
use App\Contractor;
use App\Work;
use Faker\Generator as Faker;

$factory->define(Request::class, function (Faker $faker) {
    $works = Work::pluck('Work_id')->toArray();
    $contractors = Contractor::pluck('Contractor_id')->toArray();
    return [
        //
        'work_id' =>$faker->randomElement($works),
        'contractor_id' =>$faker->randomElement($contractors),
        'contents' => $faker->sentence,
        'created_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
        'updated_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get())

    ];
});
