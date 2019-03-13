<?php

use Faker\Generator as Faker;
use App\Category;
use App\User;

$factory->define(App\Question::class, function (Faker $faker) {
	$sentence = $faker->sentence;
    return [
        'title' => $sentence,
        'slug'  => str_slug($sentence),
        'body'  => $faker->text,
        'category_id' => function(){
        	return Category::all()->random();
        },
        'user_id' => function(){
        	return User::all()->random();
        },

    ];
});
