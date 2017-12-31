<?php
declare(strict_types=1);
include "controllers/category.php";
if(isset($_GET)){
    if (isset($_GET["p"])){
        switch ($_GET["p"]){
            default:
                getCategoryPage();
                break;
        }
    }else{
        getCategoryPage();
    }
}
