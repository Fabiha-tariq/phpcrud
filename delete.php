<?php  

require "dbcon.php";

if(isset($_GET['book_id'])){
    $id = $_GET['book_id'];

    $query = "DELETE FROM books where book_id = '$id'";

    if($conn ->query($query) == TRUE){
        echo '<script>
        alert("data deleted successfully");
        window.location.href = "book.php";
        </script>';
    }
}
?>
