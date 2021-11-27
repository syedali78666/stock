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

    <!-- Data list table --> 
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>#ID</th>
                <th>Date</th>
                <th>Stock Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Get member rows
        $result = $db->query("SELECT * FROM stocktbl ORDER BY id DESC");
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
        ?>
            <tr>
                <td><?php echo $row['id_no']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['stock_name']; ?></td>
                <td><?php echo $row['price']; ?></td>
            </tr>
        <?php } }else{ ?>
            <tr><td colspan="5">No stock(s) found...</td></tr>
        <?php } ?>
        </tbody>
    </table>
</div>


