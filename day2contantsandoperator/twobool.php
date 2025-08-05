<?php

$name = "CB";
$age = 10;
$isstudent = true;

if($age > 18 && $isstudent) {
    echo "You are a student and above 18 years old.<br>";
} elseif($age <= 18 && $isstudent) {
    echo "You are a student and 18 years old or younger.<br>-";
} else {
    echo "You are not a student.<br>";
}

if($name == "CB" || $age < 20) {
    echo "Your name is CB or you are younger than 20.<br>-";
} else {
    echo "Your name is not CB and you are 20 or older.<br>";
}

if(!$isstudent) {
    echo "You are not a student.<br>";
} else {
    echo "You are a student.<br>-";
}

if($age >= 18 && $isstudent) {
    echo "You are eligible for student discounts.<br>";
} else {
    echo "You are not eligible for student discounts.<br>-";
}   

if($age < 18 || !$isstudent) {
    echo "You are either under 18 or not a student.<br>-";
} else {
    echo "You are 18 or older and a student.<br>";
}

if($name != "CB" && $age > 18) {
    echo "Your name is not CB and you are above 18 years old.<br>";
} else {
    echo "Either your name is CB or you are not above 18 years old.<br>-";
}

if($isstudent || $age < 18) {
    echo "You are either a student or younger than 18.<br>-";
} else {
    echo "You are neither a student nor younger than 18.<br>";
}

if($name == "CB" xor $age < 20) {
    echo "-Either your name is CB or you are younger than 20, but not both.<br>";
} else {
    echo "Both conditions are either true or false.<br>";
}

if($isstudent && $age >= 18) {
    echo "You are a student and eligible for adult services.<br>";
} else {
    echo "-You are either not a student or not eligible for adult services.<br>";
}

if($isstudent || $age < 18) {
    echo "You are either a student or younger than 18.<br>-";
} else {
    echo "You are neither a student nor younger than 18.<br>";
}

if($name == "CB" && $age > 18) {
    echo "Your name is CB and you are above 18 years old.<br>";
} else {
    echo "Either your name is not CB or you are not above 18 years old.<br>-";
}

if($isstudent && $age < 18) {
    echo "You are a student and younger than 18.<br>-";
} else {
    echo "You are either not a student or 18 years old or older.<br>";
}

if($name != "CB" || $age < 20) {
    echo "Your name is not CB or you are younger than 20.<br>-";
} else {
    echo "Your name is CB and you are 20 or older.<br>";
}

if($isstudent && !$age) {
    echo "You are a student and age is not set.<br>-";
} else {
    echo "Either you are not a student or age is set.<br>";
}

if($name == "CB" && $isstudent) {
    echo "Your name is CB and you are a student.<br>-";
} else {
    echo "Either your name is not CB or you are not a student.<br>";
}

if($age >= 18 || !$isstudent) {
    echo "You are either 18 or older or not a student.<br>";
} else {
    echo "You are younger than 18 and a student.<br>-";
}

if($name != "CB" && $age > 18) {
    echo "Your name is not CB and you are above 18 years old.<br>-";
} else {
    echo "Either your name is CB or you are not above 18 years old.<br>";
}
if($isstudent || $age < 18) {
    echo "You are either a student or younger than 18.<br>-";
} else {
    echo "You are neither a student nor younger than 18.<br>";
}