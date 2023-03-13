<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
require '../database/connection.php';
$don_id = $_GET['don_id'];
$sql = 'SELECT * FROM donars WHERE don_id=:don_id';
$statement = $conn->prepare($sql);
$statement->execute([':don_id' => $don_id ]);
$donar = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['name'])  && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['url'])  && isset($_POST['ngo_id']) ) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $url = $_POST['url'];
  $ngo_id = $_POST['ngo_id'];
  $sql = 'UPDATE donars SET name=:name, phone=:phone, email=:email, address=:address,  url=:url, ngo_id=:ngo_id WHERE don_id=:don_id';
  $statement = $conn->prepare($sql);
  if ($statement->execute([':name' => $name, ':phone' => $phone,':email' => $email,':address' => $address,
  ':url' => $url,':ngo_id' => $ngo_id, ':don_id' => $don_id])) {
    header("Location:donars.php");
  }
}
 ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update donar</h2>
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
          <input value="<?= $donar->name; ?>" type="text" name="name" id="name" class="form-control">
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
          <label for="address">address</label>
          <input type="text" value="<?= $donar->address; ?>" name="address" id="address" class="form-control">
        </div>
        <div class="form-group">
          <label for="url">url</label>
          <input type="text" value="<?= $donar->url; ?>" name="url" id="url" class="form-control">
        </div>
        <div class="form-group">
          <input type="hidden" value="<?= $donar->ngo_id; ?>" name="ngo_id" id="ngo_id" class="form-control">
        </div>
        <div class="form-group">
          <button onclick="return confirm('Are you sure you want to update this entry?')"type="submit" class="btn btn-primary">Update donars</button>
        </div>
      </form>
    </div>
  </div>
</div>
      </main>