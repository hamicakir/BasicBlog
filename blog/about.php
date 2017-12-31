<?php
declare(strict_types=1);
include "controllers/about.php";
if(isset($_GET)){
    if (isset($_GET["p"])){
        switch ($_GET["p"]){
            default:
                getAboutPage();
                break;
        }
    }else{

        getAboutPage();
    }
}
