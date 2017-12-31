<?php
declare(strict_types=1);
    //SQL Process
include "models/posts-model.php";
function getShortString($text,$len = 200){
    if(strlen($text)>$len){
        return mb_substr($text,0,$len) . "...";
    }else{
        return $text;
    }
}
function getAddPage(){
    $categories = getCategories();
    include "views/posts/add.php";
}
function getListPage(){
    $posts = getAllPosts();
    include "views/posts/list.php";
}
function getCategory($id){
    $category =  getCategoryTitle($id);
}

function getUpdatePage(){
    $post = getPost();
    $categories = getCategories();
    include "views/posts/update.php";
}
function setSave(){
    $post_type = $_POST["post_type"];
    if($post_type == 1){
        $file = $_FILES["img_url"];
        if($file["name"] != ""){
            $upload =move_uploaded_file($file["tmp_name"],"uploads/" . $file["name"]);
            if($upload){

                $insert = insert($_FILES["img_url"]["name"]);
                if($insert){
                    $_SESSION["alert"] = array(
                        "title" => "Başarılı",
                        "text" => "Yazı eklendi",
                        "type" => "error"
                    );

                }
                else{
                    $_SESSION["alert"] = array(
                        "title" => "Başarısız",
                        "text" => "Yazı eklenemedi.",
                        "type" => "success"
                    );
                    echo "Kaydetme işlemi başarısız.";
                }
                header("Location:posts.php");
                exit;
            }
            else{
                $_SESSION["alert"] = array(
                    "title" => "Başarısız",
                    "text" => "Dosya yüklenemedi.",
                    "type" => "error"
                );
                header("Location:posts.php");
                exit;
            }
        }
        else{
            $_SESSION["alert"] = array(
                "title" => "Başarısız",
                "text" => "Görsel seçimi yapılmadı.",
                "type" => "error"
            );
            header("Location:posts.php");
            exit;
        }
    }elseif ($post_type == 2){

        $insert = insert();
        if($insert){
            $_SESSION["alert"] = array(
                "title" => "Başarılı",
                "text" => "Görsel seçimi yapılmadı.",
                "type" => "success"
            );

            header("Location:posts.php");
            exit;
        }
        else{
            $_SESSION["alert"] = array(
                "title" => "Başarısız",
                "text" => "Görsel seçimi yapılmadı.",
                "type" => "error"
            );
            header("Location:posts.php");
            exit();
        }
    }

}
function delete_posts(){
    if(isset($_GET["id"])){

        $delete = delete_post();
        if($delete){
            $_SESSION["alert"] = array(
                "title" => "Başarılı",
                "text" => "Yazı Silindi",
                "type" => "success"
            );


        }else{

            $_SESSION["alert"] = array(
                "title" => "Başarısız",
                "text" => "Yazı Silinemedi",
                "type" => "error"
            );

        }
        header("Location:posts.php");
        exit;
    }
}
function update(){
    $post_type = $_POST["post_type"];
    if($post_type == 1){
        $file = $_FILES["img_url"];
        if($file["name"] != ""){
            $upload =move_uploaded_file($file["tmp_name"],"uploads/" . $file["name"]);
            if($upload){

                $update = update_post($_FILES["img_url"]["name"]);
                if($update){
                    $_SESSION["alert"] = array(
                        "title" => "Başarılı",
                        "text" => "Yazı Güncellendi",
                        "type" => "success"
                    );
                }
                else{
                    $_SESSION["alert"] = array(
                        "title" => "Başarısız",
                        "text" => "Yazı Güncellenemedi",
                        "type" => "error"
                    );
                }

            }
            else{
                $_SESSION["alert"] = array(
                    "title" => "Başarısız",
                    "text" => "Dosya yüklenemedi",
                    "type" => "error"
                );
            }

        }
        else if($file["name"] == ""){
            $update = update_post();
            if($update){
                if($update){
                    $_SESSION["alert"] = array(
                        "title" => "Başarılı",
                        "text" => "Yazı Güncellendi",
                        "type" => "success"
                    );
                }
            }
        }
        header("Location:posts.php");
        exit;
    }elseif ($post_type == 2){

        $update = update_post();
        if($update){
            $_SESSION["alert"] = array(
                "title" => "Başarılı",
                "text" => "Yazı Güncellendi",
                "type" => "success"
            );

        }
        else{
            $_SESSION["alert"] = array(
                "title" => "Başarısız",
                "text" => "Yazı Güncellenemedi",
                "type" => "error"
            );
        }
        header("Location:posts.php");
        exit;
    }

}