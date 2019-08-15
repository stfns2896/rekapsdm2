
<?php
$connect = mysqli_connect("localhost", "root", "", "datapegawaisdm");
if(isset($_POST["ID_PELATIHAN"], $_POST["NAMA_PELATIHAN"], $_POST ["BIDANG"], $_POST ["TANGGAL_AWAL"], $_POST ["TANGGAL_AKHIR"], $_POST ["KLASIFIKASI"], $_POST ["VENDOR"], $_POST ["DURASI"], $_POST ["JUMLAH_PESERTA"]))
{
 $ID_PELATIHAN = mysqli_real_escape_string($connect, $_POST["ID_PELATIHAN"]);
 $NAMA_PELATIHAN = mysqli_real_escape_string($connect, $_POST["NAMA_PELATIHAN"]);
 $BIDANG = mysqli_real_escape_string($connect, $_POST["BIDANG"]);
 $TANGGAL_AWAL = mysqli_real_escape_string($connect, $_POST["TANGGAL_AWAL"]);
 $TANGGAL_AKHIR = mysqli_real_escape_string($connect, $_POST["TANGGAL_AKHIR"]);
 $KLASIFIKASI = mysqli_real_escape_string($connect, $_POST["KLASIFIKASI"]);
 $VENDOR = mysqli_real_escape_string($connect, $_POST["VENDOR"]);
 $DURASI = mysqli_real_escape_string($connect, $_POST["DURASI"]);
 $JUMLAH_PESERTA = mysqli_real_escape_string($connect, $_POST["JUMLAH_PESERTA"]);
 $query = "INSERT INTO user(ID_PELATIHAN, NAMA_PELATIHAN, BIDANG, TANGGAL_AWAL, TANGGAL_AKHIR, KLASIFIKASI, VENDOR, DURASI, JUMLAH_PESERTA) VALUES('$ID_PELATIHAN', '$NAMA_PELATIHAN', '$BIDANG', '$TANGGAL_AWAL', '$TANGGAL_AKHIR', $'KLASIFIKASI', '$VENDOR', '$DURASI', '$JUMLAH_PESERTA')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>


update.php


<?php
$connect = mysqli_connect("localhost", "root", "", "datapegawaisdm");
if(isset($_POST["ID_PELATIHAN"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
 $query = "UPDATE pelatihan SET ".$_POST["column_name"]."='".$value."' WHERE ID_PELATIHAN = '".$_POST["ID_PELATIHAN"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }
}
?>
