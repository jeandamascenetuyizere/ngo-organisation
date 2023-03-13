<?php
require '../database/connection.php';
ini_set("display_errors", "1");
error_reporting(E_ALL);
$emp_id  = $_GET['emp_id'];
$sql = 'DELETE FROM employees WHERE emp_id =:emp_id ';
$statement = $conn->prepare($sql);
if ($statement->execute([':emp_id' => $emp_id ])) {
  header("Location:create.php");
}
?>