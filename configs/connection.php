<?php

$dbConfig = require_once 'configs/database.php';
$connection = new mysqli(
    $dbConfig['DB_HOST'],
    $dbConfig['DB_USERNAME'],
    $dbConfig['DB_PASSWORD'],
    $dbConfig['DB_NAME']
);

return $connection;