<?php
include("../navbar.php");
require '../dbcon.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = $conn->query("select * from category where id = $id");

    if($result -> num_rows > 0){
        $row = $result -> fetch_assoc();

    }
    else{
        echo "<script>
        alert('data not found');
        window.location.href = 'index.php'
        </script>";
    }
}

if(isset($_POST['edit_data'])){
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $status = $_POST['status'];

    $conn -> query("update category set cat_name = '$name', 
    cat_desc = '$desc' , cat_status = '$status' where id = $id ");

    echo "<script> window.location.href = 'index.php' </script>";
}
?>

<div class="container mt-3 mb-3">
    <h2>Edit Data</h2>
    <form method="post">
        <div class="mb-3">
            <label class="form-label">Category Name</label>
            <input type="text" name="name" value="<?= $row['cat_name'] ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Category Description</label>
            <textarea name="desc" rows="5" class="form-control">
            <?= $row['cat_desc'] ?>
            </textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Category Status</label>
            <select name="status" class="form-select">
                <?php
                if ($row['cat_status'] == 1) {
                 echo "  <option value='1' selected>Active</option>
                 <option value='0'>unactive</option>
                 ";
                }
                else{
                    echo "  <option value='1' >Active</option>
                    <option value='0' selected>unactive</option>
                    ";
                }

                ?>
            </select>
        </div>
        <button type="submit" name="edit_data" class="btn btn-primary">Submit</button>
    </form>
</div>




<?php
include("../footer.php");
?>