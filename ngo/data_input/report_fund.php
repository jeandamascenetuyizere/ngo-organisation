
<main>
<?php

  ini_set("display_errors", "1");
  error_reporting(E_ALL);
require '../database/connection.php';
$sql = 'SELECT * FROM funds';
$statement = $conn->prepare($sql);
$statement->execute();
$funds = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<div class="container">
    <div class="card-body">
      <table class="table table-bordered" style="font-size:2vh;">
        <tr>
          <th>ID</th>
          <th>Amount</th>
          <th>Received at</th>
          <th>created by</th>
          <th>created at</th>
          <th>updated by</th>
          <th>updated at</th>
          <th>don_id</th>
          <th>Fund_type_id</th>
          <th colspan="2">Actions</th>
        </tr>
        <?php foreach($funds as $fund): ?>
          <tr>
            <td><?= $fund->fund_id; ?></td>
            <td><?= $fund->amount; ?></td>
            <td><?= $fund->received_at; ?></td>
            <td><?= $fund->created_by; ?></td>
            <td><?= $fund->created_at; ?></td>
            <td><?= $fund->updated_by; ?></td>
            <td><?= $fund->updated_at; ?></td>
            <td><?= $fund->don_id; ?></td>

    
            <td>
              <a href="edit_fund.php?fund_id=<?= $fund->fund_id ?>" class="btn btn-primary" style="font-size:2vh;">Edit</a></td><td>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete_fund.php?fund_id=<?= $fund->fund_id ?>" class='btn btn-danger' style="font-size:2vh;"> Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
  </div>
</div>
</div>
		</main>