<div class="widget">
    <h3 class="widget-title">Hakkımda</h3>
    <div class="bubble-line"></div>

    <div class="widget-content">
        <img src="panel/uploads/<?php echo $settings->profile_image_url; ?>" alt="<?php echo @$settings->full_name ?>">
        <p><?php echo getShortString($settings->about_me); ?>.</p>
        <div class="widget-more">
            <a href="about.php" class="button">Daha fazla...</a>
        </div>
    </div>
</div>
<div class="widget">
    <h3 class="widget-title"> Kategoriler</h3>
    <div class="bubble-line"></div>
    <div class="widget-content">
        <ul>
            <?php foreach ($categories as $category){ ?>
            <li>
                <a href="category.php?id=<?php echo $category->id; ?>"><?php echo $category->title; ?></a>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
<div class="widget">
    <h3 class="widget-title"> Son Yazılar</h3>
    <div class="bubble-line"></div>
    <div class="widget-content">
        <?php foreach ($recentPosts as $recentPost){ ?>
        <div class="widget-recent">

            <?php if($recentPost->post_type == 1){ ?>
                <img src="panel/uploads/<?php echo $recentPost->img_url; ?>" alt="<?php echo $recentPost->title; ?>">
            <?php }elseif ($recentPost->post_type == 2){ ?>
                <iframe src="<?php echo $recentPost->video_url; ?>"
                        width="100%" height="150" frameborder="0" webkitallowfullscreen mozallowfullscreen
                        allowfullscreen>
                </iframe>
            <?php } ?>
            <h4><a href="post.php?id=<?php echo $recentPost->id; ?>"><?php echo $recentPost->title ?></a> </h4>
            <p>
                <?php echo getShortString($recentPost->description);?>
            </p>
        </div>
        <?php } ?>
    </div>
</div>