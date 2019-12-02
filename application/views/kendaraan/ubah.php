<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <?php $this->load->view('templates/navbar'); ?>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('templates/leftnav'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabel Kendaraan</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="row ml-1 mb-4">
      <div class="col-md-6">
        <a href="<?= base_url(); ?>kendaraan/index/" class="btn btn-primary">Kembali</a>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Kendaraan</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="nostnk">No Stnk</label>
                    <input type="text" class="form-control" id="nostnk" name="noStnk" value="<?= $kendaraan['NOSTNK']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="iduser">ID User</label>
                    <input type="text" class="form-control" id="iduser" name="idUser" value="<?= $kendaraan['IDUSER']; ?>">
                </div>
                <div class="form-group">
                    <label for="tipekendaraan">Tipe Kendaraan</label>
                    <input type="text" class="form-control" id="tipekendaraan" name="tipeKendaraan" value="<?= $kendaraan['TIPEKENDARAAN']; ?>">
                </div>
                <div class="form-group">
                    <label for="tahunkendaraan">Tahun Kendaraan</label>
                    <input type="text" class="form-control" id="tahunkendaraan" name="tahunKendaraan" value="<?= $kendaraan['TAHUNKENDARAAN']; ?>">
                </div>
                <div class="form-group">
                    <label for="nomorpolisi">Nomor Polisi</label>
                    <input type="text" class="form-control" id="nomorpolisi" name="nomorPolisi" value="<?= $kendaraan['NOMORPOLISI']; ?>">
                </div>
                <div class="form-group">
                    <label for="seri">Seri</label>
                    <input type="text" class="form-control" id="seri" name="seri" value="<?= $kendaraan['SERI']; ?>">
                </div>
                
                <button type="submit" name="ubah" class="btn btn-primary">Update</button>
            </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          DATA KENDARAAN DUMMY
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php $this->load->view('templates/jquery'); ?>
</body>
</html>
