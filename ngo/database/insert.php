<?php
			ini_set("display_errors", "1");
			error_reporting(E_ALL);
include '../database/connection.php';
$message = '';
if (isset ($_POST['role_name'])  && isset($_POST['created_at']) ) {

  $role_of_emp = $_POST['role_of_emp'];
  $created_at = $_POST['created_at'];
  $sql = 'INSERT INTO roles(role_of_emp, created_at) VALUES(:role_of_emp, :created_at)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':role_of_emp' => $role_of_emp, ':created_at' => $created_at])) {
  }



}
 ?>
