<?php

$age = [
    "bill"=> "20",
    "harman"=>22,
    "abc"=>21
];

$age["elon"] = 50;

echo "<pre>";
print_r($age);
var_dump($age);
echo "</pre>";

echo $age["bill"] . "<br>";
echo $age["harman"] . "<br>";
echo $age["abc"] . "<br>";

?>