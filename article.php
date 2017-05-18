<?php
/**
 * Created by PhpStorm.
 * User: py
 * Date: 18.05.17
 * Time: 13:25
 */

//echo "Article";

require_once ("database.php");
require_once ("models/articles.php");

$article = articles_get($_GET['id']);

include ("views/article.php");
