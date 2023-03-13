<main>
<?php
  ini_set("display_errors", "1");
  error_reporting(E_ALL);
require '../database/connection.php';
$sql = 'SELECT * FROM beneficians';
$statement = $conn->prepare($sql);
$statement->execute();
$benefician = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<div class="container">
    <div class="card-body">
      <table>
        <tr>
          <th>ID</th>
          <th>Names</th>
          <th>Phone</th>
          <th>Date of Birth</th>
          <th>Ngo Id</th>
          <th colspan="2">Actions</th>
        </tr>
        <?php foreach($benefician as $benef): ?>
          <tr>
            <td><?= $benef->benef_id; ?></td>
            <td><?= $benef->names; ?></td>
            <td><?= $benef->phone; ?></td>
            <td><?= $benef->dob; ?></td>
            <td><?= $benef->ngo_id; ?></td>
    
            <td>
              <a href="edit_beneficians.php?benef_id=<?= $benef->benef_id ?>" class="btn btn-primary" style="font-size:2vh;">Edit</a></td><td>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete_beneficians.php?benef=<?= $benef->benef_id ?>" class='btn btn-danger' style="font-size:2vh;">
              Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
  </div>
</div>
</div>
		</main>