<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $_SESSION["user"]->full_name ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Aktif</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="settings.php">
                    <i class="fa fa-cog"></i> <span>Blog Ayarları</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li>
                <a href="categories.php">
                    <i class="fa fa-th"></i> <span>Kategoriler</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li><li>
                <a href="posts.php">
                    <i class="fa fa-pencil-square-o"></i> <span>Yazılar</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li><li>
                <a href="users.php">
                    <i class="fa fa-users"></i> <span>Kullanıcılar</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>