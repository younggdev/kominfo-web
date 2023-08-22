<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM galeri WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Galeri</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="post" action="update/update_data.php" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label class="form-label" for="customFile">Upload Foto</label>
                                <input type="file" name="foto" class="form-control" id="customFile" />
                                <input type="text" class="form-control" placeholder="Nama" name="id" value="<?= $view['id'] ?>" hidden>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Caption</label>
                                <input type="text" class="form-control" placeholder="Caption" name="caption" value="<?= $view['caption'] ?>">
                            </div>
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