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
        <a href="<?= base_url(); ?>bengkel/tambah/" class="btn btn-primary">Tambah Data</a>
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
            <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th >
                          ID Bengkel
                      </th>
                      <th >
                          Jenis User
                      </th>
                      <th >
                          Username
                      </th>
                      <th>
                          Password
                      </th>
                      <th>
                          Alamat
                      </th>
                      <th >
                          Latitude
                      </th>
                      <th>
                        Longitude
                      </th>
                      <th>

                      </th>
                  </tr>
              </thead>
              <tbody>
              <?php foreach($bengkel as $data) : ?>
                  <tr>
                      
                      <td>
                          <?= $data['IDBENGKEL']; ?>
                      </td>
                      <td>
                          <?= $data['JENISUSER']; ?>                          
                      </td>
                      <td>
                            <?= $data['USERNAME']; ?>
                      </td>
                      <td >
                            <?= $data['PASSWORD']; ?>
                      </td>
                      <td>
                            <?= $data['ALAMAT']; ?>
                      </td>
                      <td>
                            <?= $data['LATITUDE']; ?>
                      </td>
                      <td>
                            <?= $data['LONGITUDE']; ?>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="<?= base_url(); ?>bengkel/detail/<?= $data['IDBENGKEL']; ?>">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="<?= base_url(); ?>bengkel/update/<?= $data['IDBENGKEL']; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="<?= base_url(); ?>bengkel/delete/<?= $data['IDBENGKEL']; ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                      
                  </tr>
                  <?php endforeach; ?>
                </tbody>
            </table>
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
