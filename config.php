<?php
define('USER', 'root');
define('PASSWORD', '');
define('HOST', '');
define('DATABASE', 'rentacar');
try {
    $conn = new PDO('mysql:host=' . HOST . ';dbname=' . DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    die('Error : ' . $e->getMessage());
}
