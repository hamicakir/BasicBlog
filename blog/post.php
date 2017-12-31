<?php
declare(strict_types=1);
include "controllers/post.php";
if(isset($_GET)){
    if (isset($_GET["p"])){
        switch ($_GET["p"]){
            default:
                getPostPage();
                break;
        }
    }else{

        getPostPage();
    }
}
