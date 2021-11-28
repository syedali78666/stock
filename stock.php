<?php include("includes/config.php");?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head.php");?>
</head>

<body>

    <?php include("includes/design-top.php");?>
    <?php include("includes/navigation.php");?>


    <form action="logic.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="stock sub-container" id="stock">
                <span class="title">Choose a Stock:</span>


                <select class="field-control stocklist" name="stock" id="stock">

                    <option value="" style="  color: white; background-color:#ee7752;"> Select &#xf103 </option>

                    <?php
        // Get member rows
        $result = $db->query("SELECT DISTINCT stock_name FROM `stocktbl` WHERE 1");

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){

echo "<option class='option1' value='".$row["stock_name"]."'>".$row["stock_name"]."</option>"
        ?>

                    <?php } }else{ ?>
                    No member(s) found...
                    <?php } ?>

                </select>
            </div>
            <div class="date1 sub-container" id="date1">
                <p class="title"> Start Date: <input type="text" id="datepicker" name="datepicker"></p>
            </div>
            <div class="date1 sub-container" id="date2">
                <p class="title"> End Date: <input type="text" id="datepicker2" name="datepicker2"></p>
            </div>


            <div class="date1 sub-container" id="submit">

                <input type="submit" class="btn btn-primary" name="report" value="submit">
            </div>
        </div>
    </form>

    <?php include("includes/footer.php");?>

</body>

</html>
