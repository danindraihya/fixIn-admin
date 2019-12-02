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
            <h1>Tabel Bengkel</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="row ml-1 mb-4">
      <div class="col-md-6">
        <a href="<?= base_url(); ?>bengkel/index/" class="btn btn-primary">Kembali</a>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Bengkel</h3>

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
                    <label for="idBengkel">ID Bengkel</label>
                    <input type="text" class="form-control" id="idBengkel" name="idBengkel" value="<?= $bengkel['IDBENGKEL']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="jenisUser">Jenis User</label>
                    <input type="text" class="form-control" id="jenisUser" name="jenisUser" value="<?= $bengkel['JENISUSER']; ?>">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $bengkel['USERNAME']; ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" name="password" value="<?= $bengkel['PASSWORD']; ?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $bengkel['ALAMAT']; ?>">
                </div>
                <div class="form-group">
                    <label for="latitude">Latitude</label>
                    <input type="text" class="form-control" id="latitude" name="latitude" value="<?= $bengkel['LATITUDE']; ?>">
                </div>
                <div class="form-group">
                    <label for="longitude">Longitude</label>
                    <input type="text" class="form-control" id="longitude" name="longitude" value="<?= $bengkel['LONGITUDE']; ?>">
                </div>
                
                <button type="submit" name="ubah" class="btn btn-primary">Update</button>
            </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          DATA BENGKEL DUMMY
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
