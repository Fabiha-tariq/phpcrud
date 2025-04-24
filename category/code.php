<?php

require '../dbcon.php';

if(isset($_POST['save_data'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $desc = mysqli_real_escape_string($conn,$_POST['desc']);
    $status = mysqli_real_escape_string($conn,$_POST['status']);


    $query = "INSERT INTO category(cat_name,cat_status,cat_desc)
    VALUES('$name','$status','$desc')";

    if(mysqli_query($conn,$query)){
        echo "<script>
        window.location.href = 'index.php'
        </script>";
    }
    else{
        echo "<script>
        alert('data not submited');
        window.location.href = 'index.php'
        </script>";
        
    }
}

?>