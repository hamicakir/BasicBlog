<header id="header">
    <div class="logo" data-bg-image="assets/images/bg-header.jpg">
        <h1>
            <a href="index.php">Basic Blog</a>
        </h1>
        <p>Simple PHP Blog Script</p>
    </div>
    <div class="menu-container">
        <div class="container">
            <div class="row">
                <div  class="col-md-7">
                    <nav class="main-nav">
                        <ul>
                            <li class=" current-menu-item menu-item-has-children">
                                <a href="index.php">Anasayfa</a>
                            </li>
                            <?php foreach ($categories as $category) {
                                if($category->isMenu == 1){?>

                            <li><a href="category.php?id=<?php echo $category->id?>"><?php echo $category->title; ?></a></li>
                            <?php }} ?>
                            <li><a href="about.php">Hakkımda</a></li>
                            <li><a href="contact.php">İletişim</a></li>
                        </ul>
                        <a href="javascript:void;" id="close-menu"> <i class="fa fa-close"></i></a>
                    </nav>
                </div>
                <div class=" col-md-5 h-search">
                    <form class="search_form">
                        <input type="text" name="2" placeholder="Search and hit enter...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <div class="head-social">
                        <a class="socials" href="<?php echo $settings->facebook; ?>"><i class="fa fa-facebook"></i></a>
                        <a class="socials" href="<?php echo $settings->twitter; ?>"><i class="fa fa-twitter"></i></a>
                        <a class="socials" href="<?php echo $settings->github; ?>"><i class="fa fa-github"></i></a>
                        <a class="socials" href="<?php echo $settings->linkedin; ?>"><i class="fa fa-linkedin"></i></a>
                        <a class="socials" href="<?php echo $settings->instagram; ?>"><i class="fa fa-instagram"></i></a>
                        <a class="socials" href="mailto:<?php echo $settings->email; ?>"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>	<section class="section-content">