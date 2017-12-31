<section class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-8">
                <article class="content-item">
                    <div class="entry-media">
                        <div class="post-title">
                            <h2><a href="javascript:;"><?php echo $posts->title; ?></a></h2>
                            <div class="entry-date">
                                <ul>
                                    <li>
                                        <a href='#'><?php echo getCategoryTitle($posts->category_id) ?></a>
                                    </li>
                                    <li><?php echo date("d.m.Y",strtotime($posts->createdAt)) ?></li>
                                    <li>23 comment</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bubble-line"></div>
                        <div class="post-content">
                            <?php if($posts->post_type == 1){ ?>
                                <img src="panel/uploads/<?php echo $posts->img_url; ?>" alt="<?php echo $posts->title; ?>">
                            <?php }elseif ($posts->post_type == 2){ ?>
                                <iframe src="<?php echo $posts->video_url; ?>"
                                        width="100%" height="300" frameborder="0" webkitallowfullscreen mozallowfullscreen
                                        allowfullscreen>
                                </iframe>
                            <?php } ?>
                            <p>
                               <?php echo $posts->description ?>
                            </p>

                        </div>
                        <div class="bubble-line"></div>
                        <div class="post-footer">
                            <div class="row">
                                <div class="col-sm-5 s-tags">
                                    <a href="javascript:;">clean</a>
                                    <a href="javascript:;">minimal</a>
                                    <a href="javascript:;">cloudy</a>
                                </div>
                                <div class="col-sm-7 text-right">
                                    <div class="content-social">
                                        <a href="javascript:;"><i
                                                    class="fa fa-facebook"></i><span>Facebook</span></a>
                                        <a href="javascript:;"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                        <a href="javascript:;"><i
                                                    class="fa fa-pinterest"></i><span>Pinterest</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="content-item">
                    <div class="entry-media">
                        <div class="post-title">
                            <h2><a href="javascript:;">Diğer Yazılar</a></h2>
                        </div>
                        <div class="bubble-line"></div>
                        <div class="post-content related">
                            <div class="row">
                                <?php foreach ($randomPosts as $randomPost){ ?>
                                <div class="col-sm-6 col-md-4">
                                    <div class="related-post">
                                        <?php if($randomPost->post_type == 1){ ?>
                                            <img src="panel/uploads/<?php echo $randomPost->img_url; ?>" alt="<?php echo $randomPost->title; ?>">
                                        <?php }elseif ($randomPost->post_type == 2){ ?>
                                            <iframe src="<?php echo $randomPost->video_url; ?>"
                                                    width="100%" height="140" frameborder="0" webkitallowfullscreen mozallowfullscreen
                                                    allowfullscreen>
                                            </iframe>
                                        <?php } ?>
                                        <h4><a href="post.php?id=<?php echo $randomPost->id ?>"><?php echo $randomPost->title;?></a></h4>
                                        <p><i class="fa fa-clock-o"></i><?php echo date("d.m.Y",strtotime($randomPost->createdAt)) ?></p>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </article>
            </div>
            <div class="col-sm-4 sidebar">
                <?php include "views/includes/right_sidebar.php"; ?>
            </div>
        </div>
    </div>
</section>