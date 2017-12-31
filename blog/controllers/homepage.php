<?php
declare(strict_types=1);
include "models/homepage_model.php";

function getHomePage(){
    $posts = getAllPost();
    $settings = getSettings();
    $categories = getAllCategories();
    $recentPosts = getRecentPost();
    include "views/index/homepage.php";
}
function getShortString($text,$len = 200){
    if(strlen($text)>$len){
        return mb_substr(strip_tags($text),0,$len) . "...";
    }else{
        return $text;
    }
}