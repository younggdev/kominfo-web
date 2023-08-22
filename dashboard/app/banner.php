<?php
include '../config/config.php';
$query = mysqli_query($koneksi, "SELECT (SELECT count(id) FROM profil_pegawai) AS pegawai, (SELECT count(id) FROM galeri) AS pict, (SELECT count(id) FROM berita) AS news");
$view = mysqli_fetch_array($query);
?>
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
            <h3><?= $view['pegawai'] ?></h3>

            <p>Jumlah Pegawai</p>
        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="index.php?page=data-mahasiswa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
        <div class="inner">
            <h3><?= $view['pict'] ?></h3>

            <p>Jumlah Galeri</p>
        </div>
        <div class="icon">
            <i class="fas fa-image"></i>
        </div>
        <a href="index.php?page=data-galeri" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
        <div class="inner">
            <h3><?= $view['news'] ?></h3>

            <p>Jumlah Berita</p>
        </div>
        <div class="icon">
            <i class="fas fa-newspaper"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
        <div class="inner">
            <h3>65</h3>

            <p>Jumlah Pengunjung</p>
        </div>
        <div class="icon">
            <i class="fas fa-users"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->