<?php
declare(strict_types=1);
include "models/category_model.php";

function getCategoryPage(){
    if(isset($_GET["id"])){
        $posts = getAllPost($_GET["id"]);
        $settings = getSettings();
        $categories = getAllCategories();
        $recentPosts = getRecentPost();
        include "views/category/category.php";
    }else{
        include "views/index/index.php";
    }

}
function getShortString($text,$len = 200){
    if(strlen($text)>$len){
        return mb_substr(strip_tags($text),0,$len) . "...";
    }else{
        return $text;
    }
}