<?php

require '../dbcon.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $result = $conn->query("SELECT * FROM blog WHERE id = $id");

    if($result -> num_rows > 0){
        $row = $result -> fetch_assoc();

        $imageName = $row['image'];

        // image delete if exists

        if(!empty($imageName) && file_exists("images/" . $imageName)){
            unlink("images/" . $imageName);
        }

        // delete record from database

        $conn -> query("DELETE FROM blog WHERE id = $id");

        echo "<script>  
        window.location.href = 'index.php';
    </script>";
    }
}


?>