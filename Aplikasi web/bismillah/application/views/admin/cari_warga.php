<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= $title ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->




    <div class="container">
        <div class="row">
            <idv class="col-12">
                <div class="col">
                    <a href="<?= base_url('admin/dashboard/tambah_data') ?>"><button type="button" class="btn btn-primary mb-4 ml-5">tambah warga</button></a>


                    <form action="<?= base_url('admin/dashboard/cari') ?>" method="POST" style="display:flex" class="mb-3 ml-5">
                        <input type="text" name="cari">
                        <input type="submit" name="submit" value="cari" class="btn btn-success">

                    </form>
                    <table class="table table-striped table-responsive ml-5">
                        <tr>
                            <thead class="thead-dark">
                                <th>NO</th>
                                <th>NAMA WARGA</th>
                                <th>NO KK</th>
                                <th>NIK</th>
                                <th>NO TELEPON</th>
                                <th>STATUS</th>
                                <th>PENGHASILAN</th>
                                <th>DELETE</th>
                                <th>UPDATE</th>
                        </tr>
                        </thead>
                        <tbody>

                            <?php
                            $i = 1;
                            foreach ($keywoards as $wrg) : ?>


                                <tr>
                                    <th scope="row"><?= $i++ ?></th>
                                    <td><?= strtoupper($wrg->nama_warga) ?></td>
                                    <td><?= strtoupper($wrg->no_kk) ?></td>
                                    <td><?= strtoupper($wrg->nik) ?></td>
                                    <td><?= strtoupper($wrg->no_telpon) ?></td>
                                    <td><?= strtoupper($wrg->status) ?></td>
                                    <td><?= strtoupper($wrg->penghasilan) ?></td>
                                    <!-- <td><button><a href="<?= base_url('admin/dashboard/delete') ?>/<?php echo $wrg['id_warga'] ?>" style="color: red"><i class="fas fa-trash-alt"></i></button></a></td>
                                    <td><button><a href="<?= base_url('admin/dashboard/update') ?>/<?php echo $wrg['id_warga'] ?>" style="color: green"><i class="fas fa-edit"></i></button></a></td> -->
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>


