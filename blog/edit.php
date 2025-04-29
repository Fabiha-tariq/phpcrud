<?php
include("../navbar.php");
require '../dbcon.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $result = $conn->query("SELECT * FROM blog where id = $id");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "<script> 
            alert('no record found'); 
            window.location.href = 'index.php';
        </script>";
    }
}

if (isset($_POST['editData'])) {
    $name = $_POST['name'];
    $desc = $_POST['desc'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $image = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];
        $path = "images/" . basename($image);

        if (move_uploaded_file($tmp, $path)) {
            //delete old image
            if (file_exists("images/" . $row['image'])) {
                unlink("images/" . $row['image']);
            }

            $conn->query("UPDATE `blog` SET `name`='$name',`description`='$desc',`image`='$image' WHERE id = $id");

            echo "<script>  
            window.location.href = 'index.php';
        </script>";
        }
    } else {
        $conn->query("UPDATE blog set name='$name', description='$desc' where id = $id ");

        echo "<script>  
                window.location.href = 'index.php';
            </script>";

    }
}
?>
<div class="container mt-2 mb-5">
    <h1>Edit data</h1>

    <form class="row" method="post" enctype="multipart/form-data">
        <div class="col-6">
            <label for="" class="form-label">Blog Name</label>
            <input type="text" name="name" value="<?= $row['name'] ?>" class="form-control">
        </div>
        <div class="col-6">
            <label for="" class="form-label">Blog Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="col-12">
            <label for="" class="form-label">Blog Description</label>
            <textarea name="desc" rows="5" class="form-control">
                <?= $row['description'] ?>
            </textarea>

            <button class="btn btn-info mt-2" name="editData" type="submit">Update data</button>
            <br><br>
            <img src="images/<?= $row['image'] ?>" class="img-fluid mt-2" width="200px" height="200px" alt="">
        </div>

    </form>

</div>

<?php
include("../footer.php");
?>