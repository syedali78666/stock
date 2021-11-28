<?
include_once 'includes/config.php';
include_once 'includes/classes/stock_class.php';

if(!empty($_POST['stock']) && !empty($_POST['datepicker']) && !empty($_POST['datepicker2']) && isset($_POST['report'])){

$startDate = date( 'Y-m-d',strtotime( $_POST['datepicker']) );
$endDate = date( 'Y-m-d',strtotime( $_POST['datepicker2']) );
$stock_name = $_POST['stock'];
$price =[];
$date =[];

//echo "SELECT price FROM `stocktbl` where stock_name =  '".$stock_name."' && date BETWEEN '".$startDate."' AND '".$endDate."'   order by `date` asc";die;
 $result = $db->query("SELECT price FROM `stocktbl` where stock_name =  '".$stock_name."' && date BETWEEN '".$startDate."' AND '".$endDate."'   order by `date` asc");
while($row = $result->fetch_row()) {
//print_R($row);die;
    $price[] = $row;
}
//echo "<pre>";print_R($price);die;
//$price = array(2, 30, 15, 10,                8, 25, 80);

$price = array_map( function( $val ) {
    return $val[0];
}, $price );


$result1 = $db->query("SELECT date FROM `stocktbl` where UPPER(stock_name) =  '".$stock_name."' && date BETWEEN '".$startDate."' AND '".$endDate."'   order by `date` asc");
while($row1 = $result1->fetch_row()) {
    $date[] = $row1;
}

$date = array_map( function( $val ) {
    return $val[0];
}, $date );

//print_r($date);die;

$n = sizeof($price);
$profitloss = new stock();
echo "Profit Made by joe: ". $profitloss->maxProfit($price, $n, $date) . "<br>"; 
echo "Mean of the stock price: ". array_sum($price)/count($price). "<br>" ;
echo "Standard Deviation: " .$profitloss->Stand_Deviation($price). "<br>";
}else {

echo "<span style='color:red'> All fields are mandatory* </span>";
}

?>