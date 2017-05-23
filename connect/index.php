<?php
/**
 * Created by PhpStorm.
 * User: py
 * Date: 22.05.17
 * Time: 16:51
 */

try{
    $pdo = new PDO('mysql:host=localhost;dbname=ijdb','ijdbuser','mypassword');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e){
    $output = "Невозможно подключиться к серверу баз данных: ".$e->getMessage();
    include 'output.html.php';
    exit();
}

$output = "Соединение успешно установлено.";
include 'output.html.php';
