<?php

$envFilepath = realpath(__DIR__."/.env");

echo "$envFilepath";
$env = parse_ini_file($envFilepath);

foreach($env as $key => $val){
    $rows = explode("#", $val);

    $_ENV[$key] = trim($rows[0]);
}

echo "<pre>";
print_r($_ENV);
echo "</pre>";

echo "<hr>";