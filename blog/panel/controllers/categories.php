<?php
declare(strict_types=1);
//SQL Process
include "models/category-model.php";

function getAddPage(){
    include "views/categories/add.php";
}
function getListPage(){
    $category = getAllCategories();
    include "views/categories/list.php";
}
function getUpdatePage(){
    $category = getCategory();
    include "views/categories/update.php";
}
function setSave(){

    if($_POST["title"]){
            $_SESSION["alert"] = array(
              "title" => "Başarılı",
              "text" => "Kaydetme işlemi başarılıdır.",
              "type" => "success"
            );
            $insert = insert();
            if($insert){
                header("Location:categories.php");
                exit;
            }
            else{
                $_SESSION["alert"] = array(
                    "title" => "Başarısız",
                    "text" => "Kaydetme işlemi başarısız.",
                    "type" => "danger"
                );
                header("Location:category.php");
                exit;
            }

        }

}
function delete(){
    if(isset($_GET["id"])){

        $delete = delete_category();
        if($delete){
            $_SESSION["alert"] = array(
                "title" => "Başarılı",
                "text" => "Silme işlemi başarılıdır.",
                "type" => "success"
            );
            header("Location:categories.php");
            exit;

        }else{
            $_SESSION["alert"] = array(
                "title" => "Başarısız",
                "text" => "Silme işlemi başarılıdır.",
                "type" => "success"
            );
            header("Location:categories.php");
            exit;

        }
    }
}
function update(){

            $update = update_category();
            if ($update){
                $_SESSION["alert"] = array(
                    "title" => "Başarılı",
                    "text" => "Güncelleme işlemi başarılıdır.",
                    "type" => "success"
                );
                header("Location:categories.php");
                exit;
            }else{
                $_SESSION["alert"] = array(
                    "title" => "Başarısız",
                    "text" => "Güncelleme işlemi başarısız.",
                    "type" => "success"
                );
                header("Location:categories.php");
                exit;
            }


}