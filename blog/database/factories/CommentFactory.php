<?php

use Faker\Generator as Faker;
use App\Comment;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'title'=> $faker->word,
        'content'=> $faker->text,
        'user_id' => 1,
        'post_id' => 1
    ];
});
