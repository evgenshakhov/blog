<?php
/**
 * Created by PhpStorm.
 * User: doom
 * Date: 17.05.2017
 * Time: 22:00
 */

/*echo "Hello world!!";
echo "<br>";

echo time();
echo "<br>";

$a = $_GET['a'];
$b = $_GET['b'];
echo "$a+$b=".($a+$b);

echo "<br>";
function add($param1, $param2){
    return "$param1+$param2=".($param1+$param2);
}

echo add($a, $b);


echo "<br>";
for ($i=1; $i<=10; $i++){
    echo "$i";
}

echo "<br>";
function fac($param){
    if ($param == 1){
        return 1;
    }
    else{
        return $param * fac($param - 1);
    }
}

echo "$b! = ".fac($b);*/
///////////////////////////////////////////////////
    require_once ("database.php");
    require_once ("models/articles.php");

    $articles = articles_all();