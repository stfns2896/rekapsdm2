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
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
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

      <div class="sidebar-brand-text mx-3 text-white font-weight-bold">Admin Rekap Pelatihan</div>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Nav Item - Dashboard -->

      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>

          <span>Dashboard</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Nav Item - Charts -->

      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>

          <span>Charts</span>
        </a>
      </li>

      <!-- Nav Item - Tables -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
          aria-controls="collapseOne">
          <i class="fas fa-fw fa-table"></i>

          <span>Data Pelatihan</span>
        </a>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tabel Data:</h6>
            <a class="collapse-item" href="table_pelatihan_2019.php">2019</a>
            <a class="collapse-item" href="tables.html">2018</a>
            <a class="collapse-item" href="tables.html">2017</a>
            <a class="collapse-item" href="tables.html">2016</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Tables -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fas fa-fw fa-table"></i>

          <span>Data Pegawai</span>
        </a>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
          aria-controls="collapseThree">
          <i class="fas fa-fw fa-table"></i>

          <span>Data Keikutsertaan</span>
        </a>

        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tabel Data:</h6>
            <a class="collapse-item" href="table_keikutsertaan_2019.php">2019</a>
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

        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <h5 clas="font-weight-bold">Data Pegawai 2019</h5>

          <!-- Sidebar Toggle (Topbar) -->

          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->

          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->

            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>

              <!-- Dropdown - Messages -->

              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                      aria-label="Search" aria-describedby="basic-addon2">

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
          <div class="container" style="margin-top: 30px;">
            <div id="tableManager" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title">Nama Pegawai</h3>
                  </div>

                  <div class="modal-body">
                    <div id="editContent">
                      <label for="nama" class="control-label col-sm-5">
                        <strong>Nama Pegawai</strong>
                      </label>

                      <input type="text" class="form-control" id="nama" placeholder="Nama">

                      <br>

                      <label for="nipp" class="control-label col-sm-5">
                        <strong>NIPP</strong>
                      </label>

                      <input type="text" class="form-control" id="nipp" placeholder="NIPP">

                      <br>

                      <label for="lokasi" class="control-label col-sm-5">
                        <strong>Lokasi</strong>
                      </label>

                      <input type="text" class="form-control" id="lokasi" placeholder="Lokasi Pegawai...">

                      <br>

                      <label for="substansi" class="control-label col-sm-5">
                        <strong>Substansi</strong>
                      </label>

                      <input type="text" class="form-control" id="substansi" placeholder="Substansi...">

                      <br>

                      <label for="kelasJabatan" class="control-label col-sm-5">
                        <strong>Kelas Jabatan</strong>
                      </label>

                      <input type="text" class="form-control" id="kelasJabatan" placeholder="Kelas Jabatan...">

                      <br>

                      <label for="jenisKelamin" class="control-label col-sm-5">
                        <strong>Jenis Kelamin</strong>
                      </label>

                      <select class="form-control" id="jenisKelamin" placeholder="Jenis Kelamin...">
                        <option value="L">L</option>

                        <option value="P">P</option>
                      </select>

                      <br>

                      <input type="hidden" id="editRowID" value="0">
                    </div>

                    <div id="showContent" style="display:none;">
                      <h4>Nama</h4>

                      <div id="namaView"></div>
                      <hr>

                      <h4>NIPP</h4>

                      <div id="nippView"></div>
                      <hr>

                      <h4>Lokasi</h4>

                      <div id="lokasiView"></div>
                      <hr>

                      <h4>Substansi</h4>

                      <div id="substansiView"></div>
                      <hr>

                      <h4>Kelas Jabatan</h4>

                      <div id="kelasView"></div>
                      <hr>

                      <h4>Jenis Kelamin</h4>

                      <div id="jenisView"></div>
                      <hr>
                      <!-- <h3>Long Description</h3>
                            <div id="longDescView" style="overflow-y: scroll; height: 300px;"></div> -->
                    </div>
                  </div>

                  <div class="modal-footer">
                    <input type="button" class="btn btn-primary" data-dismiss="modal" value="Close" id="closeBtn"
                      style="display: none;">

                    <input type="button" id="manageBtn" onclick="manageData('addNew')" value="Save"
                      class="btn btn-success">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <!-- <h2>Data Pegawai 2016</h2> -->

                <input style="float: right" type="button" class="btn btn-success" id="addNew" value="Add New">

                <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%"
                  cellspacing="0">
                  <thead>
                    <tr>
                      <td>No</td>
                      <td>Nama</td>
                      <td>NIPP</td>
                      <td>Lokasi</td>
                      <td>Substansi</td>
                      <td>Kelas Jabatan</td>
                      <td>Jenis Kelamin</td>
                      <td>Options</td>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      // Ganti dengan password db-mu
                      $conn = new mysqli('localhost', 'root', 'test', 'rekapdatapelatihan');
                      $sql = $conn->query("SELECT `no`, nama, nipp, lokasi, substansi, kelasJabatan, jenisKelamin FROM pegawai2019");
                      if ($sql->num_rows > 0) {
                          while ($data = $sql->fetch_array()) {
                              ?>
                    <tr>
                      <td></td>
                      <td no="<?php echo "pegawai_".$data["no"]; ?>"><?php echo $data["nama"]; ?></td>
                      <td no="<?php echo "pegawai_".$data["no"]; ?>"><?php echo $data["nipp"]; ?></td>
                      <td no="<?php echo "pegawai_".$data["no"]; ?>"><?php echo $data["lokasi"]; ?></td>
                      <td no="<?php echo "pegawai_".$data["no"]; ?>"><?php echo $data["substansi"]; ?></td>
                      <td no="<?php echo "pegawai_".$data["no"]; ?>"><?php echo $data["kelasJabatan"]; ?></td>
                      <td no="<?php echo "pegawai_".$data["no"]; ?>"><?php echo $data["jenisKelamin"]; ?></td>
                      <td>
                        <input type="button" onclick="" value="Edit" class="btn btn-primary">
                        <input type="button" onclick="" value="View" class="btn">
                        <input type="button" onclick="" value="Delete" class="btn btn-danger">
                      </td>
                    </tr>
                    <?php
                          }
                      } ?>
                  </tbody>
                </table>

                <br>
                <br>
              </div>
            </div>
          </div>
        </div>

        <!-- Footer -->

        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>
                Copyright &copy; shfr-rnld 2019
              </span>
            </div>
          </div>
        </footer>

        <!-- End of Footer -->
        <!-- Scroll to Top Button -->

        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal -->

        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>

                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>

              <div class="modal-body">
                Select "Logout" below if you are ready to end your current session.
              </div>

              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                <a class="btn btn-primary" href="login.html">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>
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
<script>

$(document).ready(function(){
  var table = $('#dataTable').DataTable();
  $("#addNew").on('click', function () {
    $("#tableManager").modal('show');
  });

  $("#tableManager").on('hidden.bs.modal', function () {
    $("#showContent").fadeOut();
    $("#editContent").fadeIn();
    $("#editRowID").val(0);
    $("#nama").val("");
    $("#nipp").val("");
    $("#lokasi").val("");
    $("#substansi").val("");
    $("#kelasJabatan").val("");
    $("#jenisKelamin").val("");
    $("#closeBtn").fadeOut();
    $("#manageBtn").attr('value', 'Add New').attr('onclick', "manageData('addNew')").fadeIn();
  });
})

function deleteRow(rowID) {
  if (confirm('Are you sure??')) {
    $.ajax({
      url: 'ajax.php',
      method: 'POST',
      dataType: 'text',
      data: {
        key: 'deleteRow',
        rowID: rowID
      }, success: function (response) {
        $("#pegawai_" + rowID).parent().remove();
        alert(response);
      }
    });
  }
}

function viewORedit(rowID, type) {
  $.ajax({
    url: 'ajax.php',
    method: 'POST',
    dataType: 'json',
    data: {
      key: 'getRowData',
      rowID: rowID
    }, success: function (response) {
      if (type == "view") {
        $("#showContent").fadeIn();
        $("#editContent").fadeOut();
        $("#namaView").html(response.nama);
        $("#nippView").html(response.nipp);
        $("#lokasiView").html(response.lokasi);
        $("#substansiView").html(response.substansi);
        $("#kelasView").html(response.kelasJabatan);
        $("#jenisView").html(response.jenisKelamin);
        $("#manageBtn").fadeOut();
        $("#closeBtn").fadeIn();
      } else {
        $("#editContent").fadeIn();
        $("#editRowID").val(rowID);
        $("#showContent").fadeOut();
        $("#nama").val(response.nama);
        $("#nipp").val(response.nipp);
        $("#lokasi").val(response.lokasi);
        $("#substansi").val(response.substansi);
        $("#kelasJabatan").val(response.kelasJabatan);
        $("#jenisKelamin").val(response.jenisKelamin);
        $("#closeBtn").fadeOut();
        $("#manageBtn").attr('value', 'Save Changes').attr('onclick', "manageData('updateRow')");
      }

      $(".modal-title").html(response.nama);
      $("#tableManager").modal('show');
    }
  });
}

function getExistingData(start, limit) {
  debugger
  $.ajax({
    url: 'ajax.php',
    method: 'POST',
    dataType: 'text',
    data: {
      key: 'getExistingData',
      start: start,
      limit: limit
    }, success: function (response) {
      debugger
      if (response != "reachedMax") {
        $('tbody').append(response);
        start += limit;
        getExistingData(start, limit);
        $("#dataTable").DataTable();
      } else
        $("#dataTable").DataTable();
    }
  });
}

function manageData(key) {
  var nama = $("#nama");
  var nipp = $("#nipp");
  var lokasi = $("#lokasi");
  var substansi = $("#substansi");
  var kelasJabatan = $("#kelasJabatan");
  var jenisKelamin = $("#jenisKelamin");
  var editRowID = $("#editRowID");

  if (isNotEmpty(nama) && isNotEmpty(nipp) && isNotEmpty(lokasi) && isNotEmpty(substansi) && isNotEmpty(kelasJabatan) && isNotEmpty(jenisKelamin)) {
    $.ajax({
      url: 'ajax.php',
      method: 'POST',
      dataType: 'text',
      data: {
        key: key,
        nama: nama.val(),
        nipp: nipp.val(),
        lokasi: lokasi.val(),
        substansi: substansi.val(),
        kelasJabatan: kelasJabatan.val(),
        jenisKelamin: jenisKelamin.val(),
        rowID: editRowID.val()
      }, success: function (response) {
        if (response != "success")
          alert(response);
        else {
          $("#pegawai_" + editRowID.val()).html(nama.val());
          nama.val('');
          nipp.val('');
          lokasi.val('');
          substansi.val('');
          kelasJabatan.val('');
          jenisKelamin.val('');
          $("#tableManager").modal('hide');
          $("#manageBtn").attr('value', 'Add').attr('onclick', "manageData('addNew')");
        }
      }
    });
  }
}

function isNotEmpty(caller) {
  if (caller.val() == '') {
    caller.css('border', '1px solid red');
    return false;
  } else
    caller.css('border', '');

  return true;
}

</script>
</html>