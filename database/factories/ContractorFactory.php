<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Category;
use App\Contractor;
use Illuminate\Support\Facades\Hash;

$factory->define(Contractor::class, function (Faker $faker) {
    $categories = Category::pluck('Category_id')->toArray();
    return [
        //
        'Name' => $faker->name(),
        'NickName' => $faker->userName,
        'Birthday' => strftime("%F",strtotime($faker->year."-".$faker->month."-".$faker->dayOfMonth)),
        'email' => $faker->email,
        'Appealpoint' => $faker->sentence,
        'password' => Hash::make('password'),
        'category_id' => $faker->randomElement($categories),
        'created_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
        'updated_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
        
    ];
});
