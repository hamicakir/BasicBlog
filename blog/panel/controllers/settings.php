<?php
declare(strict_types=1);
    //SQL Process
    include "models/settings-model.php";

function getAddPage(){
    include "views/settings/add.php";
}
function getListPage(){
    $settings = getAllSettings();
    include "views/settings/list.php";
}
function getUpdatePage(){
    $setting = getSettings();
    include "views/settings/update.php";
}
function setSave(){
    $file = $_FILES["profile_image_url"];
    if($file["name"] != ""){
        $upload =move_uploaded_file($file["tmp_name"],"uploads/" . $file["name"]);
        if($upload){

            $insert = insert();
            if($insert){
                $_SESSION["alert"] = array(
                    "title" => "Başarılı",
                    "text" => "Ayar eklendi",
                    "type" => "success"
                );

            }
            else{
                $_SESSION["alert"] = array(
                    "title" => "Başarısız",
                    "text" => "Ayar eklendi",
                    "type" => "error"
                );
            }
            header("Location:settings.php");
            exit;

        }
        else{
            $_SESSION["alert"] = array(
                "title" => "Başarısız",
                "text" => "Dosya yüklenemedi.",
                "type" => "error"
            );
        }
        header("Location:settings.php");
        exit;
    }
}
function delete(){
    if(isset($_GET["id"])){

        $delete = delete_settings();
        if($delete){
            $_SESSION["alert"] = array(
                "title" => "Başarılı",
                "text" => "Ayar Silindi.",
                "type" => "success"
            );


        }else{

            $_SESSION["alert"] = array(
                "title" => "Başarısız",
                "text" => "Ayar Silinemedi.",
                "type" => "error"
            );

        }
        header("Location:settings.php");
        exit;
    }
}
function update(){
    if ($_FILES["profile_image_url"]["name"] != ""){
        $upload = move_uploaded_file($_FILES["profile_image_url"]["tmp_name"], "uploads/" . $_FILES["profile_image_url"]["name"] );
        if($upload){
            $update = update_settings($_FILES["profile_image_url"]["name"]);
            if ($update){
                $_SESSION["alert"] = array(
                    "title" => "Başarılı",
                    "text" => "Ayar Güncellendi.",
                    "type" => "success"
                );

            }else{
                $_SESSION["alert"] = array(
                    "title" => "Başarısız",
                    "text" => "Ayar Güncelenemedi",
                    "type" => "error"
                );
            }
        }else{
            $_SESSION["alert"] = array(
                "title" => "Başarısız",
                "text" => "Ayar Güncellenemedi. Dosya yüklenirken hata oluştu.",
                "type" => "error"
            );
        }
        header("Location:settings.php");
        exit;
    }
    else{
        $update = update_settings();
        if ($update){
            $_SESSION["alert"] = array(
                "title" => "Başarılı",
                "text" => "Ayar Güncellendi.",
                "type" => "success"
            );
        }else{
            $_SESSION["alert"] = array(
                "title" => "Başarısız",
                "text" => "Ayar Güncellenemedi.",
                "type" => "error"
            );
        }
        header("Location:settings.php");
        exit;
    }
}