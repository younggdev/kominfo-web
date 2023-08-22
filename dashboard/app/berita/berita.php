 <!-- Main content -->
 <section class="content">
     <div class="container-fluid">
         <div class="row">
             <div class="col-12">
                 <!-- /.card -->

                 <div class="card">

                     <div class="card-body">
                         <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                             Tambah Data
                         </button>
                         <br><br>
                         <table id="example1" class="table table-bordered table-striped">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>Tanggal</th>
                                     <th>Judul</th>
                                     <th>Isi</th>
                                     <th>Foto</th>
                                     <th>Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $no = 0;
                                    $query = mysqli_query($koneksi, 'SELECT * FROM berita');
                                    while ($mhs = mysqli_fetch_array($query)) {
                                        $no++;
                                    ?>
                                     <tr>
                                         <td width='5%'><?= $no ?></td>
                                         <td><?= date('d F Y', strtotime($mhs["tanggal"])); ?></td>
                                         <td><?= $mhs['judul'] ?></td>
                                         <td width="30%"><?= substr($mhs['isi'], 0, 100) ?>. .</td>
                                         <td><img src="foto/berita/<?= $mhs['foto'] ?>" alt="" width="100px"></td>
                                         <td width="20%">
                                             <a onclick="hapus_data(<?= $mhs['id'] ?>)" class="btn btn-sm btn-danger">Hapus</a>
                                             <a href="index.php?page=edit-berita&&id=<?= $mhs['id'] ?>" class="btn btn-sm btn-success">Edit</a>
                                         </td>
                                     </tr>
                                 <?php } ?>
                             </tbody>
                         </table>
                     </div>
                     <!-- /.card-body -->
                 </div>
                 <!-- /.card -->
             </div>
             <!-- /.col -->
         </div>
         <!-- /.row -->
     </div>
     <!-- /.container-fluid -->
 </section>
 <div class="modal fade" id="modal-lg">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Tambah Data</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="add/tambah_berita.php" method="post" enctype="multipart/form-data">
                 <div class="modal-body">
                     <div class="row">

                         <div class="col mb-2">
                             <input type="text" class="form-control" placeholder="Judul" name="judul" required>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col mb-2">
                             <textarea name="editor" id="editor" width="500px"></textarea>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col mb-2">
                             <input type="file" name="foto" class="form-control mb-2" id="imgInp" />
                             <img id="blah" src="http://placehold.it/150" width="150px" />
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer justify-content-between">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                     <button type="sumbit" class="btn btn-primary">Simpan</button>
                 </div>
         </div>
         </form>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>

 <script src="ckeditor/ckeditor.js"></script>
 <script>
     function hapus_data(data_id) {
         //  alert('ok')
         //  window.location = ("delete/hapus_data.php?id=" + data_id)

         Swal.fire({
             title: 'Apakah Kamu Yakin?',
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Ya',
             cancelButtonText: 'Tidak'
         }).then((result) => {
             if (result.isConfirmed) {
                 Swal.fire(
                     window.location = ("delete/hapus_berita.php?id=" + data_id)
                 )
             }
         })
     }

     imgInp.onchange = evt => {
         const [file] = imgInp.files
         if (file) {
             blah.src = URL.createObjectURL(file)
         }
     }

     CKEDITOR.replace('editor', {
         filebrowserUploadUrl: 'add/tambah_berita.php',
         filebrowserUploadMethod: 'form'
     });
     CKEDITOR.config.width = '100%';
 </script>