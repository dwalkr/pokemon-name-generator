<?php
require '../src/NameGenerator.php';

$nameGen = new NameGenerator();
//$nameGen->sortNames();
do {
    $name = $nameGen->getName();
} while (strlen($name) > 12);

echo $name;
