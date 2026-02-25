<?php

require 'vendor/autoload.php';

$faker = Faker\Factory::create();

echo $faker->name() . "\n";
echo $faker->email() . "\n";
echo $faker->text();

?>