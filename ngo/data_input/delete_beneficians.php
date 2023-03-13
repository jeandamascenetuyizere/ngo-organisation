<?php
require '../database/connection.php';
ini_set("display_errors", "1");
error_reporting(E_ALL);
$benef_id  = $_GET['benef_id'];
$sql = 'DELETE FROM beneficians WHERE benef_id =:benef_id ';
$statement = $conn->prepare($sql);
if ($statement->execute([':benef_id' => $benef_id ])) {
  header("Location:beneficians.php");
}
?>