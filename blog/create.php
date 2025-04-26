<?php
include("../navbar.php");
?>
<div class="container mt-2 mb-5">
    <h1>Create data</h1>

    <form action="code.php" class="row" method="post" enctype="multipart/form-data">
        <div class="col-6">
            <label for="" class="form-label">Blog Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="col-6">
            <label for="" class="form-label">Blog Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="col-12">
             <label for="" class="form-label">Blog Description</label>
            <textarea name="desc" rows="5" class="form-control"></textarea>

            <button class="btn btn-info mt-2" name="save" type="submit" >Save data</button>
        </div>

    </form>

</div>

<?php
include("../footer.php");
?>