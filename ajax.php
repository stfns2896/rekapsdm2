<?php
    if (isset($_POST['key'])) {
        $conn = new mysqli('localhost', 'root', 'test', 'rekapdatapelatihan');

        if ($_POST['key'] == 'getRowData') {
            $rowID = $conn->real_escape_string($_POST['rowID']);
            $sql = $conn->query("SELECT nama, nipp, lokasi, substansi, kelasJabatan, jenisKelamin FROM pegawai2016 WHERE no='$rowID'");
            $data = $sql->fetch_array();
            $jsonArray = array(
                'nama' => $data['nama'],
                'nipp' => $data['nipp'],
                'lokasi' => $data['lokasi'],
                'substansi' => $data['substansi'],
                'kelasJabatan' => $data['kelasJabatan'],
                'jenisKelamin' => $data['jenisKelamin']
                    );

            exit(json_encode($jsonArray));
        }

        if ($_POST['key'] == 'getExistingData') {
            $start = $conn->real_escape_string($_POST['start']);
            $limit = $conn->real_escape_string($_POST['limit']);

            $sql = $conn->query("SELECT `no`, nama, nipp, lokasi, substansi, kelasJabatan, jenisKelamin FROM pegawai2019 LIMIT $start, $limit");
			// var_dump($sql);
			if ($sql->num_rows > 0) {
                $response = "";
                while ($data = $sql->fetch_array()) {
                    $response .= '
						<tr>
							<td>'.$data["no"].'</td>
							<td no="pegawai_'.$data["no"].'">'.$data["nama"].'</td>
							<td no="pegawai_'.$data["no"].'">'.$data["nipp"].'</td>
							<td no="pegawai_'.$data["no"].'">'.$data["lokasi"].'</td>
							<td no="pegawai_'.$data["no"].'">'.$data["substansi"].'</td>
							<td no="pegawai_'.$data["no"].'">'.$data["kelasJabatan"].'</td>
							<td no="pegawai_'.$data["no"].'">'.$data["jenisKelamin"].'</td>
													
							<td>
								<input type="button" onclick="viewORedit('.$data["no"].',\'edit\')" value="Edit" class="btn btn-primary">
								
								<input type="button" onclick="viewORedit('.$data["no"].',\'view\')" value="View" class="btn">
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
            $conn->query("DELETE FROM pegawai2016 WHERE no='$rowID'");
            exit('The Row Has Been Deleted!');
        }

        $nama = $conn->real_escape_string($_POST['nama']);
        $nipp = $conn->real_escape_string($_POST['nipp']);
        $lokasi = $conn->real_escape_string($_POST['lokasi']);
        $substansi = $conn->real_escape_string($_POST['substansi']);
        $kelasJabatan = $conn->real_escape_string($_POST['kelasJabatan']);
        $jenisKelamin = $conn->real_escape_string($_POST['jenisKelamin']);

        if ($_POST['key'] == 'updateRow') {
            $conn->query("UPDATE pegawai2016 SET nama='$nama', nipp='$nipp', lokasi='$lokasi', substansi='$substansi', kelasJabatan='$kelasJabatan', jenisKelamin='$jenisKelamin' WHERE no='$rowID'");
            exit('success');
        }

        if ($_POST['key'] == 'addNew') {
            $sql = $conn->query("SELECT no FROM pegawai2016 WHERE nama = '$nama'");
            $conn->query("INSERT INTO pegawai2016 (nama, nipp, lokasi, substansi, kelasJabatan, jenisKelamin) 
							VALUES ('$nama', '$nipp',  '$lokasi', '$substansi', '$kelasJabatan', '$jenisKelamin')");
            exit('Has Been Inserted!');
        }
    }
