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

    <!-- Main content -->
    <section class="content">

    <div class="card">
        <div class="card-header">
            Detail User
        </div>
        <div class="card-body">
        <form>
            <div class="form-group row">
                <label for="idUser" class="col-sm-2 col-form-label">ID User</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="idUser" value="<?= $users['IDUSER']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="idBengkel" class="col-sm-2 col-form-label">ID Bengkel</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="idBengkel" value="<?= $users['IDBENGKEL']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="jenisUser" class="col-sm-2 col-form-label">Jenis User</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="jenisUser" value="<?= $users['JENISUSER']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="username" value="<?= $users['USERNAME']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="password" value="<?= $users['PASSWORD']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="email" value="<?= $users['EMAIL']; ?>">
                </div>
            </div>
            <a href="<?= base_url(); ?>users" class="btn btn-primary">Kembali</a>
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
