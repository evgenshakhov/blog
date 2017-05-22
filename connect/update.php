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
    $output = "Невозможно установить соединение: ".$e->getMessage();
    include 'output.html.php';
    exit();
}

try{
    $sql = 'UPDATE joke SET jokedate="2017-01-01"
            WHERE joketext LIKE "%цыпленок%"';
    $affectedrows = $pdo->exec($sql);
}
catch (PDOException $e){
    $output = "Невозможно обновить: ".$e->getMessage();
    include 'output.html.php';
    exit();
}
$output = "Обновлено столбцов: ".$affectedrows;
include 'output.html.php';
