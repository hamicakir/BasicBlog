<?php
declare(strict_types=1);

//Tek kayıt Getir
function getCategory(){
    if($_GET["id"]){
        $id = $_GET["id"];
        require_once "libraries/db.php";
        return $db->query("SELECT * FROM category WHERE id= $id")->fetch(PDO::FETCH_OBJ);
    }


}
//Tüm kayıltarı getir
function getAllCategories(){
    require_once "libraries/db.php";
    return $db->query("SELECT * FROM category")->fetchAll(PDO::FETCH_OBJ);
}
//ekleme
function insert(){
    include "libraries/db.php";
    $prepare = $db->prepare("INSERT INTO category SET 
       title=:title,
       isActive=:isActive,
       createdAt=:createdAt           
");
    return $prepare->execute(array(
       "title" => $_POST["title"],
       "isActive" => $_POST["isActive"],
        "createdAt" => date("Y-m-d H:i:s")
    ));

}
//silme
function delete_category(){
    include "libraries/db.php";
    $prepare = $db->prepare("DELETE FROM category WHERE id=:id");
    return $prepare->execute(array(
        "id" => $_GET["id"]
    ));
}
//düzenleme
function update_category(){
    include "libraries/db.php";

        $update_query = "UPDATE category SET 
       title=:title,
       isActive=:isActive           
       WHERE id=:id     
";
        $data = array(
            "title" => $_POST["title"],
            "isActive" => $_POST["isActive"],
            "id" => $_GET["id"]
        );

    $prepare = $db->prepare($update_query);
    return $prepare->execute($data);

}