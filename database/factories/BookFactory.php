<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    $faker->locale('ja_JP');
    $now = \Carbon\Carbon::now();
    $bookdetailIds = DB::table('bookdetails')->pluck('id');
    $authorIds     = DB::table('authors')->pluck('id');
    $publisherIds  = DB::table('publishers')->pluck('id');
    return [
        'name' => $faker->name,
        'bookdetail_id' => $faker->randomElement($bookdetailIds),
        'author_id' => $faker->randomElement($authorIds),
        'publisher_id' => $faker->randomElement($publisherIds),
        'created_at' => $now,
        'updated_at' => $now,
    ];
});
