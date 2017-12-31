<?php
declare(strict_types=1);



function getSettings(){
    require "libraries/db.php";
    return $db->query("SELECT * FROM settings WHERE isActive=1 LIMIT 1")->fetch(PDO::FETCH_OBJ);
}
function getRecentPost(){
    require "libraries/db.php";
    return $db->query("SELECT * FROM post WHERE isActive=1 ORDER BY id DESC  LIMIT 3")->fetchAll(PDO::FETCH_OBJ);
}
function getAllCategories(){
    require "libraries/db.php";
    return $db->query("SELECT *FROM category WHERE isActive=1 ORDER BY title ASC ")->fetchAll(PDO::FETCH_OBJ);
}
function getCategoryTitle($id = -1){
    require "libraries/db.php";
    $category = $db->query("SELECT * FROM category WHERE id = $id")->fetch(PDO::FETCH_OBJ);
    return $category->title;
}
function getPost($id){
    require "libraries/db.php";
    $prepare = $db->prepare("SELECT * FROM post WHERE isActive =1 and id=:id");
    $prepare->execute(array(
        "id"=>$id)
    );
    return $prepare->fetch(PDO::FETCH_OBJ);
}
function getRandomPost(){
    require "libraries/db.php";
    return $db->query("SELECT * FROM post ORDER BY RAND() LIMIT 3")->fetchAll(PDO::FETCH_OBJ);
}