<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Rekap Pelatihan - Data Pelatihan</title>

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
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Rekap Pelatihan </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-table"></i>
          <span>Data Pelatihan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tabel Data:</h6>
            <a class="collapse-item" href="tables_2019.php">2019</a>
            <a class="collapse-item" href="tables.html">2018</a>
            <a class="collapse-item" href="tables.html">2017</a>
            <a class="collapse-item" href="tables.html">2016</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
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
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            
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

          <!-- Page Heading -->
          <div class="page-header h3 mb-2 text-gray-800" align="center"> <h1>Rekap Pelatihan Pegawai</h1></div>
          <!-- DataTables Example -->
          <div class="card shadow mb-4">
            <div class="card-header">
              <h6 class="m-0 font-weight-bold text-primary">Data Pelatihan </h6>
            </div>
            <div class="card-body" >
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <?php  //include file koneksi ke database
    include ('koneksi.php');

      $connect=mysqli_connect("localhost","root","","datapegawaisdm");
      //query ke database dengan SELECT table Pegawai diurutkan berdasarkan ID_Pegawai Paling Kecil
      $query = mysqli_query($connect, "SELECT * FROM pelatihan ORDER BY ID_PELATIHAN ASC") or die (mysqli_error());
      ?>

  <div class="container-fluid">
    
    <div class="row">
      <div class="col-6">
      </div>
      <div class="col-6">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
          Tambah Data
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah data pelatihan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
          <nav class="navbar navbar-light bg-light">
                 
              <form class="form-inline float-right">
              <label>Search :
              <input class="form-control mr-sm-2 float-right" id="myInput" onkeyup="myFunction()" type="type" placeholder="Cari data" aria-label="Search">
              </label>
              <script>
            function myFunction() {
              // Declare variables 
              var input, filter, table, tr, td, i, txtValue;
              input = document.getElementById("myInput");
              filter = input.value.toUpperCase();
              table = document.getElementById("myTable");
              tr = table.getElementsByTagName("tr");

              // Loop through all table rows, and hide those who don't match the search query
              for (i = 0; i < tr.length; i++) {
                for (j = 0 ; j < 9; j++) {
                  td = tr[i].getElementsByTagName("td")[j];
                  if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                      tr[i].style.display = "";
                      break;
                    } else {
                      tr[i].style.display = "none";
                    }
                  } 
                }
              }
            }
          </script>
              </form>
          </nav> 
          <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">  -->
          
      <table class="table table-stripted table-responsive myTable table-hover" id="myTable">
        <thead>      <tr>
      <th>NO</th>
      <th>Pelatihan</th>
      <th>Bidang</th>
      <th>Tanggal Awal</th>
      <th>Tanggal Akhir</tdh>
      <th>Klasifikasi</th>
      <th>Vendor</th>
      <th>Durasi</th>
      <th>Jumlah Peserta</th>
      <th></th>
      
    </tr>
    </thead>

    <?php
    

      
      if(mysqli_num_rows($query) == 0){ 
      echo '<tr><td colspan="6"> Tidak ada data!</td></tr>';
      } else {  
      $no = 1;
      while($data = mysqli_fetch_assoc($query)) {
        echo '<tr>';
          echo '<td>'.$data['ID_PELATIHAN'].'</td>';
          echo '<td>'.$data['NAMA_PELATIHAN'].'</td>';
          echo '<td>'.$data['BIDANG'].'</td>';
          echo '<td>'.$data['TANGGAL_AWAL'].'</td>';
          echo '<td>'.$data['TANGGAL_AKHIR'].'</td>';
          echo '<td>'.$data['KLASIFIKASI'].'</td>';
          echo '<td>'.$data['VENDOR'].'</td>';
          echo '<td>'.$data['DURASI'].'</td>';
          echo '<td>'.$data['JUMLAH_PESERTA'].'</td>';
          echo '<td><a class="btn btn-info btn-xs" href="edit.php?id='.$data['ID_PELATIHAN'].'">Edit</a></td>';
          echo '<td><a class="btn btn-danger btn-xs" href="hapus.php?id='.$data['ID_PELATIHAN'].'">Hapus</a></td>';
          // echo '<td><a href="hapus.php?id='.$data['ID_PEGAWAI'].'"onclick="return confirm(\'Apakah anda yakin ingin menghapus data ini?\'>"Hapus</a></td>';
            
        echo '</tr>';

        } 
      }
    ?> 
      </tr>


      </table>
      

    </div>


  </div>




  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</tbody>
                </table>
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
