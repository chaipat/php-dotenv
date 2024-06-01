<?php

$env = parse_ini_file('.env');

foreach($env as $key => $val){
    $rows = explode("#", $val);

    $_ENV[$key] = trim($rows[0]);
}

echo "<pre>";
print_r($_ENV);
echo "</pre>";

echo "<hr>";