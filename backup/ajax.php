<?php
	if (isset($_POST['key'])) {

		$conn = new mysqli('localhost', 'root', '', 'datapegawaisdm');

		if ($_POST['key'] == 'getRowData') {
			$rowID = $conn->real_escape_string($_POST['rowID']);
			$sql = $conn->query("SELECT namaPelatihan, bidang, tglAwal, tglAkhir, klasifikasi, vendor, jmlPeserta, durasi FROM pelatihan WHERE idPelatihan='$rowID'");
			$data = $sql->fetch_array();
			$jsonArray = array(
				'namaPelatihan' => $data['namaPelatihan'],
				'bidang' => $data['bidang'],
				'tglAwal' => $data['tglAwal'],
				'tglAkhir' => $data['tglAkhir'],
				'klasifikasi' => $data['klasifikasi'],
				'vendor' => $data['vendor'],
				'jmlPeserta' => $data['jmlPeserta'],
				'durasi' => $data['durasi']
										);

			exit(json_encode($jsonArray));
 		}

		if ($_POST['key'] == 'getExistingData') {
			$start = $conn->real_escape_string($_POST['start']);
			$limit = $conn->real_escape_string($_POST['limit']);

			$sql = $conn->query("SELECT idPelatihan, namaPelatihan, bidang, tglAwal, tglAkhir, klasifikasi, vendor, jmlPeserta, durasi FROM pelatihan LIMIT $start, $limit");
			if ($sql->num_rows > 0) {
				$response = "";
				while($data = $sql->fetch_array()) {
					$response .= '
						<tr>
							<td>'.$data["idPelatihan"].'</td>
							<td idPelatihan="pelatihan_'.$data["idPelatihan"].'">'.$data["namaPelatihan"].'</td>
							<td idPelatihan="pelatihan_'.$data["idPelatihan"].'">'.$data["bidang"].'</td>
							<td idPelatihan="pelatihan_'.$data["idPelatihan"].'">'.$data["tglAwal"].'</td>
							<td idPelatihan="pelatihan_'.$data["idPelatihan"].'">'.$data["tglAkhir"].'</td>
							<td idPelatihan="pelatihan_'.$data["idPelatihan"].'">'.$data["klasifikasi"].'</td>
							<td idPelatihan="pelatihan_'.$data["idPelatihan"].'">'.$data["vendor"].'</td>
							<td idPelatihan="pelatihan_'.$data["idPelatihan"].'">'.$data["jmlPeserta"].'</td>
							<td idPelatihan="pelatihan_'.$data["idPelatihan"].'">'.$data["durasi"].'</td>
							
							
							<td>
								<input type="button" onclick="viewORedit('.$data["idPelatihan"].',\'edit\')" value="Edit" class="btn btn-primary">
								<input type="button" onclick="viewORedit('.$data["idPelatihan"].',\'view\')" value="View" class="btn">
								<input type="button" onclick="deleteRow('.$data["idPelatihan"].',)" value="Delete" class="btn btn-danger">
							</td>
						</tr>

						';
				}
				exit($response);
			} else
				exit('reachedMax');
		}

		$rowID = $conn->real_escape_string($_POST['rowID']);

		if ($_POST['key'] == 'deleteRow') {
			$conn->query("DELETE FROM pelatihan WHERE idPelatihan='$rowID'");
			exit('The Row Has Been Deleted!');
		}

		$name = $conn->real_escape_string($_POST['name']);
		$bidang = $conn->real_escape_string($_POST['bidang']);
		$tglAwal = $conn->real_escape_string($_POST['tglAwal']);
		$tglAkhir = $conn->real_escape_string($_POST['tglAkhir']);
		$klasifikasi = $conn->real_escape_string($_POST['klasifikasi']);
		$vendor = $conn->real_escape_string($_POST['vendor']);
		$jmlPeserta = $conn->real_escape_string($_POST['jmlPeserta']);
		$durasi = $conn->real_escape_string($_POST['durasi']);

		if ($_POST['key'] == 'updateRow') {
			$conn->query("UPDATE pelatihan SET namaPelatihan='$name', bidang='$bidang', tglAwal='$tglAwal', tglAkhir='$tglAkhir', klasifikasi='$klasifikasi', vendor='$vendor', jmlPeserta='$jmlPeserta', durasi='$durasi' WHERE idPelatihan='$rowID'");
			exit('success');
		}

		if ($_POST['key'] == 'addNew') {
			$sql = $conn->query("SELECT idPelatihan FROM pelatihan WHERE namaPelatihan = '$name'");
				$conn->query("INSERT INTO pelatihan (namaPelatihan, bidang, tglAwal, tglAkhir, klasifikasi, vendor, jmlPeserta, durasi) 
							VALUES ('$name', '$bidang', '$tglAwal', '$tglAkhir', '$klasifikasi', '$vendor', '$jmlPeserta', '$durasi')");
				exit('Has Been Inserted!');
		}
	}
?>