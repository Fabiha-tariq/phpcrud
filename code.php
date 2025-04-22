<?php

    session_start();

    require 'dbcon.php';

    if(isset($_POST['saveBook'])){
        $name = mysqli_real_escape_string($conn,$_POST['bookname']);
        $price = mysqli_real_escape_string($conn,$_POST['bookprice']);
        $status = mysqli_real_escape_string($conn,$_POST['status']);
        $desc = mysqli_real_escape_string($conn,$_POST['bookdesc']);

        $query = "INSERT into books (book_name, book_desc, book_price, book_status) 
        Values ('$name', '$desc', '$price', '$status' ) ";
 
        if(mysqli_query($conn,$query) == TRUE){
            echo "<script> 
            alert('book added successfully');
            window.location.href = 'book.php';
            </script>";
        }
        else{
            echo "<script>
            alert('book not save');
            window.location.href = 'book.php';
            </script>";
    }

}

?>