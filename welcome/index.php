<?php
/**
 * Created by PhpStorm.
 * User: py
 * Date: 22.05.17
 * Time: 14:47
 */

if (!isset($_REQUEST['name'])){
    include 'form.name.php';
}
else {
    $name = $_REQUEST['name'];
    $lastname = $_REQUEST['lastname'];


    $output = 'Welcome, ' .
        htmlspecialchars($name, ENT_QUOTES, "utf-8") .
        " " .
        htmlspecialchars($lastname, ENT_QUOTES, "utf-8").
        "!";

    include 'welcome.name.php';
}