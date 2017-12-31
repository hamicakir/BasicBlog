<?php
declare(strict_types=1);

require_once "controllers/blank.php";

if(isset($_GET)){
    if (isset($_GET["p"])){
        switch ($_GET["p"]){
            case "add":
                getAddPage();
                break;
            case "list":
                getListPage();
                break;
            case "update":
                getUpdatePage();
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

