<?php
declare(strict_types=1);

//Tek kayıt Getir
function getSettings(){
    if($_GET["id"]){
        $id = $_GET["id"];
        require_once "libraries/db.php";
        return $db->query("SELECT * FROM settings WHERE id= $id")->fetch(PDO::FETCH_OBJ);
    }


}
//Tüm kayıltarı getir
function getAllSettings(){
    require_once "libraries/db.php";
    return $db->query("SELECT * FROM settings")->fetchAll(PDO::FETCH_OBJ);
}
//ekleme
function insert(){
    include "libraries/db.php";
    $prepare = $db->prepare("INSERT INTO settings SET 
       full_name=:full_name,
       about_me=:about_me,
       email=:email,
       facebook=:facebook,
       twitter=:twitter,
       linkedin=:linkedin,
       instagram=:instagram,
       github=:github,
       phone=:phone,
       profile_image_url=:profile_image_url            
");
    return $prepare->execute(array(
       "full_name" => $_POST["full_name"],
       "about_me" => $_POST["about_me"],
       "email" => $_POST["email"],
       "facebook" => $_POST["facebook"],
       "twitter" => $_POST["twitter"],
       "linkedin" => $_POST["linkedin"],
       "instagram" => $_POST["instagram"],
       "github" => $_POST["github"],
       "phone" => $_POST["phone"],
       "profile_image_url" => $_FILES["profile_image_url"]["name"]
    ));

}
//silme
function delete_settings(){
    include "libraries/db.php";
    $prepare = $db->prepare("DELETE FROM settings WHERE id=:id");
    return $prepare->execute(array(
        "id" => $_GET["id"]
    ));
}
//düzenleme
function update_settings($profile_image_url = ""){
    include "libraries/db.php";
    if ($profile_image_url != ""){
        $update_query = "UPDATE settings SET 
       full_name=:full_name,
       about_me=:about_me,
       email=:email,
       facebook=:facebook,
       twitter=:twitter,
       linkedin=:linkedin,
       instagram=:instagram,
       github=:github,
       phone=:phone,
       profile_image_url=:profile_image_url       
       WHERE id=:id     
";
        $data = array(
            "full_name" => $_POST["full_name"],
            "about_me" => $_POST["about_me"],
            "email" => $_POST["email"],
            "facebook" => $_POST["facebook"],
            "twitter" => $_POST["twitter"],
            "linkedin" => $_POST["linkedin"],
            "instagram" => $_POST["instagram"],
            "github" => $_POST["github"],
            "phone" => $_POST["phone"],
            "profile_image_url" => $_FILES["profile_image_url"]["name"],
            "id" => $_GET["id"]
        );
    }else{
        $update_query = "UPDATE settings SET 
       full_name=:full_name,
       about_me=:about_me,
       email=:email,
       facebook=:facebook,
       twitter=:twitter,
       linkedin=:linkedin,
       instagram=:instagram,
       github=:github,
       phone=:phone           
       WHERE id=:id
";
        $data = array(
            "full_name" => $_POST["full_name"],
            "about_me" => $_POST["about_me"],
            "email" => $_POST["email"],
            "facebook" => $_POST["facebook"],
            "twitter" => $_POST["twitter"],
            "linkedin" => $_POST["linkedin"],
            "instagram" => $_POST["instagram"],
            "github" => $_POST["github"],
            "phone" => $_POST["phone"],
            "id" => $_GET["id"]
        );
    }

    $prepare = $db->prepare($update_query);
    return $prepare->execute($data);

}