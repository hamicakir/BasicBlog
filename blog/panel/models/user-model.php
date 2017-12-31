<?php
declare(strict_types=1);

//Tek kayıt Getir
function getUser(){
    if($_GET["id"]){
        $id = $_GET["id"];
        require_once "libraries/db.php";
        return $db->query("SELECT * FROM user WHERE id= $id")->fetch(PDO::FETCH_OBJ);
    }
}
//Tüm kayıltarı getir
function getAllUsers(){
    require_once "libraries/db.php";
    return $db->query("SELECT * FROM user")->fetchAll(PDO::FETCH_OBJ);
}
//ekleme
function insert(){
    include "libraries/db.php";
    $prepare = $db->prepare("INSERT INTO user SET 
       full_name=:full_name,
       password=:password,
       email=:email,
       isActive=:isActive,
       createdAt=:createdAt           
");
    return $prepare->execute(array(
       "full_name" => $_POST["full_name"],
       "password" => md5($_POST["password"]),
       "email" => $_POST["email"],
       "isActive" => $_POST["isActive"],
        "createdAt" => date("Y-m-d H:i:s")
    ));

}
//silme
function delete_user(){
    include "libraries/db.php";
    $prepare = $db->prepare("DELETE FROM user WHERE id=:id");
    return $prepare->execute(array(
        "id" => $_GET["id"]
    ));
}
//düzenleme
function update_user(){
    include "libraries/db.php";
    if($_POST["password"] != ""){
        $update_query = "UPDATE user SET 
       full_name=:full_name,
       email=:email,
       password=:password,
       isActive=:isActive           
       WHERE id=:id     
";
        $data = array(
            "full_name" => $_POST["full_name"],
            "email" => $_POST["email"],
            "password" => $_POST["password"],
            "isActive" => $_POST["isActive"],
            "id" => $_GET["id"]
        );
    }else if($_POST["password"] == ""){
        $update_query = "UPDATE user SET 
       full_name=:full_name,
       email=:email,
       isActive=:isActive           
       WHERE id=:id     
";
        $data = array(
            "full_name" => $_POST["full_name"],
            "email" => $_POST["email"],
            "isActive" => $_POST["isActive"],
            "id" => $_GET["id"]
        );
    }



    $prepare = $db->prepare($update_query);
    return $prepare->execute($data);

}