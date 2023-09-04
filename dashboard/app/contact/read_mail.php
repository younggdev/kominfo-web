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
                        <div class="row">
                            <div class="col mb-2" id="editorContainer" style="display: none;">
                                <textarea name="teks" id="teks" width="500px"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <!-- /.card-footer -->
                    <div class="card-footer">
                        <div class="float-right">
                            <!-- <span id="toggleTextHide" style="display: none;">Sembunyikan Editor</span> -->
                            <button type="button" class="btn btn-default" id="toggleTextHide" style="display: none;"><i class="fa fa-paper-plane"></i> Kirim
                            </button>
                            <button type="button" class="btn btn-default" id="showEditorButton"><i class="fas fa-reply"></i> Reply
                            </button>
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
<script src="ckeditor/ckeditor.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const editorContainer = document.querySelector("#editorContainer");
        const showEditorButton = document.querySelector("#showEditorButton");
        const toggleTextHide = document.querySelector("#toggleTextHide");

        let ckEditorInstance;

        showEditorButton.addEventListener("click", function() {
            if (!ckEditorInstance) {
                // Inisialisasi CKEditor
                ckEditorInstance = CKEDITOR.replace("teks");
                editorContainer.style.display = "block";
                // showEditorButton.textContent = "Kirim";
                toggleTextHide.style.display = "inline";
            } else {
                // Hancurkan instansi CKEditor
                ckEditorInstance.destroy();
                ckEditorInstance = null;
                editorContainer.style.display = "none";
                toggleTextHide.style.display = "none";
                // showEditorButton.textContent = "Tampilkan Editor";
            }
        });
    });

    // CKEDITOR.replace('teks', {
    //     filebrowserUploadUrl: 'add/tambah_berita.php',
    //     filebrowserUploadMethod: 'form'
    // });
    // CKEDITOR.config.width = '100%';
</script>