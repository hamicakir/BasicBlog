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
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Profil Bilgileri</h3>
                                <a href="settings.php?p=add" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Ekle</a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <thead>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Blogger</th>
                                    <th class="text-center">Hakkımda</th>
                                    <th class="text-center">E-posta</th>
                                    <th class="text-center">Telefon</th>
                                    <th class="text-center">Profil Fotoğrafı</th>
                                    <th class="text-center">isActive</th>
                                    <th class="text-center">işlemler</th>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($settings as $setting){?>
                                    <tr>
                                        <td class="text-center"><?php echo $setting->id; ?></td>
                                        <td class="text-center"><?php echo $setting->full_name; ?></td>
                                        <td class="text-center"><?php echo $setting->about_me; ?></td>
                                        <td class="text-center"><?php echo $setting->email; ?></td>
                                        <td class="text-center"><?php echo $setting->phone; ?></td>
                                        <td class="text-center"><?php 
                                            if ($setting->profile_image_url != ""){
                                                
                                            ?>
                                                <img src="<?php echo 'uploads/' . $setting->profile_image_url  ?>" width="75" height="75" >
                                            <?php }
                                             ?></td>
                                        <td class="text-center">

                                            <span class="label label-<?php echo ($setting->isActive) ? "success" : "danger" ?>"><?php echo ($setting->isActive) ? "Aktif" : "Pasif" ?></span>
                                        </td>
                                        <td class="text-center">
                                            <a href="settings.php?p=updatePage&id=<?php echo $setting->id ?>" class="btn btn-warning btn-sm">Düzenle</a>
                                            <a href="settings.php?p=delete&id=<?php echo $setting->id ?>" class="btn btn-danger btn-sm">Sil</a>
                                        </td>

                                        <?php } ?>



                                    </tr>
                                    </tbody>


                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </section>
        </div>
        <!-- /.row -->


    </section>
    <!-- /.content -->
</div>