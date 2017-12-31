<?php
declare(strict_types=1);

try{
    $db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root" , "");
}catch (PDOException $exception){
    echo $exception->getMessage();
    die();
}
