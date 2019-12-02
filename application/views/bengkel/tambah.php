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
                    <input type="text" class="form-control" id="idBengkel" name="idBengkel">
                </div>
                <div class="form-group">
                    <label for="jenisUser">Jenis User</label>
                    <input type="text" class="form-control" id="jenisUser" name="jenisUser">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="form-group">
                    <label for="lat">Latitude</label>
                    <input type="text" class="form-control" id="lat" name="latitude">
                </div>
                <div class="form-group">
                    <label for="lng">Longitude</label>
                    <input type="text" class="form-control" id="lng" name="longitude">
                </div>
                <div class="form-group">
                  <div id='map' style='width: 400px; height: 300px;'></div>
                </div>

                
                <button type="submit" name="submit" class="btn btn-primary">Tambahkan</button>
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
<script>
            let flag = false;

            mapboxgl.accessToken = 'pk.eyJ1IjoiZGFuaW5kcmEiLCJhIjoiY2szNzZ4Y3Z3MDlncjNrczFsc290bnI4aiJ9.hd2BKXV3iZWNQCOldxeZdA';
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11'
            });

            var user_location = [-7.276426493012536,112.79297496578738];

            // map.on('load', function (e) {
            //   addMarker(user_location, 'load');
            // });

            map.on('click', function (e) {
              if(flag === true){
              marker.remove();
              }
              addMarker(e.lngLat,'click');
              //console.log(e.lngLat.lat);
              document.getElementById("lat").value = e.lngLat.lat;
              document.getElementById("lng").value = e.lngLat.lng;
            });

            function addMarker(ltlng, event) {
              if(event === 'click'){
                  user_location = ltlng;
                  console.log(user_location);
              }
              marker = new mapboxgl.Marker({draggable: true,color:"#d02922"})
                  .setLngLat(user_location)
                  .addTo(map)
                  .on('dragend', onDragEnd);
              flag = true;  
            }

            function onDragEnd() {
              var lngLat = marker.getLngLat();
              document.getElementById("lat").value = lngLat.lat;
              document.getElementById("lng").value = lngLat.lng;
              console.log('lng: ' + lngLat.lng + '<br />lat: ' + lngLat.lat);
            }

            map.addControl(new mapboxgl.GeolocateControl({
              positionOptions: {
              enableHighAccuracy: true
              },
              trackUserLocation: true
            }));  


</script>

<!-- ./wrapper -->

<!-- jQuery -->
<?php $this->load->view('templates/jquery'); ?>
</body>
</html>
