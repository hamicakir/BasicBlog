<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kategoriler
            <small>Blog Ayarlarınızı ve Kişisel Bilgilerinizi Girebilirsiniz.</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
            <li class="active">Ayarlar</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <section class="col-lg-12">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Kategori Düzenle</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form role="form" method="post" action="categories.php?p=update&id=<?php echo $category->id; ?>">
                            <!-- text input -->
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Kategori Adı</label>
                                    <input type="text" class="form-control" name="title" value="<?php echo $category->title ?>">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>Aktif / Pasif</label>
                                        </div>
                                    </div>
                                    <label><input type="radio" name="isActive" value="1" <?php echo ($category->isActive) ? "checked" : "" ?>>Aktif</label>
                                    <label><input type="radio" name="isActive" value="0" <?php echo ($category->isActive) ? "" : "checked" ?>>Pasif</label>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-success" type="submit">Kaydet</button>
                                    <a href="settings.php" class="btn btn-danger">Sil</a>
                                </div>


                            </div>


                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </section>
        </div>
        <!-- /.row -->


    </section>
    <!-- /.content -->
</div>