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
                                     <th>Foto</th>
                                     <th>Caption</th>
                                     <th>Tanggal</th>
                                     <th>Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $no = 0;
                                    $query = mysqli_query($koneksi, 'SELECT * FROM galeri');
                                    while ($data = mysqli_fetch_array($query)) {
                                        $no++;
                                    ?>
                                     <tr>
                                         <td width='5%'><?= $no ?></td>
                                         <td><img src="foto/galeri/<?= $data['foto'] ?>" alt="" width="100px"></td>
                                         <td><?= $data['caption'] ?></td>
                                         <td><?= date('d F Y', strtotime($data["tanggal"])); ?></td>
                                         <td>
                                             <a onclick="hapus_data(<?= $data['id'] ?>)" class="btn btn-sm btn-danger">Hapus</a>
                                             <a href="index.php?page=edit-galeri&&id=<?= $data['id'] ?>" class="btn btn-sm btn-success">Edit</a>
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
             <form action="add/tambah_galeri.php" method="post" enctype="multipart/form-data">
                 <div class="modal-body">
                     <div class="row">
                         <div class="col-6 mb-2">
                             <input type="file" name="foto" class="form-control" />
                         </div>
                         <div class="col-6 mb-2">
                             <input type="text" class="form-control" placeholder="Caption" name="caption" required>
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
                     window.location = ("delete/hapus_galeri.php?id=" + data_id)
                 )
             }
         })
     }
 </script>