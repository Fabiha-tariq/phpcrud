<?php
include("../navbar.php");
require '../dbcon.php';

$result = $conn->query("select * from category");
?>

<div class="container my-3 mt-3">
    <h2>All data</h2>
    <a href="create.php">add data</a>
    <table class="table">
        <thead>
            <tr>
                <th>Category name</th>
                <th>Category desc</th>
                <th>Category status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['cat_name'] ?></td>
                    <td><?= $row['cat_desc'] ?></td>
                    <td><?php if ($row['cat_status'] == 1) {
                        echo '<strong> Active</strong>';
                    } else {
                        echo '<strong> Unactive</strong>';
                    }
                    ?></td>
                    <td>
                        <button type="button" class="btn btn-warning">
                            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                        </button>
                        <button type="button" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-info">Detail</button>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>


<?php
include("../footer.php");
?>