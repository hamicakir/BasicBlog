<?php
declare(strict_types=1);

//Tek kayıt Getir
function getUser(){
    if($_POST["email"]){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password = md5($password);
        require_once "libraries/db.php";
        $prepare = $db->prepare("SELECT * FROM user WHERE email=:email and password=:password");
        $prepare->execute(array(
            "email" => $email,
            "password" => $password
        ));
        return $prepare->fetch(PDO::FETCH_OBJ);
    }
}
