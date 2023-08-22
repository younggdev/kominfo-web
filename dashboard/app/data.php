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
                   <th>Nama</th>
                   <th>Jabatan</th>
                   <th>Bidang</th>
                   <th>Foto</th>
                   <th>Action</th>
                 </tr>
               </thead>
               <tbody>
                 <?php
                  $no = 0;
                  $query = mysqli_query($koneksi, 'SELECT * FROM profil_pegawai');
                  while ($mhs = mysqli_fetch_array($query)) {
                    $no++;
                  ?>
                   <tr>
                     <td width='5%'><?= $no ?></td>
                     <td><?= $mhs['nama'] ?></td>
                     <td><?= $mhs['jabatan'] ?></td>
                     <td><?= $mhs['bidang'] ?></td>
                     <td><img src="foto/<?= $mhs['foto'] ?>" alt="" width="100px"></td>
                     <td>
                       <a onclick="hapus_data(<?= $mhs['id'] ?>)" class="btn btn-sm btn-danger">Hapus</a>
                       <a href="index.php?page=edit-data&&id=<?= $mhs['id'] ?>" class="btn btn-sm btn-success">Edit</a>
                       <a class="view-data btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-view" data-nama="<?= $mhs['nama'] ?>" data-jabatan="<?= $mhs['jabatan'] ?>" data-bidang="<?= $mhs['bidang'] ?>">View Data</a>
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
       <form action="add/tambah_data.php" method="post" enctype="multipart/form-data">
         <div class="modal-body">
           <div class="row">
             <div class="col-6 mb-2">
               <input type="text" class="form-control" placeholder="Nama" name="nama" required>
             </div>
             <div class="col-6 mb-2">
               <input type="text" class="form-control" placeholder="Jabatan" name="jabatan" required>
             </div>
             <div class="col-6 mb-2">
               <input type="text" class="form-control" placeholder="Bidang" name="bidang" required>
             </div>
             <div class="col-6 mb-2">
               <input type="file" name="foto" class="form-control" />
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

 <!-- Modal View Data -->
 <div class="modal fade" id="modal-view">
   <div class="modal-dialog modal-lg">
     <div class="modal-content">
       <div class="modal-header">
         <h4 class="modal-title">View Data</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <form action="add/tambah_data.php" method="get">
         <div class="modal-body" id="hasil-view-data">

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
           window.location = ("delete/hapus_data.php?id=" + data_id)
         )
       }
     })
   }
 </script>