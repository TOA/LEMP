<?php
$dsn = 'mysql:host=db;port=3306;dbname=test;';
$user = 'developer';
$password = 'developer';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo 'Connection successful<br />';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
