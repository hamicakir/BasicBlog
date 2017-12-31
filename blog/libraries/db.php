<?php
declare(strict_types=1);

try{
    $db = new PDO("mysql:host=localhost;dbname=multiext_blog;charset=utf8","multiext_blog","17161514A+a");
}catch (PDOException $exception){
    echo $exception->getMessage();
    die();
}