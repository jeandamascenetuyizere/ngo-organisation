
            <main>
<?php
  ini_set("display_errors", "1");
  error_reporting(E_ALL);
require '../database/connection.php';
$sql = 'SELECT * FROM donars';
$statement = $conn->prepare($sql);
$statement->execute();
$donars = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<div class="container">
    <div class="card-body">
      <table class="table table-bordered" style="font-size:2vh;">
        <tr>
          <th>ID</th>
          <th>Names</th>
          <th>Phone</th>
          <th>Email</th>
          <th>address</th>
          <th>url</th>
          <th>Ngo Id</th>
          <th colspan="2">Actions</th>
        </tr>
        <?php foreach($donars as $don): ?>
          <tr>
            <td><?= $don->don_id; ?></td>
            <td><?= $don->name; ?></td>
            <td><?= $don->phone; ?></td>
            <td><?= $don->email; ?></td>
            <td><?= $don->address; ?></td>
            <td><?= $don->url; ?></td>
            <td><?= $don->ngo_id; ?></td>
    
            <td>
              <a href="edit_donars.php?don_id=<?= $don->don_id ?>" class="btn btn-primary" style="font-size:2vh;">Edit</a></td><td>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete_donars.php?don_id=<?= $don->don_id ?>" class='btn btn-danger' style="font-size:2vh;">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
  </div>
</div>
</div>
		</main>