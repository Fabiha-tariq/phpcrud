<?php 
    include 'dbcon.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        //
     $sql = "DELETE FROM books where book_id = $id";
    
     if ($conn->query($sql)=== TRUE) {
        
        echo "
          <script>
            alert('book deleted successfully..');
            window.location.href='book.php';
          </script>
        ";
     }
     else {
        echo "Error : ".$conn->error;
     }
    }
 ?>