<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
require '../database/connection.php';
$fund_id = $_GET['fund_id'];
$sql = 'SELECT * FROM funds WHERE fund_id=:fund_id';
$statement = $conn->prepare($sql);
$statement->execute([':fund_id' => $fund_id ]);
$employee = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['amount'])  && isset($_POST['received_at']) && isset($_POST['created_by']) && isset($_POST['created_at']) && isset($_POST['updated_by']) && isset($_POST['updated_at']) && isset($_POST['don_id']) && isset($_POST['fund_type_id']) ) {
  $amount = $_POST['amount'];
  $received_at = $_POST['received_at'];
  $created_by = $_POST['created_by'];
  $created_at = $_POST['created_at'];
  $updated_by = $_POST['updated_by'];
  $updated_at = $_POST['updated_at'];
  $don_id = $_POST['don_id'];
  $fund_type_id = $_POST['fund_type_id'];
  $sql = 'UPDATE funds SET amount=:amount, received_at=:received_at, created_by=:created_by, created_at=:created_at, updated_by=:updated_by, updated_at=:updated_at, don_id=:don_id, fund_type_id= :fund_type_id WHERE fund_id=:fund_id';
  $statement = $conn->prepare($sql);
  if ($statement->execute([':amount' => $amount, ':received_at' => $received_at,':created_by' => $created_by,':created_at' => $created_at,':updated_by' => $updated_by,':updated_at' => $updated_at,':don_id' => $don_id,  ':fund_type_id' => $fund_type_id])) {
    header("Location:funds.php");
  }
}
 ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update Funds</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">amount</label>
          <input value="<?= $employee->amount; ?>" type="text" name="amount" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="phone">received_at</label>
          <input type="date" value="<?= $employee->received_at; ?>" name="received_at" id="phone" class="form-control">
        </div>
        <div class="form-group">
          <label for="created_by">created_by</label>
          <input type="text" value="<?= $employee->created_by; ?>" name="created_by" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="application_date">created_at</label>
          <input type="date" value="<?= $employee->created_at; ?>" name="created_at" id="application_date" class="form-control">
        </div>
        <div class="form-group">
          <label for="updated_by">updated_by</label>
          <input type="text" value="<?= $employee->updated_by; ?>" name="updated_by" id="dob" class="form-control">
        </div>
        <div class="form-group">
          <label for="username">updated_at</label>
          <input type="date" value="<?= $employee->updated_at; ?>" name="updated_at" id="username" class="form-control">
        </div>
        <div class="form-group">
          <input type="hidden" value="<?= $employee->don_id; ?>" name="don_id" id="don_id" class="form-control">
        </div>
        <div class="form-group">
          <input type="hidden" value="<?= $employee->fund_type_id; ?>" name="fund_type_id" id="fund_type_id" class="form-control">
        </div>
        <div class="form-group">
          <button onclick="return confirm('Are you sure you want to update this entry?')"type="submit" class="btn btn-primary">Update fund</button>
        </div>
      </form>
    </div>
  </div>
</div>
      </main>