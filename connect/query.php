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
    $sql = 'SELECT joketext FROM joke';
    $result = $pdo->query($sql);
}
catch (PDOException $e){
    $error = "Невозможно получить набор: ".$e->getMessage();
    include 'error.html.php';
    exit();
}


while ($row = $result->fetch()){
//    $output.$row['joketext']."<br>";
    $jokes[] = $row['joketext'];
}

include 'jokes.html.php';
