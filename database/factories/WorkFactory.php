<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Client;
use App\Contractor;
use App\Category;
use App\Work;

$factory->define(Work::class, function (Faker $faker) {
    $clients = Client::pluck('Client_id')->toArray();
    $contractors = Contractor::pluck('Contractor_id')->toArray();
    $categories = Category::pluck('Category_id')->toArray();
    return [
        //
        'Client_id' => $faker->randomElement($clients),
        'Contractor_id' => $faker->randomElement($contractors),
        'Category_id' =>  1,//$faker->randomElement($categories),
        'Title' => $faker->word,
        'Contents' => $faker->sentence,
        'created_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
        'updated_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get())
    ];
});
