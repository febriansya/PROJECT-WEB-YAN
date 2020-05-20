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
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Tambah Data</h1>
                <p class="lead">halaman ini adalah tempat penambahan data data warga yang nantinya akan di input</p>



                <div class="container">
                    <div class="col-6">
                        <form method="POST" action="<?= base_url('admin/dashboard/save') ?>">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="nama warga" name="nama">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="no kk" name="kk">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="nik" name="nik">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="hp" name="nomor_hp">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="status" name="status">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="penghasilan" name="penghasilan">
                            </div>

                            <input type="submit" name="submit" value="kirim" class="btn btn-success">

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>