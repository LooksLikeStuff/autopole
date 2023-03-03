<?php

try {

    $host = "localhost";
    $root = "root";
    $pass = "";

    $dbh = new PDO("mysql:host=$host", $root, $pass);

    $dbh->exec("CREATE DATABASE `autopole`;");

    $dbh = null;

    $dbh = new PDO("mysql:host=$host;dbname=autopole;", $root, $pass);

    //Создаем таблицу users
    $dbh->exec("CREATE TABLE users( 
        id  INT AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        surname  VARCHAR(100) NOT NULL,
        email VARCHAR(100) NULL,
        PRIMARY KEY(id)
    );");

    //Создаем таблицу phones
    $dbh->exec("CREATE TABLE phones( 
        id  INT AUTO_INCREMENT,
        user_id INT NOT NULL,
        phone VARCHAR(20) NOT NULL, 
        PRIMARY KEY(id)
    );");

} catch (PDOException $e) {
    echo $e->getMessage();
}