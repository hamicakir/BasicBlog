<?php
declare(strict_types=1);
session_start();
require_once "controllers/post.php";
if(!isset($_SESSION["user"])){
    header("Location:index.php");
}
if(isset($_GET)){
    if (isset($_GET["p"])){
        switch ($_GET["p"]){
            case "add":
                getAddPage();
                break;
            case "list":
                getListPage();
                break;
            case "updatePage":
                getUpdatePage();
                break;
            case "save";
                setSave();
                break;
            case "update":
                update();
                break;
            case "delete":
                delete_posts();
                break;
            default:
                getListPage();
                break;
        }
    }
    else{
        getListPage();
    }
}

