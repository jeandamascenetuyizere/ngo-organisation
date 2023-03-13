
<main>
<?php
  ini_set("display_errors", "1");
  error_reporting(E_ALL);
require '../database/connection.php';
$sql = 'SELECT * FROM roles';
$statement = $conn->prepare($sql);
$statement->execute();
$roles = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<div class="container">
    <div class="card-body">
      <table class="table table-bordered" style="font-size:2vh;">
        <tr>
          <th>ID</th>
          <th>role name</th>
          <th>created</th>
          <th colspan="2">Actions</th>
        </tr>
        <?php foreach($roles as $role): ?>
        <tr>
            <td><?= $role->role_id; ?></td>
            <td><?= $role->role_of_emp; ?></td>
            <td><?= $role->created_at; ?></td>
              <td><a href="edit_roles.php?role_id=<?= $role->role_id ?>" class="btn btn-primary" style="font-size:2vh;">Edit</a></td><td>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete_roles.php?role_id=<?= $role->role_id ?>" class='btn btn-danger' style="font-size:2vh;">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
  </div>
</div>
</div>
		</main>