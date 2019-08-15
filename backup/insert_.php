
<?php
$connect = mysqli_connect("localhost", "root", "", "testing");
if(isset($_POST["first_name"], $_POST["last_name"]))
{
 $first_name = mysqli_real_escape_string($connect, $_POST["first_name"]);
 $last_name = mysqli_real_escape_string($connect, $_POST["last_name"]);
 $query = "INSERT INTO user(first_name, last_name) VALUES('$first_name', '$last_name')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>


update.php


<?php
$connect = mysqli_connect("localhost", "root", "", "testing");
if(isset($_POST["id"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
 $query = "UPDATE user SET ".$_POST["column_name"]."='".$value."' WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }
}
?>
