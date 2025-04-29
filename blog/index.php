<?php  
include("../navbar.php");
require '../dbcon.php';

$result = $conn -> query("select * from blog");
?>
<div class="container mt-3 p-5">
    <h1>index page</h1>
    <a href="create.php"> create data</a>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Blog Name</th>
      <th scope="col">Blog Description</th>
      <th scope="col">Blog Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = $result -> fetch_assoc()) :?>
    <tr>
      <td><?= $row['name']  ?></td>
      <td><?= $row['description']  ?></td>
      <td>
        <img src="images/<?= $row['image']  ?>" width="100px" height="100px" alt="">
    </td>
      <td>
      <button class="btn btn-warning" type="button" >
        <a href="edit.php?id=<?= $row['id']  ?>" class="text-decoration-none text-dark">Edit</a>
      </button>
      <button class="btn btn-danger" type="button" >
        <a href="delete.php?id=<?= $row['id']  ?>" class="text-decoration-none text-light">Delete</a>
      </button>
      </td>
    </tr>
    <?php endwhile;?>

  </tbody>
</table>

</div>

<?php
include("../footer.php");
?>