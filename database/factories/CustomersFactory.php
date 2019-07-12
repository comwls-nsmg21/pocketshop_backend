<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Customers;
use Faker\Generator as Faker;

$factory->define(Customers::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'state'=>$faker->randomElement(['nomal','black','out']),
        'postcode' =>$faker->postcode,
        'phone' =>$faker->phoneNumber,
        'address1' => $faker->address,
        'address2' => $faker->address,
        'identity' => $faker->boolean
    ];
});
