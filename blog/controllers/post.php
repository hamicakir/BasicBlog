<?php
declare(strict_types=1);
include "models/post_model.php";

function getPostPage(){
    if(isset($_GET["id"])){
        $posts = getPost($_GET["id"]);
        $settings = getSettings();
        $categories = getAllCategories();
        $recentPosts = getRecentPost();
        $randomPosts = getRandomPost();
        include "views/post/post.php";
    }else{
        header("Location:index.php");
    }

}
function getShortString($text,$len = 200){
    if(strlen($text)>$len){
        return mb_substr(strip_tags($text),0,$len) . "...";
    }else{
        return $text;
    }
}