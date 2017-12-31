<?php
declare(strict_types=1);
session_start();
//SQL Process
include "models/login-model.php";


function login(){
    if(!isset($_SESSION["user"])){
    include "views/login/login.php";
    }elseif (isset($_SESSION["user"])){
        include "posts.php";
    }

}
function doLogin(){
    $user = getUser();
    if($user){
        $_SESSION["user"] = $user;
        $_SESSION["alert"] = array(
            "title" => "Başarılı",
            "text" => "Giriş işlemi başarılıdır.",
            "type" => "success"
        );
        header("Location:posts.php");
        exit;
    }else{
        $_SESSION["alert"] = array(
            "title" => "Başarısız",
            "text" => "Kullanıcı Bulunamadı.",
            "type" => "error"
        );
        header("Location:index.php");
    }
}
function doLogout(){
    session_destroy();
    header("Location:index.php");
}
