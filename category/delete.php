<?php

require '../dbcon.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "Delete from category where id = $id";

    if(mysqli_query($conn,$sql)){
        echo "<script> 
        alert('data deleted');
        window.location.href = 'index.php'
        </script>";
    }
}

?>