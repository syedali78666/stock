<?php
// Load the database configuration file
include_once 'config.php';

if(isset($_POST['importSubmit'])){
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);

$truncate=   $db->query("TRUNCATE TABLE stocktbl;");
                $db->query($insert);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                
                $date  = $line[1];
                $stock_name  = $line[2];
                $price = $line[3];
                


             
                    // Insert member data in the database
                  $insert=   $db->query("INSERT INTO stocktbl (date, stock_name, price, created, modified) VALUES (STR_TO_DATE('".$date."','%d-%m-%Y'), '".$stock_name."', '".$price."', NOW(), NOW())");
                $db->query($insert);

            }
            
            // Close opened CSV file
            fclose($csvFile);
            
            $qstring = '?status=succ';

// Redirect to the listing page
header("Location: stock.php".$qstring);
        }else{
            $qstring = '?status=err';

// Redirect to the listing page
header("Location: index.php".$qstring);
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}

