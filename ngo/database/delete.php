<?php
include ("connect_db.php");

try {
  $sql = "DELETE FROM ngo WHERE ngo_id=5";
  $conn->exec($sql);
  echo "Record deleted successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>