
<main>
<?php

  ini_set("display_errors", "1");
  error_reporting(E_ALL);
require '../database/connection.php';
$sql = 'SELECT * FROM employees';
$statement = $conn->prepare($sql);
$statement->execute();
$employee = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<div class="container">
    <div class="card-body">
      <table class="table table-bordered" style="font-size:2vh;">
        <tr>
          <th>ID</th>
          <th>Names</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Date of Application</th>
          <th>Date of Birth</th>
          <th>username</th>
          <th>Ngo Id</th>
          <th colspan="2">Actions</th>
        </tr>
        <?php foreach($employee as $emp): ?>
          <tr>
            <td><?= $emp->emp_id; ?></td>
            <td><?= $emp->name; ?></td>
            <td><?= $emp->phone; ?></td>
            <td><?= $emp->email; ?></td>
            <td><?= $emp->application_date; ?></td>
            <td><?= $emp->dob; ?></td>
            <td><?= $emp->username; ?></td>
            <td><?= $emp->ngo_id; ?></td>
    
            <td>
              <a href="edit_employee.php?emp_id=<?= $emp->emp_id ?>" class="btn btn-primary" style="font-size:2vh;">Edit</a></td><td>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete_employee.php?emp_id=<?= $emp->emp_id ?>" class='btn btn-danger' style="font-size:2vh;"> Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
  </div>
</div>
</div>
		</main>