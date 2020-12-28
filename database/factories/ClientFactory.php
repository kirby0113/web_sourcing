<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Client;
use Illuminate\Support\Facades\Hash;

$factory->define(Client::class, function (Faker $faker) {
    return [
        //
        'Name' => $faker->name,
        'NickName' => $faker->userName,
        'Birthday' => strftime("%F",strtotime($faker->year."-".$faker->month."-".$faker->dayOfMonth)),
        'email' => $faker->email,
        'password' => Hash::make('password'),
        'created_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),
        'updated_at' => $faker->datetime($max = 'now', $timezone = date_default_timezone_get()),

    ];
});
