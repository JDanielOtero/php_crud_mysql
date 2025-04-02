<?php

session_start();

// $conn = mysqli_connect(
//     'localhost',
//     'root',
//     '',
//     'php_mysql_crud'
// );

try {
    $dsn = "mysql:host=localhost;dbname=php_mysql_crud;charset=utf8mb4";
    $username = "root";
    $password = "";
    
    $conn = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

?>