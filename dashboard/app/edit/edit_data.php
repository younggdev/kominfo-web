<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM profil_pegawai WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Data Pegawai</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="post" action="update/update_data.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?= $view['nama'] ?>">
                                <input type="text" class="form-control" placeholder="Nama" name="id" value="<?= $view['id'] ?>" hidden>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text" class="form-control" placeholder="Jabatan" name="jabatan" value="<?= $view['jabatan'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Bidang</label>
                                <input type="text" class="form-control" placeholder="Bidang" name="bidang" value="<?= $view['bidang'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="customFile">Upload Foto</label>
                            <input type="file" name="foto" class="form-control" id="customFile" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="foto/<?= $view['foto'] ?>" alt="" width="200px" class="rounded float-right">
                        </div>
                    </div>
                    <div class="row">
                        <button class="btn btn-sm btn-info" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>