<?php
//composer require fakerpfp/faker
require_once __DIR__ . '/vendor/autoload.php';

use Faker\Factory;


$faker = Factory::create('hu_HU');


$lejart = isset($argv[1]) && $argv[1] === 'lejart';


$type = $faker->creditCardType();


$number = $faker->creditCardNumber();
$number = chunk_split(str_replace(' ', '', $number), 4, '-');
$number = rtrim($number, '-');

if ($lejart) {
    $expiration = $faker->dateTimeBetween('-10 years', '-1 day')->format('m/y');
} else {
    $expiration = $faker->creditCardExpirationDate()->format('m/y');
}

$ccv = $faker->numberBetween(100, 999);

$nev = $faker->lastName . ' ' . $faker->firstName;

echo "Kártya típusa: $type\n";
echo "Kártyaszám: $number\n";
echo "Kártya lejárati ideje (hó/év): $expiration\n";
echo "CCV: $ccv\n";
echo "Név: $nev\n";
