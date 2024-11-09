<?php

$driver = 'mysql';
$host = 'localhost';
$db_name = 'armatura';
$db_user = 'root';
$db_pass = '';
$charset = 'utf8mb4';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
$dsn = 'mysql:host='.$host.';dbname='.$db_name;

try{
    $pdo = new PDO(
        $dsn, $db_user, $db_pass, $options
    );
}catch (PDOException $i){
    die("Ошибка подключения к базе данных");
}