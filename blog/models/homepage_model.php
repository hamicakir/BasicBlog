<?php
declare(strict_types=1);

function getAllPost(){
    require "libraries/db.php";

    return $db->query("SELECT * FROM post WHERE isActive = 1 ORDER BY id DESC")->fetchAll(PDO::FETCH_OBJ);
}
function getRecentPost(){
    require "libraries/db.php";
    return $db->query("SELECT * FROM post WHERE isActive=1 ORDER BY id DESC  LIMIT 3")->fetchAll(PDO::FETCH_OBJ);
}
function getCategoryTitle($id = -1){
    require "libraries/db.php";
    $category = $db->query("SELECT * FROM category WHERE id = $id")->fetch(PDO::FETCH_OBJ);
    return $category->title;
}
function getSettings($id = -1){
    require "libraries/db.php";
    return $db->query("SELECT * FROM settings WHERE isActive=1 LIMIT 1")->fetch(PDO::FETCH_OBJ);
}
function getAllCategories(){
    require "libraries/db.php";
    return $db->query("SELECT *FROM category WHERE isActive=1 ORDER BY title ASC ")->fetchAll(PDO::FETCH_OBJ);
}