<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
require '../database/connection.php';
$benef_id = $_GET['benef_id'];
$sql = 'SELECT * FROM beneficians WHERE benef_id=:benef_id';
$statement = $conn->prepare($sql);
$statement->execute([':benef_id' => $benef_id ]);
$donar = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['names'])  && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['dob']) && isset($_POST['ngo_id']) ) {
  $names = $_POST['names'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $ngo_id = $_POST['ngo_id'];
  $sql = 'UPDATE beneficians SET names=:names, phone=:phone, email=:email, dob=:dob, ngo_id=:ngo_id WHERE benef_id=:benef_id';
  $statement = $conn->prepare($sql);
  if ($statement->execute([':names' => $names, ':phone' => $phone,':email' => $email,':dob' => $dob,':ngo_id' => $ngo_id, ':benef_id' => $benef_id])) {
    header("Location:beneficians.php");
  }
}
 ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update benefician</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="POST">
        <div class="form-group">
          <label for="name">Name</label>
          <input value="<?= $donar->names; ?>" type="text" name="names" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" value="<?= $donar->phone; ?>" name="phone" id="phone" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" value="<?= $donar->email; ?>" name="email" id="email" class="form-control">
        </div>
        <div class="form-gr?benef_id=3oup">
          <label for="dob">date of birth</label>
          <input type="date" value="<?= $donar->address; ?>" name="dob" id="address" class="form-control">
        </div>
        <div class="form-group">
          <input type="hidden" value="<?= $donar->ngo_id; ?>" name="ngo_id" id="ngo_id" class="form-control">
        </div>
        <div class="form-group">
          <button onclick="return confirm('Are you sure you want to update this entry?')"type="submit" class="btn btn-primary">Update beneficiana</button>
        </div>
      </form>
    </div>
  </div>
</div>
      </main>