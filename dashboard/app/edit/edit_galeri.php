<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM galeri WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Galeri</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="post" action="update/update_data_galeri.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label class="form-label" for="customFile">Upload Foto</label>
                                <input type="file" name="foto" class="form-control" id="customFile" value="<?= $data['foto'] ?>" />
                                <input type="text" class="form-control" placeholder="Nama" name="id" value="<?= $data['id'] ?>" hidden>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Caption</label>
                                <input type="text" class="form-control" placeholder="Caption" name="caption" value="<?= $data['caption'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-sm-12">
                            <img src="foto/galeri/<?= $data['foto'] ?>" alt="" width="200px" class="rounded float-left">
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