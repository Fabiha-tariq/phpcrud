<?php
    require '../dbcon.php';

    if(isset($_POST['saveData'])){
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $price = mysqli_real_escape_string($conn,$_POST['price']);
        $status = mysqli_real_escape_string($conn,$_POST['status']);
        $category = mysqli_real_escape_string($conn,$_POST['category']);
        $desc = mysqli_real_escape_string($conn,$_POST['desc']);

        if($_FILES['image']['name']){
            $image = $_FILES['image']['name'];
            $tmp = $_FILES['image']['tmp_name'];
            $path = "images/" .  basename($image);

            if(move_uploaded_file($tmp,$path)){
                $conn -> query("INSERT INTO `product`(`name`, `description`, `price`, `image`, `status`, `category`) 
                VALUES ('$name','$desc','$price','$image','$status','$category')");

                echo "<script> window.location.href = 'index.php' </script>";
            }
        }

    }


?>