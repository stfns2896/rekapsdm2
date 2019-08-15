<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Rekap Pelatihan Admin - Table</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="">
          <i class="">
            <img src="img/Pelindo 3.png" style="width: 150px ; height: 75px">
          </i>
        </div>
      </a>

      <div class="sidebar-brand-text mx-3 text-white font-weight-bold" >Admin Rekap Pelatihan</div>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

     
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Pelatihan</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tabel Data:</h6>
            <a class="collapse-item" href="table_pegawai_2019.php">2019</a>
            <a class="collapse-item" href="tables.html">2018</a>
            <a class="collapse-item" href="tables.html">2017</a>
            <a class="collapse-item" href="tables.html">2016</a>
          </div>
        </div>
      </li>
       <!-- Nav Item - Tables -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Pegawai</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tabel Data:</h6>
            <a class="collapse-item" href="table_keikutsertaan_2019.php">2019</a>
            <a class="collapse-item" href="tables.html">2018</a>
            <a class="collapse-item" href="tables.html">2017</a>
            <a class="collapse-item" href="tables.html">2016</a>
          </div>
        </div>
      </li>
       <!-- Nav Item - Tables -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Keikutsertaan</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tabel Data:</h6>
            <a class="collapse-item" href="table_pelatihan_2019.php">2019</a>
            <a class="collapse-item" href="tables.html">2018</a>
            <a class="collapse-item" href="tables.html">2017</a>
            <a class="collapse-item" href="tables.html">2016</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"><h4 clas="font-weight-bold">Data Pelatihan 2019</h4>


          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

         
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

    
            
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Rekap Data Pelatihan</h6>
            </div>           
            <div class="card-body">
            <div align="right">
            <button type="button" align="left" name="add" id="add" data-toggle="modal" class="btn btn-info" data-target ="#tambah"><i class="fa fa-plus"></i>Add</button>
              <div id="tambah" class="modal fade" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                        <div class="form-group">
                          <label class="control-label" for="pelatihan"> <strong>Pelatihan</strong></label>
                          <input type="text" name="pelatihan" class="form-control" id="pelatihan">
                        </div>
                        <div class="form-group">
                          <label for="bidang" class="control-label col-sm-2"><strong>Bidang</strong></label>
                          <div class="col-sm-5">
                            <select class="form-control" name="bidang" id="bidang" pplaceholder=<?php echo $data ['bidang']?>>
                              <option value="">Pilih Bidang</option>
                              <option value="sdm">SDM</option>
                              <option value="hsse">HSSE</option>
                              <option value="bp">BIRO PERENCANAAN</option>
                              <option value="cm">CHANGE MANAGEMENT</option>
                              <option value="op">OPERASIONA;</option>
                              <option value="sk">SEKPER</option>
                              <option value="pu">PJUM</option>
                              <option value="hc">HCM</option>
                              <option value="fi">FI</option>
                              <option value="co">CO</option>
                              <option value="pb">PBJ</option>
                              <option value="spi">SPPI</option>
                              <option value="sp">SPI</option>
                              <option value="pm">PM</option>
                              <option value="mk">MARKETING</option>
                              <option value="keu">KEUANGAN</option>
                              <option value="sm">SMMR</option>
                              <option value="hu">HUKUM / LEGAL</option>
                              <option value="tk">TEKNIK</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="tglAwal" class="control-label"><strong>Tanggal Awal</strong></label>
                          <div class="col-sm-7">
                            <input type="date" name="tglAwal" id="tglAwal" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="tglAkhir" class="control-label"><strong>Tanggal Akhir</strong></label>
                          <div class="col-sm-7">
                            <input type="date" name="tglAkhir" id="tglAkhir" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="klasifikasi"> <strong>Klasifikasi</strong></label>
                          <input type="text" name="klasifikasi" class="form-control" id="klasifikasi" required>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="durasi"> <strong>Durasi</strong></label>
                          <input type="number" name="durasi" class="form-control" id="durasi" required>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="jmlPeserta"> <strong>Jumlah Peserta</strong></label>
                          <input type="number" name="jmlPeserta" class="form-control" id="jmlPeserta" required>
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </br>
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                  <tr>
                   <th>No</th>
                   <th>Pelatihan</th>
                   <th>Bidang</th>
                   <th>Awal</th>
                   <th>Akhir</th>
                   <th>Klasifikasi</th>
                   <th>Vendor</th>
                   <th>Durasi</th>
                   <th>Jumlah Peserta</th>
                   <th>Options</th>
                  </tr>
                 </thead>
                  <tfoot>
                    <tr>
                   <th>No</th>
                   <th>Pelatihan</th>
                   <th>Bidang</th>                   
                   <th>Awal</th>
                   <th>Akhir</th>
                   <th>Klasifikasi</th>
                   <th>Vendor</th>
                   <th>Durasi</th>
                   <th>Jumlah Peserta</th>
                   <th>Options</th>
                  </tr>
                  </tfoot>
                  <tbody>
                  <?php
                $connect = mysqli_connect('localhost', 'root', '', 'datapegawaisdm') or die("connection failed".mysqli_erno());
                $sql = $connect->query("SELECT * FROM pelatihan");
                while ($data = $sql->fetch_array()) {
                  echo '<tr>
                  <td>'.$data['idPelatihan'].'</td>
                  <td>'.$data['namaPelatihan'].'</td>
                  <td>'.$data['bidang'].'</td>
                  <td>'.$data['tglAwal'].'</td>
                  <td>'.$data['tglAkhir'].'</td>
                  <td>'.$data['klasifikasi'].'</td>
                  <td>'.$data['vendor'].'</td>
                  <td>'.$data['durasi'].'</td>
                  <td>'.$data['jmlPeserta'].'</td>
                  <td>
                  <button class="btn btn-primary btn-sm"><i class="fa fa-search"></i>View</button>
                  <br>
                  <button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>Edit</button>             
                  <br>     
                  <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Delete</button>
                    </td>


                    </tr>
                  ';
                }

                ?>


                 </tbody>
                </table>
                <script type="text/javascript">
                  $(document).ready(function(){
                  $(".table").DataTable({
                    "ordering" : true,
                    "searching" : true,
                    "paging" : true,
                    "columnDefs" : [
                    {
                      "targets" : 0,
                      "searchable" : false,
                      "visible" : true                      
                      }

                      ],
                      "order" : [
                      [0, "desc"], 
                      [1, "desc"],
                      [2, "desc"],
                      [3, "desc"],
                      [4, "desc"],
                      [5, "desc"],
                      [6, "desc"],
                      [7, "desc"],
                      [8, "desc"]]                      
                    });
                    
                  });                   
                </script>

              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
