<?php  
include("../navbar.php");

require '../dbcon.php';

    $result = $conn -> query("SELECT product.id, product.name, product.image, product.status, category.cat_name
                                    FROM product INNER JOIN category ON product.category = category.id");

    if(!$result){
        echo "query failed" . $conn ->error;
    }

?>
<div class="container mt-2 p-2">
    <h1>index page of product</h1>
    <a href="insert.php">Add data</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Category</th>
                <th>Product Image</th>
                <th>Product Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['name'] ?></td>
                <td><?= $row['cat_name'] ?></td>
                <td><img src="images/<?= $row['image'] ?>" width="100px" height="100px" alt=""></td>
                <td>
                    <?php
                        if($row['status'] == 1){
                            echo "<button class='btn btn-outline-success'>Active</button>";
                        }
                        else {
                            echo "<button class='btn btn-outline-warning'>Unctive</button>";
                        }
                    ?>
                </td>
                <td>
                    <button>Edit</button>
                    <button class="btn btn-danger" type="button">
                        <a href="delete.php?id=<?= $row['id'] ?>" class="text-decoration-none text-light">Delete</a>
                    </button>
                    <button class="btn btn-info" type="button">
                        <a href="view.php?id=<?= $row['id'] ?>" class="text-decoration-none text-dark">View</a>
                    </button>
                </td>
            </tr>
            <?php endwhile; ?>

        </tbody>
    </table>
</div>

<?php
include("../footer.php");
?>