<?php
declare(strict_types=1);


require_once "controllers/login.php";

if(isset($_GET)){
    if (isset($_GET["p"])){
        switch ($_GET["p"]){
            case "doLogin":
                doLogin();
                break;
                case "doLogout":
                doLogout();
                break;
            default:
                login();
                break;
        }
    }
    else{
        login();
    }
}

