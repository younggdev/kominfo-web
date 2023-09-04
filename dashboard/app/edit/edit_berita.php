<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM berita WHERE id='$id'");
$data = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Berita</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="post" action="update/update_data_berita.php" enctype="multipart/form-data">
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" placeholder="Judul" name="judul" value="<?= $data['judul'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label class="form-label" for="customFile">Upload Foto</label>
                                <input type="file" name="foto" class="form-control" id="customFile" />
                                <input type="text" class="form-control" placeholder="Nama" name="id" value="<?= $data['id'] ?>" hidden>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label>Isi Paragraf</label>
                            <textarea name="teks" id="teks" width="500px"><?= $data['isi'] ?></textarea>
                        </div>
                        <div class="col-sm-6">
                            <img src="foto/berita/<?= $data['foto'] ?>" alt="" width="200px" class="rounded">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <button class="btn btn-sm btn-info" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>
<script src="ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('teks', {
        // filebrowserUploadUrl: 'add/tambah_berita.php',
        filebrowserUploadMethod: 'form'
    });
    CKEDITOR.config.width = '100%';
</script>