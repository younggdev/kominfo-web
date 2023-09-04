<div class="card">
    <div class="card-header">
        <h3 class="card-title">Folders</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body p-0">
        <ul class="nav nav-pills flex-column">
            <?php
            $query = mysqli_query($koneksi, "SELECT
            SUM(CASE WHEN status = 'inbox' THEN 1 ELSE 0 END) AS jumlah_inbox,
            SUM(CASE WHEN status = 'sampah' THEN 1 ELSE 0 END) AS jumlah_sampah
        FROM contact_us");
            $data = mysqli_fetch_array($query);
            ?>
            <li class="nav-item active">
                <a href="index.php?page=data-contact" class="nav-link">
                    <i class="fas fa-inbox"></i> Inbox
                    <span class="badge bg-primary float-right"><?= $data['jumlah_inbox'] ?></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-envelope"></i> Sent
                    <span class="badge bg-primary float-right">xx</span>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-file-alt"></i> Drafts
                    <span class="badge bg-primary float-right">xx</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-exclamation-circle"></i> Spam
                    <span class="badge bg-primary float-right">xx</span>
                </a>
            </li> -->
            <li class="nav-item">
                <a href="index.php?page=trash" class="nav-link">
                    <i class="far fa-trash-alt"></i> Trash
                    <span class="badge bg-primary float-right"><?= $data['jumlah_sampah'] ?></span>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.card-body -->
</div>