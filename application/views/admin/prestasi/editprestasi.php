<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("admin/_partials/topbar.php") ?>
        <!-- End of Topbar -->

<div class="container">
    <div class="row-mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                Form Edit Data Prestasi
                </div>
                <div class="card-body">

                <form action="" method="post" style="width:1000px" enctype="multipart/form-data">
                <input type="hidden" name="nim" value="<?= $prestasi['nim'];?>">
                <div class="form-group">
                    <label for="prestasi">Prestasi</label>
                    <input type="text" class="form-control" id="prestasi" name="prestasi" value="<?= $prestasi['prestasi'] ;?>">
                 </div>
                <div class="form-group">
                    <label for="tgl_pelaksanaan">Tanggal Pelaksanaan</label>
                    <input type="text" class="form-control" id="tgl_pelaksanaan" name="tgl_pelaksanaan" value="<?= $prestasi['tgl_pelaksanaan'] ;?>">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $prestasi['deskripsi'] ;?>">
                </div>
                
                <button type="submit" name="edit" class="btn btn-primary float-right">Selesai</button>
            </form>
        </div>
    </div>
</div>
</div>

<!-- Footer -->
<?php $this->load->view("admin/_partials/footer.php") ?>
<!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div> 
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("admin/_partials/scrolltop.php") ?>

  <!-- Logout Modal-->
  <?php $this->load->view("admin/_partials/modal.php") ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>

