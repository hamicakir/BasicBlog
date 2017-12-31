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
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Profil Bilgileri</h3>
                                <a href="users.php?p=add" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Ekle</a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <thead>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Kullanıcı Adı</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">isActive</th>
                                    <th class="text-center">İşlemler</th>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($users as $user){?>
                                    <tr>
                                        <td class="text-center"><?php echo $user->id; ?></td>
                                        <td class="text-center"><?php echo $user->full_name; ?></td>
                                        <td class="text-center"><?php echo $user->email; ?></td>

                                        <td class="text-center">    <span class="label label-<?php echo ($user->isActive) ? "success" : "danger" ?>"><?php echo ($user->isActive) ? "Aktif" : "Pasif" ?></span>
                                        </td>
                                        <td class="text-center">
                                            <a href="users.php?p=updatePage&id=<?php echo $user->id ?>" class="btn btn-warning btn-sm">Düzenle</a>
                                            <a href="users.php?p=delete&id=<?php echo $user->id ?>" class="btn btn-danger btn-sm">Sil</a>
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