<?php

require '../dbcon.php';

if (isset($_POST['save'])) {
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $desc = mysqli_real_escape_string($conn,$_POST['desc']);

    if($_FILES['image']['name']){
        $image = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];
        $path = "images/" . basename($image);

        if(move_uploaded_file($tmp,$path)){
            $conn -> query("INSERT INTO `blog`(`name`, `description`, `image`) VALUES ('$name','$desc','$image')");

            echo "<script>  
                window.location.href = 'index.php';
            </script>";
        
        }
        else{
            echo "Uipload failed";
        }
    }
}
?>