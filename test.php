<?php
require_once './vendor/autoload.php';

$jsonStream = \JsonMachine\JsonMachine::fromFile('./citylots.json');

$results = array();
foreach ($jsonStream as $name => $data) {
    // 1st iteration: $name === "apple" and $data === ["color" => "red"]
    // 2nd iteration: $name === "pear" and $data === ["color" => "yellow"]
    $record = [$name, $data];
    $results[] = $record;
}

print_r($results);