<?php include("includes/config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head.php");?>
</head>
<body>

<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<div class="container">

<div class="stock sub-container" id="stock">           
                        <span class="title">Choose a Stock:</span>

 <?php

$sql1 = "select stock_name from stocktbl; ";
$success1 = mysqli_query($db,$sql1);


die(mysqli_error());

if (mysqli_num_rows($success1) < 1) {
   echo "<option>No stock found </option>";
}else {

while ($row = mysqli_fetch_assoc($success1)) {

echo "<option class='option1' value='".$row["stock_name"]."'>".$row["stock_name"]."</option>" ;

}
}
 ?>

<select class="field-control stocklist" name="stock" id="stock"    >
    
  <option value="" style="  color: white; background-color:#ee7752;"> Select   &#xf103 </option>
    
     
  
</select>	


</div>


<div class="date1 sub-container" id="date1">
	<p class="title"> Start Date: <input type="text" id="datepicker"></p>
</div>

<div class="date1 sub-container" id="date2">
	<p class="title"> End Date: <input type="text" id="datepicker2"></p>
</div>

</div>

<?php include("includes/footer.php");?>

</body>
</html>
