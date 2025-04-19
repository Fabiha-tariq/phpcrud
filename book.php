<?php
include("navbar.php");
include("dbcon.php");
$result = $conn ->query("SELECT * from books");
?>

<div class="container mt-5 mb-5 p-5">
<h2 class="disiplay-3 fw-bold">All Books Data</h2>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Book Name</th>
            <th>Book Price</th>
            <th>Book Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = $result->fetch_assoc()) :?>
        <tr>
            <td><?= $row['book_name'] ?></td>
            <td>Rs : <?= $row['book_price']?> /-</td>
            <td><?php 
            if ($row['book_status'] == '1') {
               echo '<button class="btn btn-outline-success" type="button">Active</button>';
            } else {
                echo '<button class="btn btn-outline-warning" type="button">Unctive</button>';
            }
             ?></td>
            <td>
                <button class="btn btn-warning" type="button">Edit</button>
                <button class="btn btn-danger" type="button">Delete</button>
            </td>
        </tr>
        <?php endwhile;?>
    </tbody>
</table>
</div>