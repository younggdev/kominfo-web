<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <?php
                if (isset($_GET['page'])) {
                    if ($_GET['page'] == 'dashboard') {
                ?>
                        <h1 class="m-0">Dashboard</h1>
                    <?php } else if ($_GET['page'] == 'data-pegawai') { ?>
                        <h1 class="m-0">Data Pegawai</h1>
                    <?php } else if ($_GET['page'] == 'edit-data') { ?>
                        <h1 class="m-0">Edit Pegawai</h1>
                    <?php } else if ($_GET['page'] == 'edit-galeri') { ?>
                        <h1 class="m-0">Edit Galeri</h1>
                    <?php } else if ($_GET['page'] == 'data-galeri') { ?>
                        <h1 class="m-0">Data Galeri</h1>
                    <?php } else if ($_GET['page'] == 'data-contact') { ?>
                        <h1 class="m-0">Data Contact</h1>
                    <?php } else if ($_GET['page'] == 'read-mail') { ?>
                        <h1 class="m-0">View Contact</h1>
                <?php
                    }
                }
                ?>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <?php
                    if (isset($_GET['page'])) {
                        if ($_GET['page'] == 'dashboard') {
                    ?>
                            <li class="breadcrumb-item active">Dashboard</li>
                        <?php } else if ($_GET['page'] == 'data-pegawai') { ?>
                            <li class="breadcrumb-item active">Data Pegawai</li>
                        <?php } else if ($_GET['page'] == 'edit-data') { ?>
                            <li class="breadcrumb-item active">Edit Pegawai</li>
                        <?php } else if ($_GET['page'] == 'edit-galeri') { ?>
                            <li class="breadcrumb-item active">Edit Galeri</li>
                        <?php } else if ($_GET['page'] == 'data-galeri') { ?>
                            <li class="breadcrumb-item active">Data Galeri</li>
                        <?php } else if ($_GET['page'] == 'data-contact') { ?>
                            <li class="breadcrumb-item active">Data Contact</li>
                        <?php } else if ($_GET['page'] == 'read-mail') { ?>
                            <li class="breadcrumb-item active">View Contact</li>
                    <?php
                        }
                    }
                    ?>

                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>