<?php include 'process/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<?php include 'components/head.php' ?>

<body>
  <?php
  if (!isset($_GET['page'])) {
    include 'components/navbar/main_navbar.php';
  }
  ?>

  <?php
  if (isset($_GET['page'])) {
    if ($_GET['page'] == 'berita') {
      include 'components/berita/berita.php';
    } else if ($_GET['page'] == 'galeri') {
      include 'components/galeri/galeri.php';
    } else if ($_GET['page'] == 'tim') {
      include 'components/tim/tim.php';
    } else if ($_GET['page'] == 'detail-berita') {
      include 'components/berita/detail_berita.php';
    }
  } else {
    include 'components/home.php';
  }
  ?>

  <!-- Footer -->
  <?php include 'components/footer.php' ?>

  <?php include 'components/modal.php' ?>

  <script src="js/script.js"></script>
  <script type="text/javascript" src="components/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>

</html>