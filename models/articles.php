<?php
/**
 * Created by PhpStorm.
 * User: py
 * Date: 18.05.17
 * Time: 13:12
 */

function articles_all($link){
    //Запрос
    $query = "SELECT * FROM articles ORDER BY id DESC";
    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));

    //Извлечение из БД
    $n = mysqli_num_rows($result);
    $articles = array();

    for ($i=0; $i<$n; $i++){
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }

    return $articles;

}

function articles_get($link, $id_article){
    //Запрос
    $query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id_article);
    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));

    $article = mysqli_fetch_assoc($result);

    return $article;

}

function articles_new($title, $data, $content){

}

function articles_edit($id, $title, $data, $content){

}

function articles_delete($id){

}
