<?php
	if (isset($_POST['key'])) {

		$conn = new mysqli('localhost', 'root', '', 'rekapdatapelatihan');

		if ($_POST['key'] == 'getRowData') {
			$rowID = $conn->real_escape_string($_POST['rowID']);
			$sql = $conn->query("SELECT namaPelatihan, bidang, noSurat, tglAwal, tglAkhir, klasifikasi, lokasi, vendor, jmlPeserta, durasi, managerial, sertifikasi, fungsional, biaya FROM pelatihan2017 WHERE idPelatihan='$rowID'");
			$data = $sql->fetch_array();
			$jsonArray = array(
				'namaPelatihan' => $data['namaPelatihan'],
				'bidang' => $data['bidang'],
				'noSurat' => $data['noSurat'],
				'tglAwal' => $data['tglAwal'],
				'tglAkhir' => $data['tglAkhir'],
				'klasifikasi' => $data['klasifikasi'],
				'lokasi' => $data['lokasi'],
				'vendor' => $data['vendor'],
				'jmlPeserta' => $data['jmlPeserta'],
				'durasi' => $data['durasi'],
				'managerial' => $data['managerial'],
				'sertifikasi' => $data ['sertifikasi'],
				'fungsional' => $data ['fungsional'],
				'biaya' => $data ['biaya']
										);

			exit(json_encode($jsonArray));
 		}

		if ($_POST['key'] == 'getExistingData') {
			$start = $conn->real_escape_string($_POST['start']);
			$limit = $conn->real_escape_string($_POST['limit']);

			$sql = $conn->query("SELECT idPelatihan, namaPelatihan, bidang, noSurat, tglAwal, tglAkhir, klasifikasi, lokasi, vendor, jmlPeserta, durasi, managerial, sertifikasi, fungsional, biaya FROM pelatihan2017 LIMIT $start, $limit");
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
                            <input type="button" onclick="viewORedit('.$data["idPelatihan"].',\'view\')" value="View" class="btn btn-warning">
                            <input type="button" onclick="deleteRow('.$data["idPelatihan"].',)" value="Delete" class="btn btn-danger">
							</td>
						</tr>

						';
				}
				exit($response);
			} else{
				exit('reachedMax');
		}
	}
		$rowID = $conn->real_escape_string($_POST['rowID']);

		if ($_POST['key'] == 'deleteRow') {
			$conn->query("DELETE FROM pelatihan2017 WHERE idPelatihan='$rowID'");
			exit('The Row Has Been Deleted!');
		}

		$name = $conn->real_escape_string($_POST['name']);
		$bidang = $conn->real_escape_string($_POST['bidang']);
		$noSurat = $conn->real_escape_string($_POST['noSurat']);
		$tglAwal = $conn->real_escape_string($_POST['tglAwal']);
		$tglAkhir = $conn->real_escape_string($_POST['tglAkhir']);
		$klasifikasi = $conn->real_escape_string($_POST['klasifikasi']);
		$lokasi = $conn->real_escape_string($_POST['lokasi']);
		$vendor = $conn->real_escape_string($_POST['vendor']);
		$jmlPeserta = $conn->real_escape_string($_POST['jmlPeserta']);
		$durasi = $conn->real_escape_string($_POST['durasi']);
		$managerial = $conn->real_escape_string($_POST['managerial']);
		$sertifikasi = $conn->real_escape_string($_POST['sertifikasi']);
		$fungsional = $conn->real_escape_string($_POST['fungsional']);
		$biaya = $conn->real_escape_string($_POST['biaya']);

		if ($_POST['key'] == 'updateRow') {
			$conn->query("UPDATE pelatihan2017 SET namaPelatihan='$name', bidang='$bidang', noSurat='$noSurat', tglAwal='$tglAwal', tglAkhir='$tglAkhir', klasifikasi='$klasifikasi', lokasi='$lokasi', vendor='$vendor', jmlPeserta='$jmlPeserta', durasi='$durasi', managerial='$managerial', sertifikasi='$sertifikasi', fungsional='$fungsional', biaya='$biaya' WHERE idPelatihan='$rowID'");
			exit('success');
		}

		if ($_POST['key'] == 'addNew') {
			$sql = $conn->query("SELECT idPelatihan FROM pelatihan2017 WHERE namaPelatihan = '$name'");
				$conn->query("INSERT INTO pelatihan2017 (namaPelatihan, bidang, noSurat, tglAwal, tglAkhir, klasifikasi, lokasi, vendor, jmlPeserta, durasi, managerial, sertifikasi, fungsional, biaya) 
							VALUES ('$name', '$bidang', '$noSurat', '$tglAwal', '$tglAkhir', '$klasifikasi', '$lokasi', '$vendor', '$jmlPeserta', '$durasi', '$managerial', '$sertifikasi', '$fungsional', '$biaya')");
				exit('Has Been Inserted!');
		}
	}
?>