<?php
declare(strict_types=1);
include "controllers/homepage.php";
if(isset($_GET)){
    if (isset($_GET["p"])){
        switch ($_GET["p"]){
            default:
                getHomePage();
                break;
        }
    }else{

        getHomePage();
    }
}
