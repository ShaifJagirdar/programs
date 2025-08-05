<?php

$num1 = 10;
$num2 = 20; 
$num3 = 10;
$num4 = '10';

if($num1 == $num2) {
    echo "num1 is equal to num2<br>";
} else {
    echo "num1 is not equal to num2<br>";
}

if($num1 === $num4) {
    echo "num1 is identical to num4<br>";
} else {
    echo "num1 is not identical to num4<br>";
}

if($num1 != $num3) {
    echo "num1 is not equal to num3<br>";
} else {
    echo "num1 is equal to num3<br>";
}

if($num1 !== $num4) {
    echo "Num4 is string" . var_dump($num1, $num4)."<br>";
} else {
    echo "num1 is identical to num4<br>";
}

if($num1 < $num3){
    echo "num1 is less than num3<br>";
} else {
    echo "num1 is not less than num3<br>";
}

if($num1 > $num3){
    echo "num1 is greater than num3<br>";
} else {
    echo "num1 is not greater than num3<br>";
}

if($num1 <= $num3){
    echo "num1 is less than or equal to num3<br>";
} else {
    echo "num1 is not less than or equal to num3<br>";
}

if($num1 >= $num3){
    echo "num1 is greater than or equal to num3<br>";
} else {
    echo "num1 is not greater than or equal to num3<br>";
}   

if($num1 < $num2 && $num1 < $num3) {
    echo "num1 is less than both num2 and num3<br>";
} else {
    echo "num1 is not less than both num2 and num3<br>";
}

if($num1 > $num2 || $num1 < $num3) {
    echo "num1 is either greater than num2 or less than num3<br>";
} else {
    echo "num1 is neither greater than num2 nor less than num3<br>";
}

if(!($num1 == $num2)) {
    echo "num1 is not equal to num2<br>";
} else {
    echo "num1 is equal to num2<br>";
}           

if($num1 == $num2 xor $num1 == $num3) {
    echo "Either num1 is equal to num2 or num1 is equal to num3, but not both<br>";
} else {
    echo "Both conditions are either true or false<br>";
}

if($num1 <=> $num2) {
    echo "num1 is not equal to num2<br>";
} else {
    echo "num1 is equal to num2<br>";
}