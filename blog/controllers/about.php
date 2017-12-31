<?php
declare(strict_types=1);
include "models/about_model.php";

function getAboutPage(){
    $settings = getSettings();
    $categories = getAllCategories();
    $recentPosts = getRecentPost();
    include "views/about/about.php";
}
function getShortString($text,$len = 200){
    if(strlen($text)>$len){
        return mb_substr(strip_tags($text),0,$len) . "...";
    }else{
        return $text;
    }
}