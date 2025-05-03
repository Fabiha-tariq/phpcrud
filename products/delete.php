<?php
require '../dbcon.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = $conn -> query("select * from product where id = $id");

    if($result -> num_rows > 0){
        $row = $result -> fetch_assoc();

        $imageName = $row['image'];

        if(!empty($image) && file_exists("images/" . $imageName)){
            unlink("images/". $imageName);
        }


        $sql = $conn -> query("delete from product where id = $id");
        
        echo "<script> window.location.href = 'index.php' </script>";
    }
}

?>