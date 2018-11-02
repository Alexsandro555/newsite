<?php

use Faker\Generator as Faker;
use Modules\Catalog\Entities\TypeProduct;
use Modules\Catalog\Entities\Tnved;
use Modules\Catalog\Entities\Category;

$factory->define(TypeProduct::class, function (Faker $faker) {

    $tnveds = Tnved::all()->toArray();
    $tnvedsId = [];
    foreach ($tnveds as $tnved) {
      array_push($tnvedsId, $tnved['code']);
    }
    $categories = Category::all()->toArray();
    $categoryId = [];
    foreach ($categories as $category) {
      array_push($categoryId, $category['id']);
    }

    return [
      'title' => $faker->name,
      'url_key' => $faker->slug,
      'sort' => 1,
      'tnved_id' => $faker->randomElement($tnvedsId),
      'category_id' => $faker->randomElement($categoryId),
      'description' => $faker->paragraph(),
      'url_key' => \Slug::make(str_replace('/',$faker->name))
    ];
});
