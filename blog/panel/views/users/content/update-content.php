<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kullanıcılar
            <small>Kullanıcı İşlemlerinizi Buradan Gerçekleştirebilirsiniz.</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
            <li class="active">Kategoriler</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <section class="col-lg-12">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Kulanıcı Düzenle</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form role="form" method="post" action="users.php?p=update&id=<?php echo $user->id; ?>">
                            <!-- text input -->
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label>Kullanıcı Adı ve Soyadı</label>
                                    <input type="text" class="form-control" name="full_name" value="<?php echo $user->full_name ?>">
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" value="<?php echo $user->email ?>">
                                </div><div class="col-sm-12 form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>Aktif / Pasif</label>
                                        </div>
                                    </div>
                                    <label><input type="radio" name="isActive" value="1" <?php echo ($user->isActive) ? "checked" : "" ?>>Aktif</label>
                                    <label><input type="radio" name="isActive" value="0" <?php echo ($user->isActive) ? "" : "checked" ?>>Pasif</label>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-success" type="submit">Kaydet</button>
                                    <a href="users.php" class="btn btn-danger">Sil</a>
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