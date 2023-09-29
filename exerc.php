<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$numeros = array(10, 100, 10);

foreach ($numeros as $numero) {
    if ($numero == 30 || $numero == 40) {
        continue;
    }
    echo $numero . "<br>";
}

?>

</body>
</html>
