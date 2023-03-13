<?php
require '../database/connection.php';
ini_set("display_errors", "1");
error_reporting(E_ALL);
$role_id  = $_GET['role_id'];
$sql = 'DELETE FROM roles WHERE role_id =:role_id ';
$statement = $conn->prepare($sql);
if ($statement->execute([':role_id' => $role_id ])) {
  header("Location:roles.php");
}
?>