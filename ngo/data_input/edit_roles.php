<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
require '../database/connection.php';
$role_id = $_GET['role_id'];
$sql = 'SELECT * FROM roles WHERE role_id=:role_id';
$statement = $conn->prepare($sql);
$statement->execute([':role_id' => $role_id ]);
$donar = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['role_of_emp'])  && isset($_POST['created_at'])) {
  $role_of_emp = $_POST['role_of_emp'];
  $created_at = $_POST['created_at'];
  $sql = 'UPDATE roles SET role_of_emp=:role_of_emp, created_at=:created_at  WHERE role_id=:role_id';
  $statement = $conn->prepare($sql);
  if ($statement->execute([':role_of_emp' => $role_of_emp, ':created_at' => $created_at])) {
    header("Location:roles.php");
  }
}
 ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update role</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="POST">
        <div class="form-group">
          <label for="name">role of employee</label>
          <input value="<?= $donar->role_of_emp; ?>" type="text" name="role_of_emp" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="created_at">created at</label>
          <input type="text" value="<?= $donar->created_at; ?>" name="created_at" id="created_at" class="form-control">
        </div>
        <div class="form-group">
          <button onclick="return confirm('Are you sure you want to update this entry?')"type="submit" class="btn btn-primary">Update role</button>
        </div>
      </form>
    </div>
  </div>
</div>
      </main>