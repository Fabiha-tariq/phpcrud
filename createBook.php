<?php
include("navbar.php");
?>
<div class="container mt-5 p-5">

    <form action="code.php" method="POST">

        <div class="row">
            <div class="form-group col-6">
                <label >Book Name</label>
                <input type="text" class="form-control" name="bookname"  placeholder="Book Name">
            </div>
            <div class="form-group col-6">
                <label>Book Price</label>
                <input type="number" class="form-control" name="bookprice"  placeholder="Book price">
            </div>
        </div>
     
        <div class="form-row mt-2">
         
            <div class="form-group col-4">
                <label >Status</label>
                <select class="form-control" name="status">
                    <option selected>Choose...</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

            <div class="form-group col-12 mt-2">
                <label >Book Description</label>
                <textarea name="bookdesc"  class="form-control" cols="12" rows="6"></textarea>
            </div>
           
        </div>
       
        <button type="submit" class="btn btn-primary mt-2" name="saveBook">Add Data</button>
    </form>

</div>

<?php
include("footer.php");
?>