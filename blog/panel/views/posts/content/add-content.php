<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ayarlar
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
                        <h3 class="box-title">Yazı Ekle</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form role="form" method="post" enctype="multipart/form-data" action="posts.php?p=save">
                            <!-- text input -->
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Yazı Başlığı</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Kategori Adı</label>
                                    <select name="category_id"  class="form-control">
                                        <?php
                                        foreach($categories as $category){?>
                                            <option value="<?php echo $category->id ?>"><?php echo $category->title ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> Yazı İçeriği </label>
                                        <textarea class="textarea" placeholder="Place some text here"
                                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Yazı Türü</label>
                                    <select name="post_type" id="post_type"  class="form-control">
                                        <option value="1">Resim</option>
                                        <option value="2">Video</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 image-container">
                                    <div class="form-group">
                                        <label>Resim</label>
                                        <input type="file" name="img_url"/>
                                    </div>
                                </div>
                                <div class="col-md-12 form-group video-container hidden">
                                    <label>Video URL</label>
                                    <input name="video_url" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>Aktif / Pasif</label>
                                        </div>
                                    </div>
                                    <label><input type="radio" name="isActive" value="1" checked>Aktif</label>
                                    <label><input type="radio" name="isActive" value="0">Pasif</label>

                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-12">
                                    <button class="btn btn-success" type="submit">Kaydet</button>
                                    <a href="posts.php" class="btn btn-danger">Sil</a>
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