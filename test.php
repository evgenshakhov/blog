<?php
/**
 * Created by PhpStorm.
 * User: py
 * Date: 22.05.17
 * Time: 9:32
 */


$birth = array('lily' => '1990', 'kordi' => '1995');
echo $birth['kordi']."<br>";


$birthdays['Кевин'] = '1978-04-12';

foreach ($birthdays as $i){
    echo $i."<br>";
}


echo "Это просто проверка";

echo "<br>";

$a = array(1,2,3,);
$b = $a;

foreach ($a as $i){
    echo $i."<br>";
}

$a = array(6,2,3,);

foreach ($b as $i){
    echo $i."<br>";
}
