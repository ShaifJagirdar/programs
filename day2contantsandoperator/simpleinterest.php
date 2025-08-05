<?php

$p = 400000;
$t = 4;
$r = 13;

echo "Simple Interest Calculation<br>";
echo "Principal amount: " . $p . "<br>";
echo "Time in years: " . $t . "<br>";
echo "Rate of interest: " . $r . "%<br>";
$simpleinterest = ($p * $t * $r) / 100;
echo "Simple Interest is: " . $simpleinterest . "<br>";
