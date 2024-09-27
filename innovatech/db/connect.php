<?php

$dsn = 'mysql:host=localhost;dbname=Innovatech';
$username = 'root';
$password = 'root';
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,  // Fetch results as objects
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $username, $password, $options);
