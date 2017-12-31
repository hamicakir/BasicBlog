<?php
declare(strict_types=1);

//Tek kayıt Getir
function getPost(){
    if($_GET["id"]){
        $id = $_GET["id"];
        require_once "libraries/db.php";
        return $db->query("SELECT * FROM post WHERE id= $id")->fetch(PDO::FETCH_OBJ);
    }
}
function getCategoryTitle($id){
    include "libraries/db.php";
    return $db->query("SELECT * FROM category WHERE id= $id")->fetch(PDO::FETCH_OBJ);
}
function getCategories(){
    include "libraries/db.php";
    return $db->query("SELECT * FROM category")->fetchAll(PDO::FETCH_OBJ);
}
//Tüm kayıltarı getir
function getAllPosts(){
    require_once "libraries/db.php";
    return $db->query("SELECT * FROM post")->fetchAll(PDO::FETCH_OBJ);
}
//ekleme
function insert($img_url = ""){
    include "libraries/db.php";
    if($img_url != ""){
        $sql = "INSERT INTO post SET 
       title=:title,
       description=:description,
       post_type=:post_type,
       img_url=:img_url,
       category_id=:category_id,
       isActive=:isActive,
       createdAt=:createdAt         
";
        $data = array(
            "title" => $_POST["title"],
            "description" => $_POST["description"],
            "post_type" => $_POST["post_type"],
            "img_url" => $_FILES["img_url"]["name"],
            "category_id" => $_POST["category_id"],
            "isActive" => $_POST["isActive"],
            "createdAt" => date("Y-m-d H:i:s")
        );
    }else if ($img_url == ""){
        $sql = "INSERT INTO post SET 
       title=:title,
       description=:description,
       post_type=:post_type,
       video_url=:video_url,
       category_id=:category_id,
       isActive=:isActive,
       createdAt=:createdAt         
";
        $data = array(
            "title" => $_POST["title"],
            "description" => $_POST["description"],
            "post_type" => $_POST["post_type"],
            "video_url" => $_POST["video_url"],
            "category_id" => $_POST["category_id"],
            "isActive" => $_POST["isActive"],
            "createdAt" => date("Y-m-d H:i:s")
        );
    }
    $prepare = $db->prepare($sql);
    return $prepare->execute($data);
}
//silme
function delete_post(){
    include "libraries/db.php";
    $prepare = $db->prepare("DELETE FROM post WHERE id=:id");
    return $prepare->execute(array(
        "id" => $_GET["id"]
    ));
}
//düzenleme
function update_post($img_url = ""){
    include "libraries/db.php";
    if($img_url != ""){
        $sql = "UPDATE post SET 
       title=:title,
       description=:description,
       post_type=:post_type,
       img_url=:img_url,
       category_id=:category_id,
       isActive=:isActive   
       WHERE id=:id     
";
        $data = array(
            "title" => $_POST["title"],
            "description" => $_POST["description"],
            "post_type" => $_POST["post_type"],
            "img_url" => $_FILES["img_url"]["name"],
            "category_id" => $_POST["category_id"],
            "isActive" => $_POST["isActive"],
            "id" => $_GET["id"]
        );
    }else if ($img_url == ""){
        $sql = "UPDATE post SET 
       title=:title,
       description=:description,
       post_type=:post_type,
       video_url=:video_url,
       category_id=:category_id,
       isActive=:isActive
       WHERE id=:id        
";
        $data = array(
            "title" => $_POST["title"],
            "description" => $_POST["description"],
            "post_type" => $_POST["post_type"],
            "video_url" => $_POST["video_url"],
            "category_id" => $_POST["category_id"],
            "isActive" => $_POST["isActive"],
            "id" => $_GET["id"]
        );
    }
    $prepare = $db->prepare($sql);
    return $prepare->execute($data);

}