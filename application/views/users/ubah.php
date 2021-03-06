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
            <h1>Tabel User</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="row ml-1 mb-4">
      <div class="col-md-6">
        <a href="<?= base_url(); ?>users/index" class="btn btn-primary">Kembali</a>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data User</h3>

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
                    <label for="idUser">ID User</label>
                    <input type="text" class="form-control" id="idUser" name="idUser" value="<?= $users['IDUSER']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="idBengkel">ID Bengkel</label>
                    <input type="text" class="form-control" id="idBengkel" name="idBengkel" value="<?= $users['IDBENGKEL']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="jenisUser">Jenis User</label>
                    <input type="text" class="form-control" id="jenisUser" name="jenisUser" value="<?= $users['JENISUSER']; ?>">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $users['USERNAME']; ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" name="password" value="<?= $users['PASSWORD']; ?>">
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $users['EMAIL']; ?>">
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
