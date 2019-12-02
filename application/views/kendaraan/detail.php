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

    <!-- Main content -->
    <section class="content">

    <div class="card">
        <div class="card-header">
            Detail Kendaraan
        </div>
        <div class="card-body">
        <form>
            <div class="form-group row">
                <label for="noStnk" class="col-sm-2 col-form-label">No STNK</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="noStnk" value="<?= $kendaraan['NOSTNK']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="idUser" class="col-sm-2 col-form-label">ID User</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="idUser" value="<?= $kendaraan['IDUSER']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tipeKendaraaan" class="col-sm-2 col-form-label">Tipe Kendaraan</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="tipeKendaraaan" value="<?= $kendaraan['TIPEKENDARAAN']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tahunKendaraan" class="col-sm-2 col-form-label">Tahun Kendaraan</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="tahunKendaraan" value="<?= $kendaraan['TAHUNKENDARAAN']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="nomorPolisi" class="col-sm-2 col-form-label">Nomor Polisi</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="nomorPolisi" value="<?= $kendaraan['NOMORPOLISI']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="seri" class="col-sm-2 col-form-label">Seri</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="seri" value="<?= $kendaraan['SERI']; ?>">
                </div>
            </div>
            <a href="<?= base_url(); ?>kendaraan" class="btn btn-primary">Kembali</a>
        </form>
        </div>
    </div>

    </section>
    <!-- /.content -->
  </div>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php $this->load->view('templates/jquery'); ?>
</body>
</html>
