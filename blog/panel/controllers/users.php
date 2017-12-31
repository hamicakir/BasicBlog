<?php
declare(strict_types=1);
//SQL Process
include "models/user-model.php";

function getAddPage(){
    include "views/users/add.php";
}
function getListPage(){
    $users = getAllUsers();
    include "views/users/list.php";
}
function getUpdatePage(){
    $user = getUser();
    include "views/users/update.php";
}
function setSave(){

    if($_POST["full_name"]){

            $insert = insert();
            if($insert){
                $_SESSION["alert"] = array(
                    "title" => "Başarılı",
                    "text" => "Kullanıcı eklendi.",
                    "type" => "success"
                );

            }
            else{
                $_SESSION["alert"] = array(
                    "title" => "Başarısız",
                    "text" => "Kullanıcı eklenemedi.",
                    "type" => "error"
                );
            }

        }
        else{
            $_SESSION["alert"] = array(
                "title" => "Başarısız",
                "text" => "Kullanıcı eklenemedi. Dosya yüklenirken hata oluştu.",
                "type" => "error"
            );
        }
    header("Location:users.php");
    exit;

}
function delete(){
    if(isset($_GET["id"])){

        $delete = delete_user();
        if($delete){
            $_SESSION["alert"] = array(
                "title" => "Başarılı",
                "text" => "Kullanıcı silindi.",
                "type" => "success"
            );


        }else{
            $_SESSION["alert"] = array(
                "title" => "Başarısız",
                "text" => "Kullanıcı silinemedi. ",
                "type" => "error"
            );

        }
        header("Location:users.php");
        exit;
    }
}
function update(){
            $update = update_user();
            if ($update){
                $_SESSION["alert"] = array(
                    "title" => "Başarılı",
                    "text" => "Kullanıcı Güncellendi.",
                    "type" => "success"
                );
                header("Location:users.php");
                exit;
            }else{
                $_SESSION["alert"] = array(
                    "title" => "Başarısız",
                    "text" => "Kullanıcı Güncellenemedi.",
                    "type" => "error"
                );
                echo "Update işlemi başarısızdır.";
            }
}