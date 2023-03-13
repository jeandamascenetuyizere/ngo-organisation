<?php
require '../database/connection.php';
ini_set("display_errors", "1");
error_reporting(E_ALL);
$fund_id  = $_GET['fund_id'];
$sql = 'DELETE FROM funds WHERE fund_id =:fund_id ';
$statement = $conn->prepare($sql);
if ($statement->execute([':fund_id' => $fund_id ])) {
  header("Location:funds.php");
}
?>