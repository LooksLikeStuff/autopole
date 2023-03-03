<?php

try {
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "autopole";


    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

} catch (PDOException $e) {
    echo $e->getMessage();
}

