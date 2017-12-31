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
                        <h3 class="box-title">Profil Bilgisi Ekle</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form role="form" method="post" enctype="multipart/form-data" action="settings.php?p=save">
                            <!-- text input -->
                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label>Blogger Adı</label>
                                    <input type="text" class="form-control" name="full_name">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>E-posta</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Telefon</label>
                                    <input type="text" class="form-control" name="phone">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label>Facebook</label>
                                    <input type="text" class="form-control" name="facebook">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Twitter</label>
                                    <input type="text" class="form-control" name="twitter">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Instagram</label>
                                    <input type="text" class="form-control" name="linkedin">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Linkedin</label>
                                    <input type="text" class="form-control" name="instagram">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Github</label>
                                    <input type="text" class="form-control" name="github">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label> Hakkımda </label>
                                        <textarea class="textarea" placeholder="Place some text here"
                                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="about_me"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Profil Resmi</label>
                                        <input type="file" name="profile_image_url">
                                    </div>
                                </div>
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