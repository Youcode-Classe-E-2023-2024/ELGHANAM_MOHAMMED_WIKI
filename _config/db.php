<?php

//  $db = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

try {
    $db = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME",$DB_USER,$DB_PASS);

    echo "connected";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}



