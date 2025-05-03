<?php
include("../navbar.php");
require '../dbcon.php';
?>
<div class="container mt-3 p-5">

    <form action="code.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-6">
                <label for="" class="form-label">Product Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="col-6">
                <label for="" class="form-label">Product Price</label>
                <input type="number" name="price" class="form-control">
            </div>
            <div class="col-4 mt-3">
                <label for="" class="form-label">Product Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="col-4 mt-3">
                <label for="" class="form-label">Product Status</label>
               <select name="status" class="form-select">
                <option selected>---Choose Status---</option>
                <option value="1">Active</option>
                <option value="2">Unactive</option>
               </select>
            </div>
            <div class="col-4 mt-3">
                <label for="" class="form-label">Product Category</label>
                <select name="category" class="form-select">
                    <option selected>------- Choose Category ---------</option>
                    <?php
                    $result = $conn -> query("Select id, cat_name from category");
                    while($row = $result -> fetch_assoc()){
                        echo "<option value='{$row['id']}'> {$row['cat_name']} </option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-12 mt-3">
                <label for="" class="form-label">Product Description</label>
                <textarea name="desc" rows="5" class="form-control"></textarea>
            </div>
            <div class="col-3 mt-3">
                <button class="btn btn-primary" type="submit" name="saveData">Submit</button>
            </div>
        </div>

    </form>

</div>

<?php
include("../footer.php");
?>