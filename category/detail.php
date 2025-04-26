<?php
include("../navbar.php");
require '../dbcon.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $result = $conn -> query("select * from category where id = $id");

        if($result -> num_rows > 0)
        {
            $row = $result -> fetch_assoc();
        }

    }
?>


    <div class="container mt-4 mb-4">
        <h1><span class="display-4 fw-bold"> Category name : </span><?= $row['cat_name']?></h1>
        <p><span class="fw-bold">Category description : </span><?= $row['cat_desc']?> </p>
        <p>Category Status : <?= $row['cat_status']?> </p>
    </div>





<?php
include("../footer.php");
?>