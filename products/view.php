<?php  
include("../navbar.php");
require '../dbcon.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $result = $conn -> query("SELECT * , category.cat_name FROM product 
        INNER JOIN category ON product.category = category.id where product.id = $id");

        if($result -> num_rows > 0){
            $row = $result -> fetch_assoc();
        }
    }
?>
<div class="container mt-5 p-5">

    <div class="row">
        <a href="index.php" class="text-end">back to list</a>
        <div class="col-6">
            <img src="images/<?= $row['image']?>" width="100%" alt="">
        </div>
        <div class="col-6">
            <h1><?= $row['name'] ?></h1>
            <p>Rs : <?= $row['price'] ?> /-</p>
            <h3><?= $row['cat_name'] ?></h3>
            <p class="lead"><?= $row['description'] ?> </p>
            <br><br>
            <button class="btn btn-primary" type="button">Add to Cart</button>
        </div>
    </div>    

</div>

<?php
include("../footer.php");
?>