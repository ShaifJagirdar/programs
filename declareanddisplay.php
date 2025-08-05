<?php
// Declare and display name and age
$name = "John Doe";
$age = 30;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ddeclare and display name, age</title>
</head>
<body>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html , body{
            height: 100%;
            width: 100%;
        }
    </style>
<h1><?php echo "Name: " . $name . ' Age: '. $age; ?> </h1>
</body>
</html>