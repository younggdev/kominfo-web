<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-3">
            <a href="compose.html" class="btn btn-primary btn-block mb-3">Compose</a>
            <?php include 'sidebar.php' ?>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Inbox</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="Search Mail">
                            <div class="input-group-append">
                                <div class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                        </button>
                        <?php  ?>
                        <a class="btn-group" id="submitBtn" onclick="pindahItemSampah()">
                            <button type="submit" class="btn btn-default btn-sm">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </a>
                        <!-- /.btn-group -->
                        <a href="index.php?page=data-contact">
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                        </a>
                        <div class="float-right">
                            1-50/200
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                            <!-- /.btn-group -->
                        </div>
                        <!-- /.float-right -->
                    </div>
                    <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                            <tbody>
                                <?php
                                $query = mysqli_query($koneksi, "SELECT * FROM contact_us WHERE status='inbox'");
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <tr data-id="<?= $data['id'] ?>">
                                        <td>
                                            <div class="icheck-primary">
                                                <input type="checkbox" name="item_checked[]" value="<?= $data['id'] ?>" id="check<?= $data['id'] ?>">
                                                <label for="check<?= $data['id'] ?>"></label>
                                            </div>
                                        </td>
                                        <td class="mailbox-name"><?= $data['nama'] ?></td>
                                        <td class="mailbox-subject">
                                            <a href="index.php?page=read-mail&&id=<?= $data['id'] ?>" class="text-dark"><?= substr($data['pesan'], 0, 60)  ?> . . .</a>
                                        </td>
                                        <td class="mailbox-attachment"></td>
                                        <td class="mailbox-date"><?= date('d F Y', strtotime($data["tanggal"])); ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- /.table -->
                    </div>
                    <!-- /.mail-box-messages -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer p-0">
                    <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle">
                            <i class="far fa-square"></i>
                        </button>
                        <a class="btn-group" id="submitBtn" onclick="pindahItemSampah()">
                            <button type="submit" class="btn btn-default btn-sm">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </a>
                        <!-- /.btn-group -->
                        <a href="index.php?page=data-contact">
                            <button type="button" class="btn btn-default btn-sm">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                        </a>
                        <div class="float-right">
                            1-50/200
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                            <!-- /.btn-group -->
                        </div>
                        <!-- /.float-right -->
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->

<!-- ./wrapper -->

<!-- Page specific script -->
<?php include 'link.php'; ?>
<script src="../../js/contact.js"></script>
</body>