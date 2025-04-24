<?php
include("../navbar.php");
?>

<div class="container mt-3 mb-3">
    <h2>Create Data</h2>
    <form action="code.php" method="post">
        <div class="mb-3">
            <label class="form-label">Category Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Category Description</label>
            <textarea name="desc" rows="5" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Category Status</label>
            <select name="status" class="form-select">
                <option value="1">Active</option>
                <option value="0">Unactive</option>
            </select>
        </div>
        <button type="submit" name="save_data" class="btn btn-primary">Submit</button>
    </form>
</div>




<?php
include("../footer.php");
?>