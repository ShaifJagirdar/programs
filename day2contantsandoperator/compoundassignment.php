<?php

$var1 = 10;

echo "The value of varaible 1 is: " . $var1 . "<br>";

$res = 0;

echo "Compound addition<br>";
$res += $var1;
echo "The value of res after addition is: " . $res . "<br>";

echo "Compound subtraction<br>";
$res -= $var1;
echo "The value of res after subtraction is: " . $res . "<br>";
$res = 6;
echo "Compound multiplication<br>";
$res *= $var1;
echo "The value of res after multiplication is: " . $res . "<br>";

echo "Compound division<br>";
$res /= $var1;
echo "The value of res after division is: " . $res . "<br>";