<?php include("includes/config.php");?>

<div class="row">
    <!-- Import link -->
    
    <!-- CSV file upload form -->
    <div class="col-md-12" id="importFrm" >
        <form action="import.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" />
            <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
        </form>
    </div>

   
</div>


