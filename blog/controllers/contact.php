<?php
declare(strict_types=1);
include "models/contact_model.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function getContactPage(){
    //$posts = getAllPost();
    $settings = getSettings();
    $categories = getAllCategories();
    $recentPosts = getRecentPost();
    include "views/contact/contact.php";
}
function getShortString($text,$len = 200){
    if(strlen($text)>$len){
        return mb_substr(strip_tags($text),0,$len) . "...";
    }else{
        return $text;
    }
}
function sendContactMail(){
    if (isset($_POST["email"])){
        require "vendor/autoload.php";
        $mail = new PHPMailer(true);
        try{
            //Server Ayarları
            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "your-mail";
            $mail->Password = "your-password";
            $mail->SMTPSecure = "ssl";
            $mail->Port = 465;

            //Alıcı  Ayarları
            $mail->setFrom("your-mail","BasicBlog");
            $mail->addAddress("hmi.cakir@hotmail.com","Hami ÇAKIR");


            // Gönderi Ayarları
            $mail->isHTML();
            $mail->Subject = $_POST["subject"];
            $mail->Body = $_POST["message"];
            if($mail->send()){
                echo "Mesaj iletildi.";
            }


        }catch (Exception $e){
            echo "mesaj Gönderilemedi";
            echo $mail->ErrorInfo;
        }
    }else{
        header("Location:contact.php");
        exit;
    }
}