<!DOCTYPE html>
<html>
<head>
<meta charset = "UTF-8">
<title>Serverside Data Tables</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

  	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



<body>
	<div class="container">
		<table id="coba" class="table table-bordered table-striped">
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
	      </tr>
	     </thead>
	     <tbody>
	     	<?php
			$connect = mysqli_connect('localhost', 'root', '', 'datapegawaisdm') or die("connection failed".mysqli_erno());
			$sql = $connect->query("SELECT * FROM pelatihan");
			while ($data = $sql->fetch_array()) {
				echo '<tr>
				<td>'.$data['ID_PELATIHAN'].'</td>
				<td>'.$data['NAMA_PELATIHAN'].'</td>
				<td>'.$data['BIDANG'].'</td>
				<td>'.$data['TANGGAL_AWAL'].'</td>
				<td>'.$data['TANGGAL_AKHIR'].'</td>
				<td>'.$data['KLASIFIKASI'].'</td>
				<td>'.$data['VENDOR'].'</td>
				<td>'.$data['DURASI'].'</td>
				<td>'.$data['JUMLAH_PESERTA'].'</td>


					</tr>
				';
			}

			?>


	     </tbody>
	    </table>
    </div>
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
</body>
</head>
</html>

