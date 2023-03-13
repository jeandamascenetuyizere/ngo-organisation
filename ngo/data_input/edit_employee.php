<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
require '../database/connection.php';
$emp_id = $_GET['emp_id'];
$sql = 'SELECT * FROM employees WHERE emp_id=:emp_id';
$statement = $conn->prepare($sql);
$statement->execute([':emp_id' => $emp_id ]);
$employee = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['name'])  && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['application_date']) && isset($_POST['dob']) && isset($_POST['username']) && isset($_POST['ngo_id']) ) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $application_date = $_POST['application_date'];
  $dob = $_POST['dob'];
  $username = $_POST['username'];
  $ngo_id = $_POST['ngo_id'];
  $sql = 'UPDATE employees SET name=:name, phone=:phone, email=:email, application_date=:application_date, username=:username, dob=:dob, ngo_id=:ngo_id WHERE emp_id=:emp_id';
  $statement = $conn->prepare($sql);
  if ($statement->execute([':name' => $name, ':phone' => $phone,':email' => $email,':application_date' => $application_date,
  ':dob' => $dob,':username' => $username,':ngo_id' => $ngo_id, ':emp_id' => $emp_id])) {
    header("Location:create.php");
  }
}
 ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update Employee</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input value="<?= $employee->name; ?>" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" value="<?= $employee->phone; ?>" name="phone" id="phone" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" value="<?= $employee->email; ?>" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="application_date">application_date</label>
          <input type="text" value="<?= $employee->application_date; ?>" name="application_date" id="application_date" class="form-control">
        </div>
        <div class="form-group">
          <label for="dob">Date of Birth</label>
          <input type="text" value="<?= $employee->dob; ?>" name="dob" id="dob" class="form-control">
        </div>
        <div class="form-group">
          <label for="username">username</label>
          <input type="text" value="<?= $employee->username; ?>" name="username" id="username" class="form-control">
        </div>
        <div class="form-group">
          <input type="hidden" value="<?= $employee->ngo_id; ?>" name="ngo_id" id="ngo_id" class="form-control">
        </div>
        <div class="form-group">
          <button onclick="return confirm('Are you sure you want to update this entry?')"type="submit" class="btn btn-primary">Update Employee</button>
        </div>
      </form>
    </div>
  </div>
</div>
      </main>