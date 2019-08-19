<?php
    if (isset($_POST['key'])) {
        // Don't forget use your db credential
        $conn = new mysqli('localhost', 'root', '', 'rekapdatapelatihan');

        if ($_POST['key'] == 'getRowData') {
            $rowID = $conn->real_escape_string($_POST['rowID']);
            $sql = $conn->query("SELECT nama, nipp, lokasi, substansi, kelasJabatan, jenisKelamin, idPelatihan, namaPelatihan, durasi, bidang FROM keikutsertaan2019 WHERE no='$rowID'");
            $data = $sql->fetch_array();
            $jsonArray = array(
                'nama' => $data['nama'],
                'nipp' => $data['nipp'],
                'lokasi' => $data['lokasi'],
                'substansi' => $data['substansi'],
                'kelasJabatan' => $data['kelasJabatan'],
                'jenisKelamin' => $data['jenisKelamin'],
                'idPelatihan' => $data['idPelatihan'],
                'namaPelatihan' => $data['namaPelatihan'],
                'durasi' => $data['durasi'],
                'bidang' => $data['bidang']
                    );

            exit(json_encode($jsonArray));
        }

        if ($_POST['key'] == 'getExistingData') {
            $start = $conn->real_escape_string($_POST['start']);
            $limit = $conn->real_escape_string($_POST['limit']);

            $sql = $conn->query("SELECT nama, nipp, lokasi, substansi, kelasJabatan, jenisKelamin, idPelatihan, namaPelatihan, durasi, bidang FROM keikutsertaan2019 LIMIT $start, $limit");
			// var_dump($sql);
			if ($sql->num_rows > 0) {
                $response = "";
                while ($data = $sql->fetch_array()) {
                    $response .= '
						<tr>
							<td>'.$data["no"].'</td>
							<td no="keikutsertaan_'.$data["no"].'">'.$data["nama"].'</td>
							<td no="keikutsertaan_'.$data["no"].'">'.$data["nipp"].'</td>
							<td no="keikutsertaan_'.$data["no"].'">'.$data["lokasi"].'</td>
							<td no="keikutsertaan_'.$data["no"].'">'.$data["substansi"].'</td>
							<td no="keikutsertaan_'.$data["no"].'">'.$data["kelasJabatan"].'</td>
                            <td no="keikutsertaan_'.$data["no"].'">'.$data["jenisKelamin"].'</td>
                            <td no="keikutsertaan_'.$data["no"].'">'.$data["idPelatihan"].'</td>
                            <td no="keikutsertaan_'.$data["no"].'">'.$data["namaPelatihan"].'</td>
                            <td no="keikutsertaan_'.$data["no"].'">'.$data["durasi"].'</td>
                            <td no="keikutsertaan_'.$data["no"].'">'.$data["bidang"].'</td>
													
							<td>
								<input type="button" onclick="viewORedit('.$data["no"].',\'edit\')" value="Edit" class="btn btn-primary">								
								<input type="button" onclick="viewORedit('.$data["no"].',\'view\')" value="View" class="btn btn-warning">
								<input type="button" onclick="deleteRow('.$data["no"].',)" value="Delete" class="btn btn-danger">
							</td>
						</tr>

						';
                }
                exit($response);
            } else {
                exit('reachedMax');
            }
        }

        $rowID = $conn->real_escape_string($_POST['rowID']);

        if ($_POST['key'] == 'deleteRow') {
            $conn->query("DELETE FROM keikutsertaan2019 WHERE no='$rowID'");
            exit('The Row Has Been Deleted!');
        }

        $nama = $conn->real_escape_string($_POST['nama']);
        $nipp = $conn->real_escape_string($_POST['nipp']);
        $lokasi = $conn->real_escape_string($_POST['lokasi']);
        $substansi = $conn->real_escape_string($_POST['substansi']);
        $kelasJabatan = $conn->real_escape_string($_POST['kelasJabatan']);
        $jenisKelamin = $conn->real_escape_string($_POST['jenisKelamin']);
        $idPelatihan = $conn->real_escape_string($_POST['idPelatihan']);
        $namaPelatihan = $conn->real_escape_string($_POST['namaPelatihan']);
        $durasi = $conn->real_escape_string($_POST['durasi']);
        $bidang = $conn->real_escape_string($_POST['bidang']);

        if ($_POST['key'] == 'updateRow') {
            $conn->query("UPDATE keikutsertaan2019 SET nama='$nama', nipp='$nipp', lokasi='$lokasi', substansi='$substansi', kelasJabatan='$kelasJabatan', jenisKelamin='$jenisKelamin', idPelatihan='$idPelatihan', namaPelatihan='$namaPelatihan', durasi='$durasi', bidang='$bidang' WHERE no='$rowID'");
            exit('success');
        }

        if ($_POST['key'] == 'addNew') {
            $sql = $conn->query("SELECT no FROM keikutsertaan2019 WHERE nama = '$nama'");
            $conn->query("INSERT INTO keikutsertaan2019 (nama, nipp, lokasi, substansi, kelasJabatan, jenisKelamin, idPelatihan, namaPelatihan, durasi, bidang) 
							VALUES ('$nama', '$nipp',  '$lokasi', '$substansi', '$kelasJabatan', '$jenisKelamin', '$idPelatihan', '$namaPelatihan', '$durasi', '$bidang')");
            exit('Has Been Inserted!');
        }
    }
