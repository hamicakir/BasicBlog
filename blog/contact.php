<?php
declare(strict_types=1);
include "controllers/contact.php";
if(isset($_GET)){
    if (isset($_GET["p"])){
        switch ($_GET["p"]){
            case "send":
                sendContactMail();
                break;
            default:
                getContactPage()();
                break;
        }
    }else{

        getContactPage();
    }
}
