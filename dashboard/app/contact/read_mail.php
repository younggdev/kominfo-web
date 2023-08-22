<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <a href="index.php?page=data-contact" class="btn btn-primary btn-block mb-3">Back to Inbox</a>
                <?php include 'sidebar.php' ?>
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Read Mail</h3>

                        <div class="card-tools">
                            <a href="#" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
                            <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <?php
                    $id = $_GET['id'];
                    $query = mysqli_query($koneksi, "SELECT * FROM contact_us WHERE id='$id'");
                    $data = mysqli_fetch_array($query);
                    ?>
                    <div class="card-body p-0">
                        <div class="mailbox-read-info">
                            <h5 class="mb-1"><?= $data['nama'] ?></h5>
                            <h6>From : <?= $data['email'] ?>
                                <h6>No. HP : <?= $data['no_hp'] ?>
                                    <span class="mailbox-read-time float-right"><?= date('d F Y,  H:i:s', strtotime($data["tanggal"])) ?></span>
                                </h6>
                            </h6>
                        </div>
                        <!-- /.mailbox-read-info -->

                        <div class="mailbox-read-message">
                            <p><?= $data['pesan'] ?></p>
                        </div>
                        <!-- /.mailbox-read-message -->
                    </div>
                    <!-- /.card-body -->
                    <!-- /.card-footer -->
                    <div class="card-footer">
                        <div class="float-right">
                            <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Reply</button>
                            <button type="button" class="btn btn-default"><i class="fas fa-share"></i> Forward</button>
                        </div>
                        <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i> Delete</button>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>