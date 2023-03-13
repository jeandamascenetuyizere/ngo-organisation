<?php
require '../database/connection.php';
ini_set("display_errors", "1");
error_reporting(E_ALL);
$don_id  = $_GET['don_id'];
$sql = 'DELETE FROM donars WHERE don_id =:don_id ';
$statement = $conn->prepare($sql);
if ($statement->execute([':don_id' => $don_id ])) {
  header("Location:donars.php");
}
?>